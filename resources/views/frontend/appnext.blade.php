@extends('frontend.layouts.main')
@section('content')
<head>
  <link rel="stylesheet" href="{{ asset('frontend/css/style-appnext.css') }}">
</head>

<nav class="appnext-nav">
    <img src="{{asset('frontend/img/appnext-images/navbar.png')}}" alt="nav">
</nav>
<div class="section-1">
    <video class="videoplayer" autoplay="" webkit-playsinline="" playsinline="" muted="" loop=""
        src="{{asset('frontend/img/appnext-images/Appnext.webm')}}"></video>
    <h1>Recommend Your App<br>On Samsung, Xiaomi, Oppo<br>And 60,000 Apps</h1>
    <p>Appnext is the leading global app discovery platform powering over <span style="font-weight: bold;">6.5B
            daily
            app recommendations worldwide</span><br>
        An average user interacts with Appnext device-level app recommendations <span style="font-weight: bold;">20+
            times a day throughout his daily mobile journey.</span>
    </p>
</div>
<h1 class="s2-h1">Bangladesh – key facts</h1>
<div class="section-2">
    <div class="s2-d1">
        <img src="{{asset('frontend/img/appnext-images/bd-map.png')}}" alt="bdmap">
    </div>
    <div class="s2-d2">
        <div class="s2-d2-circle-1">1</div>
        <h2 style="margin-bottom: 40px;">Population:</h2>
        <div class="mini-rect"></div>
        <h1>Approx. 165M</h1>
    </div>
    <div class="s2-d3">
        <div class="s2-d2-circle-2">2</div>
        <h2 style="margin-bottom: 40px;">No of smartphones:</h2>
        <div class="mini-rect"></div>
        <h1>Approx. 172M</h1>
    </div>
    <div class="s2-d4">
        <div class="s2-d2-circle-3">3</div>
        <h2 style="margin-bottom: 40px;">Key OS:</h2>
        <div class="mini-rect"></div>
        <h1>>95% Android</h1>
    </div>
    
</div>
<h1 class="appnextreact-h1">Appnext reach: >10M DAU</h1>
<h1 class="s2-h1">Mobile Apps Advertising - Key Challenge</h1>
<div class="section-3">
    <div class="s3-left-img-container">
        <img src="{{asset('frontend/img/appnext-images/section-3.png')}}" alt="img">
    </div>
    <div class="s3-right-container">
        <ul>
            <li>Users are overwhelmed with the number of repetitive display ads received daily</li><br>
            <li>Display ads help in building scale for app marketers, however the quality of the users remains poor
                (lack of targeting and measurement criterias)</li>
        </ul>
    </div>
</div>

<h1 class="s2-h1">On-device App Discovery Helps Acquiring High Quality, Engaged Users</h1>
<div class="section-4">
    <div class="s4-left-img-container">
        <img src="{{asset('frontend/img/appnext-images/section-4.png')}}" alt="img">
    </div>
    <div class="s4-right-container">
        <p>Device-level advertising is increasingly the most attractive UA option for
            marketers:</p><br>
        <ul>
            <li>Recommendations appear directly on the device</li>
            <li>Hyper-personalized app experience</li>
            <li>In context and at the language of choice</li>
            <li>Real-time experience:
                <ul>
                    <li>Recommendations delivered at the relevant moment</li>
                </ul>
            </li>
            <li>Partnerships with leading device manufacturers</li>
        </ul>
    </div>
</div>
<div class="section-5-header">
    <h1 class="s5-h1">Uniquely Positioned to Drive Growth</h1>
    <div class="s5-header-logo-container"><img src="{{asset('frontend/img/appnext-images/appnext-full-logo.png')}}"></div>
</div>
<div class="section-5">
    <div class="s5-left-content">
        <div class="s5-content-div">
            <img src="{{asset('frontend/img/appnext-images/s5-left-1.png')}}">
            <p>Unparalleled end-to-end app discovery solutions spanning the entire users’ journey</p>
        </div>
        <div class="s5-content-div">
            <img src="{{asset('frontend/img/appnext-images/s5-left-2.png')}}">
            <p>Increase revenue and users engagement through personalized discovery experiences</p>
        </div>
    </div>
    <div class="s5-middle-circle">
        <h2>Powering holistic app discovery solutions along the users’ daily journey and through the device lifetime
        </h2>
    </div>
    <div class="s5-right-content">
        <div class="s5-content-div">
            <img src="{{asset('frontend/img/appnext-images/s5-right-1.png')}}">
            <p>Industry Knowhow and Robust Track-Record. Working with top OEMs, operators &60K+ Apps</p>
        </div>
        <div class="s5-content-div">
            <img src="{{asset('frontend/img/appnext-images/s5-right-2.png')}}">
            <p>Patent technology that displays contextual & personal app recommendations according to the user’s
                daily mobile journey</p>
        </div>
    </div>
    <div class="s5-content-last">
        <h3>Richest set of end-to-end
            App Discovery Products
        </h3>
    </div>
