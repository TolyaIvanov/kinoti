<?php

namespace App\Http\Controllers;

use App\Director;
use App\Http\Resources\DirectorResource;
use Illuminate\Http\Request;

class DirectorController extends Controller
{
    public function show(Director $director)
    {
        return new DirectorResource($director);
    }
}
