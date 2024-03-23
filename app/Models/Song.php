<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use HasFactory;

    protected $fillable = [
        'album_id',
        'artist_id',
        'title',
        'length',
        'track',
        'disc',
        'lyrics',
        'path',
        'mtime'
    ];
    protected $guarded = [
        'id',
        'created_at',
        'updated_at'
    ];

    public function album()
    {
        $this->belongsTo(Album::class);
    }
    public function artist()
    {
        $this->belongsTo(Artist::class);
    }
    public function rules()
    {
        return [
            'length' => 'required|regex:/^[0-5]?[0-9]:[0-5][0-9]$/'
        ];
    }
}
