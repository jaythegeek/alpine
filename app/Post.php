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
        "featured_image_url"
    ];

    protected $appends = ['stripped_content'];

    public function getStrippedContentAttribute()
    {
        return strip_tags($this->content);
    }


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
