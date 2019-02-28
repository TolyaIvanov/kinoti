<?php

namespace App\Http\Controllers;

use App\Serial;
use Illuminate\Http\Request;

class SerialsController extends Controller
{
    public function serials()
    {
        return Serial::all()->chunk(12)->toJson();
    }

    public function serialTop(Serial $serial) {
        return $serial->toJson();
    }

    public function showTop() {
        return Serial::all()->sortBy('rating')->take(100)->chunk(20)->toJson();

    }
}
