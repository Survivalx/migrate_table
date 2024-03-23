<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Album;

class AlbumController extends Controller
{
    public function store() {
        $album = new Album();

        $album->artist_id = 1;
        $album->name = "themotans album here";
        $album->cover = 'Official Experience';

        $album->save();
    }

    public function index() {
        $albums = Album::all();
        return response()->json($albums);

    }


}
