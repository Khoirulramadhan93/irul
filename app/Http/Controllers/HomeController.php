<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('home');
    }

    public function mesin(){
        return view('mesin');
    }
    public function kaki(){
        return view('kaki');
    }
    public function dashboard(){
        return view('dashboard');
    }
    public function bengkel(){
        return view('bengkel');
    }
}
