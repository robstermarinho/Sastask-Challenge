<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    public function show_current_user()
    {
        // Get the currently authenticated user...
        $user = Auth::user();
        return response()->json($user, 200);

    }
}
