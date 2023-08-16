@extends('partial.app')
@section('title', $attributes['about_section_main_sub_title_'. app()->getLocale()])
@section('content')
    <div class=" container about">
        <div class="about-mainimg w-100">

            <div class="image position-relative">
                <p class="sup-text my-3 text-center col-12">{{ $attributes['about_section_main_sub_title_'. app()->getLocale()] }}</p>

                <picture>
                    <source media="(min-width: 768px)" srcset="{{ asset($attributes['about_section_main_image']) }}">
                    <source media="(min-width: 10px)" srcset="{{ asset($attributes['about_section_main_image']) }}">
                    <img class="img-fluid " src="{{asset($attributes['about_section_main_image'])}}" alt="{{ $attributes['about_section_main_image_alter_' . app()->getLocale()] }}">
                </picture>

                <div class="row container">
                    <h1 class="my-3 text-center main-text col-12">{{ $attributes['about_section_main_title_'. app()->getLocale()] }}</h1>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-9 col-md-10 col-12 text-center mx-auto mt-md-5 mb-md-74 my-3 section-1">
                <h2 class="title mb-4">{{ $attributes['section_1_title_'. app()->getLocale()] }}</h2>
                <h3 class="sup-title mb-4">{{ $attributes['section_1_sub_title_'. app()->getLocale()] }}
                </h3>
                <p class="pref mb-4">{{ $attributes['section_1_text_1_'. app()->getLocale()] }}</p>
                <p class="pref mb-4">{{ $attributes['section_1_text_2_'. app()->getLocale()] }}</p>
                <a href="{{ asset($attributes['about_section_download_profile']) }}" download target="_blank" class="btn btn-outline-secondary dl-pro-btn">{{ __('msg.download_our_profile') }}</a>
            </div>
            <div class="col-lg-9 col-md-10 col-12 text-center mx-auto mt-md-5 mb-md-74 my-3 section-1">
                <span class="smallQus mb-4">{{ $attributes['section_2_q_'. app()->getLocale()] }}</span>
                <h2 class="title mb-4 mt-2">{{ $attributes['section_2_title_'. app()->getLocale()] }}</h2>
                <h3 class="sup-title mb-4">{{ $attributes['section_2_sub_title_1_'. app()->getLocale()] }}<br /> {{ $attributes['section_2_sub_title_2_'. app()->getLocale()] }}
                </h3>
                <p class="pref mb-4">{{ $attributes['section_2_text_1_'. app()->getLocale()] }}</p>
                <p class="pref mb-4">{{ $attributes['section_2_text_2_'. app()->getLocale()] }}</p>


            </div>
            <div style="background-color: {{ $attributes['about_section_3_color'] }}" class="col-12 row neway-sec justify-content-between gx-0 mb-39">
                <div class="col-lg-6 img-49-ds col-12 d-flex align-items-center p-3 order-lg-1 order-2 ">
                    <h3 class="text-left neway-sec-heading">{{ $attributes['about_section_3_text_'. app()->getLocale()] }}</h3>
                </div>
                <div class="col-lg-6 img-49-ds col-12 order-lg-2 order-1">
                    <img class="lazy img-fluid w-100" src="{{ asset($attributes['about_section_3_image']) }}"
                         alt="{{ $attributes['about_section_3_image_alter_' . app()->getLocale()] }}">

                </div>
            </div>
            <div class="col-lg-9 col-md-10 col-12 text-center mx-auto mt-md-5 mb-md-74 my-3 our-mission">
                <h2 class="title mb-4">{{ $attributes['about_section_4_title_'. app()->getLocale()] }}</h2>

                <p class="pref mb-5">{{ $attributes['about_section_4_sub_title_'. app()->getLocale()] }}</p>
                <p class="pref mb-2"><b>{{ $attributes['about_section_4_title_2_'. app()->getLocale()] }}</b></p>
                <p class="pref mb-5">{{ $attributes['about_section_4_sub_title_2_'. app()->getLocale()] }}</p>
                <span class="smallQus ">{{ $attributes['about_section_4_title_3_'. app()->getLocale()] }}</span>
                <h3 class="title my-4">{{ $attributes['about_section_4_sub_title_3_'. app()->getLocale()] }}</h3>

            </div>
            <div class="col-12 text-center mx-auto mt-md-5 mb-md-74 my-3 row section-main justify-content-between gx-0 align-items-start">
                <div class="col-md-6 col-12 my-4 img-49-sm position-relative row gx-0">
                    <button type="button" style="background-color: {{ $attributes['about_section_5_color'] }}"
                            class="btn btn-outline-secondary w-100 col-12 text-center mb-4 Services-but">{{ $attributes['about_section_5_title_'. app()->getLocale()] }}</button>
                    <div>
                        <img class="lazy img-fluid w-100 col-12" src="{{ asset( $attributes['about_section_5_image']) }}"
                             alt="{{ $attributes['about_section_5_image_alter_' . app()->getLocale()] }}">
                    </div><p class="pref my-4 px-md-3 px-2">{{ $attributes['about_section_5_text_'. app()->getLocale()] }}</p>

                </div>
                <div id="5" class="col-md-6 col-12 my-4 img-49-sm position-relative row gx-0">
                    <button type="button" style="background-color: {{ $attributes['section_6_color'] }}"
                            class="btn btn-outline-secondary w-100 col-12 text-center mb-4 Owner-but">{{ $attributes['about_section_6_title_'. app()->getLocale()] }}</button>
                    <div>

                        <img class="lazy img-fluid w-100 col-12" src="{{ asset( $attributes['section_6_image']) }}"
                             alt="{{ $attributes['section_6_image_alter_' . app()->getLocale()] }}">
                    </div><p class="pref my-4 px-md-3 px-2">{{ $attributes['about_section_6_text_'. app()->getLocale()] }}</p>
                </div>
            </div>
        </div>

    </div>

    </div>

@endsection
