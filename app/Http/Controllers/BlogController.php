<?php

use App\Models\Post;
use App\Models\Category;

public
function show($slug)
{
    $post = Post::where('slug', $slug)->firstOrFail();
    return view('blog.show', compact('post'));
}

public
function category($slug)
{
    $category = Category::where('slug', $slug)->firstOrFail();
    $posts = $category->posts()->paginate(10);
    return view('blog.category', compact('category', 'posts'));
}
