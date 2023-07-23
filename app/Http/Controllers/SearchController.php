<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{

    public function thesearch(){
        return view('search');  
    }
    public function search (Request $request){

        // validation
        $request->validate([
            'fname' => 'required',
            'lname' => 'required',
        ]);
        // search for user by name
        $fname = $request->fname;
        $lname = $request->lname;
        $mrn = $request->mrn;
        $result = DB::select('select * from Patient where First_Name = ? AND Last_Name = ? OR MRN =?', [$fname,$lname,$mrn]);
        $user = null;
        if($result){   #result=yes
            return view('/yes');
        }
        if($user == null){
            return view('/no');
        }
 
    }
}
