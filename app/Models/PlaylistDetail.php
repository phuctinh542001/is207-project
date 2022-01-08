<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlaylistDetail extends Model
{
    use HasFactory;

    protected $table = 'playlist_detail';

    public function playlist() {
        return $this->belongsTo('App\Models\Playlist', 'id', 'id_playlist')
    }

    public function tracks() {
        return $this->belongsTo('App\Models\Tracks', 'id', 'id_tracks');
    }
}
