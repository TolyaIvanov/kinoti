<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class FilmResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            'year' => $this->year,
            'genre' => $this->genre,
            'date' => $this->date,
            'rating' => $this->rating,
            'poster' => $this->poster,
            'time' => $this->time,
            'slug' => $this->slug,
            'isCartoon' => $this->isCartoon,
        ];
    }
}
