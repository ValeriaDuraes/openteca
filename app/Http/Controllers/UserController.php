<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function home() {
        return view('home');
    }

    public function cadastro() {
        return view('cadastro');
    }

    public function informacoeslivro() {
        return view('informacoeslivro');
    }

    public function login() {
        return view('login');
    }

    public function meuslivros() {
        return view('meuslivros');
    }

    public function minhaconta() {
        return view('minhaconta');
    }

    public function pesquisa() {
        return view('pesquisa');
    }
}
