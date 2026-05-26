<?php

namespace App\Http\Controllers;

class SiteController extends Controller
{
    public function index()
    {

        $name = 'igor';
        $tasks = ['Acordar', 'Estudar', 'Correr', 'Ler'];

        return view('home', [
            'name' => $name,
            'tasks' => $tasks
        ]);
    }
}
