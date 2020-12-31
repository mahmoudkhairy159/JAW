<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Course;
use App\Models\Exam;


class Lesson extends Model
{
    protected $fillable = [
        'name', 'video', 'material','assignment','assignmentAnswer','course_id'
    ];

    //inverse relationship wirh course
    public function course(){
        return $this->belongsTo(Course::class);
    }

    //one to one relationship with Exam
    public function exam()
    {
        return $this->hasOne(Exam::class);
    }
}
