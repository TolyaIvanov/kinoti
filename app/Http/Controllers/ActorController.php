<?php

namespace App\Http\Controllers;

use App\Actor;
use App\Http\Resources\ActorResource;
use Illuminate\Http\Request;

class ActorController extends Controller
{
    public function show(Actor $actor)
    {
        return new ActorResource($actor);
    }
}
