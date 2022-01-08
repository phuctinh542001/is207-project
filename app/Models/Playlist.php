<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Playlist extends Model
{
    use HasFactory;

    protected $table = 'playlist';

    public function users() {
        return $this->belongsTo('App\Models\User', 'id', 'id_users');
    }

    public function playlist_detail() {
        return $this->hasMany('App\Models\PlaylistDetail', 'id_playlist', 'id');
    }
}
