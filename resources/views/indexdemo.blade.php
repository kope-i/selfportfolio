@extends('layouts.app')

@section('content')
    <h1 class="ui center aligned header"> </h1>
    <h1 class="ui center aligned header">Posts</h1>
    @foreach($posts as $post)
    <div class="ui center container">
    <div class="ui card">
      <div class="content">
        <div class="header">{{ $post->title }}</div>
        <div class="description">{{ $post->description }}</div>
        <img src="{{ $post->image }}"  width="50%" height="50%">
        <p class="card-text"><a href="{{ route('posts.show', $post->id) }}">詳細を見る</a></p>
        <p class="card-text"><a href="{{ route('posts.edit', $post->id) }}">編集する</a></p>
        <div class="content">
          <form method="POST" action="{{ route('posts.delete', $post->id) }}">
            @csrf
            <button type="submit" class="btn btn-danger">削除</button>
          </form>
        </div>
      </div>
      </div>    
    @endforeach
@endsection