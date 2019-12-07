<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'viewPost']);
    }

    public function index()
    {
        return view('blog.index');
    }

    public function viewPost($slug)
    {
        $post = Post::where('slug', $slug)->first();
        return view('blog.index')->with('post', $post);
    }

    // Admin stuff

    public function indexAdmin()
    {
        return view('admin.blog-index');
    }

    public function fetchPostsAdmin()
    {
        return Post::all();
    }

    public function createViewAdmin(){
        return view('admin.create-blog');
    }

    public function createAdmin(Request $request)
    {
        $post = new Post;
        $post->user_id = auth()->id();
        $post->fill($request->all());
        $post->save();

        return response()->json(['message' => 'Blog post created!']);
    }
    public function viewAdmin($id)
    {
        $post = Post::find($id);
        return view('admin.blog-view')->with('post', $post);
    }

    public function updateAdmin($id, Request $request)
    {
        $post = Post::find($id);
        $post->fill($request->all());
        $post->save();
        return response()->json(['message' => 'Blog post updated!']);
    }

    public function deleteAdmin($id)
    {
        $post = Post::find($id);
        $post->delete();

        return response()->json(['message' => 'Blog post deleted!']);
    }
}
