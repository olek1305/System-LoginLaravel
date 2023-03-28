<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    /**
     * BOOK ATTRIBUTES
     * $this->['id'] - int - contains the product primary key (id)
     * $this->['description'] - string - contains the book name
     * $this->['title'] - string - contains the book title
     * $this->['author'] - string - contains the book author
     * $this->['link'] - string - contains the book link
     * $this->attributes['created_at'] - timestamp - contains the book creation date
     * $this->attributes['updated_at'] - timestamp - contains the book update date
     */

    protected $table = 'books';

    protected $fillable = [
        'description',
        'title',
        'author',
        'link',
    ];
}