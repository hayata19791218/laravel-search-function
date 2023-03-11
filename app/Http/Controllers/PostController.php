<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->input('keyword');

        $query = Post::query();

        if(!empty($keyword)) {
            $query->where('title', 'LIKE', "%{$keyword}%")
                ->orWhere('author', 'LIKE', "%{$keyword}%");
        }

        $posts = $query->get();

        return view('post.index', compact('posts', 'keyword'));
    }

    public function create()
    {
        return view('post.create');
    }

    public function store(Request $request)
    {
        $post = new Post();
        $post->title = $request->title;
        $post->author = $request->author;
        $post->body = $request->body;
        $post->save();
        return back();
    }

    public function show(Post $post)
    {
        return view('post.show',compact('post'));
    }
}