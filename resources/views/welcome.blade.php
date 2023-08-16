@extends('partial.app')
@section('title', $page_attributes->page_title)
@section('seo-tags')

@endsection
@section('content')
    <div class="container">
        <div id="12" class="home-slidr w-100">
            <div class="home-header">
                <div class="swiper swiper-home-header">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        @foreach($slider as $slide)
                            @if($slide->is_image)
                                <div class="swiper-slide">
                                    <div class="home-header-slide">
                                        <img src="{{ asset('uploads' .$slide->image->image_path) }}" alt="{{ $slide->image['alter_' . app()->getLocale()] }}" />
                                        <div class="home-heading text-uppercase text-center">
                                            {{ $slide->first_text }} <br /> {{ $slide->second_text }}
                                        </div>
                                    </div>
                                </div>
                            @else
                                <div class="swiper-slide"> <!-- Swiper Slide Video -->
                                    <div class="home-header-slide">
                                        <video autoplay="" loop="" muted="">
                                            <source src="{{ asset('uploads' .$slide->image->image_path) }}" type="video/mp4">
                                            Your browser does not support the video tag.
                                        </video>
                                        <div class="home-heading text-uppercase text-center">
                                            {{ $slide->first_text }} <br /> {{ $slide->second_text }}
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <!-- Filters -->
        <div class="filters-container">
            <form action="{{ route('search') }}" method="get">
                <div class="">
                <div class="filters-flexable d-flex">
                    <div class="filters-title d-flex align-items-center justify-content-center">
                        <img src="{{ asset('assets/App_Images/filter-icon.png') }}" alt="Filters Icon" />
                        <span class="">{{ __('msg.filters') }}</span>
                    </div>
                    <div class="filters-selectbox-container">
                        <div class="filter-card">
                            <span class="filter-spanTitel px-md-3">{{ __('msg.locations') }}</span>
                            <select class="single-selectbox slim-select slim-select-1" name="location">
                                <!-- <option selected value="all">{{ __('msg.locations') }}</option> -->
                                @foreach($locations as $location)
                                    <option value="{{ $location->slug_en }}">{{ $location['title_'. app()->getLocale()] }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="filter-card">
                            <span class="filter-spanTitel px-md-3">{{ __('msg.compound') }}</span>
                            <select class="single-selectbox slim-select slim-select-2" name="compound">
                                <!-- <option selected value="all">{{ __('msg.compound') }}</option> -->
                                @foreach($compounds as $compound)
                                    <option value="{{ $compound->slug_en }}">{{ $compound['title_'. app()->getLocale()] }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="filter-card">
                            <span class="filter-spanTitel px-md-3">{{ __('msg.property_type') }}</span>
                            <select class="single-selectbox slim-select slim-select-3" name="type" >
                                <!-- <option selected value="all">{{ __('msg.property_type') }}</option> -->
                                @foreach($types as $type)
                                    <option value="{{ $type->slug_en }}">{{ $type['title_'. app()->getLocale()] }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="filter-card filter-search-btn d-flex justify-content-center align-items-center">
                            <button type="submit" class="btn d-flex justify-content-center align-items-center"><img src="{{ asset('assets/App_Images/SearchIcon.png') }}" alt="Search" />{{ __('msg.search') }}</button>
                        </div>
                    </div>
                </div>
            </div>
            </form>
        </div>
        <!-- Filters -->


        <div class="our-home my-30">
            <h2 class="sec-titleHome text-md-center my-4">{{ $attributes['compound_slider_title_'. app()->getLocale()] }}</h2>

            <!-- Slider main container -->
            <div class="home-slider-brands">
                <div class="swiper-home-brands">
                    <!-- Additional required wrapper -->
                    <div class="marquee">
                        <!-- Slides -->
                        <div class="marquee__inner" behavior="scroll" direction="right" loop="loop">
                            @foreach($compounds->slice(0, 12) as $compound)
                                <div class="slide-marquee">
                                    <a class="slide-mar" href="{{ route('compound', $compound->slug_en) }}" target="_blank"><img class=" img-fluid w-100" src="{{ asset('uploads'.$compound->image->image_path) }}" alt="{{ $compound->image['alter_' . app()->getLocale()] }}"></a>
                                </div>
                            @endforeach
                        </div>

                        <div class="marquee__inner" behavior="scroll" direction="right" loop="loop">
                            @foreach($compounds->slice(0, 12) as $compound)
                                <div class="slide-marquee">
                                    <a class="slide-mar" href="{{ route('compound', $compound->slug_en) }}" target="_blank"><img class="img-fluid w-100" src="{{ asset('uploads'.$compound->image->image_path) }}" alt="{{ $compound->image['alter_' . app()->getLocale()] }}"></a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <div class="row sections mt-md-74 mt-4 justify-content-between gx-0">
                <div class="col-md-6 col-12 my-4 img-49-sm Guests-section position-relative">
                    <a href="{{ app()->getLocale(). $attributes['section_one_link'] }}" class="Guests-Lay">
                        <img class="img-fluid w-100" src="{{asset($attributes['section_one_image'])}}"
                             alt="{{ $attributes['section_one_image_alter_' . app()->getLocale()] }}">
                        <div class="Guests-go d-block"><span>{{ $attributes['section_one_title_'. app()->getLocale()] }}</span> </div>
                        <div class="Guests-title p-3">
                            <h3 class="title">{{ $attributes['section_one_text_one_'. app()->getLocale()] }}</h3>
                            <p class="pref">{{ $attributes['section_one_text_two_'. app()->getLocale()] }}</p>
                        </div>
                    </a>
                </div>
                <a href="{{ app()->getLocale(). $attributes['section_two_link'] }}" style="background-color: {{ $attributes['section_two_color'] }};" class="col-md-6 co-12 my-4 img-49-sm owners-section position-relative row gx-0">
                    <div class="owners-go d-block">{{ $attributes['section_two_title_'. app()->getLocale()] }}</div>

                    <div class="owners-services-title col-12 px-3 pt-3 row gx-0 d-flex align-self-end">

                        <h3 class="title col-12">{{ $attributes['section_two_text_one_'. app()->getLocale()] }}</h3>
                        <p class="pref col-12">{{ $attributes['section_two_text_two_'. app()->getLocale()] }}</p>
                    </div>
                    <div class="col-12 d-flex">
                        <img class="lazy img-fluid w-100" src="{{ asset( $attributes['section_two_image'] ) }}" alt="{{ $attributes['section_two_image_alter_' . app()->getLocale()] }}">

                    </div>
                </a>
                <div style="background-color: {{ $attributes['section_three_color'] }};" class="col-12 text-center mt-md-74 mt-4 home-mission mb-5">
                    <div class="py-md-5 py-4 col-md-8 col-10 mx-auto">
                        <h2 class="title">{{ $attributes['section_three_text_one_'. app()->getLocale()] }}</h2>
                        <p class="pref my-4"> {{ $attributes['section_three_text_two_'. app()->getLocale()]  }}
                        </p>
                        <button type="button" class="btn hlm-btn btn-outline-light px-4 ">{{ __('msg.learn_more') }}</button>
                    </div>
                    <img class="img-fluid w-100" src="{{asset($attributes['section_three_image'])}}"
                         alt="{{ $attributes['section_three_image_alter_' . app()->getLocale()] }}">

                    <!-- <img class="img-fluid w-100" src="App_Images/hel-mission.png" alt="HELLOHOME IS ON A MISSION"
                        title="HELLOHOME IS ON A MISSION"> -->
                </div>
            </div>

        </div>
    </div>
@endsection
