<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Song;

class SongsController extends Controller {
    
    public function index(Song $song)
    {
        $songs = $song->get();
        //dd(Song::all()->toJson());
        
        return view('songs.index', compact('songs'));
    }
    
    public function show(Song $song)
    {
        //$song = Song::whereSlug($slug)->first();
        
        return view('songs.show', compact('song'));
    }
    
    public function edit(Song $song)
    {
        return 'Edit the song with the title ' . $song->title;
    }
    
}
