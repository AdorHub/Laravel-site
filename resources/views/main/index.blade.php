@extends('main.layouts.layout')
@section('content')
    <!-- start -->
    <section class="start" id="start">
        <div class="text-start">
            <h1>Let's duel !</h1>
            <a href="#" class="btn-start">Launch Life Counter</a>
        </div>
    </section>
    <!--navigation-->
    <section class="navigation">
        <div class="title-navigation">
            <h2>Your navigation</h2>
        </div>
        <div class="container-navigation">

            <div class="item-navigation">
                <a class="link" href="#lifecounter"></a>
                <div class="img-navigation">
                    <img src="img/8000.jpg">
                </div>
                <h3>Life Counter</h3>
                <p>Try for playing duel</p>
            </div>

            <div class="item-navigation">
                <a class="link" href="#news"></a>
                <div class="img-navigation">
                    <img src="img/judai.png">
                </div>
                <h3>News</h3>
                <p>Latest news and new updates !</p>
            </div>

            <div class="item-navigation">
                <a class="link" href="#about"></a>
                <div class="img-navigation">
                    <img src="img/konami.png">
                </div>
                <h3>About Us</h3>
                <p>Some info</p>
            </div>

            <div class="item-navigation">
                <a class="link" href="#qa"></a>
                <div class="img-navigation">
                    <img src="img/hm.png">
                </div>
                <h3>Q & A</h3>
                <p>Find all answers</p>
            </div>
            
        </div>
    </section>
    <!--section-->
    <section id="news">
        <div class="title-news">
            <h2>Yu-Gi-Oh! News</h2>
        </div>        
            <div class="container-news">
                @foreach ($posts as $post)
                    <div class="item-news">
                        <div class="preview-img-news">
                            <img src="{{ asset('storage/' . $post->image) }}">
                        </div>
                        <a href="{{ route('main.show', $post->id) }}">{{ $post->title }}</a>
                        <p>{{ substr($post->content, 0, 120) . '...' }}</p>
                    </div>
                @endforeach  
            </div>              
    </section>
    <!--about-->
    <section id="about">
        <div class="title-about">
            <h2>About Us</h2>
        </div>
        <div class="container-about">
            <h3>We are a team that decided to create a convenient website for you</h3>
            <p>On this website you can try our life points counter when playing Yugioh, actually this is the main function, but we also created a news blog about the universe of this wonderful card game so that you're always up to date with the developments of the game. We advise you to register to give us feedback because published news and events can be left in comments below, so we are looking forward to your feedback and thank you for using our website!</p>
        </div>
    </section>
    <!--q & a-->
    <section id="qa">
        <div class="title-accordion">
            <h2>Q & A</h2>
        </div>
        <div class="container-accordion">
            <ul class="list-accordion">
                <li class="item-accordion">
                    <button class="btn-accordion">
                        <span>Is it free ?</span>
                        <i class='bx bx-plus icon'></i>
                    </button>
                    <div class="content-accordion">
                        Yes, for FREE, FOREVER.
                    </div>
                </li>

                <li class="item-accordion">
                    <button class="btn-accordion">
                        <span>Do i need to sign up for using Life Pointer ?</span>
                        <i class='bx bx-plus icon'></i>
                    </button>
                    <div class="content-accordion">
                        No, It's not necessary.
                    </div>
                </li>

                <li class="item-accordion">
                    <button class="btn-accordion">
                        <span>If I find a bug where can I contact you ?</span>
                        <i class='bx bx-plus icon'></i>
                    </button>
                    <div class="content-accordion" aria-hidden="true">
                        At the bottom of the page there's our contact information, please contact us in case of errors.
                    </div>
                </li>
            </ul>
        </div>
    </section>
@endsection