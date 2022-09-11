@extends('partial.app')
@section('title', $compound->title_en)

@section('content')
    <span id="tottal" class="d-none"></span>

    <div class="advanced-search-container">
        <div class="container">

            <!-- Bread Crumb -->
            <div class="adv-search-breadcrumb">
                <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home')  }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('explore_homes') }}">Explore Homes</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $compound->title_en }}</li>
                    </ol>
                </nav>
            </div>

            <!-- View Brand -->
            <div class="view-adv-brand">
                <img class="img-fluid" style="max-height: 110px;" src="{{ asset('uploads'.$compound->image->image_path) }}" />
            </div>

            <!-- Areas Slider -->
            <div class="areas-container">
                <div class="areas-grid">
                    <!-- ******** Start Row ******** -->
                    @foreach($compound->unites as $unit)
                        <div class="area-card">
                        <!-- Images -->
                        <div class="slider advsear ">
                            @foreach($unit->images->slice(0,4) as $image)
                                <a href="{{route('unit_details', ['compound' => $unit->compound->slug_en, 'unit_id'=> $unit->id])}}">
                                    <div>
                                        <div class="image position-relative">
                                            <img style="height: 200px" class="img-fluid w-100" src="{{asset('uploads'. $image->image_path)}}" data-src="" />
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
                                        <p>{{$unit->location->title_en}}</p>
                                    </div>
                                    <div class="text-gallery col-md-5 col-6 img-49 ps-0">
                                        <span>Property Type</span>
                                        <p>{{$unit->type->title_en}}</p>
                                    </div>
                                </div>
                            </a>
                    </div>
                    @endforeach
                    <!-- ******** End Row ******** -->
                </div>
            </div>
        </div>
    </div>
@endsection
