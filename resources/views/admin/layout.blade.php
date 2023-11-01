<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('css-link')
    <link rel="stylesheet" href="{{ asset('/css/admin/nav-top.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <title>Admin Panel</title>
</head>
<body>
    <nav>
        <div class="container-logo">
            <div class="image-logo">
                <img src="{{ asset('/img/yugioh.png') }}">
            </div>
        </div>
        <div class="container-menu">
            <ul class="list-menu">
                <li>
                    <a href="{{ route('admin.index') }}">
                        <i class='bx bx-home'></i>
                        <span class="link-name">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.posts.index') }}">
                        <i class='bx bx-notepad'></i>
                        <span class="link-name">Posts</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.users.index') }}">
                        <i class='bx bxs-user-detail'></i>
                        <span class="link-name">Users</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('main.index') }}">
                        <i class='bx bx-chevrons-left'></i>
                        <span class="link-name">Back to Main</span>
                    </a>
                </li>              
            </ul>

            <ul class="list-menu">
                <li>
                    <form action="{{ route('login.logout') }}" method="post">
                    @csrf
                    <a href="#" onclick="event.preventDefault(); this.closest('form').submit()">
                    </form>
                        <i class='bx bx-log-out-circle'></i>
                        <span class="link-name">Logout</span>
                    </a>
                </li>
                <li class="mode-container">
                    <a href="#">
                        <i class='bx bx-moon'></i>
                        <span class="link-name">Dark Mode</span>
                    </a>
                    <div class="mode-toggle">
                        <span class="mode-switch"></span>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <section class="dashboard">
        <div class="top">
            <i class='bx bx-menu sidebar-toggle'></i>
            <div class="search-container">
                <i class='bx bx-search'></i>
                <input type="text" placeholder="Search..">                
            </div>
            <img src="{{ asset('storage/' . auth()->user()->profile_image) }}">
        </div>
        @yield('content')
    </section> 
    <script src="{{ asset('/js/admin.js') }}"></script>
</body>
</html>