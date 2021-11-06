<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Tag;

class PostController extends Controller
{
    public function index()
    {

        $posts = Post::all();

        // dd( $posts );

        return view('posts', compact('posts'));
    }

    public function edit(Request $request, $id)
    {
        $post = Post::find($id);

        $tag = Tag::where('tag', 'Sports')->get();

        // $tags = Tag::whereNotNull('tag')->get();

        // $post->tags()->detach();
        // $post->tags()->attach($tags);
        $post->tags()->sync($tag);

        dd($post->tags);
    }
}
