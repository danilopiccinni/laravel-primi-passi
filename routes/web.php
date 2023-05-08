<?php

use Illuminate\Support\Facades\Route;

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

    $header = [
        'h1' => 'Laravel',
        'h2' => 'Primi passi con laravel',
        'p' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. At laboriosam, architecto ipsum iusto dolorem ullam, totam, unde error temporibus praesentium minima. Vel, perferendis exercitationem ab veniam assumenda eum qui a.'
    ];

    return view('home' , $header);
});
