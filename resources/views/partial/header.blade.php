<div class="navabr-container">
    <div class="container">
        <div class="navbar-flexable d-flex justify-content-between align-items-center">
            <div class="navbar-logo">
                <a href="{{ route('home') }}"><img src="{{ asset('assets/App_Images/logo.png') }}" class="img-fluid" alt="" /></a>
            </div>
            <div class="navbar-links d-flex">
                <a href="tel:{{ $config['phone_number'] }}" class="navbar-toggle-btn navbar-call-btn"><img class="img-fluid" src="{{ asset('assets/App_Images/phone.svg') }}" alt="Hamburger" /></a>
                <div class="navbar-lang">
                    <div class="dropdown">
                        <button class="btn dropdown-toggle flex-center-v" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{ asset('assets/App_Images/globe.svg') }}" class="nav-lang-img img-fluid" alt="" /> <span class="lang-text">EN</span>
                        </button>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="javascript:void(0)">AR</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="javascript:void(0)">EN</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <button class="navbar-toggle-btn navbar-burger-btn active"><img class="img-fluid" src="{{ asset('assets/App_Images/hamburger.png') }}" alt="Hamburger" /></button>
                <button class="navbar-toggle-btn navbar-close-btn"><img class="img-fluid" src="{{ asset('assets/App_Images/close.png') }}" alt="Close" /></button>
                <div class="navbar-links-content">
                    <div class="navbar-links-box">
                        <a href="{{ route('explore_homes') }}">{{ __('msg.explore_homes') }}<img class="nav-arrow-icon" src="{{ asset('assets/App_Images/green-arrowright.png') }}" alt="" /></a>
                        <a href="{{ route('about') }}">{{ __('msg.about') }}<img class="nav-arrow-icon" src="{{ asset('assets/App_Images/green-arrowright.png') }}" alt="" /></a>
                        <a href="{{ route('service') }}">{{ __('msg.services') }} <img class="nav-arrow-icon" src="{{ asset('assets/App_Images/green-arrowright.png') }}" alt="" /></a>
                        <a href="{{ route('contact-us') }}">{{ __('msg.contact_us') }}<img class="nav-arrow-icon" src="{{ asset('assets/App_Images/green-arrowright.png') }}" alt="" /></a>
                    </div>
                    <div class="navbar-footer">
                        <div class="nf-title">{{ __('msg.news_offers') }}</div>
                        <div class="nf-subscribe">
                            <input type="text" class="form-control border-0 bg-transparent pb-2"
                                   placeholder="{{ __('msg.your_email_here') }}" aria-label="Recipient's username"
                                   aria-describedby="button-addon2">
                            <button class="btn foot-btn-subscribe btn-outline-secondary border-0 bg-transparent"type="button" id="button-addon2">
                                <span>{{ __('msg.subscribe') }}</span>
                            </button>
                        </div>
                        <div class="nf-text">{{ __('msg.sign_up_to_receive') }}</div>
                        <div class="nf-socialmedida d-flex justify-content-between align-items-center">
                            <div class="nfs-title">{{ __('msg.follow_us') }}</div>
                            <div class="nfs-social">
                                <a class="foot-social-link" href="{{ $config['facebook'] }}" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                                <a class="foot-social-link" href="{{ $config['youtube'] }}" target="_blank"><i class="fa-brands fa-youtube"></i></a>
                                <a class="foot-social-link" href="{{ $config['instegram'] }}" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                                <a class="foot-social-link" href="{{ $config['linkedin'] }}" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="nf-copyright">
                            <div class="nf-left">HelloHome 2022 &copy; All Rights Reserved</div>
                            <div class="nf-right"><a class="foot-des-link" href="#" target="_blank">Privacy Policy</a></div>
                            <div class="nf-bottom">Designed by <a class="foot-des-link" href="https://directorstudio.me/" target="_blank">Director Studio</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
