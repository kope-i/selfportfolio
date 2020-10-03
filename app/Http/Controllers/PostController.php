<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\CategoryStage;
use App\Models\CategoryStyle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with(['user'])->latest()->get();

        return view('index', ['posts' => $posts]);
    }

    public function works()
    {
        $posts = Post::with(['user'])->where('category_mode', '=', 'works')->latest()->get();

        return view('works', ['posts' => $posts]);
    }

    public function inspired()
    {
        $posts = Post::with(['user'])->where('category_mode', '=', 'inspired')->latest()->get();

        return view('inspired', ['posts' => $posts]);
    }

    public function show(Post $post)
    {    
        $posts = Post::with(['user'])->latest()->get();

        return view('show', ['post' => $post]);
    }

    public function create()
    {
        
        $category_stage = new CategoryStage;
        $category_stages = $category_stage->getLists()->prepend('選択', '');
        
        $category_style = new CategoryStyle;
        $category_styles = $category_style->getLists()->prepend('選択', '');
        
        /*CategoryStage::getLists()->prepend('選択', '');
        $category_stages = CategoryStage::orderBy('id', 'asc')->pluck('name', 'id');

        /* compact関数を使った場合
        return view('posts.create', compact('category_stages', 'category_styles')); --}}
        ('posts.create', [
            'category => $category
        ])
        */
        /* withメソッドを使った場合
        return view('posts.create')-> with([
            "category_stages" => $category_stages,'category_styles' => $category_styles,
        ]);
        */

        $category_view = [];
        $category_view["category_stages"] = $category_stages;
        $category_view["category_styles"] = $category_styles;

        return view('posts.create', $category_view);
    }

    public function store(Request $request)
    {
        $post = new Post;
        $post->fill($request->all());
        $post->user()->associate(Auth::user());
        //dd($request->file('image'));
        
        $path = $request->file('image')->store('', ['disk' => 'images']);
        $post->image = "images/" . $path;
        $post->save();
        
        return redirect()->to('/'); // '/' へリダイレクト
    }

    public function edit(Request $request)
    {
        $post = Post::find($request->id);
        return view('edit', ['post' => $post]); 
    }

    public function update(Request $request)
    {
        $post = Post::find($request->id);
        $post->title = $request->title;
        $post->description = $request->description;

        $post->save();
        return redirect('/');
    }

    public function delete(Post $post)
    {
        $post->delete();

        return redirect()->to('/');
    }
}
