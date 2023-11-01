@extends('admin.layout')
@section('css-link')
    <link rel="stylesheet" href="{{ asset('/css/admin/posts.css') }}">
@endsection
@section('content')
    <div class="content-dashboard">
        <div class="title-dashboard">
            <i class='bx bx-notepad'></i>
            <span>Posts</span>
            <a href="{{ route('admin.posts.create') }}">Create new</a>
        </div>
        <div class="container-post">
            @foreach ($posts as $post)
                <div class="item-post">
                    <a href="{{ route('admin.posts.show', $post->id) }}" class="link"></a>
                    <img src="{{ asset('storage/' . $post->image) }}">
                    <span class="title-post">{{ $post->title }}</span>
                    <i class='bx bx-subdirectory-right'></i>
                </div>
            @endforeach            
        </div>
@endsection