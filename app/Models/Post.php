<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Post extends Model
{
    // En Post.php
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
