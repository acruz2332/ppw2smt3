<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function home(){
        return view('homee');
    }
    public function about(){
        return view('about');
    }
    public function education(){
        return view('education');
    }
    public function project(){
        return view('project');
    }
}
