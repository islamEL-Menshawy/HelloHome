@extends('partial.app')
@section('title', $attributes['contact_page_title_'. app()->getLocale()])
@section('content')
    <div class=" container contact ">
        <div id="12" class="contact-mainimg w-100">

            <div class="image position-relative">
                <picture>
                    <source media="(min-width: 768px)" srcset="{{ asset( $attributes['main_image']) }}">
                    <source media="(min-width: 10px)" srcset="{{ asset($attributes['main_image']) }}">
                    <img class="img-fluid lazy" src="{{ asset($attributes['main_image']) }}" alt="{{ $attributes['main_image_alter_' . app()->getLocale()] }}">
                </picture>


                <div class="row container justify-content-center main-text gx-0">
                    <h1 class="my-3 text-center  col-md-9">{{ $attributes['contact_page_title_'. app()->getLocale()] }}</h1>
                </div>
            </div>



        </div>

        <div class="row justify-content-between gx-0">
            <div class="col-lg-9 col-md-10 col-12 text-center mx-auto mt-md-5 mb-md-74 my-3 our-mission">
                <h2 class="title mb-4">{{ $attributes['contact_section_1_title_'. app()->getLocale()] }}</h2>

                <p class="pref mb-4">{{ $attributes['contact_section_1_text_'. app()->getLocale()] }}</p>

            </div>
            <form id="contactUsForm" class=" col-md-6 order-2 order-md-1 row justify-content-between form-content gx-0">
                <div class="col-12 row d-flex justify-content-between bef-contact align-items-center">
                    <p class="col-md-auto send-msg-head">{{ __('msg.send_us_a_message') }}</p>
                    <p class="col smal">{{ __('msg.for_all_other_inquiries') }}</p>
                </div>
                <div class=" mb-4 form-group col-6 img-49">

                    <input type="text" name="firstName" class="form-control" placeholder="{{ __('msg.first_name') }}">
                </div>
                <div class=" mb-4 form-group col-6 img-49">

                    <input type="text" name="lastName" class="form-control" placeholder="{{ __('msg.last_name') }}">
                </div>
                <div class=" mb-4 form-group col-12 img-100">

                    <input type="email" name="email" class="form-control" placeholder="name@example.com">
                </div>
                <div class=" mb-4 form-group col-12 img-100" onsubmit="process(event)">
                    <input class="w-100" id="phone" type="tel" name="phone_number" />
                    <input class="w-100" type="hidden" name="phone_code" value="20" />
                </div>
                <div class=" mb-4 form-group col-12">
                    <textarea name="massage" class="form-control" placeholder="{{ __('msg.write_your_message') }}" rows="3"></textarea>
                </div>
                <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">
                <d-v class="col-12">
                    <button id="contactUsBtn" type="button"
                            class="btn btn-success w-100 px-md-0 px-2 mb-3 d-flex  align-items-center justify-content-center contact-submit">{{ __('msg.send_now') }}</button>

                </d-v>
            </form>
            <div class="row col-md-6 order-1 order-md-2  justify-content-between contact-text align-self-start">

                <div class="col-md-6 col-12 location order-1">

                    <p class="pref mb-4">{{ $attributes['contact_address_'. app()->getLocale()] }}</p>

                </div>
                <div class="col-md-6 col-12 contact-info order-md-2 order-3 mb-4">


                    <ul class="list-unstyled">
                        <li>{{ $attributes['contact_phone_1'] }}</li>
                        <li>{{ $attributes['contact_phone_2'] }}</li>
                        <li>{{ $attributes['contact_email'] }}</li>
                    </ul>

                </div>
                <div class="col-12 order-md-2 order-md-3 order-2 mb-4 d-flex">
                    <a href="{{ $config['location'] }}" class="go-direc">{{ __('msg.get_direction') }}</a>

                </div>
            </div>
        </div>
    </div>

@endsection
