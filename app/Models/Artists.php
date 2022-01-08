<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artists extends Model
{
    use HasFactory;

    protected $table = 'artists';

    public function tracks() {
        return $this->hasMany('App\Models\Tracks', 'id_artists', 'id');
    }

    public function album() {
        return $this->hasMany('App\Models\Album', 'id_artists', 'id');
    }
}
