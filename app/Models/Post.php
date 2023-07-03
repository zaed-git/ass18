<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
     
// Task 4:
// Create a relationship between the "Post" and "Category" models. A post belongs to a category, and a category can have multiple posts.
//   question 4 answer relatio with Catgory table
    use HasFactory, SoftDeletes;
    protected $fillable = ['name', 'description', 'category_id'];
    
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
