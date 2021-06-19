<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $fillable = [
        'title',
        'poster',
        'link',
        'desc'
    ];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
