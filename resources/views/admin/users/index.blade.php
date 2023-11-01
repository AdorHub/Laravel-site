@extends('admin.layout')
@section('css-link')
    <link rel="stylesheet" href="{{ asset('/css/admin/user.css') }}">
@endsection
@section('content')
    <div class="content-dashboard">
        <div class="title-dashboard">
            <i class='bx bxs-user-detail'></i>
            <span>Users</span>
        </div>
        <div class="container-user">
            @foreach ($users as $user)
                <div class="item-user">
                    <div class="info">
                        <img src="{{ asset('storage/' . $user->profile_image) }}">
                        <span>{{ $user->name }}</span>
                        <span>{{ $user->email }}</span>
                    </div>
                    <div class="buttons">
                        <a href="{{ route('admin.user.comments', $user->id) }}">Check comments</a>
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
