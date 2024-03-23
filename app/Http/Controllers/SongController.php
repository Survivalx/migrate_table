<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Song;

class SongController extends Controller
{
    public function store() {
        $song = new Song();

        $song->album_id = 1;
        $song->artist_id = 1;
        $song->title = 'Versus';
        $song->length = "4:48";
        $song->track = 1;
        $song->disc = 1;
        $song->lyrics = 'lyrics-url-here';
        $song->path = 'path-url-here-please';
        $song->mtime = 100;

        $song->save();
    }

    public function index() {
        $songs = Song::all();
        return response()->json($songs);
    }


}
