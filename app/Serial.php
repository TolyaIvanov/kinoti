<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Serial extends Model
{
    protected $fillable = ['title', 'description', 'genre', 'year', 'rating', 'season'];

    public function actors(){
        $this->hasMany('App\Actor');
    }

    public function directors() {
        $this->hasOne('App\Director');
    }
}
