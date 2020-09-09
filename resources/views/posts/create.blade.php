@extends('layouts.app')

@section('content')
  <form method="post" action="{{ route('posts.store') }}">
    @csrf
    <input name="title" type="string" value="" />
    <input name="description" type="text" value="" />
    <button type="submit">投稿する</button>
  </form>
@endsection