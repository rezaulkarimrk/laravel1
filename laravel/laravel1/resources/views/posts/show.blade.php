@extends('layouts.app')

@section('title', $posts['title'])

@section('content')
@if($posts['is_new'])
    <div>A new blog post! Using if</div>
@else
    <div>Blog post is old! using elseif/else</div>
@endif

@unless ($posts['is_new'])
    <div>It is an old post... using unless</div>
@endunless

    <h1>{{ $posts['title'] }}</h1>
    <p>{{ $posts['content'] }}</p>

@isset($posts['has_comment'])
    <div>The post has some comments... using isset</div>
@endisset
@endsection