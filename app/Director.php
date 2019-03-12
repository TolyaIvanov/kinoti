<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Director extends Model
{
    protected $fillable = ['name', 'description', 'year', 'photo', 'slug'];

    public function films() {
        return $this->belongsToMany('App\Film');
    }

    public function serials() {
        return $this->belongsToMany('App\Serial');
    }
}
