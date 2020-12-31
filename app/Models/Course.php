<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Teacher;
use App\User;
use App\Models\Lesson;




class Course extends Model
{
    protected $fillable = [
        'name', 'level', 'status','teacher_id'
    ];

// relationship 1 to * with lessons
    public function lessons(){
        return $this->hasMany(Lesson::class);
    }
//inverse relationship 1 to * with teacher
    public function teacher(){
        return $this->belongsTo(Teacher::class);
    }

//relationship * to * with student
public function users()
{
    return $this->belongsToMany(User::class);
}




}
