<?php

namespace App;

use App\Item;
use App\Comment;
use App\Teacher;
use App\Questionlist;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Question extends Eloquent
{
    public function questionlists(){
        return $this->belongsToMany(Questionlist::class);
    }
    public function teacher(){
        return $this->belongsTo(Teacher::class);
    }
 
    public function itens(){
        return $this->hasMany(Item::class);
    }
    public function comments(){
        return $this->hasMany(Comment::class);
    } 
}
