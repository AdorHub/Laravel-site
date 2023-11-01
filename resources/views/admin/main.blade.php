@extends('admin.layout')
@section('css-link')
    <link rel="stylesheet" href="{{ asset('/css/admin/main.css') }}">
@endsection
@section('content')
    <div class="content-dashboard">
        <div class="container-dashboard">
            <div class="title-dashboard">
                <i class='bx bx-tachometer'></i>
                <span>Dashboard</span>
            </div>

            <div class="boxes-dashboard">
                <div class="box box-1">
                    <i class='bx bx-user-circle'></i>
                    <span class="text">Total Users</span>
                    <span class="number">{{ $usersCount }}</span>                        
                </div>

                <div class="box box-2">
                    <i class='bx bx-book'></i>
                    <span class="text">Total Posts</span>
                    <span class="number">{{ $postsCount }}</span>                        
                </div>

                <div class="box box-3">
                    <i class='bx bx-message-alt-detail'></i>
                    <span class="text">Comments</span>
                    <span class="number">{{ $commentsCount }}</span>                        
                </div>
            </div>
        </div>
        <div class="container-activity">
            <div class="title-activity">
                <i class='bx bx-time-five'></i>
                <span>Recent Activity</span>
            </div>
            <div class="content-activity">
                
            </div>
        </div>
    </div>
@endsection
