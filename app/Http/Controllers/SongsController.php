<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Song;

class SongsController extends Controller {
    
    /**
     *
     * @var Song
     */
    private $song;

    public function __construct(Song $song)
    {
        $this->song = $song;
    }

    /**
     * Show a listing af all songs
     * 
     * @return View
     */
    public function index()
    {
        $songs = $this->song->get();
        //dd(Song::all()->toJson());
        
        return view('songs.index', compact('songs'));
    }
    
    /**
     * Show an individual song
     * 
     * @param type $slug
     * @return View
     */
    public function show(Song $song)
    {
        //$song = Song::whereSlug($slug)->first();
        
        return view('songs.show', compact('song'));
    }
    
    public function edit(Song $song)
    {
        //$song = Song::whereSlug($slug)->first();
        
        return view('songs.edit', compact('song'));
    }
    
    public function update(Song $song, Request $request)
    {
        //$song = Song::whereSlug($slug)->first();
        
        $song->fill($request->input())->save();
//        $song->fill(['title' => $request->get('title')])->save();
        
//        $song->title = $request->get('title');
//        $song->save();
        
        return redirect('songs');
    }
    
}
