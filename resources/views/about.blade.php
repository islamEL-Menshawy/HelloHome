@extends('partial.app')
@section('title', 'About')


@section('content')
    <div class=" container about">
        <div class="about-mainimg w-100">

            <div class="image position-relative">
                <p class="sup-text my-3 text-center col-12">WHO WE ARE</p>

                <picture>
                    <source media="(min-width: 768px)" srcset="{{ asset('assets/App_Images/about.png') }}">
                    <source media="(min-width: 10px)" srcset="{{ asset('assets/App_Images/aboutmop.png') }}">



                    <img class="img-fluid " src="{{asset('assets/App_Images/about.png')}}">
                </picture>

                <div class="row container">
                    <h1 class="my-3 text-center main-text col-12">ABOUT HELLOHOME</h1>
                </div>
            </div>



        </div>

        <div class="row">
            <div class="col-lg-9 col-md-10 col-12 text-center mx-auto mt-md-5 mb-md-74 my-3 section-1">
                <h2 class="title mb-4">AT HELLOHOME, WE OPEN DOORS</h2>
                <h3 class="sup-title mb-4">TO THE FINEST HOMES AND VILLAS IN THE MOST DESIRABLE DESTINATIONS IN EGYPT.
                </h3>
                <p class="pref mb-4">We believe renting your new home - apartment or villa is more than just a move.
                    It’s something bigger. A step forward. A new beginning. A fresh start.
                    Whether you’re moving across the country or across the street,
                    you deserve to love where you land.</p>
                <p class="pref mb-4">But today’s rental experience is broken. It’s outdated, exhausting, and slow. We
                    spend hours of our lives searching just to settle for places that don’t feel like home. The
                    nightmare ends now.</p>
                <a href="{{ asset('assets/App_Images/download.doc') }}" download target="_blank" class="btn btn-outline-secondary dl-pro-btn">Download Our Profile</a>

            </div>
            <div class="col-lg-9 col-md-10 col-12 text-center mx-auto mt-md-5 mb-md-74 my-3 section-1">
                <span class="smallQus mb-4">What Makes Us Different?</span>
                <h2 class="title mb-4 mt-2">A new way of renting</h2>
                <h3 class="sup-title mb-4">WE COMBINE THE SERVICES OF A HOTEL<br /> WITH THE COMFORTS OF HOME!
                </h3>
                <p class="pref mb-4">When you book with us, your experience is professionally managed to bring the
                    quality and consistency of a hotel, combined with the comforts of home, to deliver a unique
                    experience that allows our guests the ability to enjoy the best of both worlds.</p>
                <p class="pref mb-4">Our goal is to have our residents stay with us as long as possible. That’s why
                    we’re passionate about creating rented homes you can actually make your own, a community that
                    welcomes pets and a space you can meet like-minded people in. We don’t believe in landlords letting
                    themselves in unannounced or preventing you from hanging your favorite photos.</p>


            </div>
            <div class="col-12 row neway-sec justify-content-between gx-0 mb-39">
                <div class="col-lg-6 img-49-ds col-12 d-flex align-items-center p-3 order-lg-1 order-2 ">
                    <h3 class="text-left neway-sec-heading">
                        We want our tenants to be happy in the homes we let to them.
                        Our experience tells us that happy
                        tenants are good tenants.
                    </h3>
                </div>
                <div class="col-lg-6 img-49-ds col-12 order-lg-2 order-1">
                    <img class="lazy img-fluid w-100" src="{{ asset('assets/App_Images/neway.png') }}"
                         alt="Guests Services" alt="Guests Services">

                </div>
            </div>
            <div class="col-lg-9 col-md-10 col-12 text-center mx-auto mt-md-5 mb-md-74 my-3 our-mission">
                <h2 class="title mb-4">Our Mission</h2>

                <p class="pref mb-5">HelloHome is on a mission to change the way you rent, forever. To make it easi- er,
                    faster, and more human. By making this vision a reality, we’re creating oppor- tunity for everyone
                    to live better—from one fresh start to the next.</p>
                <p class="pref mb-2">A local network with local market experts</p>
                <p class="pref mb-5">For over 15 years now, we have been specialized in the brokerage of premium
                    residential properties.</p>
                <span class="smallQus ">Who We Help</span>
                <h3 class="title my-4">GREAT RESIDENTS FOR GREAT LANDLORDS AND GREAT LANDLORDS FOR GREAT RESIDENTS.</h3>

            </div>
            <div class="col-12 text-center mx-auto mt-md-5 mb-md-74 my-3 row section-main justify-content-between gx-0 align-items-start">
                <div class="col-md-6 col-12 my-4 img-49-sm position-relative row gx-0">
                    <button type="button"
                            class="btn btn-outline-secondary w-100 col-12 text-center mb-4 Services-but">Guest
                        Services</button>
                    <div>
                        <img class="lazy img-fluid w-100 col-12" src="{{ asset('assets/App_Images/about2.png') }}"
                              alt="Guests Services" alt="Guests Services">
                    </div><p class="pref my-4 px-md-3 px-2">By making renting an apartment as easy as booking a hotel. From
                        browsing and touring to apply- ing and signing the lease, the entire process is becoming faster,
                        easier, and more trustworthy on HelloHome.</p>

                </div>
                <div id="5" class="col-md-6 col-12 my-4 img-49-sm position-relative row gx-0">
                    <button type="button"
                            class="btn btn-outline-secondary w-100 col-12 text-center mb-4 Owner-but">Homes Owner</button>
                    <div>

                        <img class="lazy img-fluid w-100 col-12" src="{{ asset('assets/App_Images/about3.png') }}"
                              alt="Guests Services" alt="Guests Services">
                    </div><p class="pref my-4 px-md-3 px-2">We provide peace-of-mind, convenience and flexibility to
                        homeowners looking to make the best use out of their homes when they’re away. We have packages
                        to suit all types of landlords, whether you need to find tenants, ensure you’re legally covered
                        and ready to let, or require full management of your property.</p>

                </div>
            </div>
        </div>

    </div>

    </div>
    <script type='text/javascript'
            src='https://platform-api.sharethis.com/js/sharethis.js#property=63030dc8de1069001998acc6&product=sop'
            async='async'></script>
@endsection
