<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('cursos',function () {
    return view('cursos.index');
});
Route::get('cursos/create', function () {
    return 'Formulario para crear un curso';
});
Route::get('cursos/{curso}',function ($curso) {
    return 'bienvnido al curso: ' . $curso;
});