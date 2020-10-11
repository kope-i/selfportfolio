@extends('layouts.app')

@section('content')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <h1 class="ui center aligned header"> </h1>
    <h1 class="ui center aligned header">Posts</h1>
    <div class="ui equal width center aligned padded grid">
    <div class="ui grid container">
    <div class="ui row">
    @foreach($posts as $post)
    <div class="four wide column">
      <div class="ui link cards">
        @if ($post->category_mode === "works")
        <div class="teal card">
          <a class="image" a href="{{ route('posts.show', $post->id) }}">
            <img src="{{ $post->image }}" class= img-responsive style= height: 22px; width: 100px;>
          </a>
          <div class="content">
            <div class="header">{{ $post->title }}</div>
            <div class="meta">
              <a>{{ $post->created_at }}</a>
            </div>
          </div>
          <div class="extra content">
          <span>
              <i class="teal tags icon"></i>
              <a class="ui basic teal label">{{ $post->category_mode }}</a>
          </span>
          </div>
        </div>
        @else
        <div class="orange card">
          <a class="image" a href="{{ route('posts.show', $post->id) }}">
            <img src="{{ $post->image }}" width="100px" height="100px">
          </a>
          <div class="content">
            <div class="header">{{ $post->title }}</div>
            <div class="meta">
              <a>{{ $post->created_at }}</a>
            </div>
          </div>
          <div class="extra content">
            <span>
              <i class="orange tags icon"></i>
              <a class="ui orange basic label">{{ $post->category_mode }}</a>
            </span>
          </div>
        </div>
        @endif
    </div>
    </div>
    @endforeach
    {{ $posts->links('vendor.pagination.semantic-ui') }}
    </div>
    </div>
    </div>
@endsection