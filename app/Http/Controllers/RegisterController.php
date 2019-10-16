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
        DB::table('register')->insert([
            ['namalengkap'=>'insert',
            'alamat'  =>'Bandung, Indonesia',
            'jenis_kelamin' => 'Perempuan',
            'email'  => 'isnert1@gmail.com',
            're_email' => 'isert1@gamil.com',
            'kabupaten' => 'Kab. Bandung',
            'kota' =>'Bandung',
            'perguruan_tinggi' =>'PPG Bandung',
            'jurusan'=>'Teknik Elektro'
            ]
        ]);
        $registers = DB::table('register')->get();
     
        return view('usermaster/datamhs',['registers' => $registers]);
        //insert data manually
        //get data register input on database mysql    
        //redirect view on datamhs
    }

    public function insert()
    {
     
        $registers = DB::table('register')->get();

        return view('usermaster/datamhs',['registers'=>$registers]);
        // direct view | name parameter | name class data | name class data 2
        // return view('username/datamhs', ['register'=> $registers, 'admin'=> $admins]);
    }
}
