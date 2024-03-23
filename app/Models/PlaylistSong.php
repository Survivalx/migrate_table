<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlaylistSong extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'playlist_id',
        'song_id'
    ];

    protected $guarded = [
        'id'
    ];

    public function playlist()
    {
        return $this->belongsTo(Playlists::class);
    }

    public function song()
    {
        return $this->belongsTo(Song::class);
    }
}
