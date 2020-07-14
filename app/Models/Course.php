<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'title', 'description', 'image', 'url',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**public function categorie()
    {
        return $this->belongsTo('App\Models\Categorie');
    }*/
}
