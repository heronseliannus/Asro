<?php

namespace App\Http\Controllers;
use Illuminate\Http\Facades\DB;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view ('adminmaster/admin');
       
    }
    public function show()
    {
        $admins =DB::table('admin')->get();
        dd('anda hanya sampai kesini');      

        return view('adminmaster/admin', ['admins'=> $admin]);
    }
}
