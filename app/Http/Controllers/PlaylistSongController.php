<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PlaylistSong;

class PlaylistSongController extends Controller
{
    public function store()
    {
        $playlistsong = new PlaylistSong();

        $playlistsong->playlist_id = 1;
        $playlistsong->song_id = 1;

        $playlistsong->save();
    }

    public function index() {
        $playlistsongs = PlaylistSong::all();
        return response()->json($playlistsongs);
    }
}
