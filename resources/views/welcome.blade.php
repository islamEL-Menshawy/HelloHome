@extends('partial.app')
@section('title', 'Home')


@section('content')
    <div class="container">
        <div id="12" class="home-slidr w-100">
            <div class="home-header">
                <div class="swiper swiper-home-header">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->

                        <div class="swiper-slide">
                            <div class="home-header-slide">
                                <img src="{{ asset('assets/App_Images/shutterstock_1853535754.png') }}" alt="Home" />
                                <div class="home-heading text-uppercase text-center">
                                    Discover A Home You'll
                                    <br /> Love To live
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="home-header-slide">
                                <img src="{{ asset('assets/App_Images/shutterstock_1853535754.png') }}" alt="Home" />
                                <div class="home-heading text-uppercase text-center">
                                    Discover A Home You'll
                                    <br /> Love To live
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- Filters -->
        <div class="filters-container">
            <div class="">
                <div class="filters-flexable d-flex">
                    <div class="filters-title d-flex align-items-center justify-content-center">
                        <img src="{{ asset('assets/App_Images/filter-icon.png') }}" alt="Filters Icon" />
                        <span class="">Filters</span>
                    </div>
                    <div class="filters-selectbox-container">
                        <div class="filter-card">
                            <span class="filter-spanTitel px-md-3">Locations</span>
                            <select class="single-selectbox" name="select" placeholder="New Cairo">
                                <option value="1">New Cairo</option>
                                <option value="2">El Sheikh Zayed</option>
                                <option value="3">New Capital</option>
                                <option value="4">Nasr City</option>
                            </select>
                        </div>

                        <div class="filter-card">
                            <span class="filter-spanTitel px-md-3">Compound</span>
                            <select class="single-selectbox" name="select" placeholder="Mivida">
                                <option value="1">Mivida</option>
                                <option value="2">LakeView</option>
                                <option value="3">Marassi</option>
                                <option value="4">Cairo Festival City</option>
                            </select>
                        </div>

                        <div class="filter-card">
                            <span class="filter-spanTitel px-md-3">Property Type</span>
                            <select class="single-selectbox" name="select" placeholder="Apartment" >
                                <option value="1">Apartment</option>
                                <option value="2">Villa</option>
                                <option value="3">Studio</option>
                                <option value="4">Twin House</option>
                            </select>
                        </div>

                        <div class="filter-card filter-search-btn d-flex justify-content-center align-items-center">
                            <a class=" d-flex justify-content-center align-items-center" href="search.html"><img src="{{ asset('assets/App_Images/SearchIcon.png') }}" alt="Search" /> Search</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Filters -->

        <div class="our-home my-30">
            <h2 class="sec-titleHome text-md-center my-4">Explore Our Home Collection</h2>

            <!-- Slider main container -->
            <div class="home-slider-brands">
                <div class="swiper swiper-home-brands">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide"><img class=" img-fluid w-100" src="{{ asset('assets/App_Images/aria1.png') }}"></div>
                        <div class="swiper-slide"><img class=" img-fluid w-100" src="{{ asset('assets/App_Images/aria2.png') }}"></div>
                    </div>
                </div>
                <div class="home-brands-arrows">
                    <!-- If we need navigation buttons -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>

            <div class="row sections mt-md-74 mt-4 justify-content-between gx-0">
                <div class="col-md-6 col-12 my-4 img-49-sm Guests-section position-relative">
                    <div class="Guests-Lay">
                        <img class="img-fluid w-100" src="{{asset('assets/App_Images/Guests.png')}}"
                              alt="Guests Services" alt="Guests Services">
                        <a href="./services.html#1" class="Guests-go d-block"><span>Guests Services</span> </a>
                        <div class="Guests-title p-3">
                            <h3 class="title">FIND YOUR NEW HOME</h3>
                            <p class="pref">Choosing a rental home over a luxury hotel</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 co-12 my-4 img-49-sm owners-section position-relative row gx-0">
                    <a href="./services.html#2" class="owners-go d-block">Homes Owners Services </a>

                    <div class="owners-services-title col-12 px-3 pt-3 row gx-0 d-flex align-self-end">

                        <h3 class="title col-12">MANAGE MY HOME !</h3>
                        <p class="pref col-12">Great returns & complete peace of mind</p>
                    </div>
                    <div class="col-12 d-flex">
                        <img class="lazy img-fluid w-100" src="{{ asset('assets/App_Images/OwnersServices.png') }}"
                             alt="Guests Services" alt="Guests Services">

                    </div>
                </div>
                <div class="col-12 text-center mt-md-74 mt-4 home-mission">
                    <div class="py-md-5 py-4 col-md-8 col-10 mx-auto">
                        <h2 class="title">HELLOHOME IS ON A MISSION</h2>
                        <p class="pref my-4">To change the way you rent forever & to make it easier,<br /> faster and more
                            human.
                        </p>
                        <button type="button" class="btn hlm-btn btn-outline-light px-4 ">Learn more</button>
                    </div>
                    <img class="img-fluid w-100" src="{{asset('assets/App_Images/hel-mission.png')}}"
                         alt="" title="">

{{--                    <!-- <img class="img-fluid w-100" src="App_Images/hel-mission.png" alt="HELLOHOME IS ON A MISSION"--}}
{{--                        title="HELLOHOME IS ON A MISSION"> -->--}}
                </div>
            </div>

        </div>


        <script type='text/javascript'
                src='https://platform-api.sharethis.com/js/sharethis.js#property=63030dc8de1069001998acc6&product=sop'
                async='async'></script>
    </div>

@endsection
