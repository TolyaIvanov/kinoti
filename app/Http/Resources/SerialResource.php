<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SerialResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
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
            'slug' => $this->slug,
            'season' => $this->isCartoon,
        ];
    }
}
