<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Interactions extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'song_id',
        'liked',
        'play_count'
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function song()
    {
        return $this->belongsTo(User::class);
    }
}
