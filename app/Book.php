<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    /**
     * The authors that belong to the book.
     */
    public function authors() {
        return $this->belongsToMany('App\Author', 'authorship');
    }

    /**
     * Making authors list of the book by joining authors name and surname.
     */
    static public function authorsList($authors) {
        $authors = $authors->pluck('name', 'surname')->map(function ($item, $key) {
            return $item . " " . $key;
        });
        $authors = $authors->flatten()->implode(', ');
        return $authors;
    }
}
