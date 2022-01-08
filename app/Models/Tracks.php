<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tracks extends Model
{
    use HasFactory;

    protected $table = 'tracks';

    public function genre() {
        return $this->belongsTo('App\Models\Genre', 'id_genre', 'id');
    }

    public function theme_detail() {
        return $this->hasMany('App\Models\ThemeDetail', 'id', 'id_tracks');
    }

    public function artists() {
        return $this->belongsTo('App\Models\Artists', 'id_artists', 'id');
    }

    public function album() {
        return $this->belongsTo('App\Models\Album', 'id_album', 'id');
    }

    public function playlist_detail() {
        return $this->hasMany('App\Models\PlaylistDetail', 'id_tracks', 'id');
    }
}
