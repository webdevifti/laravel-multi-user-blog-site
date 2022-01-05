<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    use Sluggable;

    protected $fillable = ['title','slug','article','image_path','user_id'];

    public function user(){
        return $this->belongsTo(User::class);
    }
  
    public function comments() 
    {
        return $this->hasMany(Comment::class); 
    }
    public function sluggable(): array 
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
