<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usercontroller extends Controller
{
    public function indext()
    {
        return view ('user.formuser', ['user'=> formuser::all()]);
        {
                public function store(Request $_reguest)

                $formuser = new user;

                $user ->First_name = $request ['form-firstname'];
                $user ->Last_name = $request ['form-lastname'];
                $user ->Password = $request['form-password'];
                $user ->Nik = $request ['form-nik'];
                $user ->Email = $request ['form-email'];
                $user ->Reemail= $request ['form-reeamil'];
                $user ->Nomor_hp = $request ['form-nomor_hp'];
                $user ->Alamat = $request ['form-alamat'];
                $user ->Provinsi = $request ['from-provinsi'];
                $user ->Kabupaten = $request ['from-kabupaten'];
                $user ->Kota = $request ['from-kota'];

                $user ->Tanggal = $request ['from-tanggal'];
                $user ->Bulan = $request ['form-bulan'];
                $user ->Tahun = $request ['form-tahun'];

                $user -> save();
            }
    }
}
