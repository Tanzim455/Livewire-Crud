<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function user(){
        return $this->hasMany(Post::class);
    }
    public function likedPosts()
    {
        return $this->belongsToMany(Post::class, 'user_post_likes', 'post_id', 'user_id');
    }
    protected static function booted()
{
    static::creating(function ($post) {
        $post->user_id = auth()->user()?->id;
    });
}
}
