<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    protected $fillable = ['title', 'description', 'genre', 'year', 'rating', 'poster', 'isCartoon', 'time', 'slug'];

    public function actors(){
        return $this->belongsToMany('App\Actor');
    }

    public function directors() {
        return $this->belongsToMany('App\Director');
    }
}
