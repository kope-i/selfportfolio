@extends('layouts.app')

@section('content')
  <div class="ui center container">
    <div class="ui card">
      <div class="content">
        <div class="header">{{ $post->title }}</div>
        <div class="description">{{ $post->description }}</div>
        <img src="{{ $post->image }}"  width="50%" height="50%">
        <p class="card-text"><a href="{{ route('posts.edit', $post->id) }}">編集する</a></p>
        <div class="content">
          <form method="POST" action="{{ route('posts.delete', $post->id) }}">
            @csrf
            <button type="submit" class="btn btn-danger">削除</button>
          </form>
      </div>
    </div>
  </div>    
@endsection