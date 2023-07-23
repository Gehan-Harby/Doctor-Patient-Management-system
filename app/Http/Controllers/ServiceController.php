<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServiceController extends Controller
{
    public function service(){
        return view('Services');  
    }

    public function theservice(Request $request){

       // inputs
       $name = $request->name;
       $num = $request->num;
       $service = $request->service;

       $insert=DB::insert('insert into Services(Patient_Name, MRN, Services ) VALUES (?, ?, ? )', [$name,$num,$service]);
      
       if($insert){   #result=yes
           return view('/servicesresult');
       }
      else return back()->with(['error' => 'Unexpected error happened during saving'])->withInput();      
    }
    
}
