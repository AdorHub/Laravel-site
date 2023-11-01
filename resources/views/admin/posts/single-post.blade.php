@extends('admin.layout')
@section('css-link')
    <link rel="stylesheet" href="{{ asset('/css/admin/single-post.css') }}">
@endsection
@section('content')
    <div class="content-dashboard">
        <div class="title-dashboard">
            <i class='bx bx-book-content'></i>
            <span>{{ $post->title }}</span>
            <a href="{{ route('admin.posts.edit', $post->id) }}">Edit</a>
            <form action="{{ route('admin.posts.delete', $post->id) }}" method="post">
                @csrf
                @method('delete')
                <button class="delete-btn" type="submit">Delete</button>
            </form>
            
        </div>
        <div class="container-post">
            <img src="{{ asset('storage/' . $post->image) }}">
            <span>{{ $post->content }}</span>
        </div>
        <div class="title-dashboard">
            <i class='bx bx-chat'></i>
            <span>Comments</span>
        </div>
        <div class="container-comments">
            @foreach ($post->comments as $comment)
                <div class="item-comment">
                    <div class="img-comment">
                        <img src="{{ asset('storage/' . $comment->user->profile_image) }}" alt="404">
                    </div>                    
                    <div class="content-comment">
                        <a href="{{ route('main.profile') }}">{{ $comment->user->name }}</a>
                        <span class="data-comment"> ◦ {{$comment->date->diffForHumans()}}</span>
                        <form action="{{ route('admin.comment.delete', $comment->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit">delete</button>
                        </form>                        
                        <p>{{ $comment->content }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection