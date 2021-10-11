<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User as User;

class AdminUserController extends Controller
{
    //
    public function index()
    {
        $data = [];
        $data = User::all();
        return view('admin.index', compact('data'));
    }
}