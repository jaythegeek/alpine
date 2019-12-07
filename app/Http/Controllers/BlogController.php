<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'viewPost', 'fetchPosts', 'searchPosts']);
    }

    public function index()
    {
        return view('blog.index');
    }

    public function viewPost($slug)
    {
        $post = Post::where('slug', $slug)->first();
        if ($post->status == 'published') {
            return view('blog.view')->with('post', $post);
        } else {
            return view('blog.view')->with('post', $post);
            // return redirect('/blog');
        }
    }

    // Admin stuff

    public function indexAdmin()
    {
        return view('admin.blog-index');
    }

    public function fetchPosts()
    {
        return Post::where('status', 'published')->get();
    }

    public function searchPosts(Request $request)
    {
        return Post::where('title', 'like', '%' . $request->search . '%')->get();
    }


    public function fetchPostsAdmin()
    {
        return Post::all();
    }

    public function createViewAdmin()
    {
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

    public function postImageUpload(Request $request)
    {
        $storedFile = Storage::put('public/blog-images', $request->file);

        $url = Storage::url($storedFile);

        return response()->json(['url' => $url]);
    }
}
