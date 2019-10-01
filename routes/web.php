<?php

use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




Route::get('/menu', function()
{
 return view('layout/menu');
});
Route::get('/sejarah', function()
{
    return view('user/sejarah');
});

Route::get('/formuser', function()
{
    return view('user/formuser');
});

// asro bandung controller

Route::get('asrobandung','UserController@index');

// login User

Route::get('/login', function()
{
    return view('user/login');
});

Route::get('/galery', function()
{
    return view('user/galery');
});

Route::get('/formdaftar', function()
{
    return view('fomulir/formdaftar');
});

// BPA kepengurusan

Route::get('/pengurus2016', function()
{
    return view('pengurus/pengurus2016');
});

Route::get('pengurus2017',function()
{
    return view('pengurus/pengurus2017');
});

Route::get('pengurus2018',function()
{
    return view('pengurus/pengurus2018');
});

Route::get('pengurus2019',function()
{
    return view('pengurus/pengurus2019');
});