<?php

use App\Item;
use App\User;
use App\Comment;
use App\Question;
use App\Classroom;
use App\Questionlist;
use GuzzleHttp\Client;
use Illuminate\Database\Seeder;
use Jenssegers\Mongodb\Eloquent\Model;



class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


    	Comment::truncate();
    	Item::truncate();
    	Question::truncate();
    	Questionlist::truncate();
    	Classroom::truncate();
    	User::truncate();
    	DB::table('classroom_student')->truncate();
    	DB::table('question_questionlist')->truncate();




        // Criando um professor genérico

    	User::create([
    		'name' => "Xavier",
    		'email' => "xavier@sas.com",
    		'role' => User::TEACHER_USER,
    		'photo' => asset('img/default_teacher.jpg'),
    		'password' => bcrypt('secret'),
    	]);


        // Criando os Alunos a partir da API que retorna os personagens da marvel

    	$client = new Client(['base_uri' => 'http://gateway.marvel.com']);

    	$response = $client->request('GET', 'http://gateway.marvel.com/v1/public/characters?apikey=e2c6b05b2188d060546a09dc84e4074f&ts=1&hash=9f798b9bbb34b04ba86ea91398a97d06&limit=100&offset=24');

    	$result = $response->getBody();
    	$result = json_decode($result);

    	if($result->code == 200){
    		foreach($result->data->results as $character){

    			$name = str_replace("(","", $character->name);
    			$name = str_replace(")","", $name);
    			$name = str_replace("","", $name);
    			$name = str_replace(" ","", $name);
    			$username = strtolower(trim($name));

    			User::create([
    				'name' => $character->name,
    				'email' => trim($username) . "@marvel.com",
    				'role' => User::STUDENT_USER,
    				'photo' => $character->thumbnail->path . ".". $character->thumbnail->extension,
    				'password' => bcrypt('secret'),
    				]);
    		}
    	}


        // 
    }
}
