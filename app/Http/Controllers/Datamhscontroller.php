<?php

namespace App\Models;
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\facades\DB;

class Datamhscontroller extends Controller
{
    public function ondext()
    {
        return view('usermaster/datamhs');
    }
    public function show()
    {
        $datamhss = DB::table('datamhs')->get($id);

        return view('usermaster/datamhs',['datamhs' => $datamhs]);
    }
}
