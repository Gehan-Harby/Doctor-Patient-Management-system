<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PrescriptionController extends Controller
{
    public function presc(){
        return view('Perscription');  
    }

    public function thepresc(Request $request){

         // validation
         $request->validate([
            'dname' => 'required',
            'pname' => 'required',
        ]);

        // search for user by name
        $dname = $request->dname;
        $pname = $request->pname;
        $Diagnsis_treatment = $request->dia;
        $Price=$request->num;
        $date=$request->date;

         // insert
        $insert=DB::insert('insert into Percieption(Doctor_Name,Patient_Name, Diagnsis_treatment, Price,vistdate) VALUES (?, ?, ?, ?, ? )', [$dname,$pname,$Diagnsis_treatment,$Price,$date]);
        
        // check
        if($insert){   #result=yes
            return view('/perscriptionresult');
        }
        else return back()->with(['error' => 'Unexpected error happened during saving'])->withInput();
        
    }
}

