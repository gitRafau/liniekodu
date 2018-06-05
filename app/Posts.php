<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $fillable = [
        'title', 'author', 'body'
    ];


    public function comments()
    {

        return $this->hasMany(Comments::class);
    }

    public function addComment($body)
    {

        Comments::create([
            'body' => $body,
            'posts_id' => $this->id
        ]);
    }

    public static function archives()
    {

        return static::selectRaw('year(created_at) year, monthname(created_at) month, count(*) published')
            ->groupBy('year', 'month')
            ->orderByRaw('min(created_at) DESC')
            ->get()
            ->toArray();
    }

    public function tags()
    {
        return $this->belongsToMany(Tags::class);
    }
}
