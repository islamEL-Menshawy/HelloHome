@extends('partial.app')
@section('title',  __('msg.explore_homes') )

@section('content')
    <div class=" container about ">
        <div class="search-mainimg w-100 mb-39">

            <div class="image position-relative">

                <picture>
                    <source media="(min-width: 768px)" srcset="{{ asset('assets/App_Images/search.png') }}">
                    <source media="(min-width: 10px)" srcset="{{ asset('assets/App_Images/searchmop.png') }}">
                    <img class="search-mainimg-img img-fluid lazy" src="{{ asset('assets/App_Images/search.png') }}" alt="@item.PictureCaption" title="@item.StoryTitle">
                </picture>
                <div class="row container">
                    <h1 class="my-3 text-center main-text col-12">{{ __('msg.explore_homes') }}</h1>
                </div>
            </div>
        </div>
        <!-- Filters -->
        <div class="filters-container">
            <div class="">
                <h3 class="filters-main-title text-center">{{ __('msg.explore_Hotel') }}</h3>
                <form action="{{route('search')}}" method="get">
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
                            <select class="single-selectbox slim-select slim-select-2" name="compound" >
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
                            <button type="submit" class="btn d-flex justify-content-center align-items-center"><img src="{{asset('assets/App_Images/SearchIcon.png')}}" alt="Search" /> {{ __('msg.search') }}</button>
                        </div>
                    </div>

                </div>
                </form>
            </div>
        </div>
        <!-- Filters -->
        <div class="our-home my-30">
            <h2 class="sec-titleHome my-4">{{ __('msg.explore_our_home_collection') }}</h2>
            <div class="brands-container">
                <div class="brands-grid">
                    @foreach($compounds as $compound)
                        <a href="{{ route('compound', $compound->slug_en) }}"><img class=" img-fluid w-100" src="{{ asset('uploads'.$compound->image->image_path) }}" alt="{{ $compound['title_' . app()->getLocale()] }}"> </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
