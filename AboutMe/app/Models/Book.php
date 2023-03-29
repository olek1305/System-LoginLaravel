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
     * $this->['image'] - string - contains the book image
     * $this->attributes['created_at'] - timestamp - contains the book creation date
     * $this->attributes['updated_at'] - timestamp - contains the book update date
     */

    public static function validate($request)
    {
        $request->validate([
            "description" => "required|255",
            "title" => "required|255",
            "author" => "required|255",
            "link" => "required|255",
            'image' => 'image',

        ]);
    }

    public function getId()
    {
        return $this->attributes['id'];
    }

    public function setId($id)
    {
        $this->attributes['id'] = $id;
    }

    public function getDescription()
    {
        return $this->attributes['description'];
    }

    public function setDescription($description)
    {
        $this->attributes['description'] = $description;
    }

    public function getTitle()
    {
        return $this->attributes['title'];
    }

    public function setTitle($title)
    {
        $this->attributes['title'] = $title;
    }

    public function getAuthor()
    {
        return $this->attributes['author'];
    }

    public function setAuthor($author)
    {
        $this->attributes['author'] = $author;
    }

    public function getLink()
    {
        return $this->attributes['link'];
    }

    public function setLink($link)
    {
        $this->attributes['link'] = $link;
    }

    public function getImage()
    {
        return $this->attributes['image'];
    }

    public function setImage($image)
    {
        $this->attributes['image'] = $image;
    }

    public function getCreatedAt()
    {
        return $this->attributes['created_at'];
    }

    public function setCreatedAt($createdAt)
    {
        $this->attributes['created_at'] = $createdAt;
    }

    public function getUpdatedAt()
    {
        return $this->attributes['updated_at'];
    }

    public function setUpdatedAt($updatedAt)
    {
        $this->attributes['updated_at'] = $updatedAt;
    }

}