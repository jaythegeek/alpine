<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    protected $fillable = [
        "user_id",
        "title",
        "content",
        "status",
        "slug",
    ];

    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
