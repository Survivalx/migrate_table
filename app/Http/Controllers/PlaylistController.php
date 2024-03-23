<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Playlists;

class PlaylistController extends Controller
{
    public function store()
    {
        $playlist = new Playlists();

        $playlist->user_id = 1;
        $playlist->name = 'Favourites';
        $playlist->rules = 'Rules text area here';

        $playlist->save();
    }

    public function index()
    {
        $playlists = Playlists::all();
        return response()->json($playlists);
    }
}
