@extends('partial.app')
@section('title', 'Home')


@section('content')
    <div class=" container ">
        <div id="12" class="home-slidr w-100">
            <div class="slider fadee ">
{{--                <div>--}}
{{--                    <div class="image position-relative">--}}
{{--                        <img class="lazy img-fluid w-100" src="{{ asset('assets/App_images/shutterstock_1853535754.png') }}"--}}
{{--                             data-src="" />--}}
{{--                        <div class="row container">--}}
{{--                            <h2 class="my-3 col-lg-5 main-text col-12">Discover a Home you’ll love to live </h2>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
                @foreach($slider as $slide)
                    <div>
                        <div class="image position-relative">
                            <img class="lazy img-fluid w-100" src="{{ asset('uploads/'.$slide->image->image_path) }}"
                                 data-src="" />
                            <div class="row container">
                                <h2 class="my-3 col-lg-5 main-text col-12">{{$slide->first_text}}<br>{{$slide->second_text}}</h2>
                            </div>
                        </div>
                    </div>
                @endforeach

{{--                <div>--}}
{{--                    <div class="image position-relative">--}}
{{--                        <iframe width="100%" height="390"--}}
{{--                                src="https://www.youtube.com/embed/tgbNymZ7vqY?autoplay=1&mute=1">--}}
{{--                        </iframe>--}}
{{--                    </div>--}}
{{--                </div>--}}

            </div>
        </div>
        <form action="{{ route('search') }}" method="get">
        <div class="row filter-section justify-content-between px-md-33 px-2">

            <p
                class="col-md-4 img-33-sm img-49 col-6 img-220-md px-md-0 px-2 mb-3 d-md-flex d-none filter-icon align-items-center justify-content-center check-sel-filter">
                filtter
            </p>

            <div class="col-md-4 img-33-sm img-49 col-6 img-220-md px-md-0 px-2 mb-3 check-sel-filter">
                <span class="filter-spanTitel px-md-3">Locations</span>

                <select class="form-select border-0 bg-transparent px-3" name="location" aria-label="Default select example">
                    <option value="all">All</option>
                    @foreach($locations as $location)
                        <option value="{{$location->slug_en}}">{{ $location->title_en }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-4 img-33-sm img-49 col-6 img-220-md px-md-0 px-2 mb-3 check-sel-filter">
                <span class="filter-spanTitel px-md-3">Compound</span>

                <select class="form-select border-0 bg-transparent px-3" name="compound" aria-label="Default select example">
                    <option value="all">All</option>
                    @foreach($compounds as $compound)
                        <option value="{{$compound->slug_en}}">{{$compound->title_en}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-4 img-33-sm img-49 col-6 img-220-md px-md-0 px-2 mb-3 check-sel-filter">
                <span class="filter-spanTitel px-md-3">Property Type</span>

                <select class="form-select border-0 bg-transparent px-3" name="type" aria-label="Default select example">
                    <option value="all">All</option>
                    @foreach($types as $type)
                        <option value="{{$type->slug_en}}">{{$type->title_en}}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit"
                    class="btn btn-success Searchcol-md-4 img-33-sm img-49 col-6 img-220-md px-md-0 px-2 mb-3 d-flex search-icon align-items-center justify-content-center check-sel-filter">Search</button>

        </div>
        </form>
        <div class="our-home my-30">
            <h2 class="sec-titleHome text-md-center my-4">Explore Our Home Collection</h2>
            <marquee> </marquee>
            <section class="regular mt-1 px-4 row slider">
                @foreach($compounds as $compound)
                    <div class=" py-3 mx-1 px-2 bg-white">
                        <a href="#"> <img class=" img-fluid w-100" src="{{ asset('uploads/'. $compound->image->image_path) }}"></a>
                    </div>
                @endforeach
            </section>
            <div class="row sections mt-md-74 mt-4 justify-content-between gx-0">
                <div class="col-md-6 col-12 my-4 img-49-sm Guests-section position-relative">
                    <div class="Guests-Lay">
                        <img class="lazy img-fluid w-100" src="{{ asset('assets/App_Images/Guests.png') }}"
                             data-src="" alt="Guests Services" alt="Guests Services">
                        <a href="./Servis.html#1" class="Guests-go d-block">Guests Services </a>
                        <div class="Guests-title p-3">
                            <h3 class="title">FIND YOUR NEW HOME</h3>
                            <p class="pref">Choosing a rental home over a luxury hotel</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 co-12 my-4 img-49-sm owners-section position-relative row gx-0">
                    <a href="./Servis.html#2" class="owners-go d-block">Guests Services </a>

                    <div class="owners-services-title col-12 px-3 pt-3 row gx-0 d-flex align-self-end">

                        <h3 class="title col-12">MANAGE MY HOME !</h3>
                        <p class="pref col-12">Great returns & complete peace of mind</p>
                    </div>
                    <div class="col-12 d-flex">
                        <img class="lazy img-fluid w-100" src="{{ asset('assets/App_Images/OwnersServices.png') }}"
                             data-src="" alt="Guests Services" alt="Guests Services">

                    </div>
                </div>
                <div class="col-12 text-center mt-md-74 mt-4 home-mission">
                    <div class="py-md-5 py-4 col-md-8 col-10 mx-auto">
                        <h2 class="title">HELLOHOME IS ON A MISSION</h2>
                        <p class="pref my-4">To change the way you rent forever & to make it easier, faster and more
                            human.
                        </p>
                        <button type="button" class="btn btn-outline-light px-4 ">Learn more</button>
                    </div>
                    <img class="lazy img-fluid w-100" src="{{ asset('assets/App_Images/hel-mission.png') }}"
                         data-src="" alt="" title="">

                    <!-- <img class="img-fluid w-100" src="App_Images/hel-mission.png" alt="HELLOHOME IS ON A MISSION"
                        title="HELLOHOME IS ON A MISSION"> -->
                </div>
            </div>

        </div>



        <script type='text/javascript'
                src='https://platform-api.sharethis.com/js/sharethis.js#property=63030dc8de1069001998acc6&product=sop'
                async='async'></script>
    </div>
@endsection
