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

    protected $guarded = [
        'id',
        'created_at',
        'updated_at'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
