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
        'p' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. At laboriosam, architecto ipsum iusto dolorem ullam, totam, unde error temporibus praesentium minima. Vel, perferendis exercitationem ab veniam assumenda eum qui a.',
        'links' => [
            'pagina1',
            'pagina2',
            'pagina3',
            'pagina4'
        ]
    ];

    return view('home' , $header);
});


Route::get('pagina1', function(){
    return view('pagina1');
})->name('pagina1');


Route::get('pagina2', function(){
    return view('pagina2');
})->name('pagina2');


Route::get('pagina3', function(){
    return view('pagina3');
})->name('pagina3');


Route::get('pagina4', function(){
    return view('pagina4');
})->name('pagina4');