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
        $posts = Post::with(['user'])->latest()->paginate(8);

        return view('index', ['posts' => $posts]);
    }

    public function works()
    {
        $posts = Post::with(['user'])->where('category_mode', '=', 'works')->latest()->paginate(8);

        return view('works', ['posts' => $posts]);
    }

    public function inspired()
    {
        $posts = Post::with(['user'])->where('category_mode', '=', 'inspired')->latest()->paginate(8);

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

    public function edit(Post $post)
    {
        

        $category_stage = new CategoryStage;
        $category_stages = $category_stage->getLists()->prepend('選択', '');
        
        $category_style = new CategoryStyle;
        $category_styles = $category_style->getLists()->prepend('選択', '');
 

        $category_view = [];
        $category_view["category_stages"] = $category_stages;
        $category_view["category_styles"] = $category_styles;
        $category_view["post"] = $post;

        return view('edit', $category_view);
    }

    public function update(Request $request,Post $post)
    {

        $post->title = $request->title;
        $post->description = $request->description;
        $post->category_mode = $request->category_mode;
        $post->category_stage_id = $request->category_stage_id;
        $post->category_style_id = $request->category_style_id;
        $post->image = $request->image;

        $path = $request->file('image')->store('', ['disk' => 'images']);
        $post->image = "images/" . $path;

        $post->save();

        return redirect()->to('/');
    }


    public function delete(Post $post)
    {
        $post->delete();

        return redirect()->to('/');
    }
}
