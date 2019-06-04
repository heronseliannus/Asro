<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usercontroller extends Controller
{
    public function index()
    {
        return view ('user.formuser', ['user' => formuser::all()]);
    }
        public function store (Request $reguest)
            {
                $namefoto;
                if ($reguest ['photo'])
                {
                    $namefoto => $reguest ['photo'] ->store =('images');
                }
                else 
                {
                    $namefoto="";
                }

                $formuser = new user;

                $user ->First_name = $request ['form-firstname'];
                $user ->Last_name = $request ['form-lastname'];
                $user ->Password = $request['form-password'];
                $user ->Nik = $request ['form-nik'];
                $user ->Email = $request ['form-user-email'];
                $user ->Reemail= $request ['form-reeamil'];
                $user ->Nomor_hp = $request ['form-nomor_hp'];
                $user ->Alamat = $request ['form-address'];
                $user ->Provinsi = $request ['from-provinsi'];
                $user ->Kabupaten = $request ['from-kabupaten'];
                $user ->Kota = $request ['from-kota'];

                $user ->Tanggal = carbon::parse($request ['select-date'], '-', $request ['select-moth'], '-',  $request ['from-dete-year']);

                $user -> save();

                return view ('user', compact('$reguest'));
            }
}