@extends('partial.app')
@section('title', 'Service')

@section('content')


    <div class=" container servce ">
        <div id="12" class="servce-mainimg w-100">

            <div class="services-header-img image position-relative">

                <picture>
                    <source media="(min-width: 768px)" srcset="{{ asset('assets/App_Images/service.png') }}">
                    <source media="(min-width: 10px)" srcset="{{ asset('assets/App_Images/servicemop.png') }}">


                    <div class="gradient-easing"></div>
                    <img class="img-fluid lazy" src="{{ asset('assets/App_Images/service.png') }}" alt="@item.PictureCaption" title="@item.StoryTitle">
                </picture>


                <div class="row container justify-content-center main-text gx-0">
                    <p class="sup-text my-3 text-center col-md-9">Our Services</p>

                    <h1 class="my-3 text-center  col-md-9">ARENTING A NEW HOME IS THE START <br /> OF SOMETHING GREAT.</h1>
                </div>
            </div>



        </div>

        <div class="row justify-content-between gx-0">
            <div class="mainbuton my-4 mb-md-74 row justify-content-between gx-0">
                <a href="#1" class=" w-100 col-md-6 img-49-sm col-12 mb-4"> <button type="button"
                                                                                    class="btn btn-outline-secondary w-100 text-center mainServices-but">Guest
                        Services</button></a>

                <a href="#2" class=" w-100 col-md-6 img-49-sm col-12 mb-4"> <button type="button"
                                                                                    class="btn btn-outline-secondary w-100 text-center mainOwner-but">Homes
                        Owner Services</button></a>
            </div>
            <div id="1" class=" col-lg-9 col-md-10 col-12 text-center mx-auto mt-md-5 mb-md-4 my-3 our-mission">
                <h2 class="title mb-2">Guests Services</h2>

                <p class="pref serv-sub-title mb-3">Properties Managment</p>
                <p class="pref mb-2">Our homes are where we choose to live and where precious<br /> memories are made for a
                    lifetime.</p>

            </div>




            <div class="col-12 row Guests-sec justify-content-between gx-0 mb-md-74 my-4">
                <div class="col-12 d-lg-none d-block">
                    <img class="img-fluid" src="{{ asset('assets/App_Images/Grustsbackblock.png') }}" alt="">
                </div>

                <div class="col-lg-5 img-49-ds col-12 d-flex align-items-center guets-se px-5 p-4 row gx-0">

                    <p class="pref col-12">
                        We do our best to communicate in every way that guests are booking a home.
                    </p>
                    <h3 class="col-12">
                        CHOOSING A RENTAL HOME OVER A LUXURY HOTEL
                    </h3>
                </div>
            </div>


            <div class="col-lg-9 col-md-10 col-12 text-center mx-auto mt-md-5 mb-md-74 my-3 section-1">
                <h2 class="title mb-4">What to expect from us</h2>

                <p class="pref mb-4">At HelloHome, we deliver bespoke services that can make any stay more than
                    memorable.</p>
                <p class="pref mb-4">By making renting an apartment as easy as booking a hotel. From browsing and
                    touring to apply- ing and signing the lease, the entire process is becoming faster, easier, and more
                    trustworthy on HelloHome.</p>
                <p class="pref mb-4">We don’t believe in landlords letting themselves in unannounced or preventing you
                    from hanging your favorite photos.</p>


            </div>
            <div class="col-12 row experince-sec justify-content-between gx-0  my-5 mb-74">
                <div class="col-md-6 img-49-sm col-12">
                    <img class="lazy img-fluid w-100" src="{{ asset('assets/App_Images/tree1.png') }}" data-src=""
                         alt="Guests Services" alt="Guests Services">

                </div>

                <div class="col-md-6 img-49-sm col-12 d-flex align-items-center p-3 row pr-md-39">
                    <h3 class="aue-text">
                        ABOUT YOUR EXPERIENCE
                    </h3>
                    <p class="pref aue-para col-12">
                        Your experience is professionally managed to bring the quality and consistency of a hotel,
                        combined with the comforts of home, to deliver a unique experience that allows our guests the
                        ability to enjoy the best of both worlds.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-gra mb-5">
        <div class="container">
            <div class="row justify-content-between pt-5">
                <div class="col-lg-6 img-49-md order-lg-1 order-2 text-center">
                    <p class="layer-gray text-center">ENJOY THE FINEST HOMES AND SERVICE ALL AROUND THE ALL OVER EGYPT</p>
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
            <div id="2" class=" col-lg-9 col-md-10 col-12 text-center mx-auto mt-md-5 mb-md-74 my-3 our-mission">
                <h2 class="title mb-md-39 mb-4">Home Owners Services</h2>

                <p class="pref mb-4">For landlords, we find the right tenant at the right price to rent your property
                    and ensure everything is in place to make for a smooth letting process.</p>
                <p class="pref mb-2">HelloHome consists of a knowledgeable, experienced team of property specialists
                    that work with tenants and landlords alike, to overcome the obstacles of finding and renting the
                    right property or right tenant to suit you, your circumstances and your aims for the future.</p>

            </div>



            <div class="col-12 row neway-sec justify-content-between gx-0 my-5 mb-md-74">
                <div class="col-lg-6 img-49-ds col-12">
                    <img class="lazy img-fluid w-100" src="{{ asset('assets/App_Images/neway.png') }}"
                         alt="Guests Services" alt="Guests Services">

                </div>
                <div class="hos-details col-lg-6 img-49-ds col-12 d-flex align-items-center p-3 row gx-0">
                    <h3 class="col-11">We provide peace-of-mind,
                    </h3>
                    <p class="pref col-11">convenience and flexibility to homeowners looking to make the best use out of
                        their homes when they’re away.</p>
                </div>

            </div>

            <div class=" col-lg-9 col-md-10 col-12 text-center mx-auto mt-md-5 mb-md-74 my-3 our-mission">

                <p class="pref mb-4">We have packages to suit all types of landlords, whether you need to find tenants,
                    ensure you’re legally covered and ready to let, or require full management of your property.</p>

            </div>

            <div class="  col-12 mt-md-5 mb-md-74 my-3 our-col-det row gx-0 justify-content-between">
                <div class="col-lg-4 col-md-6 col-12 img-33-md img-49-sm img-100 px-3 ">
                    <h3 class="mb-21 mb-4">Optimise your rental income</h3>
                    <p class="pref mb-4">We save landlords thousands of pounds in fees and much more. Com- bining
                        extensive expertise in the Egypt property market and modern market- ing methodologies, we
                        consistently maximise properties’ rental value.</p>

                </div>
                <div class="col-lg-4 col-md-6 col-12 img-33-md img-49-sm img-100 px-3 ">
                    <h3 class="mb-21 mb-4">Let us take care of everything</h3>
                    <p class="pref mb-4">From property marketing to accompanied viewings, contracting, move-in, and
                        property management, we will take care of all your property needs 24/7 with our awarded team and
                        trusted suppliers.</p>

                </div>
                <div class="col-lg-4 col-md-6 col-12 img-33-md img-49-sm img-100 px-3 ">
                    <h3 class="mb-21 mb-4">Find great renters</h3>
                    <p class="pref mb-4">We will introduce your property to thousands of renters that fit your
                        requirements. Our database is comprised of professionals, families and students who are looking
                        for their new short and long-term home.</p>

                </div>
            </div>

            <div class="col-12 mx-auto mt-md-5 mb-md-74 my-3 row section-emplo justify-content-between gx-0">
                <div class="col-lg-4 img-33-ds col-12 my-4 position-relative row gx-0 emplo-dv">
                    <div class="d-lg-none col-12 d-block p-3 row gx-0">
                        <h3 class="d-flex justify-content-center align-items-center p-4 mb-md-39 mb-5">WITH GREAT
                            ATTENTION TO DETAIL, WE TAKE CARE OF EVERYTHING</h3>

                    </div>
                    <div class="wiga-img col-12">
                        <img class="lazy img-fluid w-100 col-12" src="{{ asset('assets/App_Images/emplo.png') }}"
                             alt="Guests Services" alt="Guests Services">


                    </div>


                </div>
                <div class="col-lg-8 col-12 my-4  position-relative row gx-0 pl-md-21">
                    <h3 class="d-lg-block d-none justify-content-center align-items-center p-4 mb-md-39 mb-5">WITH GREAT
                        ATTENTION TO DETAIL, WE TAKE CARE OF EVERYTHING</h3>
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
                <div
                    class="col-lg-8 col-12 my-lg-2 my-4  position-relative tree-text row gx-0 px-3 px-md-21 order-lg-1 order-2">
                    <h3 class=" justify-content-center align-items-center p-4">WITH GREAT
                        ATTENTION TO DETAIL, WE TAKE CARE OF EVERYTHING</h3>
                    <!-- <hr> -->
                    <p class="pref">We tailor a plan specific to your goals while offering a guar- anteed income
                        resulting in a clear and concise objective.</p>

                </div>
                <div class="col-lg-4 img-33-ds  my-lg-2 col-12 position-relative row gx-0 tree-dv order-lg-2 order-1">
                    <img class="lazy img-fluid w-100 col-12" src="{{ asset('assets/App_Images/tree.png') }}"
                          alt="Guests Services" alt="Guests Services">
                </div>


            </div>

        </div>

    </div>
    <script type='text/javascript'
            src='https://platform-api.sharethis.com/js/sharethis.js#property=63030dc8de1069001998acc6&product=sop'
            async='async'></script>
    </div>
@endsection
