<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artist;

class ArtistController extends Controller
{
    public function store() {
        $artist = new Artist();

        $artist->name = 'the motans';
        $artist->image = 'image-url-here-please';

        $artist->save();
    }

    public function index() {
        $artists = Artist::all();
        return response()->json($artists);
    }
}
