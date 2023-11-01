<!--header-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yu-Gi-Oh! Profile</title>
    <link rel="stylesheet" href="{{ asset('/css/profile.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
</head>
<body>
    <!-- header -->
    <header>
        <a href="#" class="logo">Yu-Gi-Oh!</a>
        <div class="bx bx-menu" id="menu-icon"></div>
        <ul class="nav">
            <li><a href="{{ route('main.index') }}">Home</a></li>
            <li><a href="#">Life Counter</a></li>
            @can('admin-panel')
                <li><a href="{{ route('admin.index') }}">Admin Panel</a></li>
            @endcan
            <form action="{{ route('login.logout') }}" method="post">
                @csrf
                <li><button class="logout-btn" type="submit">Logout</button></li>
            </form>
        </ul>
    </header>
    <!--profile-->
    <section class="profile">
        <div class="info-profile">
            <p>Profile picture:</p>
            <img src="{{ asset('storage/' . auth()->user()->profile_image) }}" alt="404">
            <p>Login:</p>
            <span>{{ auth()->user()->name }}</span>
            <p>Email:</p>
            <span>{{ auth()->user()->email }}</span>
        </div>
    </section>

    <!-- footer -->
    <section id="about">
        <footer>            
            <div class="container-footer">
                <div class="item-footer">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="{{ route('main.index') }}">Home</a></li>
                        <li><a href="#lifepointer">Life Points Counter</a></li>
                    </ul>
                </div>
    
                <div class="item-footer">
                    <h4>Contacts info</h4>
                    <ul>
                        <li><a href="#">KONAMI</a></li>
                        <li><a href="#">Japan</a></li>
                        <li><a href="#">+79091945174</a></li>
                        <li><a href="#">kaibacorp.mail.ru</a></li>
                    </ul>
                </div>
    
                <div class="item-footer">
                    <h4>Contacts info</h4>
                    <ul>
                        <li><a href="#">KONAMI</a></li>
                        <li><a href="#">Japan</a></li>
                        <li><a href="#">+79091945174</a></li>
                        <li><a href="#">kaibacorp.mail.ru</a></li>
                    </ul>
                </div>
    
                <div class="item-footer">
                    <h4>Social links</h4>
                    <div class="social">
                        <a href="#"><i class='bx bxl-youtube'></i></a>
                        <a href="#"><i class='bx bxl-instagram-alt'></i></a>
                        <a href="#"><i class='bx bxl-facebook-square'></i></a>
                        <a href="#"><i class='bx bxl-twitter'></i></a>
                    </div>
                </div>
            </div>
        </footer>
    </section>
    <div class="footer-end">
        <p>Copyright ©️2023 All rights reserved | Created by Ador</p>
    </div>
    <script src="{{ asset('/js/script.js') }}"></script>
    </body>
    </html>