<?php

namespace App;

use App\Question;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Item extends Eloquent
{
    protected $collection = 'itens';

    protected $fillable = [
        'description', 'letter', 'status','question_id'
    ];

    const CORRECT_ITEM = 'true';
    const INCORRECT_ITEM = 'false';

    public function question(){
        return $this->belongsTo(Question::class);
    } 
}
