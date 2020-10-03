@extends('layouts.app')

@push('css')
  <link href="{{ asset('css/view.css') }}" rel="stylesheet">

@section('content')
    <h1 class="ui center aligned header"> </h1>
    <h1 class="ui center aligned header">Posts</h1>
    @foreach($posts as $post)
    <div class="ui link cards">
      <div class="card">
        <a class="image" a href="{{ route('posts.show', $post->id) }}">
          <img src="{{ $post->image }}">
        </a>
        <div class="content">
          <div class="header">{{ $post->title }}</div>
          <div class="meta">
            <a>{{ $post->created_at }}</a>
          </div>
        </div>
        <div class="extra content">
          <span>
            <i class="tags icon"></i>
            {{ $post->category_mode }}
          </span>
        </div>
      </div>
    </div>
    @endforeach
@endpush
@endsection