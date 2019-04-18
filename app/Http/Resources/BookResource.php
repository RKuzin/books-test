<?php

namespace App\Http\Resources;

use App\Book;
use Illuminate\Http\Resources\Json\JsonResource;

class BookResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request){

        BookResource::withoutWrapping();

        return [
            'type'          => 'book',
            'id'            => (string)$this->id,
            'attributes'    => [
                'title' => $this->title,
                'releaseDate' => (string)$this->release_date,
                'authors' => Book::authorsList($this->authors),
            ],
        ];
    }
}
