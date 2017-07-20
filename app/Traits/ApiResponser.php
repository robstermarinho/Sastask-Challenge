<?php

namespace App\Traits;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;



trait ApiResponser{

	// function for Success Response
	private function successResponse($data, $code){
		return response()->json($data, $code);
	}

	// function for error Response.
	protected function errorResponse($message, $code){
		return response()->json(['error' => $message, 'code' => $code], $code);
	}

	// Receive a colletion and a status code 200
	// and returns a success response with collection and code
	protected function showAll(Collection $collection, $code = 200)	{
		
		if ($collection->isEmpty()) {
			return $this->successResponse(['data' => $collection], $code);
		}		
		return $this->successResponse($collection, $code);
	}
	protected function showOne(Model $instance, $code = 200)
	{
		return $this->successResponse($instance, $code);
	}


	protected function showMessage($message, $code = 200){
		return $this->successResponse(['data' => $message], $code);
	}
	
}