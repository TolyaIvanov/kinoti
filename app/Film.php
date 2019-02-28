<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    protected $fillable = ['title', 'description', 'genre', 'year', 'rating', 'isCartoon', 'time'];

    public function actors(){
        $this->belongsToMany('App\Actor');
    }

    public function directors() {
        $this->belongsToMany('App\Director');
    }
}
