<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{

    public $timestamps = false;

    public function school()
    {
    	return $this->belongsTo('App\School');
    }


    public function _class()
    {
    	return $this->belongsTo('App\StudentClass','class_id');
    }

    public function subjects()
    {
    	return $this->belongsToMany('App\Subject','student_subjects');
    }

}

