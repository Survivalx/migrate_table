<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Interactions;

class InteractionsController extends Controller
{
    public function store()
    {
        $interaction = new Interactions();

        $interaction->user_id = 1;
        $interaction->song_id = 1;
        $interaction->liked = 10;
        $interaction->play_count = 10;

        $interaction->save();
    }

    public function index()
    {
        $interactions = Interactions::all();
        return response()->json($interactions);
    }
}
