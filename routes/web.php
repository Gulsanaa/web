<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use App\Models\Mysdu;
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
    return view('welcome');
});

Route::get('/', function () {
    return view('user');
});

Route::get('mysdu/add', function(){
    DB:table('mysdu')->insert([
        'name'=> 'Gulsana',
        'surname'=>'Duisenbek',
        'age'=> 19
    ]);
});

Route::get('mysdu', function() {
    $mysdu = Mysdu::find(1);
    return $mysdu->name;
});