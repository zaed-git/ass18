<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['name'];
// Task 4:
// Create a relationship between the "Post" and "Category" models. A post belongs to a category, and a category can have multiple posts.
    // relation with post

    public function posts(){
        return  $this->hasMany(Post::class);
     }
     public function LatestPost()
     {
         return $this->posts()->orderBy('id', 'desc')->first();
     }
}
