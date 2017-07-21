<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

class TeacherController extends Controller
{
    public function store(Request $request){

    	$validator = Validator::make($request->all(), [
    			'name' => 'required',
    		]);


    	\App\Teacher::create([

    		'name' => $request['name'],

    		]);

    	return back();

    }
}
