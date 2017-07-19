<?php

namespace App;

use App\Comment;
use App\Teacher;
use App\Question;
use App\Classroom;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Questionlist extends Eloquent
{
    public function teacher(){
        return $this->belongsTo(Teacher::class);
    }
    public function classroom(){
        return $this->belongsTo(Classroom::class);
    }
	
    public function questions(){
        return $this->belongsToMany(Question::class);
    }
    public function comments(){
        return $this->hasMany(Comment::class);
    }
}
