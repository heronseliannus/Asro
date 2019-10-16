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
        return view('usermaster/datamhs');
    }
    public function show()
    {
        $registers = DB::table('register')->get();
     
        return view('usermaster/datamhs',['registers' => $registers]);
        dd($registers);       

        // direct view | name parameter | name class data | name class data 2
        // return view('username/datamhs', ['register'=> $registers, 'admin'=> $admins]);
    }

    // public function edit($id)
    // {
    //     $registers = DB::table('register')->get($id);

    //     return view('usermaster/galery',['registers'=>$registers]);
    // }
}
