@extends('layouts.app')

@section('content')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">

  <h1 class="ui center aligned header"> </h1>
  <h1 class="ui center aligned header">Detail</h1>
  <div class="ui two column centered grid">
  <div class="column">
    <div class="ui cards">
      @if ($post->category_mode === "works")
      <div class="ui centered teal card">
      <a class="image" a href="{{ route('posts.show', $post->id) }}">
            <img src="{{ asset($post->image) }}" width="10px" height="10px">
          </a>
          <div class="content">
            <div class="header">{{ $post->title }}</div>
            <div class="description">{{ $post->description }}</div>
            <div class="meta">
              <a>{{ $post->created_at }}</a>
            </div>
          </div>
          <div class="extra content">
          <span>
              <i class="teal tags icon"></i>
              <a class="ui basic teal label">{{ $post->category_mode }}</a>
              <a class="ui basic teal label">
              @switch($post->category_stage_id)
                  @case(1)
                    思いつき
                    @break
                  @case(2)
                    製作途中
                    @break
                  @case(3)
                    完成品
                    @break
              @endswitch
              </a>    
              <a class="ui basic teal label">  
              @switch($post->category_style_id)
                  @case(1)
                    絵・イラスト
                    @break
                  @case(2)
                    写真
                    @break
                  @case(3)
                    映画・動画
                    @break
                  @case(4)
                    その他
              @endswitch
              </a>
          </span>
          </div>
          @else
          <div class="ui centered orange card">
          <a class="image" a href="{{ route('posts.show', $post->id) }}">
            <img src="{{ asset($post->image) }}" width="10px" height="10px">
          </a>
          <div class="content">
            <div class="header">{{ $post->title }}</div>
            <div class="description">{{ $post->description }}</div>
            <div class="meta">
              <a>{{ $post->created_at }}</a>
            </div>
          </div>
          <div class="extra content">
          <span>
              <i class="orange tags icon"></i>
              <a class="ui basic orange label">{{ $post->category_mode }}</a>
              <a class="ui basic orange label">
              @switch($post->category_stage_id)
                  @case(1)
                    思いつき
                    @break
                  @case(2)
                    製作途中
                    @break
                  @case(3)
                    完成品
                    @break
              @endswitch
              </a>      
              <a class="ui basic orange label">
              @switch($post->category_style_id)
                  @case(1)
                    絵・イラスト
                    @break
                  @case(2)
                    写真
                    @break
                  @case(3)
                    映画・動画
                    @break
                  @case(4)
                    その他
              @endswitch
              </a>
          </span>
          </div>
          @endif
        <div class="content">
        <input type="button" class="ui primary tiny button" onclick="location.href='{{ route('posts.edit', $post->id) }}'" value="Edit">
        <br></br>
        <form method="POST" action="{{ route('posts.delete', $post->id) }}">
            @csrf
            <button type="submit" class="ui tiny button">Delete</button>
          </form>
        </div>
        <div class="content">
        <input type="button" class="ui tiny button" onclick="location.href='{{ route('index') }}'" value="Back">
      </div>
    </div>
    </div>
  </div>  
  </div>
@endsection