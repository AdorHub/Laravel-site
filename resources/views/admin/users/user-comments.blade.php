@extends('admin.layout')
@section('css-link')
    <link rel="stylesheet" href="{{ asset('/css/admin/user.css') }}">
@endsection
@section('content')
    <div class="content-dashboard">
        <div class="title-dashboard">
            <i class='bx bxs-user-detail'></i>
            <span>{{ $user->name }}</span>
        </div>
        <div class="container-comments">
            @foreach ($user->comments as $comment)
            <div class="item-comments">
                <div class="info">
                    <img src="{{ asset('storage/' . $user->profile_image) }}">
                    <span>{{ $comment->content }}</span>
                </div>
                <div class="buttons">
                    <form action="{{ route('admin.users.delete', $user->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit">Delete</button>
                    </form>
                </div>
            </div>
            @endforeach
        </div>        
    </div>
@endsection