<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('/asrobandung');
    }

    public function swho($id)
    {
        $user = DB::table('users')->get();
    }
}
