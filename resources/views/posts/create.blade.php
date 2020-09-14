@extends('layouts.app')

@section('content')
  <form method="post" action="{{ route('posts.store') }}">
    @csrf
    <input name="title" type="string" value="" />
    <input name="description" type="text" value="" />
    <select name="category_mode" type="enum">
      <option value="works">WORKS</option>
      <option value="inspired">INSPIRED</option>
    </select>
    <select id="category_stage_id" name="category_stage_id" type="integer">
      @foreach($category_stages as $id => $name)
        <option value="{{ $id }}">{{ $name }}</option>
      @endforeach
    </select>
    
    <select id="category_style_id" name="category_style_id" type="integer">
      @foreach($category_styles as $id => $name)
        <option value="{{ $id }}">{{ $name }}</option>
      @endforeach
    </select>
    
    <button type="submit">投稿する</button>
  </form>
@endsection