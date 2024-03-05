<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NewsPost extends Model
{
    protected $fillable = [
        'title', 'content', 'image', 'is_featured', 'is_trending', 'is_headline', 'category_id',
    ];

    // Define relationships if needed
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
