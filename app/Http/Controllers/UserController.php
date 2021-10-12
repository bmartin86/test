<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User as User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    public function index()
    {
        Auth::check();
        $user = [];
        $user = Auth::user();
        return view('user.index', compact('user'));
    }
}
