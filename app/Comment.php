<?php

namespace App;

use App\Student;
use App\Teacher;
use App\Question;
use App\Questionlist;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Comment extends Eloquent
{
    public function teacher(){
        return $this->belongsTo(Teacher::class);
    }
    public function student(){
        return $this->belongsTo(Student::class);
    }    
    public function question(){
        return $this->belongsTo(Question::class);
    }
    public function questionlist(){
        return $this->belongsTo(Questionlist::class);
    }
}
