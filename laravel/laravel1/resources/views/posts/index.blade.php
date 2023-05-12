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
        <div>{{ $key }}.{{ $post['title'] }}</div>
    @empty
        No posts found
    @endforelse
@endsection