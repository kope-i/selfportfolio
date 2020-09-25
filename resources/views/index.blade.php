@extends('layouts.app')

@section('content')
  
    @foreach($posts as $post)
    <div class="ui card">
      <div class="content">
        <div class="header">{{ $post->title }}</div>
        <div class="description">{{ $post->description }}</div>
        <img src="{{ $post->image }}">
        <form method="POST" action="{{ route('posts.delete', $post->id) }}">
            @csrf
            <button type="submit" class="btn btn-danger">削除</button>
          </form>
      </div>    
    @endforeach
  
@endsection

