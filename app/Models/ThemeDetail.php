<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ThemeDetail extends Model
{
    use HasFactory;

    protected $table = 'theme_detail';

    public function theme() {
        return $this->belongsTo('App\Models\Theme', 'id', 'id_theme');
    }

    public function tracks() {
        return $this->belongsTo('App\Models\Tracks' , 'id_tracks', 'id');
    }
}
