<footer class="mt-5 ">
    <div class="container position-relative px-md-0 px-4 ">
        <nav class="navbar navbar-expand navbar-light ">
            <div class=" d-flex justify-content-between row gx-0 align-items-center px-md-1 ">
                <a class="col-lg-3 col-12 order-1 footer-logo" href="{{route('home')}}">
                    <img src="{{ asset('assets/App_Images/Footer-Logo.png') }}" class="img-fluid h-auto" alt="">
                </a>
                <ul
                    class="footer-nav-links order-2 navbar-nav mb-2 mb-lg-0 col-lg-6 col-12 d-flex justify-content-lg-center justify-content-between">
                    <li class="nav-item mx-lg-3 mx-0 py-lg-0 py-2">
                        <a class="nav-link active" aria-current="page" href="{{route('home')}}">{{ __('msg.homes') }}</a>
                    </li>
                    <li class="nav-item mx-lg-3 mx-0 py-lg-0 py-2">
                        <a class="nav-link active" aria-current="page" href="{{route('about')}}">{{ __('msg.about') }}</a>
                    </li>
                    <li class="nav-item mx-lg-3 mx-0 py-lg-0 py-2">
                        <a class="nav-link active" aria-current="page" href="{{route('service')}}">{{ __('msg.services') }}</a>
                    </li>
                    <li class="nav-item mx-lg-3 mx-0 py-lg-0 py-2">
                        <a class="nav-link active" aria-current="page" href="{{route('contact-us')}}">{{ __('msg.contact_us') }}</a>
                    </li>
                </ul>
                <ul
                    class=" order-lg-3 order-4 navbar-nav mb-2 mb-lg-0 col-lg-3 col-11 d-flex justify-content-between ">
                    <li class="nav-item mx-lg-2 mx-0 py-lg-0 py-2">
                        <p class="follow-us-text nav-link active py-0 my-0 followdash px-0">{{ __('msg.follow_us') }}</p>
                    </li>
                    <li class="nav-item mx-lg-2 mx-0 py-lg-0 py-2">
                        <a class="foot-social-link" href="{{ $config['facebook'] }}" target="_blank">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                    </li>
                    <li class="nav-item mx-lg-2 mx-0 py-lg-0 py-2">
                        <a class="foot-social-link" href="{{ $config['youtube'] }}" target="_blank">
                            <i class="fa-brands fa-youtube"></i>
                        </a>
                    </li>
                    <li class="nav-item mx-lg-2 mx-0 py-lg-0 py-2">
                        <a class="foot-social-link" href="{{ $config['instegram'] }}" target="_blank">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                    </li>
                    <li class="nav-item mx-lg-2 mx-0 py-lg-0 py-2">
                        <a class="foot-social-link" href="{{ $config['linkedin'] }}" target="_blank">
                            <i class="fa-brands fa-linkedin-in"></i>
                        </a>
                    </li>
                </ul>
                <div
                    class=" order-lg-4 order-3 row justify-content-between row Subscribe col-lg-7 col-12 mx-auto px-0 my-md-5 my-3">
                    <p class="footer-news-title col-lg-auto order-1 ps-0 ">{{ __('msg.news_offers') }}</p>
                    <span class="footer-news-desc col-lg order-lg-2 order-3 px-lg-2 px-0">{{ __('msg.sign_up_to_receive') }}</span>

                    <div
                        class=" col-12 order-lg-3 order-2 input-group mb-3 bg-transparent Subscribe-input border p-0 w-100">
                        <input id="subscribeInput" type="email" class="form-control border-0 bg-transparent pb-2"
                               placeholder="{{ __('msg.your_email_here') }}" required>
                               <input type="hidden" id="_token" value="{{ csrf_token() }}">
                        <button id="subscribeBtn" class="btn foot-btn-subscribe btn-outline-secondary border-0 bg-transparent"type="button" id="button-addon2">
                            <span>{{ __('msg.subscribe') }}</span>

                        </button>
                    </div>
                </div>
            </div>
        </nav>


        <div
            class="border-top text-centet d-flex justify-content-between align-items-center py-2 col-12 px-md-0 row">
            <p class="mb-0 boldfont py-2 fot-footer col-md-auto col-auto order-1">
                HelloHome 2022 © All Rights Reserved
            </p>
            <p class="mb-0 boldfont py-2 fot-footer col-md-auto col-12  order-lg-2 order-3">
                Designed by <a class="foot-des-link" href="https://directorstudio.me/" target="_blank">Director Studio</a>
            </p>
            <p class="mb-0 boldfont py-2 fot-footer col-md-auto col-auto order-lg-3 order-2">
                <a class="foot-des-link" href="#" target="_blank">Privacy Policy</a>
            </p>
        </div>
    </div>
</footer>
