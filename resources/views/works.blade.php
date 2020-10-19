@extends('layouts.app')

@section('content')
    <h1 class="ui center aligned header"> </h1>
    <h1 class="ui center aligned header">Works</h1>
    <div class="ui equal width center aligned padded grid">
    <div class="ui grid container">
    <div class="ui row">
    @foreach($posts as $post)
    <div class="four wide column">
      <div class="ui link cards">
        <div class="teal card">
          <a class="image" a href="{{ route('posts.show', $post->id) }}">
            <img src="data:image;base64,{{ $post->image }}" width="100px" height="100px">
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
      </div>
    </div>    
    @endforeach
    {{ $posts->links('vendor.pagination.semantic-ui') }}
    </div>
    </div>
    </div>
@endsection
