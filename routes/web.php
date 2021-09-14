<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MateriaisController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/materiais', [MateriaisController::class, 'index'])
	->name('listar_materiais');
Route::get('/materiais/criar', [MateriaisController::class, 'create'])
	->name('form_material');
Route::post('/materiais/criar', [MateriaisController::class, 'store']);
Route::delete('/materiais/{id}', [MateriaisController::class, 'destroy']);
