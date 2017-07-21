<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

use App\Student;
use App\Teacher;

class StudentController extends Controller
{
    public function store(Request $request){
    	
    	$validator = Validator::make($request->all(), [

    		'name' => 'required',
    		'DRE' => 'required',
    		'email' => 'required',
            // 'teacher_id' => 'required',

    	]);

    	Student::create([

    		'name' => $request['name'],
    		'DRE' => $request['DRE'],
    		'email' => $request['email'],
            // 'teacher_id' => $request['teacher_id'],

    	]);

    	return back();

    }
}
