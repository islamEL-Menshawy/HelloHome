@extends('partial.app')
@section('title', $compound['title_'. app()->getLocale()])

@section('content')
    <span id="tottal" class="d-none"></span>

    <div class="advanced-search-container">
        <div class="container">

            <!-- Bread Crumb -->
            <div class="adv-search-breadcrumb">
                <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">{{ __('msg.homes') }}</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('explore_homes') }}">{{ __('msg.explore_homes') }}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $compound['title_'. app()->getLocale()] }}</li>
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
                    @foreach($units as $unit)
                        <div class="area-card">
                        <!-- Images -->
                        <div class="slider advsear ">
                            @foreach($unit->images->slice(0,4) as $image)
                                <a class="unit-card-images" href="{{route('unit_details', ['compound' => $unit->compound->slug_en, 'unit_id'=> $unit->id])}}">
{{--                                    <div class="unit-card-price">{{$unit->price}}</div>--}}
                                    <div>
                                        <div class="image position-relative">
                                            <img class="img-fluid w-100" src="{{asset('uploads'. $image->image_path)}}" data-src="" />
                                        </div>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                        <!-- Images -->

                        <!-- Details -->
                            <a href="{{route('unit_details', ['compound' => $unit->compound->slug_en, 'unit_id'=> $unit->id])}}">
                                <div class="unit-details">
                                    <div class="text-gallery">
                                        <span>{{ __('msg.locations') }}</span>
                                        <p>{{$unit->location['title_'. app()->getLocale()]}}</p>
                                    </div>
                                    <div class="text-gallery">
                                        <span>{{ __('msg.property_type') }}</span>
                                        <p>{{$unit->type['title_'. app()->getLocale()]}}</p>
                                    </div>
                                    <div class="text-gallery">
                                        <span>{{ __('msg.price') }}</span>
                                        <p class="price-replace">{{$unit['price_'. app()->getLocale()]}}</p>
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
