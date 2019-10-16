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
        //insert
        // DB::table('register')->insert([
        //     ['namalengkap'=>'insert',
        //     'alamat'  =>'Bandung, Indonesia',
        //     'jenis_kelamin' => 'Perempuan',
        //     'email'  => 'isnert1@gmail.com',
        //     're_email' => 'isert1@gamil.com',
        //     'kabupaten' => 'Kab. Bandung',
        //     'kota' =>'Bandung',
        //     'perguruan_tinggi' =>'PPG Bandung',
        //     'jurusan'=>'Teknik Elektro'
        //     ]
        // ]);

        //update
        // DB::table('register')->where('namalengkap', 'insert10','13' )
        //                      ->update(['namalengkap'=>'insert15']);

        //delete
        // DB::table('register')->where('namalengkap', 'delete2')->delete();
        
        $registers = DB::table('register')->get();
     
        return view('usermaster/datamhs',['registers' => $registers]);
        //insert data manually
        //update data manually where namalengkap
        //delete data where usernamen/namalengkap
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
