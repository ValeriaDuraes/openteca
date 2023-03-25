<?php

use App\Http\Controllers\UserController;
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

Route::get('/', [UserController::class, 'homeView']);

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/login', [UserController::class, 'loginView']);

// Route::get('/login', function () {
//     return view('login');
// });

Route::get('/cadastro', [UserController::class, 'cadastroView']);

// Route::get('/cadastro', function () {
//     return view('cadastro');
// });

Route::get('/meus_livros', [UserController::class, 'meus_livrosView']);

// Route::get('/meus_livros', function () {
//     return view('meus_livros');
// });

Route::get('/minha_conta', [UserController::class, 'minha_contaView']);

// Route::get('/minha_conta', function () {
//     return view('minha_conta');
// });

Route::get('/pesquisa', [UserController::class, 'pesquisaView']);

// Route::get('/pesquisa', function() {
//     return view('pesquisa');
// });

Route::get('/informacoes_livros', [UserController::class, 'informacoes_livrosView']);

// Route::get('/informacoes_livros', function () {
//     return view('informacoes_livros');
// });
