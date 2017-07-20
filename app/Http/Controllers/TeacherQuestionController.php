<?php

namespace App\Http\Controllers;

use App\Item;
use App\User;
use App\Teacher;
use App\Question;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;

class TeacherQuestionController extends ApiController
{
    /**
     * Display a listing of questions and itens.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Teacher $teacher)
    {
        $questions = $teacher->questions()->with('itens')->get();
        return $this->showAll($questions);
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, User $teacher)
    {
        $rules = [
        'description' => 'required|string|min:3',
        'item_a' => 'required|string|min:1',
        'item_b' => 'required|string|min:1',
        'item_c' => 'required|string|min:1',
        'item_d' => 'required|string|min:1',
        'item_e' => 'required|string|min:1',
        'correct' => 'required|alpha',
        'image' => 'image',
        ];

        $this->validate($request, $rules);

        $data = $request->all();

        // generates a path in defatul filesystem
        if($request->image != null){
            $data['image'] = $request->image->store('');    
        }
        
        $data['teacher_id'] = $teacher->id;

        

            // Creatind the question 
            $question = Question::create($data);

            // Creating the question itens
            $itens = ['a','b','c','d','e'];
            foreach ($itens as $key => $item) {
                Item::create([
                    'letter' => $item,
                    'description' => $data['item_' . $item],
                    'status' => $data['correct'] == $item ? Item::CORRECT_ITEM : Item::INCORRECT_ITEM,
                    'question_id' => $question->id]
                );                
            }

            // Show the question
            return $this->showOne($question);
      


        
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Teacher $teacher)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teacher $teacher)
    {
        //
    }
}
