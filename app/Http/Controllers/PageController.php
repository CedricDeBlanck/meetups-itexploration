<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{


    public function index()
    {
        return view('welcome');
    }

    public function showLaravel()
    {
        return view('laravel');
    }

    public function showLivewire()
    {
        return view('livewire');
    }

    public function showVue()
    {
        return view('vue');
    }

    public function showQuiz()
    {
        return view('quiz');
    }
}