</div>
<div class="section-6">
    <div class="s6-div1">
        <p>First Experience</p>
        <img src="{{asset('frontend/img/appnext-images/s6-1a.gif')}}">
        <img src="{{asset('frontend/img/appnext-images/s6-1b.gif')}}">
        <span>SETUP<br>PROCESS</span>
        <span>DYNAMIC<br>PRELOAD</span>
    </div>
    <div class="s6-div2">
        <p>Ongoing Experiences</p>
    </div>
    <div class="s6-div3">
        <div>7:00</div>
        <img src="{{asset('frontend/img/appnext-images/s6-2.gif')}}">
        <span>WIDGET</span>
    </div>
    <div class="s6-div4">
        <div>8:30</div>
        <img src="{{asset('frontend/img/appnext-images/s6-3.gif')}}">
        <span>KEYBOARD</span>
    </div>
    <div class="s6-div5">
        <div>12:30</div>
        <img src="{{asset('frontend/img/appnext-images/s6-4.gif')}}">
        <span>MINUS 1 SCREEN</span>
    </div>
</div>
<div class="section-7">
    <div class="s7-1">
        <!-- <img class="line-arw-green" src="appnext-images/line-arrow-green.png"> -->
        <div>18:00</div>
        <img src="{{asset('frontend/img/appnext-images/s7-1.gif')}}">
        <p>FOLDER</p>
    </div>
    <div class="s7-2">
        <div>19:30</div>
        <img src="{{asset('frontend/img/appnext-images/s7-2.gif')}}">
        <p>IN-APP DISCOVERY</p>
    </div>
    <div class="s7-3">
        <div>21:00</div>
        <img src="{{asset('frontend/img/appnext-images/s7-3.gif/')}}">
        <p>OEM STORES</p>
    </div>
    <div class="s7-4">
        <div>22:30</div>
        <img src="{{asset('frontend/img/appnext-images/s7-4.gif')}}">
        <p>REWARDED<br>DISCOVERY</p>
    </div>
</div>
<div class="section-8">
    <h1>Powering The Entire Mobile Journey</h1>
    <div class="s8-img-container">
        <img src="{{asset('frontend/img/appnext-images/s8-img.png')}}">
        <img src="{{asset('frontend/img/appnext-images/arrow-circle-animated.gif')}}">
    </div>
</div>
{{-- <div class="ad-gallery">
    <h1 style="font-size: 40px;">Success Stories</h1>
    <div class="ad-gallery-container">
        <div class="gallery-card-container">
            <div class="gallery-card">
                <img alt="" src="images/endcard-1.jpg">
                <p>Brothers Movie | Calendar Event</p>
            </div>
        </div>
        <div class="gallery-card-container">
            <div class="gallery-card">
                <img alt="" src="images/endcard-2.jpg">
                <p>Nikon | Gallery</p>
            </div>
        </div>
        <div class="gallery-card-container">
            <div class="gallery-card">
                <img alt="" src="images/endcard-3.jpg">
                <p>ICICI Prudential | Click-to-call</p>
            </div>
        </div>
        <div class="gallery-card-container">
            <div class="gallery-card">
                <img alt="" src="images/endcard-4.jpg">
                <p>CEAT | Store Locator</p>
            </div>
        </div>
        <div class="gallery-card-container">
            <div class="gallery-card">
                <img alt="" src="images/endcard-5.jpg">
                <p>Last Witch Hunter | Youtube</p>
            </div>
        </div>
        <div class="gallery-card-container">
            <div class="gallery-card">
                <img alt="" src="images/endcard-6.jpg">
                <p>Kurkure | Social Media</p>
            </div>
        </div>
        <div class="gallery-card-container">
            <div class="gallery-card">
                <img alt="" src="images/endcard-7.jpg">
                <p>Lava Pixel V2 | Buy Now</p>
            </div>
        </div>
        <div class="gallery-card-container">
            <div class="gallery-card">
                <img alt="" src="images/endcard-8.jpg">
                <p>Hungama | Click-to-install</p>
            </div>
        </div>
        <div class="gallery-card-container">
            <div class="gallery-card">
                <img alt="" src="images/endcard-9.jpg">
                <p>Horlicks | Survey</p>
            </div>
        </div>
    </div>
</div> --}}
<div class="trusted-brands-container">
    <h1>Trusted By <span>Brands</span></h1>
    <div class="swiper2 mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">Slide 1</div>
            <div class="swiper-slide">Slide 2</div>
            <div class="swiper-slide">Slide 3</div>
            <div class="swiper-slide">Slide 4</div>
            <div class="swiper-slide">Slide 5</div>
            <div class="swiper-slide">Slide 6</div>
            <div class="swiper-slide">Slide 7</div>
            <div class="swiper-slide">Slide 8</div>
            <div class="swiper-slide">Slide 9</div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script>
    var swiper2 = new Swiper(".mySwiper", {
      slidesPerView: 6,
      loop: true,
      spaceBetween: 30,
      centeredSlides: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
    });
  </script>
  @endsection