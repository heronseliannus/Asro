<?php

namespace App\Models;
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\facades\DB;
use App\Register;

class RegisterController extends Controller
{
    public function index()
    {
        $registers = DB::table('register')->get();
      
        return view('usermaster/datamhs',['registers' => 'registers']);
    }
    public function show($id)
    {
        $registers = register::find($id);
        dd($registers);

        return view('usermaster/datamhs',['registers' => $registers]);
    }

    // public function edit($id)
    // {
    //     $registers = DB::table('register')->get($id);

    //     return view('usermaster/galery',['registers'=>$registers]);
    // }
}
