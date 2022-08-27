@extends('partial.app')
@section('title', 'Contact Us')


@section('content')
    <div class=" container contact ">
        <div id="12" class="contact-mainimg w-100">

            <div class="image position-relative">
                <img class="lazy img-fluid w-100" src="{{ asset('assets/App_images/contact-img.png') }}"
                     data-src="" />
                <div class="row container justify-content-center main-text gx-0">

                    <h1 class="my-3 text-center  col-md-9">CONTACT US</h1>
                </div>
            </div>



        </div>

        <div class="row justify-content-between gx-0">
            <div class="col-lg-9 col-md-10 col-12 text-center mx-auto mt-md-5 mb-md-74 my-3 our-mission">
                <h2 class="title mb-4">HOW CAN WE HELP YOU?</h2>

                <p class="pref mb-4">We’re here to help our people, our clients, and our communities achieve their
                    ambitions. So let us know what you’re interested in, or what you’re looking for, and we’ll get back
                    to you shortly</p>

            </div>
            <form class=" col-md-5 order-2 order-md-1 row justify-content-between form-content gx-0">
                <div class="col-12 row d-flex justify-content-between bef-contact align-items-center">
                    <p class="col-md-auto">Send us A Message</p>
                    <p class="col smal">For all other inquiries, please complete the form below.</p>
                </div>
                <div class=" mb-4 form-group col-6 img-49">

                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="First Name">
                </div>
                <div class=" mb-4 form-group col-6 img-49">

                    <input type="email" class="form-control" id="exampleFormControlInput2" placeholder="Last Name">
                </div>
                <div class=" mb-4 form-group col-12 img-100">

                    <input type="email" class="form-control" id="exampleFormControlInput3"
                           placeholder="name@example.com">
                </div>
                <div class=" mb-4 form-group col-12 img-100" onsubmit="process(event)">
                    <input class="w-100" id="phone" type="tel" name="phone" />
                </div>
                <div class=" mb-4 form-group col-12">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <d-v class="col-12">
                    <button type="button"
                            class="btn btn-success w-100 px-md-0 px-2 mb-3 d-flex  align-items-center justify-content-center contact-submit">Search</button>

                </d-v>
            </form>
            <div class="row col-md-6 order-1 order-md-2  justify-content-between contact-text align-self-start">

                <div class="col-md-6 col-12 location order-1">

                    <p class="pref mb-4">Villa 117, Shiekh Said Tantawy St, District 1, 5thSettlement, New Cairo, Cairo,
                        Egypt</p>

                </div>
                <div class="col-md-6 col-12 contact-info order-md-2 order-3 mb-4">


                    <ul class="list-unstyled">
                        <li>+2 2 5636 494</li>
                        <li> +20 120 200 0043</li>
                        <li>info@hhegypt.com</li>
                    </ul>

                </div>
                <div class="col-12 order-md-2 order-md-3 order-2 mb-4">
                    <a href="#" class="go-direc">Get Direction</a>

                </div>
            </div>
        </div>
        <script>
            const phoneInputField = document.querySelector("#phone");
            const phoneInput = window.intlTelInput(phoneInputField, {
                utilsScript:
                    "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
            });
        </script>


    </div>
    <script type='text/javascript'
            src='https://platform-api.sharethis.com/js/sharethis.js#property=63030dc8de1069001998acc6&product=sop'
            async='async'></script>
    </div>
@endsection
