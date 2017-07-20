<?php

namespace App\Http\Controllers;

use App\Question;
use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;

class QuestionController extends ApiController
{
    /**
     * Display a listing of questions.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $questions = Question::all();
        return $this->showAll($questions);
    }


    /**
     * Display the specified question.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function show(Question $question)
    {

        return $this->showOne($question);
    }

}
