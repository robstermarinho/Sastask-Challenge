<?php

use App\Comment;
use App\Question;
use App\Classroom;
use App\Questionlist;

namespace App;


class Teacher extends User
{
    public function classrooms(){
        return $this->hasMany(Classroom::class);
    }

    public function questions(){
        return $this->hasMany(Question::class);
    }

    public function questionlists(){
        return $this->hasMany(Questionlist::class);
    }
    public function comments(){
        return $this->hasMany(Comment::class);
    }    
}
