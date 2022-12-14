@extends('frontend.layouts.main')
@section('content')
<head>
  <link rel="stylesheet" href="{{ asset('frontend/css/style-gupshup.css') }}">
</head>
<nav class="gup-nav">
    <img src="{{asset('frontend/img/gupshup-images/logo-gupshup.svg')}}" alt="logo">
</nav>
<div class="container">
    <section class="section-1 mt-5 mb-5">
        <div class="row mb-5 justify-content-md-center">
            <div class="col-md-5 ms-2 d-flex flex-column justify-content-center">
                <h1>One-on-one.<br>
                    With Everyone.</h1>
                <h4 class="text-secondary">World’s Leading Conversational Messaging Platform for commerce, marketing
                    and support</h4>
            </div>
            <div class="col-md-6 d-flex align-items-center justify-content-center">
                <img class="s1-img" src="{{asset('frontend/img/gupshup-images/s1-right.webp')}}">
            </div>
        </div>
        <div class="row mt-5 m-top text-center">
            <div class="col-12 col-md-4">
                <h1>9 Billion+</h1><br>
                <h5>messages per month</h5>
            </div>
            <div class="col-12 col-md-4">
                <h1>45,000+</h1><br>
                <h5>brands across 20+ countries</h5>
            </div>
            <div class="col-12 col-md-4">
                <h1>300 Billion+</h1><br>
                <h5>messages delivered to date</h5>
            </div>
        </div>
    </section>
    <section class="section-2">
        <h1 class="text-center m-top">Build Engaging Conversational Experiences</h1>
        <h5 class="text-center text-secondary mb-5">Conversation Builders for commerce, marketing, support</h5>
        <div class="row">
            <div class="col-12 col-md-6">
                <img class="s2-img" src="{{asset('frontend/img/gupshup-images/s2-left.webp')}}">
            </div>
            <div class="col col-md-6 d-flex flex-column justify-content-center">
                <h4>AI-powered Bot Platform</h4>
                <p class="mt-2">Build intelligent, interactive chatbots, deploy on any messaging channel</p>
                <h4 class="mt-5">Vertical Conversational Experiences</h4>
                <p class="mt-2">Build conversational workflows for BFSI, Fintech, D2C, Retail, EdTech and more</p>
                <h4 class="mt-5">Horizontal Conversational Experiences</h4>
                <p class="mt-2">Make your Marketing, Commerce and Support workflows conversational</p>
            </div>
        </div>
    </section class="section-3">
    <h1 class="text-center m-top">Gupshup Conversational Messaging Platform</h1>
    <h5 class="text-center text-secondary mb-5">Interact and transact with your consumers through conversations on
        messaging channels</h5>
    <div class="row gx-5">
        <div class="col-md-4 d-flex flex-column justify-content-center">
            <img src="{{asset('frontend/img/gupshup-images/s3-1.webp')}}">
            <h2 class="mb-3">Messaging API</h2>
            <p class="text-secondary">Interact and transact with your customers seamlessly across 30+ messaging
                channels with a Single API</p>
        </div>
        <div class="col-md-4 d-flex flex-column justify-content-center">
            <img src="{{asset('frontend/img/gupshup-images/s3-2.webp')}}">
            <h2 class="mb-3">Conversational AI</h2>
            <p class="text-secondary">Enable personalized experiences and converse with your customers on their
                preferred messaging platforms</p>
        </div>
        <div class="col-md-4 d-flex flex-column justify-content-center">
            <img src="{{asset('frontend/img/gupshup-images/s3-3.webp')}}">
            <h2 class="mb-3">Messaging API</h2>
            <p class="text-secondary">Provide a unified customer experience with 500+ out-of-the-box integrations
                with your solutions and channels</p>
        </div>
    </div>
    <section>
        <ul class="nav nav-pills mt-5 justify-content-center" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-bfsi-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-bfsi" type="button" role="tab" aria-controls="pills-bfsi"
                    aria-selected="true">BFSI</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-fintech-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-fintech" type="button" role="tab" aria-controls="pills-fintech"
                    aria-selected="false">Fintech</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-d2c-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-d2c" type="button" role="tab" aria-controls="pills-d2c"
                    aria-selected="false">D2C</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-restaurants-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-restaurants" type="button" role="tab" aria-controls="pills-restaurants"
                    aria-selected="false">Restaurants</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-marketing-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-marketing" type="button" role="tab" aria-controls="pills-marketing"
                    aria-selected="false">Marketing</button>
            </li>
        </ul>
        <hr>

        <!-- --------------------content----------------------------- -->

        <div class="tab-content mt-5" id="pills-tabContent">
            <div class="tab-pane fade show active " id="pills-bfsi" role="tabpanel"
                aria-labelledby="pills-bfsi-tab">
                <div class="row justify-content-md-center">
                    <div class="col-md-5">
                        <img class="img-full" src="{{asset('frontend/img/gupshup-images/s4-bfsi.webp')}}">
                        <p class="mt-5">Conversational Messaging solutions for Banking, Financial Services, and
                            Insurance (BFSI) provide omni-channel messaging, AI chatbots and integrations</p>
                    </div>
                    <div class="col-md-5">
                        <div class="gray-bg-pad">
                            <p class="font-weight-bold">Convert transactional messages into up-sell conversations
                            </p>
                            <hr>
                            <p class="font-weight-bold">Chatbots for portfolio management</p>
                            <hr>
                            <p class="font-weight-bold">Frictionless lead-gen for loans, accounts</p>
                            <hr>
                            <p class="font-weight-bold">Personalised Nudges for payments and renewals</p>
                            <hr>
                            <p class="font-weight-bold">Easily run NPS, Surveys, Capture feedback</p>
                            <hr>
                            <p class="font-weight-bold">Automate Call centre with live agent handover</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-fintech" role="tabpanel" aria-labelledby="pills-fintech-tab">
                <div class="row justify-content-md-center">
                    <div class="col-md-5">
                        <img class="img-full" src="{{asset('frontend/img/gupshup-images/fintech-home-bg.jpg')}}">
                        <p class="mt-5">Leverage Advanced Messaging APIs and Conversational AI to make financial journeys smoother across lending, EMI collections, KYC and more</p>
                    </div>
                    <div class="col-md-5">
                        <div class="gray-bg-pad">
                            <p class="font-weight-bold">Collect timely payments from customers and avoid NPAs
                            </p>
                            <hr>
                            <p class="font-weight-bold">Bot to collect customers’ KYC details during the onboarding process</p>
                            <hr>
                            <p class="font-weight-bold">Collect timely payments from customers and avoid NPAs loan to insurance</p>
                            <hr>
                            <p class="font-weight-bold">Automate call centres along with live agent handover</p>
                            <hr>
                            <p class="font-weight-bold">Easily run NPS, surveys, capture feedback</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-d2c" role="tabpanel" aria-labelledby="pills-d2c-tab">
                <div class="row justify-content-md-center">
                    <div class="col-md-5">
                        <img class="img-full" src="{{asset('frontend/img/gupshup-images/d2c-home-bg.webp')}}">
                        <p class="mt-5">Make product discovery, payments, delivery, and support conversational across your D2C & E-commerce website experience</p>
                    </div>
                    <div class="col-md-5">
                        <div class="gray-bg-pad">
                            <p class="font-weight-bold">Understand customers and suggest relevant products with virtual assistants
                            </p>
                            <hr>
                            <p class="font-weight-bold">Customise deals based on data, behaviour, and demographics</p>
                            <hr>
                            <p class="font-weight-bold">Understand customers and suggest relevant products with virtual assistants</p>
                            <hr>
                            <p class="font-weight-bold">Reduce load on live agents with support bots and timely handovers</p>
                            <hr>
                            <p class="font-weight-bold">Run surveys, capture NPS, record customer feedback via bots</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-restaurants" role="tabpanel" aria-labelledby="pills-restaurants-tab">
                <div class="row justify-content-md-center">
                    <div class="col-md-5">
                        <img class="img-full" src="{{asset('frontend/img/gupshup-images/restaurant-home-bg.webp')}}">
                        <p class="mt-5">Take your restaurant online. Digitise the customer experience to order, pay and receive home delivery directly. Market to your customers through messaging-based marketing tools</p>
                    </div>
                    <div class="col-md-5">
                        <div class="gray-bg-pad">
                            <p class="font-weight-bold">Take your restaurant online instantly
                            </p>
                            <hr>
                            <p class="font-weight-bold">Digitize menu, orders, payments and deliveries</p>
                            <hr>
                            <p class="font-weight-bold">Send offers, deals, loyalty program with our marketing messaging tools</p>
                            <hr>
                            <p class="font-weight-bold">Manage your restaurant efficiently</p>
                            <hr>
                            <p class="font-weight-bold">Take complete business control over mobile and web</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-marketing" role="tabpanel" aria-labelledby="pills-marketing-tab">
                <div class="row justify-content-md-center">
                    <div class="col-md-5">
                        <img class="img-full" src="{{asset('frontend/img/gupshup-images/marketing-home-bg.webp')}}">
                        <p class="mt-5">Move your customers through the marketing funnel through a series of personalised conversational experiences, across physical and digital surfaces</p>
                    </div>
                    <div class="col-md-5">
                        <div class="gray-bg-pad">
                            <p class="font-weight-bold">Start a conversation with your customers from any physical surface via QR-code or URL
                            </p>
                            <hr>
                            <p class="font-weight-bold">AI-powered Marketing Chatbots for lead generation, nurturing and conversion</p>
                            <hr>
                            <p class="font-weight-bold">Start a conversation with your customers from any physical surface via QR-code or URL</p>
                            <hr>
                            <p class="font-weight-bold">A2P messaging-based marketing tools for larger databases</p>
                            <hr>
                            <p class="font-weight-bold">Conversational Advertising with QR-codes that convert physical surfaces into conversations</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="text-center mt-5">
        <img style="width: 85%;" src="{{asset('frontend/img/gupshup-images/last.png')}}" alt="content">
    </div>
    </section>
    <section class="trusted-brands mt-5 text-center">
        <h2 class=" mb-5">Trusted by leading brands</h2>
        <div class="row">
            <div class="col"><img src="{{asset('frontend/img/gupshup-images/facebook_2.webp')}}" alt=""></div>
            <div class="col"><img src="{{asset('frontend/img/gupshup-images/google_2.webp')}}" alt=""></div>
            <div class="col"><img src="{{asset('frontend/img/gupshup-images/twitter_3.webp')}}" alt=""></div>
            <div class="col"><img src="{{asset('frontend/img/gupshup-images/wallmart_2.webp')}}" alt=""></div>
            <div class="col"><img src="{{asset('frontend/img/gupshup-images/unilever_2.webp')}}" alt=""></div>
        </div>
        <div class="row">
            <div class="col"><img src="{{asset('frontend/img/gupshup-images/citibank_2.webp')}}" alt=""></div>
            <div class="col"><img src="{{asset('frontend/img/gupshup-images/hsbc_2.webp')}}" alt=""></div>
            <div class="col"><img src="{{asset('frontend/img/gupshup-images/oyo_2.webp')}}" alt=""></div>
            <div class="col"><img src="{{asset('frontend/img/gupshup-images/ola_2.webp')}}" alt=""></div>
            <div class="col"><img src="{{asset('frontend/img/gupshup-images/khan-academy_2.webp')}}" alt=""></div>
        </div>
    </section>
</div>
@endsection