<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{   
    protected $fillable = ['title','post_text', 'category_id'];
    use HasFactory;

    // relation with category
    public function category(){
      return $this->belongsTo(Category::class);
    }
}
