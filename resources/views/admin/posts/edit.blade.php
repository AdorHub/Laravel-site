@extends('admin.layout')
@section('css-link')
    <link rel="stylesheet" href="{{ asset('/css/admin/edit-create-post.css') }}">
@endsection
@section('content')
    <div class="content-dashboard">
        <div class="title-dashboard">
            <i class='bx bx-edit'></i>
            <span>Edit post</span>
        </div>
        <div class="container-form">
            <form action="{{ route('admin.posts.update', $post->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('patch')
                <div class="item-input">
                    <span>Title</span>
                    <input type="text" name="title" value="{{ $post->title }}">
                    @error('title')
                        <p class="error">{{ $message }}</p>
                    @enderror
                </div>
                <div class="item-input">
                    <span>Text</span>
                    <textarea name="content">{{ $post->content }}</textarea>
                    @error('content')
                        <p class="error">{{ $message }}</p>
                    @enderror
                </div>
                <div class="item-file-input">
                    <span>Image</span>
                    <img src="{{ asset('storage/' . $post->image) }}">
                    <input type="file" name="image" value="{{ $post->image }}">
                    @error('image')
                        <p class="error">{{ $message }}</p>
                    @enderror
                </div>
                <button class="create-btn" type="submit">Edit</button>
            </form>
        </div>
    </div>
@endsection