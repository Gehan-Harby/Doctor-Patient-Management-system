<?php

use App\Http\Controllers\PrescriptionController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|;
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Gust
Route::group(['middleware' => 'myguest'], function () {

    // UserController
    Route::get('/', [UserController::class, 'index']);
    Route::get('/login', [UserController::class, 'showLogin']);
    Route::post('/login', [UserController::class, 'login']);
    Route::get('/register', [UserController::class, 'showRegister']);
    Route::post('/register', [UserController::class, 'register']);
   
});

// Authenticated user (Logged in user)
Route::group(['middleware' => 'myauth'], function () {

    // logout
    Route::get('/logout', [UserController::class, 'logout']);
    // home page
        Route::get ('/home', function () 
        { return view ('home'); }); 


    // add patient
    Route::get('/new_patient', [PatientController::class, 'addpatient']);
    Route::post('/new_patient', [PatientController::class, 'new_patient']);
    

    // search patient
    Route::get('/search', [SearchController::class, 'thesearch']);
    Route::post('/search', [SearchController::class, 'search']);


    // add doctor
    Route::get('/new_doctor', [DoctorController::class, 'adddoctor']);
    Route::post('/new_doctor', [DoctorController::class, 'new_doc']);
    

    //Perscription
    Route::get('/Perscription', [PrescriptionController::class, 'presc']);
    Route::post('/Perscription', [PrescriptionController::class, 'thepresc']);
    

    // services
    Route::get('/Services', [ServiceController::class, 'service']);
    Route::post('/Services', [ServiceController::class, 'theservice']);

});


