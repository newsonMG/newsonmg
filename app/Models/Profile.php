<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
     protected $fillable = [
        'title', 'description', 'image',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function getImage()
    {
        $imagePath = $this->image ?? 'avatars/default.png';

        return "/storage/" . $imagePath;
    }
}
