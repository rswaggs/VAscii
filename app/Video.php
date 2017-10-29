<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function favouritedBy()
    {
        return $this->belongsToMany(User::class, 'favourites')->withTimestamps();
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class)->withTimestamps();
    }
}