<?php
namespace App\Models;

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view ('adminmaster/admin');
    }
    public function show()
    {
        $admins = DB::table('admin')->get();
        // dd($admins);     

        return view('adminmaster/admin', ['admins'=> $admins]);
    }
}
