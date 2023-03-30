@extends('partial.app')
@section('title', $attributes['service_section_main_title_'. app()->getLocale()])

@section('content')


    <div class=" container servce ">
        <div id="12" class="servce-mainimg w-100" style="scroll-margin-top: 100px;">

            <div class="services-header-img image position-relative">

                <picture>
                    <source media="(min-width: 768px)" srcset="{{ asset($attributes['service_section_main_image']) }}">
                    <source media="(min-width: 10px)" srcset="{{ asset($attributes['service_section_main_image']) }}">


                    <div class="gradient-easing"></div>
                    <img class="img-fluid lazy" src="{{ asset($attributes['service_section_main_image']) }}" alt="@item.PictureCaption" title="@item.StoryTitle">
                </picture>


                <div class="row container justify-content-center main-text gx-0">
                    <p class="sup-text my-3 text-center col-md-9">{{ $attributes['service_section_main_title_'. app()->getLocale()] }}</p>

                    <h1 class="my-3 text-center  col-md-9">{{ $attributes['service_section_main_sub_title_'. app()->getLocale()] }} </h1>
                </div>
            </div>



        </div>

        <div class="row justify-content-between gx-0">
            <div class="mainbuton my-4 mb-md-74 row justify-content-between gx-0">
                <a href="#1" class=" w-100 col-md-6 img-49-sm col-12 mb-4"> <button type="button"
                                                                                    class="btn btn-outline-secondary w-100 text-center mainServices-but">{{ $attributes['service_section_1_text_'. app()->getLocale()] }}</button></a>

                <a href="#2" class=" w-100 col-md-6 img-49-sm col-12 mb-4"> <button type="button"
                                                                                    class="btn btn-outline-secondary w-100 text-center mainOwner-but">{{ $attributes['service_section_2_text_'. app()->getLocale()] }}</button></a>
            </div>
            <div id="1" class=" col-lg-9 col-md-10 col-12 text-center mx-auto mt-md-5 mb-md-4 my-3 our-mission guests-service-con">
                <h2 class="title mb-2">{{ $attributes['service_section_3_title_'. app()->getLocale()] }}</h2>

                <p class="pref serv-sub-title mb-3">{{ $attributes['service_section_3_sub_title_'. app()->getLocale()] }}</p>
                <p class="pref mb-2">{{ $attributes['service_section_3_text_'. app()->getLocale()] }}</p>

            </div>




            <div class="col-12 row Guests-sec justify-content-between gx-0 mb-md-74 my-4">
                <div class="col-12 d-lg-none d-block">
                    <img class="img-fluid" src="{{ asset($attributes['service_section_6_image']) }}" alt="">
                </div>

                <div style="background-color: {{ $attributes['service_section_4_color'] }}" class="col-lg-5 img-49-ds col-12 d-flex align-items-center guets-se px-5 p-4 row gx-0">

                    <p class="pref col-12">
                        {{ $attributes['service_section_4_text_1_'. app()->getLocale()] }}
                    </p>
                    <h3 class="col-12">
                        {{ $attributes['service_section_4_text_2_'. app()->getLocale()] }}
                    </h3>
                </div>
            </div>


            <div class="col-lg-9 col-md-10 col-12 text-center mx-auto mt-md-5 mb-md-74 my-3 section-1">
                <h2 class="title mb-4">{{ $attributes['service_section_5_title_'. app()->getLocale()] }}</h2>
                <p class="pref mb-4">{{ $attributes['service_section_5_text_1_'. app()->getLocale()] }}</p>
                <p class="pref mb-4">{{ $attributes['service_section_5_text_2_'. app()->getLocale()] }}</p>
                <p class="pref mb-4">{{ $attributes['service_section_5_text_3_'. app()->getLocale()] }}</p>


            </div>
            <div class="col-12 row experince-sec justify-content-between gx-0  my-5 mb-74">
                <div class="col-md-6 img-49-sm col-12">
                    <img class="lazy img-fluid w-100" src="{{ asset($attributes['service_section_6_image']) }}" data-src=""
                         alt="Guests Services" alt="Guests Services">

                </div>

                <div class="col-md-6 img-49-sm col-12 d-flex align-items-center p-3 row pr-md-39">
                    <h3 class="aue-text">
                        {{ $attributes['service_section_6_title_'. app()->getLocale()] }}
                    </h3>
                    <p class="pref aue-para col-12">
                        {{ $attributes['service_section_6_text_'. app()->getLocale()] }}
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-gra">
        <div class="container">
            <div class="row justify-content-between pt-5">
                <div class="col-lg-6 img-49-md order-lg-1 order-2 text-center">
                    <p class="layer-gray text-center">{{ $attributes['service_section_7_text_'. app()->getLocale()] }}</p>
                    <img class="img-fluid" src="{{ asset('assets/App_Images/layer-gray.png') }}" alt="">
                </div>
                <div class="col-lg-6 img-49-md order-lg-2 order-1 mb-lg-0 mb-5 text-center">
                    <img class="img-fluid" src="{{ asset('assets/App_Images/layer-gray2.png') }}" alt="">

                </div>
            </div>
        </div>
    </div>


    <div class=" container servce ">
        <div class="row justify-content-between gx-0">
            <div id="2" class="text-center mx-auto mt-md-5 mb-md-74 my-3 our-mission">
                <h2 class="title mb-md-39 mb-4">{{ $attributes['service_section_8_title_'. app()->getLocale()] }}</h2>

                <p class="pref mb-4">{{ $attributes['service_section_8_text_1_'. app()->getLocale()] }}</p>
                <p class="pref mb-2">{{ $attributes['service_section_8_text_2_'. app()->getLocale()] }}</p>

            </div>



            <div style="background-color: {{ $attributes['service_section_9_color'] }}" class="col-12 row neway-sec justify-content-between gx-0 my-5 mb-md-74">
                <div class="col-lg-6 img-49-ds col-12">
                    <img class="lazy img-fluid w-100" src="{{ asset($attributes['service_section_9_image']) }}"
                         alt="Guests Services" alt="Guests Services">

                </div>
                <div class="hos-details col-lg-6 img-49-ds col-12 d-flex align-items-center p-3 row gx-0">
                    <h3 class="col-11">{{ $attributes['service_section_9_title_'. app()->getLocale()] }}</h3>
                    <p class="pref col-11">{{ $attributes['service_section_9_text_'. app()->getLocale()] }}</p>
                </div>

            </div>

            <div class=" col-lg-9 col-md-10 col-12 text-center mx-auto mt-md-5 mb-md-74 my-3 our-mission">

                <p class="pref mb-4">{{ $attributes['service_section_10_text_'. app()->getLocale()] }}</p>

            </div>

            <div class="  col-12 mt-md-5 mb-md-74 my-3 our-col-det row gx-0 justify-content-between">
                <div class="col-lg-4 col-md-6 col-12 img-33-md img-49-sm img-100 px-3 ">
                    <h3 class="mb-21 mb-4">{{ $attributes['service_section_11_title_'. app()->getLocale()] }}</h3>
                    <p class="pref mb-4">{{ $attributes['service_section_11_text_'. app()->getLocale()] }}</p>

                </div>
                <div class="col-lg-4 col-md-6 col-12 img-33-md img-49-sm img-100 px-3 ">
                    <h3 class="mb-21 mb-4">{{ $attributes['service_section_12_title_'. app()->getLocale()] }}</h3>
                    <p class="pref mb-4">{{ $attributes['service_section_12_text_'. app()->getLocale()] }}</p>

                </div>
                <div class="col-lg-4 col-md-6 col-12 img-33-md img-49-sm img-100 px-3 ">
                    <h3 class="mb-21 mb-4">{{ $attributes['service_section_13_title_'. app()->getLocale()] }}</h3>
                    <p class="pref mb-4">{{ $attributes['service_section_13_text_'. app()->getLocale()] }}</p>

                </div>
            </div>

            <div class="col-12 mx-auto mt-md-5 mb-md-74 my-3 row section-emplo justify-content-between gx-0">
                <div class="col-lg-4 img-33-ds col-12 my-4 position-relative row gx-0 emplo-dv">
                    <div class="d-lg-none col-12 d-block p-3 row gx-0">
                        <h3 class="d-flex justify-content-center align-items-center p-4 mb-md-39 mb-5">{{ $attributes['service_section_14_title_'. app()->getLocale()] }}</h3>

                    </div>
                    <div class="wiga-img col-12">
                        <img class="lazy img-fluid w-100 col-12" src="{{ asset($attributes['service_section_14_image']) }}"
                             alt="Guests Services" alt="Guests Services">


                    </div>


                </div>
                <div class="col-lg-8 col-12 my-4  position-relative row gx-0 pl-md-21">
                    <h3 class="d-lg-block d-none justify-content-center align-items-center p-4 mb-md-39 mb-5">{{ $attributes['service_section_15_title_'. app()->getLocale()] }}</h3>
                    <div class="row d-flex justify-content-between ">
                        <ul class="col-md-6 img-49-sm">
                            <li>Professional photography</li>
                            <li>Housekeeping</li>
                            <li>Insurance</li>
                            <li>In stay maintenance</li>
                        </ul>
                        <ul class="col-md-6 img-49-sm">
                            <li>Managing all bookings</li>
                            <li>As well as welcoming </li>
                            <li>Looking after guests during their stay</li>
                        </ul>
                    </div>
                </div>

            </div>


            <div class="col-12 mx-auto mt-md-5 mb-md-74 my-3 row section-tree justify-content-between gx-0">
                <div style="background-color: {{ $attributes['service_section_15_color'] }}"
                    class="col-lg-8 col-12 my-lg-2 my-4  position-relative tree-text row gx-0 px-3 px-md-21 order-lg-1 order-2">
                    <h3 class=" justify-content-center align-items-center p-4">{{ $attributes['service_section_15_title_'. app()->getLocale()] }}</h3>
                    <!-- <hr> -->
                    <p class="pref">{{ $attributes['service_section_15_text_'. app()->getLocale()] }}</p>

                </div>
                <div class="col-lg-4 img-33-ds  my-lg-2 col-12 position-relative row gx-0 tree-dv order-lg-2 order-1">
                    <img class="lazy img-fluid w-100 col-12" src="{{ asset($attributes['service_section_15_image']) }}"
                          alt="Guests Services" alt="Guests Services">
                </div>


            </div>

        </div>

    </div>
@endsection
