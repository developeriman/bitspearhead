@extends('frontend.layouts.main')
@section('content')
<head>
  <link rel="stylesheet" href="{{ asset('frontend/css/espn.css') }}">
</head>
<header>
    <img src="{{asset('frontend/img/espn-img/header.png')}}" alt="header">
</header>

<div class="s1flex">
    
    <div class="p1"><h5>ESPN cricinfo is the home of cricket on the web. It's the <br>
         world's number one website for cricket news, scores <br> 
        photos and opinion. It attracts both serious and casual <br> 
        cricket fans globally with its comprehensive coverage of <br> 
        all first-class and limited overs cricket. <br> 
        <br>
        The site reaches around 10 million unique users every <br>
        month, and users spend more time on ESPNcricinfo than <br>
        almost any other sports site. 
        </h5>
    <img src="{{asset('frontend/img/espn-img/s1-2.png')}}" alt="Section1 part2 image">
    </div>

    <div class="p2"><img src="{{asset('frontend/img/espn-img/s1-1.png')}}" alt="Section1"></div>

</div>

<!-- Section 2 -->
<div class="section2">
    <h2>
        T20 WORLD CUP COVERAGE ON ESPNCRICINFO

    </h2>
    <h1>
        EXPECTED TO REACH 9MN+ UNIQUES

    </h1>

    <h2>
        ON AND OFF-PLATFORM, THROUGH ORIGINAL & DIVERSE PROGRAMMING

    </h2>
    <img src="{{asset('frontend/img/espn-img/s2.png')}}" alt="Section2">
</div>

<!-- Section 3 -->
<div class="section3">
    <img src="{{asset('frontend/img/espn-img/s3.png')}}" alt="Section 3">
</div>

<!-- Section 4 -->
<div class="section4">
    <h1>ENGAGING INNOVATION</h1>
   <div class="section4-grid">
    <div class="image-1st"><img src="{{asset('frontend/img/espn-img/s4-1.png')}}" alt="Image 1"></div>
    <div class="image-2nd"><img src="{{asset('frontend/img/espn-img/s4-2.png')}}" alt="Image 2"></div>
   </div>
</div>

<!-- Section 5 -->
<div class="section5">
    <h1>MOBILE AD OPPORTUNITY</h1>
    <div class="section-grid">
        
        <img src="{{asset('frontend/img/espn-img/s5-Picture1.png')}}" alt="Picture 1">
        <img src="{{asset('frontend/img/espn-img/s5-Picture2.png')}}" alt="Picture 2">
        <img src="{{asset('frontend/img/espn-img/s5-Picture3.png')}}" alt="Picture 3">
        <img src="{{asset('frontend/img/espn-img/s5-Picture4.png')}}" alt="Picture 4">
    </div>
    
    
</div>

<!-- section 6 -->
<div class="section6">
    <h1>DESKTOP  AD OPPORTUNITY</h1>
   <div class="section6-grid">
    <img src="{{asset('frontend/img/espn-img/s6-image1.png')}}" alt="Image 1">
    <img src="{{asset('frontend/img/espn-img/s6-image2.png')}}" alt="Image 2">
   </div>
</div>

<!-- Section 7 -->
<div class="section7">
    <h1>VIDEO  AD OPPORTUNITY</h1>
    <div class="section7-grid">
        
        <img src="{{asset('frontend/img/espn-img/s7-image1.png')}}" alt="Picture 1">
        <img src="{{asset('frontend/img/espn-img/s7-image2.png')}}" alt="Picture 2">
        <img src="{{asset('frontend/img/espn-img/s7-image3.png')}}" alt="Picture 3">
        <img src="{{asset('frontend/img/espn-img/s7-image4.png')}}" alt="Picture 4">
    </div>
