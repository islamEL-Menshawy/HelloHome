@extends('partial.app')
@section('title', $unit['title_' . app()->getLocale()])
@section('seo-tags')
    <!-- Facebook -->`
    <meta property="fb:app_id" content="629322731899614" />
    <meta property="og:title" content="{{ $unit->title }}" />
    <meta property="og:description" content="{{ $unit->description }}" />
    <meta property="og:type" content="Compound" />
    <meta property="og:image" content="{{ asset('assets/App_Images/detilsbig.png') }}" />
    <meta property="og:url" content="{{getenv('APP_URL')}}" />
    <meta property="og:image:width" content="1280" />
    <meta property="og:image:height" content="855" />
@endsection
@section('content')
    <!-- PreLoader -->
    <div id="preloader" class="preloader">
        <div class="overlay">
            <img  src="{{ asset('assets/App_Images/loader.svg') }}" class="preloader-icon img-fluid" />
        </div>
    </div>
    <!-- PreLoader -->
    <div class=" container details">

        <div class=" details-slider justify-content-md-between justify-content-center mb-2">
            <div class="col-auto">
{{--                <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"--}}
{{--                     aria-label="breadcrumb">--}}
{{--                    <ol class="breadcrumb">--}}
{{--                        <li class="breadcrumb-item"><a href="#">{{ $unit->location['title_'. app()->getLocale()] }}</a></li>--}}
{{--                        <li class="breadcrumb-item active" aria-current="page">{{ $unit->type['title_'. app()->getLocale()] }}</li>--}}
{{--                        <li class="breadcrumb-item"><a href="{{ route('compound', $unit->compound->slug_en) }}">{{ $unit->compound['title_'. app()->getLocale()] }}</a></li>--}}
{{--                    </ol>--}}
{{--                </nav>--}}

                <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">{{ $unit->location['title_'. app()->getLocale()] }}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $unit->type['title_'. app()->getLocale()] }}</li>
                        <li class="breadcrumb-item"><a href="{{ route('compound', $unit->compound->slug_en) }}">{{ $unit->compound['title_'. app()->getLocale()] }}</a></li>
                    </ol>
                </nav>
            </div>
            <div class="bc-pss d-flex justify-content-between align-items-center">

                <div class="unit-title">{{ $unit['title_' . app()->getLocale()] }}</div>
                <div class="d-flex price-share-flexable optian-details align-items-center">
                    <p class="total-salary mb-0 me-2">{{ $unit['price_' . app()->getLocale()] }}</p>
                    <button  data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn mx-2 share-to d-flex align-items-center">
                        <svg class="me-1" xmlns="http://www.w3.org/2000/svg" width="14.826" height="16.163"
                             viewBox="0 0 14.826 16.163">
                            <g id="export" transform="translate(-68.891 0)">
                                <path id="Path_1250" data-name="Path 1250"
                                      d="M83.1,172.228H81.246v.908h1.236v8.17H70.127v-8.17h1.236v-.908H69.509c-.341,0-.618.2-.618.454v9.077c0,.251.276.454.618.454H83.1c.341,0,.618-.2.618-.454v-9.077C83.717,172.431,83.441,172.228,83.1,172.228Z"
                                      transform="translate(0 -166.05)" />
                                <path id="Path_1251" data-name="Path 1251"
                                      d="M163.577,2.365V11.12h1.236V2.365l2.652,2.652.874-.874L164.194,0l-4.143,4.143.874.874Z"
                                      transform="translate(-87.89)" />
                            </g>
                        </svg>
                        {{ __('msg.share') }}
                    </button>
                </div>
            </div>

            <div class="lightbox-contaner  justify-content-center align-items-center">
                <div class="lightbox-item d-flex align-items-center justify-content-between">
                    <i id="closee" class="fas fa-times border-0"> <span>Close</span></i>
                    <button data-bs-toggle="modal" data-bs-target="#exampleModal" class="share-btn btn">
                        <img src="{{ asset('assets/App_Images/share.svg') }}" alt="" />
                    </button>
                    <i id="preve" class="icon-chevron m-3 fas fa-chevron-left"></i>
                    <i id="nexte" class="icon-chevron m-3 fas fa-chevron-right"></i>
                    <p class="counters"><span id="curentt">-</span> / <span id="tottal">tottal</span></p>
                </div>
            </div>

            <!-- Modal Open Share Container -->
            <div class="modal modal-share-container fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="modal-b-title">{{ __('msg.share_with_family') }}</div>
                            <div class="modal-b-it d-flex align-items-center">
                                <img src="{{ asset('assets/App_Images/Grustsbackblock.png') }}" alt="" />
                                <div class="modal-b-it-title">Luxury Collection</div>
                            </div>
                            <div class="modal-grid">
                                <button onclick="CopyTextFunction()" id="copyUrlBrowser" class="btn share-linked-card">
                                    <img src="{{ asset('assets/App_Images/copy.svg') }}" class="img-fluid" alt="" />
                                    Copy Link
                                </button>
                                <button class="btn share-linked-card wap-btn">
                                    <img src="{{ asset('assets/App_Images/whatsapp.svg') }}" class="img-fluid" alt="" />
                                    Whatsapp
                                </button>
                                <a  href="javascript:;" onclick="messengerShare()" class="btn share-linked-card">
                                    <img src="{{ asset('assets/App_Images/messenger.svg') }}" class="img-fluid" alt="" />
                                    Messenger
                                </a>

                                <button id="shareFacebook" class="btn share-linked-card">
                                    <img src="{{ asset('assets/App_Images/facebook-1.svg') }}" class="img-fluid" alt="" />
                                    Facebook
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal Open Share Container -->




            <div class="view-product-container">
                <div class="vp-grid">
                    <!-- Slider Main View -->
                    <div class="slider-vp-container">
                        <div class="slider slider-for vp-slider">
                            @foreach($unit->images as $image)
                                <div class="">
                                    <h3><img class="img-fluid rounded-12" style="width: 100%;" src="{{ asset('uploads'.$image->image_path) }}" alt="">
                                    </h3>
                                </div>
                            @endforeach
                        </div>
                        <div class="slick-counter-arrows d-flex align-items-center">
                            <div class="sca-prev"><i class="icon-chevron fas fa-chevron-left"></i></div>
                            <div class="slick-counter"><span class="current"></span> / <span class="total"></span></div>
                            <div class="sca-next"><i class="icon-chevron fas fa-chevron-right"></i></div>
                        </div>
                    </div>

                    <!-- Slider Other Images View -->
                    <div class="slider-other-images">
                        <div class="slider slider-nav soi-container">
                            @foreach($unit->images as $image)<div class="px-2 mx-1 img-100">
                                <h3><img class="img-fluid rounded-12" style="width: 100%;" src="{{ asset('uploads'.$image->image_path) }}" alt="">
                                </h3>
                            </div>
                            @endforeach

                        </div>

                        <div class="details-larg-button reg-ask-btns d-flex justify-content-between">
                            <div class="ra-btn">
                                <button id="openContactContainer" type="button" class="btn btn-outline-secondary w-100 text-center Register-but border-0">
                                    {{ __('msg.register_interest') }}
                                </button>
                            </div>


                            <div id="toggleContactContainer" class="contact-form project-contact-form">
                              <div class="cform-title d-flex align-items-center justify-content-between">
                                <div class="title">{{ __('msg.register_interest') }}</div>
                                <button id="closeContactContainer" class="close-contact opacity-hover btn">
                                    <i id="closee" class="fas fa-times border-0"></i>
                                </button>
                              </div>

                              <form class="form-row">
                                <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">
                                <div class="col-lg-12">
                                  <div class="cform-group">
                                    <input id="fullName" name="fullName" type="text" placeholder="{{ __('msg.full_name') }}" />
                                  </div>
                                </div>

                                <div class="col-lg-12">
                                  <div class="cform-group">
                                    <input id="email" name="email" type="email" placeholder="{{ __('msg.email') }}" />
                                  </div>
                                </div>

                                <div class="col-lg-12">
                                  <div class="cform-group d-flex">
                                    <div class="cform-selecbox">
                                      <div class="selectbox-slim selectbox-tel-keys">
                                        <select id="tel-keys" name="phone_code">
                                          <option value="+20">+20</option>
                                          <option value="+21">+21</option>
                                          <option value="+22">+22</option>
                                          <option value="+23">+23</option>
                                          <option value="+24">+24</option>
                                        </select>
                                      </div>
                                    </div>
                                    <input id="phone_number" name="phone_number" type="tel" placeholder="{{ __('msg.phone') }}" />
                                  </div>
                                </div>

                                <div class="col-lg-12">
                                  <div class="cform-group">
                                    <textarea id="massage" name="massage" rows="3" placeholder="{{ __('msg.interested_sale') }}"></textarea>
                                  </div>
                                </div>

                                <div class="col-lg-12">
                                  <div class="cform-action">
                                    <div class="button-default width-fluid bt-black">
                                      <button id="intrestsBtn">{{ __('msg.send_now') }}</button>
                                    </div>
                                  </div>
                                </div>

                                <div class="col-lg-12">
                                  <div class="checkbox-group d-flex align-items-center">
                                    <div class="fake-checkbox">
                                      <input id="agreeTermsConditions" type="checkbox" class="input-checkbox" />
                                      <div class="fake-cb-child">
                                        <span></span>
                                      </div>
                                    </div>
                                    <label class="checkbox-text" for="agreeTermsConditions">{{ __('msg.agree_policy') }}
                                    </label>
                                  </div>
                                </div>
                              </form>
                            </div>


                            <div class="ra-btn">
                                <div class="Ask-but">
                                    <a href="tel:{{ $unit->phone_number }}" class="btn btn-outline-secondary w-100 text-center border-0">
                                        <div class="num-hover-visible">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <img class="img-fluid" src="{{asset('assets/App_Images/phone-2.svg')}}" alt="" />{{ __('msg.ask_now') }}
                                            </div>
                                        </div>
                                        <div class="num-hover-hidden">
                                            <div class="d-flex align-items-center justify-content-between">
                                                {{ $unit->phone_number }}
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>


        </div>
        <div class="offers-home">
            <div class="product-details">
                <div class="proto text-uppercase">{{ __('msg.property_type') }}</div>
                <div class="pd-grid">
                    <div class="apartment-d">
                        <div class="area-details d-flex justify-content-between">
                            <p class="proto-name-app pt-1 col-auto">{{ $unit->type['title_'. app()->getLocale()] }}</p>
                            <p class="ad-card bed col-auto"><svg class="me-2" id="bed" xmlns="http://www.w3.org/2000/svg" width="34.454"
                                                                 height="28.149" viewBox="0 0 34.454 22.149">
                                    <g id="Group_815" data-name="Group 815" transform="translate(0 0)">
                                        <path id="Path_1242" data-name="Path 1242"
                                              d="M29.609,91h-.538V86.692A2.7,2.7,0,0,0,26.379,84H8.075a2.7,2.7,0,0,0-2.692,2.692V91H4.845A4.851,4.851,0,0,0,0,95.844v7.537H1.077v3.768H3.768v-3.768H30.686v3.768h2.692v-3.768h1.077V95.844A4.851,4.851,0,0,0,29.609,91ZM6.46,86.692a1.615,1.615,0,0,1,1.615-1.615h18.3a1.615,1.615,0,0,1,1.615,1.615V91H26.379V88.845a1.615,1.615,0,0,0-1.615-1.615H19.919A1.615,1.615,0,0,0,18.3,88.845V91H16.15V88.845a1.615,1.615,0,0,0-1.615-1.615H9.69a1.615,1.615,0,0,0-1.615,1.615V91H6.46ZM25.3,88.845V91H19.38V88.845a.538.538,0,0,1,.538-.538h4.845A.538.538,0,0,1,25.3,88.845Zm-10.229,0V91H9.152V88.845a.538.538,0,0,1,.538-.538h4.845A.538.538,0,0,1,15.074,88.845ZM2.692,106.072H2.153v-2.692h.538Zm29.609,0h-.538v-2.692H32.3Zm1.077-3.768H1.077V99.612h32.3Zm0-3.768H1.077V95.844a3.773,3.773,0,0,1,3.768-3.768H29.609a3.773,3.773,0,0,1,3.768,3.768Z"
                                              transform="translate(0 -84)" fill="#2c2c2c" />
                                    </g>
                                </svg>
                                {{ $unit->bed_number }} {{ __('msg.bed_rooms') }}</p>
                            <p class="ad-card bathrom col-auto"><svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="30.279"
                                                                     height="30.279" viewBox="0 0 30.279 28.279">
                                    <g id="bathtub_1_" data-name="bathtub (1)" transform="translate(0.25 0.25)">
                                        <path id="Path_1243" data-name="Path 1243"
                                              d="M28.911,16.2H11.7a.87.87,0,0,0-.86-.756h-4.7a.87.87,0,0,0-.86.756H3.533V3.3a1.545,1.545,0,0,1,3.009-.5l.314.926a3.932,3.932,0,0,0-1.819,4.5l.258.89a.874.874,0,0,0,1.078.594L12.2,8a.873.873,0,0,0,.591-1.082l-.258-.89A3.912,3.912,0,0,0,8.522,3.217l-.334-.986A3.283,3.283,0,0,0,1.795,3.3V16.2H.87A.871.871,0,0,0,0,17.075v2.881a.872.872,0,0,0,.635.84v2.513a4.732,4.732,0,0,0,3.076,4.432l-.45.685a.874.874,0,0,0,.247,1.209.867.867,0,0,0,1.2-.248L5.6,28.034H24.179l.889,1.353a.87.87,0,1,0,1.451-.961l-.45-.685a4.732,4.732,0,0,0,3.076-4.432V20.8a.872.872,0,0,0,.635-.84V17.075a.871.871,0,0,0-.869-.872ZM10.866,6.519l.015.052L6.721,7.787l-.015-.052a2.178,2.178,0,0,1,1.474-2.7,2.162,2.162,0,0,1,2.686,1.479ZM7,17.192H9.967v5.64H7Zm21.038,2.17a1.511,1.511,0,0,0-.635,1.232v2.716a2.978,2.978,0,0,1-2.969,2.98H5.343a2.978,2.978,0,0,1-2.969-2.98V20.593a1.511,1.511,0,0,0-.635-1.232V17.947H5.265V23.7a.871.871,0,0,0,.869.872h4.7a.871.871,0,0,0,.869-.872V17.947H28.041v1.414Z"
                                              transform="translate(-0.001 0)" fill="#2c2c2c" stroke="#fff" stroke-width="0.5" />
                                    </g>
                                </svg>
                                {{ $unit->bathroom_number }} {{ __('msg.Bathrooms') }}</p>
                            <p class="ad-card area col-auto"><svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="30.028" height="27.411"
                                                                  viewBox="0 0 30.028 28.411">
                                    <g id="blueprint" transform="translate(0.125 0.125)">
                                        <path id="Path_1244" data-name="Path 1244"
                                              d="M59.332,83.627H78.021V78.664H85.66V59.953H59.332ZM61.077,61.7H83.915V76.92H76.276v4.963h-15.2Zm0,0"
                                              transform="translate(-55.881 -56.466)" fill="#2c2c2c" stroke="#fff"
                                              stroke-width="0.25" />
                                        <path id="Path_1245" data-name="Path 1245" d="M59.332,0H85.66V1.745H59.332Zm0,0"
                                              transform="translate(-55.881)" fill="#2c2c2c" stroke="#fff" stroke-width="0.25" />
                                        <path id="Path_1246" data-name="Path 1246" d="M0,59.953H1.745V83.627H0Zm0,0"
                                              transform="translate(0 -56.466)" fill="#2c2c2c" stroke="#fff" stroke-width="0.25" />
                                        <path id="Path_1247" data-name="Path 1247"
                                              d="M185.2,191.5l-1.679,2.82L181.8,191.5h-1.467v5.293h1.626V194.46l1.149,1.853h.786l1.149-1.936.015,2.412h1.626l-.015-5.293Zm0,0"
                                              transform="translate(-169.84 -180.358)" fill="#2c2c2c" stroke="#fff"
                                              stroke-width="0.25" />
                                        <path id="Path_1248" data-name="Path 1248"
                                              d="M300.124,186.734c.491-.431.6-.7.6-1,0-.613-.559-1-1.391-1a1.552,1.552,0,0,0-1.49.748l.877.416a.544.544,0,0,1,.507-.287c.212,0,.3.091.3.212,0,.1-.045.219-.272.408l-1.2,1.029v.688h2.767v-.862h-1.119Zm0,0"
                                              transform="translate(-280.525 -173.994)" fill="#2c2c2c" stroke="#fff"
                                              stroke-width="0.25" />
                                    </g>
                                </svg>{{ __('msg.area') }} {{ $unit->area }} M2</p>
                        </div>

                        <div class="about-dev d-flex">
                            <div class="about-dev-img">
                                <img class="img-fluid" src="{{asset('uploads'.$unit->compound->image->image_path)}}" alt="" />
                            </div>
                            <div class="about-dev-details">
                                <h3>
                                    {{ __('msg.about_developer') }}
                                </h3>

                                <div class="read-more-parent">
                                    <span class="read-more-content" data-length="200">{{ $unit->compound['title_'. app()->getLocale()] }}</span>
                                    <button class="read-more-btn"> ...Read More</button>
                                </div>




                                <a class="about-dev-url" href="{{ $unit->compound->website }}" target="_blank">{{ $unit->compound->website }}</a>
                            </div>
                        </div>
                    </div>

                    <div class="offers-home">
                        <p class="my-lg-auto my-3 offers-home-header">{{ __('msg.what_this_home_offers') }}</p>

                        <div class="home-features-container">
                            <div class="home-features-grid">
                                @foreach($unit->amenities as $amenitie)
                                    <div class="hfg-card">
                                        <img class="img-fluid" src="{{asset('uploads'.$amenitie->image->image_path)}}" alt="" />
                                        <div class="hfg-title">{{ $amenitie['title_'. app()->getLocale()] }}</div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="hfg-show-all">
                                <button class="d-flex align-items-center">
                                    <img class="img-fluid" src="{{asset('assets/App_Images/product_features/amenities.svg')}}" alt="" />
                                    <div class="hfg-title">Show all {{ count($unit->amenities) }} amenities</div>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="justify-content-between loc-video">
                        <div class="">
                            <p class="head mb-3">{{ __('msg.where_be') }}</p>
                            <div id="map" data-lat="{{ $unit->location_lat }}" data-lng="{{ $unit->location_log }}"></div>
                        </div>
                    </div>

                    <div class="vp-video">
                        <div class="wat-vid-title d-flex mb-3 align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30.294" height="19.089" viewBox="0 0 30.294 19.089">
                                <path id="video-camera" d="M29.98,1.7a.642.642,0,0,0-.635-.012l-6.951,3.8V3.209A3.213,3.213,0,0,0,19.184,0H3.209A3.213,3.213,0,0,0,0,3.209V15.88a3.213,3.213,0,0,0,3.209,3.209H19.184a3.213,3.213,0,0,0,3.209-3.209V13.644l6.951,3.8a.642.642,0,0,0,.949-.563V2.254A.642.642,0,0,0,29.98,1.7ZM21.109,15.88a1.927,1.927,0,0,1-1.925,1.925H3.209A1.928,1.928,0,0,1,1.284,15.88V3.209A1.928,1.928,0,0,1,3.209,1.284H19.184A1.928,1.928,0,0,1,21.11,3.209Zm7.9-.086-6.617-3.613V6.949L29.01,3.336Zm0,0" fill="#707070"/>
                            </svg>

                            <p class="head mb-0 ms-2">{{ __('msg.watch_video') }}</p>
                        </div>
                        @if($unit->is_youtube)
                            <iframe class="embed-iframe-vid" width="100%" height="400" src="https://www.youtube.com/embed/{{ $unit->video_path }}?autoplay=1&mute=1"></iframe>
                        @else
                            <div class="vp-static-video">
                                <video autoplay="" loop="" muted="">
                                    <source src="{{ $unit->video_path }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            </div>
                        @endif
                    </div>
                    <div class="unit-details-points">
                        <div class="unit-det-title">{{ __('msg.things_know') }}</div>
                        @foreach(explode('.', $unit['description_'. app()->getLocale()] ) as $item)
                            <div class="unit-det-point">{{ $item }}</div>
                        @endforeach
                    </div>
                    <div class="unit-details-points udp-2">
                        <div class="unit-det-title white-color">{{ __('msg.things_know') }}</div>
                        @foreach(explode('.', $unit['description_left_'. app()->getLocale()]) as $item)
                            <div class="unit-det-point">{{ $item }}</div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="advanc-slider w-100 row gx-0 justify-content-between  mb-74">
                <div class="col-12 my-4">
                    <h3 class="Similar pb-4">{{ __('msg.similar_homes') }}</h3>
                </div>
                <div class="similar-homes-title">{{ $unit->compound['title_'. app()->getLocale()] }} {{ __('msg.compound') }}</div>


                <div class="areas-container">
                    <div class="areas-grid">
                        <!-- ******** Start Row ******** -->
                        @foreach($compound->unites as $unit)
                                <div class="area-card">
                            <!-- Images -->
                            <div class="slider advsear ">
                                @foreach($unit->images->slice(0,4) as $image)
                                    <a class="unit-card-images" href="{{route('unit_details', ['compound'=>$unit->compound->slug_en,'unit_id'=> $unit->id])}}">
                                        <div class="unit-card-price">{{$unit->price}}</div>
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
                            <a href="{{route('unit_details', ['compound'=>$unit->compound->slug_en,'unit_id'=> $unit->id])}}">
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
                                        <p>{{$unit->price}}</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- ******** End Row ******** -->
                        @endforeach

                    </div>
                </div>

            </div>
{{--            <script type='text/javascript'--}}
{{--                    src='https://platform-api.sharethis.com/js/sharethis.js#property=63030dc8de1069001998acc6&product=sop'--}}
{{--                    async='async'></script>--}}
        </div>
    </div>
    <div id="whatsappBtnUnit" class="whatsapp-btn">
        <div class="whatsapp-unit">
            <img src="{{ asset('assets/App_Images/whatsapp.svg') }}" class="img-fluid" alt="" />
        </div>
    </div>
    <style type="text/css">
        #whatsappBtn {
            display: none !important;
        }
    </style>
@endsection
