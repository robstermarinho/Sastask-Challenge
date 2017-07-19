<?php

namespace App;

use App\Student;
use App\Teacher;
use App\Questionlist;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Classroom extends Eloquent
{
    public function questionlists(){
        return $this->hasMany(Questionlist::class);
    }
    public function teacher(){
        return $this->belongsTo(Teacher::class);
    }    
    public function students(){
        return $this->belongsToMany(Student::class);
    }
}
