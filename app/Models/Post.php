<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'content', 'paragraph1', 'paragraph2', 'paragraph3', 'paragraph4', 'cover_image', 'article_image', 'youtube_link', 'date', 'author',
    ];
}
