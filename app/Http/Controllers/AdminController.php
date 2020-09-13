<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function doctor()
    {
    	$doctor = \App\Doctor::all();
    	return view ('layout.doctor', [
    	'doctor' => $doctor,
    ]);

    }

    public function patient()
    {
    	$patient = \App\Patient::all();
    	return view ('layout.patient', [
    	'patient' => $patient,
    	]);
    }

    public function form_patient()
    {
    	$form_patient = \App\Patient::all();
    	return view ('layout.form_patient', [
    	'form_patient' => $form_patient,
    	]);
    }
}
