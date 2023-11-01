<!--header-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yu-Gi-Oh! Post</title>
    <link rel="stylesheet" href="{{ asset('/css/single-post.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
</head>
<body>
    <!-- header -->
    <header>
        <a href="#" class="logo">Yu-Gi-Oh!</a>
        <div class="bx bx-menu" id="menu-icon"></div>
        <ul class="nav">
            <li><a href="{{ route('main.index') }}">Home</a></li>
            @can('admin-panel')
                <li><a href="{{ route('admin.index') }}">Admin Panel</a></li>
            @endcan
            @auth
                <li><a href="{{ route('main.profile') }}">Profile</a></li>    
            @endauth
            @guest
                <li><a href="{{ route('login.index') }}">Log In</a></li>
                <li><a href="{{ route('register.index') }}">Register</a></li> 
            @endguest              
        </ul>
    </header>
    <!-- post -->
    <section class="post">
        <div class="img-post">
            <img src="{{ asset('storage/' . $post->image) }}">
        </div>
       <div class="title-post">
            <h2>{{ $post->title }}</h2>
       </div>
       <div class="content-post">
            <p>{{ $post->content }}</p>
       </div>
       <!--comments-->
        <div class="title-comments">
            <h2>Comments</h2>
        </div>
        @auth
            <div class="form-comments">
                <form action="{{ route('main.comment.store', $post->id) }}" method="post">
                    @csrf
                    <textarea placeholder="Leave a comment.." name="content"></textarea>
                    <button type="submit">Send</button>
                    @error('record')
                        <p class="error">{{ $message }}</p>
                    @enderror
                </form>
            </div>
        @endauth
        <div class="container-comments">
            @foreach ($post->comments as $comment)
                <div class="item-comment">
                    <div class="img-comment">
                        <img src="{{ asset('storage/' . $comment->user->profile_image) }}" alt="404">
                    </div>                    
                    <div class="content-comment">
                        <a href="{{ route('main.profile.show', $comment->user->id) }}">{{ $comment->user->name }}</a>
                        <span class="data-comment"> ◦ {{$comment->date->diffForHumans()}}</span>
                        <p>{{ $comment->content }}</p>
                    </div>
                </div>
            @endforeach            
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