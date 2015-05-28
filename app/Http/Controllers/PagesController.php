<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller {
    
    public function index()
    {
        $lessons = ['First lesson', 'Second lesson', 'Third lesson'];
        
        //return view('pages.home', compact('lessons', 'name'));
        //return view('pages.home')->with('lessons', $lessons);
        //return view('pages.home')->withName($name);
        return view('pages.home')->withLessons($lessons);
    }
    
    public function about()
    {
        return view('pages.about');
    }
}
