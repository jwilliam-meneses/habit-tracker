<?php

namespace App\Http\Controllers;

class SiteController extends Controller
{
    public function index()
    {

        $name = 'José';
        $habits = ['Ler', 'Correr', 'Estudar', 'Viajar'];

        return view('home', [
            'name' => $name,
            'habits' => $habits,
        ]);
    }
}
