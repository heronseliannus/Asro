<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('user/user');
    }

    public function show()
    {
        $users= DB::table('user')->get();
        dd($users);
        
        return view('user', ['user' => $users]);
    }
}
