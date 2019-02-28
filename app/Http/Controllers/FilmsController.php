<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Film;
use App\Serial;

/**
 * @mixin \Eloquent
 */

class FilmsController extends Controller
{
    public function index()
    {
        return [
            'films' => Film::all()->sortBy('id')->chunk(8)->toJson(),
            'serials' => Serial::all()->sortBy('id')->chunk(8)->toJson(),
        ];
    }

    public function films()
    {
        return Film::all()->chunk(16)->toJson();
    }

    public function showFilm(Film $film)
    {
        return $film->toJson();
    }

    public function filmTop()
    {
        return Film::all()->sortBy('rating')->take(100)->chunk(20)->toJson();
    }

    public function cartoons()
    {
        return Film::where('isCartoon', '=', 'true')->get();
    }

    public function premiere($miss){
        return [
            'films' => Film::skip($miss)->latest()->take(16)->chunk(8),
            'serials' => Serial::skip($miss)->latest()->take(16)->chunk(8),
        ];
    }
}
