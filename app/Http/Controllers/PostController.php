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

    public function create()
    {
        $category_stage = new CategoryStage;
        $category_stages = $category_stage->getLists()->prepend('選択', '');
        $category_style = new CategoryStyle;
        $category_styles = $category_style->getLists()->prepend('選択', '');

        /* compact関数を使った場合
        return view('posts.create', compact('category_stages', 'category_styles')); --}}
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
        $post->user()->associate(Auth::user()); // ★
        $post->save();

        return redirect()->to('/'); // '/' へリダイレクト
    }

    public function delete(Post $post)
    {
        $post->delete();

        return redirect()->to('/');
    }
}
