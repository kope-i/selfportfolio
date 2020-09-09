@extends('layouts.app')

@section('content')
  
    @foreach($posts as $post)
    <div class="ui card">
      <div class="content">
        <div class="header">{{ $post->title }}</div>
        <div class="description">{{ $post->description }}</div>
      </div>    
    @endforeach
  
@endsection

