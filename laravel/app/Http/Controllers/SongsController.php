<?php

namespace App\Http\Controllers;
use App\Models\Songs;
use Illuminate\Http\Request;

class SongsController extends Controller
{
    
    public function index()
    {
        $songs = Songs::all();
        return view('songs.index', compact('songs'));
    }

   
    public function show(Songs $song)
    {
        return view('songs.show',compact('song'));
    }

  
    public function destroy(Songs $song)
    {
        $song->delete();
        return redirect()->route('song.index')->with('success','Song has been deleted successfully');
    }
}
