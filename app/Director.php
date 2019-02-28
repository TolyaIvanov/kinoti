<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Director extends Model
{
    protected $fillable = ['name', 'description'];

    public function films() {
        $this->belongsToMany('App\Film');
    }

    public function serials() {
        $this->belongsToMany('App\Serial');
    }
}