<?php

namespace App\Models;
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\facades\DB;

class Datamhscontroller extends Controller
{
    public function index()
    {
        return view('usermaster/datamhs');
    }
    public function show()
    {
        $registers = DB::table('register')->get();
        

        return view('usermaster/datamhs',['datamhs' => $datamhs]);
    }
}
