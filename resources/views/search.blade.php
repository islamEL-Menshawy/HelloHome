@extends('partial.app')
@section('title', 'Search')

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
                    <h1 class="my-3 text-center main-text col-12">Search Results</h1>
                </div>
            </div>



        </div>
        <!-- Filters -->
        <div class="filters-container">
            <div class="">
                <form action="{{route('search')}}" method="get">
                    <div class="filters-flexable d-flex">
                    <div class="filters-title d-flex align-items-center justify-content-center">
                        <img src="{{ asset('assets/App_Images/filter-icon.png') }}" alt="Filters Icon" />
                        <span class="">Filters</span>
                    </div>
                    <div class="filters-selectbox-container">
                        <div class="filter-card">
                            <span class="filter-spanTitel px-md-3">Locations</span>
                            <select class="single-selectbox slim-select slim-select-1" name="location">
                                <option selected value="all">Select Location</option>
                                @foreach($locations as $location)
                                    <option value="{{ $location->slug_en }}">{{ $location->title_en }}</option>
                                @endforeach

                            </select>
                        </div>
                        <div class="filter-card">
                            <span class="filter-spanTitel px-md-3">Compound</span>
                            <select class="single-selectbox slim-select slim-select-2" name="compound" >
                                <option selected value="all">Select Compound</option>
                                @foreach($compounds as $compound)
                                    <option value="{{ $compound->slug_en }}">{{ $compound->title_en }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="filter-card">
                            <span class="filter-spanTitel px-md-3">Property Type</span>
                            <select class="single-selectbox slim-select slim-select-3" name="type" >
                                <option selected value="all">Select Type</option>
                                @foreach($types as $type)
                                    <option value="{{ $type->slug_en }}">{{ $type->title_en }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="filter-card filter-search-btn d-flex justify-content-center align-items-center">
                            <button type="submit" class="btn d-flex justify-content-center align-items-center"><img src="{{asset('assets/App_Images/SearchIcon.png')}}" alt="Search" /> Search</button>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>

        <!-- Areas Slider -->
        <span id="tottal" class="d-none"></span>
        <div class="areas-container">
            <div class="areas-grid">
                @foreach($unites as $unit)
                    <!-- ******** Start Row ******** -->

                    <div class="area-card">
                        <!-- Images -->

                        <div class=" slider advsear ">
                            @foreach($unit->images->slice(0 ,4) as $image)
                                <a href="{{route('unit_details', ['compound' => $unit->compound->slug_en, 'unit_id'=> $unit->id])}}">
                                <div>
                                    <div class="image position-relative">
                                        <img class="lazy img-fluid w-100" src="{{asset('uploads'.$image->image_path)}}" />
                                    </div>
                                </div>
                                </a>
                            @endforeach

                        </div>
                        <!-- Images -->

                        <!-- Details -->
                        <a href="{{route('unit_details', ['compound' => $unit->compound->slug_en, 'unit_id'=> $unit->id])}}">
                            <div class="row container justify-content-between col-12">
                                <div class="text-gallery col-md-5 col-6 img-49 ps-0 ">
                                    <span>Location</span>
                                    <p>{{ $unit->location->title_en }}</p>
                                </div>
                                <div class="text-gallery col-md-5 col-6 img-49 ps-0">
                                    <span>Property Type</span>
                                    <p>{{ $unit->type->title_en }}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- ******** End Row ******** -->
                @endforeach

            </div>
        </div>


        <!-- Filters -->
        <div class="our-home my-30">
            <h2 class="sec-titleHome my-4">Explore Our Home Collection</h2>
            <div class="brands-container">
                <div class="brands-grid">
                    @foreach($compounds as $compound)
                        <a href="{{ route('compound', $compound->slug_en) }}"><img class=" img-fluid w-100" src="{{ asset('uploads'.$compound->image->image_path) }}"> </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>



    <script type='text/javascript'
            src='https://platform-api.sharethis.com/js/sharethis.js#property=63030dc8de1069001998acc6&product=sop'
            async='async'></script>
    </div>
@endsection
