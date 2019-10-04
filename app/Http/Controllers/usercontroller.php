<?php

namespace App\Models;

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('usermaster/user');
    }

    public function show()
    {
        $users = DB::table('user')->get();
        
        // $users = 'anda hanya sampai kesini';
        
        return view('usermaster/user',['users' => $users]);
        
    }
}
