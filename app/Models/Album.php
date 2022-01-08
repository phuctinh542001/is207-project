<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;

    protected $table = 'album';

    public function tracks() {
        return $this->hasMany('App\Models\Tracks', 'id_album', 'id');
    }

    public function artists() {
        return $this->belongsTo('App\Models\Artists', 'id', 'id_artists');
    }
}
