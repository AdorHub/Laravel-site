<!--header-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yu-Gi-Oh! Registration</title>
    <link rel="stylesheet" href="{{ asset('/css/auth.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
</head>
<body>
    <!-- header -->
    <header>
        <a href="#" class="logo">Yu-Gi-Oh!</a>
        <div class="bx bx-menu" id="menu-icon"></div>
        <ul class="nav">
            <li><a href="{{ route('main.index') }}">Home</a></li>
            <li><a href="{{ route('login.index') }}">Login</a></li>      
        </ul>
    </header>
    <!--auth-->
    <section class="auth">
        <div class="form">
            <div class="title">
                <h2>Register</h2>
            </div>
            <form action="{{ route('register.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="input">
                    <input type="text" placeholder="Nickname" value="{{ old('name') }}" name="name" autofocus>
                    <i class='bx bx-user-circle'></i>
                </div>
                @error('name')
                    <div class="error">{{ $message }}</div>
                @enderror
                <div class="file-input">
                    <input id="file" type="file" placeholder="Profile picture" value="{{ old('profile_image') }}" name="profile_image">
                    <label for="file"><i class='bx bx-image-add'></i>Profile picture</label>
                </div>
                @error('profile_image')
                    <div class="error">{{ $message }}</div>
                @enderror
                <div class="input">
                    <input type="email" placeholder="Email" value="{{ old('email') }}" name="email">
                    <i class='bx bx-envelope'></i>
                </div>
                @error('email')
                    <div class="error">{{ $message }}</div>
                @enderror
                <div class="input">
                    <input type="password" placeholder="Password" class="password" name="password">
                    <i class='bx bx-lock-alt' ></i>
                    <i class='bx bx-low-vision showHidePassword'></i>
                </div>
                <div class="input">
                    <input type="password" placeholder="Confirm Password" class="password" name="password_confirmation">
                    <i class='bx bx-lock-alt' ></i>
                </div>
                @error('password')
                    <div class="error">{{ $message }}</div>
                @enderror
                <button type="submit" class="btn">Become a true duelist</button>
            </form>
            <div class="link-to-reg">
                <span>Already have an account? </span><a href="{{ route('login.index') }}">Login</a>
            </div>
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
                        <li><a href="#news">News</a></li>
                        <li><a href="#lifepointer">Life Points Counter</a></li>
                        <li><a href="{{ route('main.profile') }}">Profile</a></li>
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