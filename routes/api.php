<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/**
 * Questions
 */
Route::resource('questions', 'QuestionController', ['only' => ['index', 'show']]);

/**
 * Teachers
 */
Route::resource('teachers', 'TeacherController', ['only' => ['index', 'show']]);
Route::resource('teachers.questions', 'TeacherQuestionController', ['except' => ['create', 'show', 'edit']]);