</div>

    <!-- Ad Gallary  -->
    <div class="ad-gallery">
        <h1 style="font-size: 40px;">Success Stories</h1>
        <div class="ad-gallery-container">
          <div class="gallery-card-container">
            <div class="gallery-card">
              <img alt="" src="frontend/img/espncricinfo-images/ss/1.PNG">
              <p>Case Study | City Group</p>
            </div>
          </div>
          <div class="gallery-card-container">
            <div class="gallery-card">
              <img alt="" src="frontend/img/espncricinfo-images/ss/2.PNG">
              <p>Case Study | Fair & Handsome</p>
            </div>
          </div>
          <div class="gallery-card-container">
            <div class="gallery-card">
              <img alt="" src="frontend/img/espncricinfo-images/ss/3.PNG">
              <p>Case Study | Nagad</p>
            </div>
          </div>
          <div class="gallery-card-container">
            <div class="gallery-card">
              <img alt="" src="frontend/img/espncricinfo-images/ss/4.PNG">
              <p>Case Study | Maggi</p>
            </div>
          </div>
          <div class="gallery-card-container">
            <div class="gallery-card">
              <img alt="" src="frontend/img/espncricinfo-images/ss/5.PNG">
              <p>Case Study | Hundai</p>
            </div>
          </div>
          <div class="gallery-card-container">
            <div class="gallery-card">
              <img alt="" src="frontend/img/espncricinfo-images/ss/6.PNG">
              <p>Case Study | Berger</p>
            </div>
          </div>
        </div>
      </div>

    
    

<div class="trusted-brands-container">
    <h1>Trusted By <span>Brands</span></h1>
    <div class="swiper2 mySwiper">
        <div class="swiper-wrapper">
      <div class="swiper-slide"><img src="{{asset('frontend/img/Brand_logos/ESPNCricinfo/arong.png')}}" alt=""></div>
      <div class="swiper-slide"><img src="{{asset('frontend/img/Brand_logos/ESPNCricinfo/barger.png')}}" alt=""></div>
      <div class="swiper-slide"><img src="{{asset('frontend/img/Brand_logos/ESPNCricinfo/bkash.png')}}" alt=""></div>
      <div class="swiper-slide"><img src="{{asset('frontend/img/Brand_logos/ESPNCricinfo/bl.png')}}" alt=""></div>
      <div class="swiper-slide"><img src="{{asset('frontend/img/Brand_logos/ESPNCricinfo/citygroup.png')}}"></div>
      <div class="swiper-slide"><img src="{{asset('frontend/img/Brand_logos/ESPNCricinfo/dabour.png')}}" alt=""></div>
      <div class="swiper-slide"><img src="{{asset('frontend/img/Brand_logos/ESPNCricinfo/dan_cake.png')}}" alt=""></div>
      <div class="swiper-slide"><img src="{{asset('frontend/img/Brand_logos/ESPNCricinfo/emami.png')}}" alt=""></div>
      <div class="swiper-slide"><img src="{{asset('frontend/img/Brand_logos/ESPNCricinfo/foodpanda.png')}}" alt=""></div>
      <div class="swiper-slide"><img src="{{asset('frontend/img/Brand_logos/ESPNCricinfo/goo.png')}}" alt=""></div>
      <div class="swiper-slide"><img src="{{asset('frontend/img/Brand_logos/ESPNCricinfo/grameen.png')}}" alt=""></div>
      <div class="swiper-slide"><img src="{{asset('frontend/img/Brand_logos/ESPNCricinfo/huddai.png')}}" alt=""></div>
      <div class="swiper-slide"><img src="{{asset('frontend/img/Brand_logos/ESPNCricinfo/nagad.png')}}"></div>
      <div class="swiper-slide"><img src="{{asset('frontend/img/Brand_logos/ESPNCricinfo/Naslate.jpg')}}" alt=""></div>
      <div class="swiper-slide"><img src="{{asset('frontend/img/Brand_logos/ESPNCricinfo/samsung.jpg.png')}}" alt=""></div>
      <div class="swiper-slide"><img src="{{asset('frontend/img/Brand_logos/ESPNCricinfo/singer.png')}}" alt=""></div>
      <div class="swiper-slide"><img src="{{asset('frontend/img/Brand_logos/ESPNCricinfo/toyota.png')}}" alt=""></div>
      <div class="swiper-slide"><img src="{{asset('frontend/img/Brand_logos/ESPNCricinfo/walton.png')}}" alt=""></div>
      
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
      autoplay: {
delay: 1500,
},
    });
  </script>
  @endsection