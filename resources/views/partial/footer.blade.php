<footer class="footer">
    <div class="container">
        <div class="footer-content">
            <div class="footer-grid">
                <!-- Left -->
                <div class="foot-left">
                    <div class="footer-logo">
                        <a href="{{route('home')}}"><img class="img-fluid" src="{{ asset('assets/App_Images/Footer-Logo.png') }}" alt="Logo" /></a>
                    </div>
                </div>

                <!-- Center -->
                <div class="foot-center">
                    <div class="footer-links mb-5">
                        <a class="foot-link" href="{{route('home')}}">{{ __('msg.homes') }}</a>
                        <a class="foot-link" href="{{route('about')}}">{{ __('msg.about') }}</a>
                        <a class="foot-link" href="{{route('service')}}">{{ __('msg.services') }}</a>
                        <a class="foot-link" href="{{route('contact-us')}}">{{ __('msg.contact_us') }}</a>
                        <a class="foot-link" href="{{route('news')}}">{{ __('msg.news') }}</a>
                    </div>
                    <div class="foot-form">
                        <div class="foot-form-text mb-3 d-flex align-items-center">
                            <div class="title">{{ __('msg.news_offers') }}</div>
                            <div class="text">{{ __('msg.sign_up_to_receive') }}</div>
                        </div>
                        <form class="form-newsletter">
                            <div class="input-newsletter">
                                <input id="subscribeInput" type="email" placeholder="{{ __('msg.your_email_here') }}" required />
                                <input type="hidden" id="_token" value="{{ csrf_token() }}">
                                <button id="subscribeBtn" class="btn d-flex align-items-center" type="button">
                                    {{ __('msg.subscribe') }} <i class="fa-solid fa-arrow-right ml-2 icon"></i>
                                </button>
                            </div>
                            <div class="text d-none">{{ __('msg.newsletter_description') }}</div>
                        </form>
                    </div>
                </div>

                <!-- Right -->
                <div class="foot-right">
                    <div class="foot-socialmedia d-flex align-items-center justify-content-between">
                        <div class="social-text">{{ __('msg.follow_us') }}</div>
                        <div class="social-line"></div>
                        <div class="social-icons">
                            <a class="social-link" href="{{ $config['facebook'] }}" target="_blank">
                                <i class="fa-brands fa-facebook-f icon"></i>
                            </a>
                            <a class="social-link" href="{{ $config['youtube'] }}" target="_blank">
                                <i class="fa-brands fa-youtube icon"></i>
                            </a>
                            <a class="social-link" href="{{ $config['instegram'] }}" target="_blank">
                                <i class="fa-brands fa-instagram icon"></i>
                            </a>
                            <a class="social-link" href="{{ $config['linkedin'] }}" target="_blank">
                                <i class="fa-brands fa-linkedin-in icon"></i>
                            </a>
{{--                            <a class="social-link" href="{{ $config['tiktok'] }}" target="_blank">--}}
{{--                                <img class="social-img img-fluid" src="{{ asset('assets/App_Images/tiktok.svg') }}" />--}}
{{--                            </a>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-bottom d-flex align-items-center justify-content-between">
            <div class="fb-text">{{ __('msg.rights_reserved') }}</div>
            <div class="fb-text">{{ __('msg.designed_by') }} <a target="_blank" href="https://www.directorstudio.me">Director Studio</a></div>
            <div class="fb-text"><a href="privacy.html">{{ __('msg.privacy_policy') }}</a></div>
        </div>
    </div>
</footer>
