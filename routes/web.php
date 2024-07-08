<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/empresa', function() { 
    return view ('site/empresa');    
});

Route::any('/any', function() { 
    return 'rotas any permite todos os tipos de acesso http (put, delete, get e post)';
});

Route::match(['get', 'post'], '/match', function() { 
    return 'permite apenas acessos definidos, o primeiro parametro diz quais são permitidos, nesse caso get e post';
});