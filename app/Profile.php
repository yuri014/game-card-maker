<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];

    public function profileImage()
    {
        $imagePath = ($this->image) ? $this->image : 'profile/6vkttV1s6zgRQH3mHTNga0drF0uJ9WuxeTbkpftI.jpeg';

        return '/storage/' . $imagePath;
    }

    public function user() 
    {
        return $this->belongsTo(User::class);
    }
}
