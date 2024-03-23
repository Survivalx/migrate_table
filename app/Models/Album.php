<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;

    protected $fillable = [
        'artist_id',
        'name',
        'cover'
    ];

    public function artist() {
        return $this->belongsTo(Artist::class);
    }

    public function setNameAttribute($value) {
        $this->attributes['name'] = ucwords($value);
    }
}
