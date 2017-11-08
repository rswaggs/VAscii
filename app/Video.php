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

    public function scopeFavouritedByUser($query, $userId)
    {
        return $query->with(['favouritedBy' => function($query) use ($userId) {
            $query->where('users.id', $userId);
        }]);
    }

    // TODO: Use a presenter
    public function safePath()
    {
        $current = str_replace("'", "\\'", $this->path);
        return str_replace(" ", "\\ ", $current);
    }

}