<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Song;
use App\Http\Requests\CreateSongRequest;

use Illuminate\Http\Request;

class SongsController extends Controller {

    /**
     * @var Song
     */
    private $song;

    /**
     * Initializing an instance
     * 
     * @param Song $song
     */
    public function __construct(Song $song)
    {
        $this->song = $song;
    }    
    
	/**
	 * Display a listing of the resource.
	 *
	 * @return View
	 */
	public function index()
	{
        $songs = $this->song->get();
        
        return view('songs.index', compact('songs'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return View
	 */
	public function create()
	{
		return view('songs.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
     * @param Song $song
     * @param Request $request
     * @return Mixed
	 */
    public function store(CreateSongRequest $reques, Song $song)
    {
        $song->create($reques->all());
        
        return redirect('songs');
    }

	/**
	 * Display the specified resource.
	 *
	 * @param  Song $song
	 * @return View
	 */
	public function show(Song $song)
	{
		return view('songs.show', compact('song'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  Song $song
	 * @return View
	 */
	public function edit(Song $song)
	{
		return view('songs.edit', compact('song'));
	}

    /**
     * Update the specified resource in storage.
     * 
     * @param Song $song
     * @param Request $request
     * @return Mixed
     */
    public function update(Song $song, Request $request)
    {
        $song->fill($request->input())->save();
        
        return redirect('songs');
    }

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  Song $song
	 * @return View
	 */
	public function destroy(Song $song)
	{
        $song->delete();
        
		return redirect('songs');
	}

}
