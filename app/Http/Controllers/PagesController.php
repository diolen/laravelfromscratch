<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller {
    
    public function index()
    {
        return view('pages.home');
    }
    
    public function about()
    {
        return view('pages.about');
    }
}