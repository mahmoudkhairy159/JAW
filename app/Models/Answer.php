<?php

namespace App\Models;
use App\Models\Question;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $fillable = [
        'Answer', 'correctStatus', 'question_id'
    ];
    //inverse relationship with Question
    public function question(){
        return $this->belongsTo(Question::class);
    }
}
