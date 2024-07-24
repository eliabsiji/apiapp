<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fashion Hub</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Caveat:wght@700&family=Playwrite+BE+VLG:wght@100..400&family=Playwrite+NO:wght@100..400&display=swap');
     
        .playwrite-no-logo_name {
            width: 20%;
            height: 100%;
          font-family: "Playwrite NO", cursive;
          font-optical-sizing: auto;
          font-weight: 500;
          font-style: normal;
          font-size: 30px;
          padding-left: 10px;
        }
        span.dot {
    color: rgb(0, 0, 255); /* Change this to your desired color */
}
.slideshow-container {
            position: absolute;
            width: 100%;
            height: 100%;
            margin: auto;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
            color: black;
            border-radius: 10px;
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .quote {
            position: absolute;
            width: 100%;
            opacity: 0;
            font-size: 24px;
            font-family: Arial, Helvetica, sans-serif;
            text-align: center;
            transition: opacity 0.5s ease-out;
            z-index: 11;
            color: black;
            overflow: hidden;
            display: flex;
            flex-direction: column;
        }
        .active {
            opacity: 1;
            transition: opacity 0.5s ease-in;
        }
        .author {
            margin-top: 10px;
            font-size: 18px;
            color: #555;
            display: block;
        }
    </style>
</head>
<body>
    {{-- //header --}}
    <div class="header_home" style="position: fixed">
        {{-- <span class="playwrite-no-logo_name">Fashion Hub</span> --}}
        <span class="playwrite-no-logo_name fashion">fash<span class="dot">i</span>on Hub</span>
        <div class="navbar">
             <a class="link_div1" href="/home">Home
             <br>
              <span class="link_div1"></span>
             </a>

             <a class="link_div2" href="#">About Us
              <br>
               <span class="link_div2"></span>
             </a>
             <a class="link_div3" href="/contactus">Contact Us
              <br>
                <span class="link_div3"></span>
             </a>
        </div>
        <div class="login_btn_sect">
          <a href="/login">
              <div class="btn_b">
                <div class="btn_b_inner1">
                   <div class="btn_b_inner2">
                      Login
                   </div>
                </div>
              </div>
          </a>
        </div>
    </div>


    <div id="background-container" class="foreground">
       <div class="slide_body">
         <p>Welcome back to Fashion Hub</p>
         <br>
         <div class="cont_btn">
            <a href="/login">
           <span>Click to Continue</span>
            </a>
         </div>
       </div>
        <div class="quote_body">
          <div class="inner1">
            <div class="inner2">
                <div class="slideshow-container">
                    <div class="quote active">
                        "Fashion is the armor to survive the reality of everyday life."
                        <div class="author">- Bill Cunningham</div>
                    </div>
                    <div class="quote">
                        "Don’t be into trends. Don’t make fashion own you, but you decide what you are, what you want to express by the way you dress and the way to live."
                        <div class="author">- Gianni Versace</div>
                    </div>
                    <div class="quote">
                        "The joy of dressing is an art."
                        <div class="author">- John Galliano</div>
                    </div>
                    <div class="quote">
                        "Fashion is about dreaming and making other people dream."
                        <div class="author">- Donatella Versace</div>
                    </div>
                    <div class="quote">
                        "Style is something each of us already has, all we need to do is find it."
                        <div class="author">- Diane von Furstenberg</div>
                    </div>
                    <div class="quote">
                        "Fashion is the instant language."
                        <div class="author">- Miuccia Prada</div>
                    </div>
                    <div class="quote">
                        "I don't design clothes. I design dreams."
                        <div class="author">- Ralph Lauren</div>
                    </div>
                    <div class="quote">
                        "Fashion is like eating, you shouldn’t stick to the same menu."
                        <div class="author">- Kenzo Takada</div>
                    </div>
                    <div class="quote">
                        "Clothes mean nothing until someone lives in them."
                        <div class="author">- Marc Jacobs</div>
                    </div>
                    <div class="quote">
                        "Fashion is the most powerful art there is. It’s movement, design, and architecture all in one. It shows the world who we are and who we’d like to be."
                        <div class="author">- Blair Waldorf</div>
                    </div>
                    <div class="quote">
                        "You can have anything you want in life if you dress for it."
                        <div class="author">- Edith Head</div>
                    </div>
                    <div class="quote">
                        "Fashion is the part of the daily air and it changes all the time, with all the events. You can even see the approaching of a revolution in clothes. You can see and feel everything in clothes."
                        <div class="author">- Diana Vreeland</div>
                    </div>
                    <div class="quote">
                        "In order to be irreplaceable one must always be different."
                        <div class="author">- Coco Chanel</div>
                    </div>
                    <div class="quote">
                        "Fashion should be a form of escapism, and not a form of imprisonment."
                        <div class="author">- Alexander McQueen</div>
                    </div>
                    <div class="quote">
                        "Fashion is what you’re offered four times a year by designers. And style is what you choose."
                        <div class="author">- Lauren Hutton</div>
                    </div>
                </div>
            </div>
          </div>
        </div>
    </div>




    <div class="footer">
        <div class="sect1">
            <span class="playwrite-no-logo_name footer_logo">fash<span class="dot">i</span>on Hub</span>
                <span class="footer_text">
                    <p>Expertly tailored, perfectly measured.</p>
                    <p>We bring your fashion visions to life with precision and style. </p> 
                    <p>Discover the art of bespoke tailoring and custom fits.</p>
                </span>
                <span class="social_sect">
                   <span class="social_head">Follow us on</span>
                   <span class="social_img">
                      <a href=""><img src="{{ asset('all_icons/home_footer/facebook.png') }}" alt=""></a>
                      <a href=""><img src="{{ asset('all_icons/home_footer/whatsapp.png') }}" alt=""></a>
                      <a href=""><img src="{{ asset('all_icons/home_footer/instagram.png') }}" alt=""></a>
                      <a href=""><img src="{{ asset('all_icons/home_footer/tiktok.png') }}" alt=""></a>
                   </span>
                </span>
        </div>
        <div class="sect2">
           <p>@Copyright 2024 | All rights reserved</p>
        </div>
    </div>
    <script>
        let currentSlide = 0;
        const slides = document.querySelectorAll(".quote");
    
        function showSlide(index) {
            slides.forEach((slide, i) => {
                slide.style.opacity = (i === index) ? "1" : "0";
            });
        }
    
        function changeSlide() {
            currentSlide = (currentSlide + 1) % slides.length;
            showSlide(currentSlide);
        }
    
        showSlide(currentSlide);
        setInterval(changeSlide, 10000); // Change slide every 8 seconds
    </script>
    {{-- <script>
        const images = [
    'url("/images/image1.jpg")',
    'url("/images/image2.jpg")',
    'url("/images/image3.jpg")'
];

let currentImageIndex = 0;
const container = document.getElementById('background-container');

function changeBackgroundImage() {
    currentImageIndex = (currentImageIndex + 1) % images.length;
    container.style.opacity = 0; // Start fading out

    setTimeout(() => {
        container.style.backgroundImage = images[currentImageIndex];
        container.style.opacity = 1; // Start fading in
    }, 1000); // Wait for the fade-out transition to complete (1 second)
}

// Set initial background image
container.style.backgroundImage = images[currentImageIndex];

// Change the background image every 5 seconds
setInterval(changeBackgroundImage, 5000);

    </script> --}}
</body>
</html>




{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
