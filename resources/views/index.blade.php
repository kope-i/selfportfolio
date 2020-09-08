@extends('layouts.app')

@section('content')
  <div class="container">
    @foreach($posts as $post)
      <div class="card">
        <div class="card-header">{{ $post->user_id }}</div>
        <div class="card-body">{{ $post->title }}: {{ $post->description }}</div>
    @endforeach
  </div>
@endsection

