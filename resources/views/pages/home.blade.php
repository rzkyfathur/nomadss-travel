@extends('layouts.app')

@section('title')
    Nomads
@endsection

@section('content')
    <!--header-->
    <header class="text-center">
        <h1>Explore the Beautiful World
            <br>
            As Easy One Click
        </h1>

        <p class="mt-3">
            You will see beautifull
            <br>
            moment you never see before

        </p>
        <a href="#popular" class="btn btn-get-started px-4 mt-2">
            Get started
        </a>
    </header>

    <!--isi utama-->
    <main>
        <div class="container">
            <section class="section-stats row justify-content-center" id="stats">
                <div class="col-3 col-md-2 stats-detail">
                    <h2>20K</h2>
                    <p>Members</p>
                </div>

                <div class="col-3 col-md-2 stats-detail">
                    <h2>12</h2>
                    <p>Countries</p>
                </div>

                <div class="col-3 col-md-2 stats-detail">
                    <h2>3K</h2>
                    <p>Hotels</p>
                </div>

                <div class="col-3 col-md-2 stats-detail">
                    <h2>72</h2>
                    <p>Partners</p>
                </div>
            </section>
        </div>

        <section class="section-popular" id="popular">
            <div class="container">
                <div class="row">
                    <div class="col text-center section-popular-heading">
                        <h2>Wisata Popular</h2>
                        <p>Something that you never try<br>before in this world</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-popular-content" id="popularcontent">
            <div class="container">
                <div class="section-popular-travel row justify-content-center">
                    @foreach ($items as $item)
                        <div class="col-sm-6 col-md-4 col-lg-3">
                            <div class="card-travel text-center d-flex flex-column"
                            style="background-image: url('{{ $item->galleries->count() ? Storage::url( $item->galleries->first()->image) : '' }}');">
                            <div class="travel-country">{{ $item->location}}</div>
                            <div class="travel-location">{{ $item->title}}</div>
                                <div class="travel-button mt-auto">
                                    <a href="{{ route('detail', $item->slug) }}" class="btn btn-travel-details px-4">
                                        View Details
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!--networks-->
        <section class="section-networks" id="networks">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h2>Our Networks</h2>
                        <p>You will see beautifull<br>
                            moment you never see before
                        </p>
                    </div>
                    <div class="col-md-8 text-center">
                        <img src="frontend/images/logo_partners.png" alt="logo Partners" class="limg-partners">
                    </div>
                </div>
            </div>
        </section>

        <!--testimonial-->
        <section class="section-testimonial-heading" id="testimonialheading">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <h2>They Are Loving Us</h2>
                        <p>
                            You Will See Beautiful
                            <br>
                            Moment You Never See Before
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section section-testimonial-content" id="testimonialcontent">
            <div class="container">
                <div class="section-popular-travel row justify-content-center">
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img src="frontend/images/Mask Group 3.png" alt="user" class="mb-4 rounded-circle">
                                <h3 class="mb-4">Fathur Rizky</h3>
                                <p class="testimonial">
                                    "It was glourius and I could<br> not stop to
                                    say wohooo for<br>
                                    every single moment<br> Danke"
                                </p>
                            </div>
                            <hr>
                            <p class="trip-to mt-2">
                                Trip To Ubud
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img src="frontend/images/Mask Group 4.png" alt="user" class="mb-4 rounded-circle">
                                <h3 class="mb-4">George Hayes</h3>
                                <p class="testimonial">
                                    "It was glourius and I could<br> not stop to
                                    say wohooo for<br>
                                    every single moment<br> Danke"
                                </p>
                            </div>
                            <hr>
                            <p class="trip-to mt-2">
                                Trip To Bromo
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img src="frontend/images/Mask Group 5.png" alt="user" class="mb-4 rounded-circle">
                                <h3 class="mb-4">Mariana James</h3>
                                <p class="testimonial">
                                    "I loved it when the waves<br> was sahking harder - I was<br>
                                    scared too"
                                </p>
                            </div>
                            <hr>
                            <p class="trip-to mt-2">
                                Trip To Nusa Penida
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <a href="#" class="btn btn-need-help px-4 mt-4 mx-1">
                            I Need Help
                        </a>
                    <a href="{{ route('register')}}" class="btn btn-get-started px-4 mt-4 mx-1">
                            Get Started
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
