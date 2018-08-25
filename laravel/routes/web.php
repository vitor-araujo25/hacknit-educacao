<?php

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
    return view('home');
});

Route::get('/loginResponsavel', function () {
	return view('login');
});

Route::get('/loginEscola', function() {
	return view('login');
})->name('loginEscola');

Route::get('/cadastro', function() {
	return view('cadastro');
});

Route::get('/perfil', function() {
	return view('perfil');
});

Route::get('/acompanhamento', function() {
	return view('acompanhamento');
});

Route::get('/matricula', function() {
	return view('matricula');
});

Route::get('/filho', function() {
	return view('filho');
});

Route::get('/notas', function() {
	return view('notas');
});

Route::get('previsao', function() {
	return view('previsao');
});