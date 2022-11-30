<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;
class LandingPageController extends Controller
{
    public function __construct(){
        $this->middleware('auth', ["except" => ["home"]]);
    }
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
