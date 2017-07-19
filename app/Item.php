<?php

namespace App;

use App\Question;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Item extends Eloquent
{
    protected $collection = 'intes';

    const CORRECT_ITEM = 'true';
    const INCORRECT_ITEM = 'false';

    public function question(){
        return $this->belongsTo(Question::class);
    } 
}
