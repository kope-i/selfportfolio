@extends('layouts.app')

@section('content')
  <form class="ui center aligned form" method="post" action="{{ route('posts.store') }}" enctype="multipart/form-data">
  @csrf
    <h1 class="ui center aligned header">New Post</h1>
    <div class="ui container">
    <div class="field">
      <label>タイトル</label>
      <input type="string" name="title" placeholder="ひとこと" value=""/>
    </div>
    <div class="field">
      <label>説明</label>
      <input type="text" name="description" placeholder="くわしく" value=""/>
    </div>

    <input name="image" type="file"/>

    <div class="small field">
      <label>Works or Inspired</label>
      <select name="category_mode" type="enum">
        <option value="works">WORKS</option>
        <option value="inspired">INSPIRED</option>
      </select>
    </div>

    <div class="field">
      <label>制作段階</label>
      <select id="category_stage_id" name="category_stage_id" type="integer">
        @foreach($category_stages as $id => $name)
          <option value="{{ $id }}">{{ $name }}</option>
        @endforeach
      </select>
    </div>

    <div class="field">
      <label>ジャンル</label>
      <select id="category_style_id" name="category_style_id" type="integer">
        @foreach($category_styles as $id => $name)
          <option value="{{ $id }}">{{ $name }}</option>
        @endforeach
      </select>
    </div>
    <button class="ui button" type="submit">投稿する</button>
    </div>
  </form>
@endsection