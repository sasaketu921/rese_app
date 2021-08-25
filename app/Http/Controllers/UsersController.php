<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use PharIo\Manifest\Author;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{

    public function index()
    {
        
        $user = Auth::user();
        return response()->json([
            'message' => 'OK',
            'data' => $user
        ], 200);
    }
}; 