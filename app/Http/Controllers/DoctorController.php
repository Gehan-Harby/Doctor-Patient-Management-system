<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DoctorController extends Controller
{
    public function adddoctor(){
        return view('new_doctor');  
    }

    public function new_doc(request $request){
        // validation
        $request->validate([
            'phone' => 'required|min:11',
        ]);
        // store data in database
        $first_name = $request->F_name;
        $last_name = $request->L_name;
        $Email = $request->email;
        $num = $request->phone;
         $pass = $request->pass;
          $passwordEnc = Hash::make($pass);
        $spech= $request->spech;
        $date = $request->date;
        $gender = $request->gen;
        $waits = $request->number;

        $insert=DB::insert('insert into Doctor(First_Name,Last_Name,Email,Phone_Number,Password,Specialization,Date_of_birth,Gender,Waiting_Patients ) VALUES (?, ?, ?, ?, ?, ?, ?, ?,? )', [$first_name,$last_name,$Email,$num,$pass,$spech,$date,$gender,$waits]);
   // check
        if($insert){  # the Doctor inserted process success
            return redirect('/home')->with(['success_message' => 'Doctor inserted successfully..']) ;
            }  
        else return back()->with(['error' => 'Unexpected error happened during saving'])->withInput();
    }
}
