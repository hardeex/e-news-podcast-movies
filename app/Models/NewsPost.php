<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Image;
use Illuminate\Support\Str;

class NewsPost extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'content', 'category', 'image_url']; 

    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = $value;
       // $this->attributes['slug'] = Str::slug($value);
    }

    public function image()
    {
        return $this->belongsTo(Image::class);
    }
    
}
