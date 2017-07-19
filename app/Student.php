<?php

namespace App;

use App\Comment;
use App\Teacher;
use App\Question;
use App\Classroom;
use App\Questionlist;

class Student extends User
{
    public function classrooms(){
        return $this->belongsToMany(Classroom::class);
    }

    public function questionlists(){
        return $this->hasMany(Questionlist::class);
    }   

    public function comments(){
        return $this->hasMany(Comment::class);
    }       
}
