<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Serial extends Model
{
    protected $fillable = ['title', 'description', 'genre', 'year', 'rating', 'season'];

    public function actors(){
        return $this->belongsToMany('App\Actor');
    }

    public function directors() {
        return $this->belongsToMany('App\Director');
    }
}
