<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Category;
use App\Models\User;

class BlogController extends Controller
{
    public function index()
    {

        $title = '';
        if (request('category')) {
            $category =  Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }

        if (request('author')) {
            $user = User::firstWhere('username', request('author'));
            $title = ' by ' . $user->name;
        }

        return view('blog', [
            "title" => 'All Post' . $title,
            "active" => "blog",
            "posts" => Blog::latest()->filter(request(['search', 'category', 'author']))->paginate(10)->withQueryString()
        ]);
    }

    public function show(Blog $post)
    {
        return view('post', [
            "title" => "Single Post",
            "active" => "blog",
            "post" => $post
        ]);
    }
}
