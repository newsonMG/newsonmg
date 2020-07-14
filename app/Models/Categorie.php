<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $fillable = [
        'detail',
    ];

    /**public function courses()
    {
       return $this->hasMany('App\Models\Course')->orderBy('created_at', 'DESC');
    }*/
}
