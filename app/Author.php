<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'surname'
    ];

    // Relation with "Book" model
    public function books()
    {
        return $this->hasMany('App\Book');
    }
}
