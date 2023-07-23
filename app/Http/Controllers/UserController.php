<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        return view('index');
    }

    public function showLogin(){
        return view('login');
    }

    public function showRegister(){
        return view('register');
    }
    public function register(Request $request){
         
        // validation
        $request->validate([
            'name' => 'required|max:100',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed'
        ]);

        // store data in database
        $name = $request->name;
        $email = $request->email;
        $password = $request->password;
        $passwordEnc = Hash::make($password);
        DB::insert('insert into users(name, email, password) values(?, ?, ?)', [$name, $email, $passwordEnc]);

        // mark user as logged in
        $userId = DB::getPdo()->lastInsertId();
        $result = DB::select('select id, name, email from users where id = ?', [$userId]);
        $user = null;
        if($result){
            $user = $result[0];
        }
        if($user == null){
            return back()->with(['error' => 'Unexpected error happened during registration'])->withInput();
        }
        session()->regenerate();
        session([
            'loggedIn' => true,
            'userId' => $userId,
            'user' => $user
        ]);
        // go to home page
        return redirect('/home')->with(['success_message' => 'Your account was successfully created!']);
        
    }

    public function login(Request $request){

        // validation
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // search for user by email
        $email = $request->email;
        $password = $request->password;
        $result = DB::select('select * from users where email = ?', [$email]);
        if(!$result){
            return back()->with(['error' => 'This email is not found'])->withInput();
        }
        $user = $result[0];

        // check password
        if(!Hash::check($password, $user->password)){
            return back()->with(['error' => 'Incorrect password'])->withInput();
        }

        // mark user as logged in
        session()->regenerate();
        session([
            'loggedIn' => true,
            'userId' => $user->id,
            'user' => $user
        ]);

        // go to home page
        return redirect('/home');
    }
    public function logout(){
        session()->invalidate();
        return redirect('/');
    }
   
}