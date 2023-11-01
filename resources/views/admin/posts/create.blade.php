@extends('admin.layout')
@section('css-link')
    <link rel="stylesheet" href="{{ asset('/css/admin/edit-create-post.css') }}">
@endsection
@section('content')
    <div class="content-dashboard">
        <div class="title-dashboard">
            <i class='bx bx-book-add'></i>
            <span>Create post</span>
        </div>
        <div class="container-form">
            <form action="{{ route('admin.posts.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="item-input">
                    <span>Title</span>
                    <input type="text" name="title" value="{{ old('title') }}">
                    @error('title')
                        <p class="error">{{ $message }}</p>
                    @enderror
                </div>
                <div class="item-input">
                    <span>Text</span>
                    <textarea name="content">{{ old('content') }}</textarea>
                    @error('content')
                        <p class="error">{{ $message }}</p>
                    @enderror
                </div>
                <div class="item-file-input">
                    <span>Image</span>
                    <input type="file" name="image" value="{{ old('image') }}">
                    @error('image')
                        <p class="error">{{ $message }}</p>
                    @enderror
                </div>
                <button class="create-btn" type="submit">Create</button>
            </form>
        </div>
    </div>
@endsection