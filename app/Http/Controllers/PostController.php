<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $user = auth()->user();

        if ($user) {
            $query = $user->posts();
        // $posts = $user->posts;
        } else {
            $query = Post::query();
        }

        if ($keyword = $request->input('search')) {
            $query->where('title', 'like', "%$keyword%");
        }

        $posts = $query->latest()
            ->paginate(2);

        return view('post.index', [
            'posts' => $posts,
        ]);
    }

    public function add()
    {
        return view('post.add');
        // return View::make('post.add');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        // dd(request()->all());

        $data = $request->validate([
            'title' => 'required|max:255',
            'body'  => 'required',
        ]);

        $post = new Post;

        // manual fill
        // $post->title = $request->input('title');
        // $post->body = $request->input('body');

        // autofill
        $post->fill($data);

        // associate relationship and save
        $post->user()->associate(auth()->user());
        $post->save();

        // associate relationship and save
        // auth()->user()->posts()->save($post);

        return redirect()->to('/');
        // return redirect()->route('route.name');
    }
}
