<?php

namespace App\Http\Controllers;

use App\Traits\ApiResponser;
use Illuminate\Http\Request;

class ApiController extends Controller
{
	use ApiResponser;

    // We have to call the parent contruct for every controller
	public function __construct()
	{
		//$this->middleware('auth');
	}	 
}
