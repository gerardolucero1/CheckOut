<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    public function login(){
        return view('movil.login');
    }

    public function inicio(){
        return view('movil.inicio');
    }
    public function habitaciones(){
        return view('movil.habitaciones');
    }
    public function habitacion(){
        return view('movil.habitacion');
    }
    public function evidencias1(){
        return view('movil.evidencias1');
    }

    public function evidencias2(){
        return view('movil.evidencias2');
    }

    public function evidencias3(){
        return view('movil.evidencias3');
    }

    public function chat(){
        return view('movil.chat');
    }
    public function checklist(){
        return view('movil.checklist');
    }
}
