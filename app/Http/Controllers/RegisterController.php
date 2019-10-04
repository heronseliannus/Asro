<?php

namespace App\Models;
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\facades\DB;

class RegisterController extends Controller
{
    public function index()
    {
        return view('usermaster/datamhs');
    }
    public function show()
    {
        $registers = DB::table('register')->get();
        // dd($registers);

        return view('usermaster/datamhs',['registers' => $registers]);
    }
}
