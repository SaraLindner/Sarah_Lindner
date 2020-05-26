<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function showStartPage()
    {
        return view('login_page');
    }

    public function showCvPage()
    {
        return view('cv_page');
    }

     public function showContact()
    {
        return view('contact');
    }

    public function showExperience()
    {
        return view('experience');
    }
}
