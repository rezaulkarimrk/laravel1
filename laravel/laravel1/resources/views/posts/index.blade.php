@extends('layouts.app')

@section('title', 'Blog Posts')

@section('content')
    {{-- @if(count($posts))
        @foreach ($posts as $key => $post)
            <div>{{ $key }}.{{ $post['title'] }}</div>
        @endforeach
    @else
        No Posts found!
    @endif --}}

    @forelse ($posts as $key => $post)
        {{-- @break($key ==2)
        @continue($key == 1) --}}
        @include('posts.partials.post', [])
    @empty
        No posts found
    @endforelse

    {{-- @each('posts.partials.post', $posts, 'post') --}}
@endsection