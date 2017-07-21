<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;
use App\Student;

class PageController extends Controller
{
    public function index(){

    	$students = Student::all();
    	$teachers = Teacher::all();

    	return view('welcome', ['students' => $students, 'teachers' => $teachers]);

    }
}
