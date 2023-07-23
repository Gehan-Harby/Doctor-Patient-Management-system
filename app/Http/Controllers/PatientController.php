<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class PatientController extends Controller
{
    public function addpatient(){
        return view('new_Patient');  
    }
 
    public function new_patient(request $request){
        // validation
        $request->validate([
            'num' => 'required|min:11',
        ]);

            // store data in database
        $first_name = $request->firstname;
        $last_name = $request->lastname;
        $num = $request->num;
        $Email = $request->email;
        $Date = $request->date;
        $Gender= $request->gender;
        $chronic_disease = $request->disease;
        $doctor_speciality = $request->dspeciality;

        $insert=DB::insert('insert into Patient(First_Name, Last_Name, Phone_Number, Email,Date_of_birth, Gender, Chronic_Disease, Doctor_Speciality ) VALUES (?, ?, ?, ?, ?, ?, ?, ? )', [$first_name,$last_name,$num,$Email,$Date,$Gender,$chronic_disease,$doctor_speciality ]);
        // check
            if($insert){  # the patient inserted process success
                return redirect('/home')->with(['success_message' => 'Patient inserted successfully..']) ;
                }  
            else return back()->with(['error' => 'Unexpected error happened during saving'])->withInput();
   }
}

