<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Playlists extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'rules',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
