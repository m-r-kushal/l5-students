<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;

use App\Student;
use App\StudentClass;
use App\School;
use App\Subject;

class StudentsController extends Controller
{
    public function __construct()
    {
         $this->middleware('auth');
    }

    public function index()
    {
    	$students = Student::with('school','_class')->get();

    	return view('students.index')
    			->with('students', $students);
    }


    public function details($id)
    {
    	$student = Student::find($id);

    	return view('students.details')
			    	->with('student',$student);
    }

    public function create()
    {
        $classes = StudentClass::lists('class_name','id');
        $schools = School::lists('school_name','id');
        $subjects = Subject::lists('subject','id');
        $gender = ['Male'=>'M','Female'=>'F'];

        return view('students.create')
                ->with(compact(['classes','schools','gender','subjects']));
    }


    public function store(Request $request)
    {

        $rules = [
            'name'      =>'required',
            'roll'      =>'required',
            'email'     =>'required|email',
            'class_id'  =>'required',
            'school_id' =>'required',
            'gender'    =>'required|in:F,M',
            'address'   =>'required',
            'subject'   =>'required|min:3'
        ];


        $this->validate($request, $rules);

        $student = new Student;

        $student->name      = $request->name;
        $student->roll      = $request->roll;
        $student->email     = $request->email;
        $student->class_id  = $request->class_id;
        $student->school_id = $request->school_id;
        $student->gender    = $request->gender;
        $student->address   = $request->address;

        $student->save();
        $student->subjects()->sync($request->subject);

        return redirect()->action('StudentsController@index');

    }

    public function edit(Student $student)
    {
        $classes = StudentClass::lists('class_name','id');
        $schools = School::lists('school_name','id');
        $subjects = Subject::lists('subject','id');
        $gender = ['Male'=>'M','Female'=>'F'];

        return view('students.edit')
                ->with(compact(['student','classes','schools','gender','subjects']))
                ->with('student_subjects', $student->subjects()->lists('subject_id')->toArray());
    }

    public function update(Request $request)
    {
         $rules = [
            'name'      =>'required',
            'roll'      =>'required',
            'email'     =>'required|email',
            'class_id'  =>'required',
            'school_id' =>'required',
            'gender'    =>'required|in:F,M',
            'address'   =>'required',
            'subject'   =>'required|min:3'
        ];

        $this->validate($request, $rules);

        $student = Student::find($request->id);

        $student->name      = $request->name;
        $student->roll      = $request->roll;
        $student->email     = $request->email;
        $student->class_id  = $request->class_id;
        $student->school_id = $request->school_id;
        $student->gender    = $request->gender;
        $student->address   = $request->address;

        $student->save();
        $student->subjects()->sync($request->subject);

        return redirect()->action('StudentsController@index');

    }

    public function delete(Student $student)
    {
        $student->subjects()->detach();
        $student->delete();

        return redirect()->action('StudentsController@index');
    }


}