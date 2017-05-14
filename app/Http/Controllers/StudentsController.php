<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

use App\Http\Requests;

class StudentsController extends Controller
{
    public function index()
    {
    	$students = Student::all();

    	return view('students.index')
    			->with('students', $students)
    			->with('user_name', 'Kushal');
    }


    public function details($id)
    {
    	$student = Student::find($id);

    	return view('students.details')
			    	->with('student',$student)
			    	->with('user_name', 'Kushal');
    }
}
