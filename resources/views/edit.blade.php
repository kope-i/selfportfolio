@extends('layouts.app')

@section('edit')
<form class="ui center aligned form" method="post" action="{{ route('posts.update',$post->id) }}" enctype="multipart/form-data">
  @csrf
    <h1 class="ui center aligned header">Edit Post</h1>
    <div class="ui container">
    <div class="field">
      <label>ひとこと</label>
      <input type="string" name="title" placeholder="ひとこと" value="{{ $post->title }}"/>
    </div>
    <div class="field">
      <label>くわしく</label>
      <input type="text" name="description" placeholder="くわしく" value="{{ $post->description }}"/>
    </div>

    <input name="image" type="file"/>

    <div class="small field">
      <label>Works or Inspired</label>
      <select name="category_mode" type="enum" value="{{ $post->category_mode }}">
        <option value="works"
          @if ($post->category_mode === "works")
                selected
          @endif
          >WORKS</option>
        <option value="inspired"
        @if ($post->category_mode === "inspired")
                selected
          @endif
          >INSPIRED</option>
      </select>
    </div>

    <div class="field">
      <label>制作段階</label>
      <select id="category_stage_id" name="category_stage_id" type="integer" value=>
        @foreach($category_stages as $id => $name)
          <option value="{{ $id }}"
            @if ($post->category_stage_id == $id)
                selected
            @endif
                >{{ $name }}</option>
        @endforeach
      </select>
    </div>

    <div class="field">
      <label>ジャンル</label>
      <select id="category_style_id" name="category_style_id" type="integer" value=>
        @foreach($category_styles as $id => $name)
          <option value="{{ $id }}"
            @if ($post->category_style_id == $id)
                selected
            @endif)
                >{{ $name }}</option>
        @endforeach
      </select>
    </div>
    <button class="ui button" type="submit">投稿する</button>
    </div>
  </form>
@endsection
