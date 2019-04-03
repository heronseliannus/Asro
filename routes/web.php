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

Route::get('/', function () {
    return view('asro-kalbar');
});

Route::get('views/asro-kalbar', function(){
    return view('asro-kalbar');
});

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

// formulir

Route::get('/heron', function()
{
    return view('fomulir/heron');
});
Route::get('/heronselianus', function()
{
    return view('fomulir/heronselianus');
});