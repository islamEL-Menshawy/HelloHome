<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <!-- Basic meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, ">
    <meta name="rating" content="general">


    <!-- Bing Search meta tags -->
    <meta name="msvalidate.01" content="" />

    <title>{{ config('app.name')}} - @yield('title')</title>
    <meta name="title" content="">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- og meta tags -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:url" content="">
    <meta property="og:locale" content="en_EN">
    <meta property="og:image" content="imge/default.jpg">
    <meta property="og:image:width" content="">
    <meta property="og:image:height" content="">
    <meta property="og:site_name" content="">

    <!-- twitter meta tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="">
    <meta name="twitter:site" content="@">
    <meta name="twitter:creator" content="@">
    <meta name="twitter:image" content="imge/default.jpg">
    <meta name="twitter:image:alt" content="">
    <!-- twitter meta tags -->
    <link rel="icon" type="imge/x-icon" sizes="16x16" href="{{ asset('assets/App_Images/Cl-Logo-w.png') }}">


    <link rel="stylesheet" href="{{ asset('assets/content/Css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/content/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/content/css/shared-ltr.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/slick/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/slick/slick-theme.css') }}">

    <style>
        select {
            width: 100%;
        }
    </style>
</head>

<body class="bg-white">

@include('partial.header')




@yield('content')















<footer class="mt-5 ">
    <div class="container position-relative px-md-0 px-4 ">
        <nav class="navbar navbar-expand navbar-light ">
            <div class=" d-flex justify-content-between row gx-0 align-items-center px-md-1 ">
                <a class="col-lg-3 col-12 order-1" href="#">
                    <img src="{{ asset('assets/App_Images/Footer-Logo.png') }}" class="img-fluid h-auto" alt="">
                </a>
                <ul
                    class=" order-2 navbar-nav mb-2 mb-lg-0 col-lg-6 col-12 d-flex justify-content-lg-center justify-content-between">
                    <li class="nav-item mx-lg-3 mx-0 py-lg-0 py-2">
                        <a class="nav-link active" aria-current="page" href="#"> Homes</a>
                    </li>
                    <li class="nav-item mx-lg-3 mx-0 py-lg-0 py-2">
                        <a class="nav-link active" aria-current="page" href="#">About</a>
                    </li>
                    <li class="nav-item mx-lg-3 mx-0 py-lg-0 py-2">
                        <a class="nav-link active" aria-current="page" href="#">Services</a>
                    </li>
                    <li class="nav-item mx-lg-3 mx-0 py-lg-0 py-2">
                        <a class="nav-link active" aria-current="page" href="#">Contact Us</a>
                    </li>
                </ul>
                <ul
                    class=" order-lg-3 order-4 navbar-nav mb-2 mb-lg-0 col-lg-3 col-11 d-flex justify-content-between ">
                    <li class="nav-item mx-lg-2 mx-0 py-lg-0 py-2">
                        <p class="nav-link active py-0 my-0 followdash px-0">follw us</p>
                    </li>
                    <li class="nav-item mx-lg-2 mx-0 py-lg-0 py-2">
                        <i class="fa-brands fa-facebook-f"></i>
                    </li>
                    <li class="nav-item mx-lg-2 mx-0 py-lg-0 py-2">
                        <i class="fa-brands fa-twitter"></i>
                    </li>
                    <li class="nav-item mx-lg-2 mx-0 py-lg-0 py-2">
                        <i class="fa-brands fa-instagram"></i>
                    </li>
                    <li class="nav-item mx-lg-2 mx-0 py-lg-0 py-2">
                        <i class="fa-brands fa-linkedin-in"></i>
                    </li>
                </ul>
                <div
                    class=" order-lg-4 order-3 row justify-content-between row Subscribe col-lg-7 col-12 mx-auto px-0 my-md-5 my-3">
                    <p class="col-lg-auto order-1 ps-0 ">News & Offers</p>
                    <span class="col-lg order-lg-2 order-3 px-lg-2 px-0">Sign up to receive exclusive news and offers about the
                            latest launches</span>

                    <div
                        class=" col-12 order-lg-3 order-2 input-group mb-3 bg-transparent Subscribe-input border p-0 w-100">
                        <input type="text" class="form-control border-0 bg-transparent pb-2"
                               placeholder="Your email here" aria-label="Recipient's username"
                               aria-describedby="button-addon2">
                        <button class="btn btn-outline-secondary border-0 bg-transparent text-start py-2"
                                type="button" id="button-addon2">Subscribe</button>
                    </div>
                </div>
            </div>
        </nav>


        <div
            class="border-top text-centet d-flex justify-content-between align-items-center py-2 col-12 px-md-0 row">
            <p class="mb-0 boldfont py-2 fot-footer col-md-auto col-auto order-1">
                HelloHome 2022 © All rights reserved
            </p>
            <p class="mb-0 boldfont py-2 fot-footer col-md-auto col-12  order-lg-2 order-3">
                Designed by Director Studio
            </p>
            <p class="mb-0 boldfont py-2 fot-footer col-md-auto col-auto order-lg-3 order-2">
                Privacy Policy
            </p>
        </div>
    </div>

</footer>
{{--<script async>--}}
{{--    document.addEventListener("DOMContentLoaded", function () {--}}
{{--        const lazyLoad = function () {--}}
{{--            let lazyImages = [].slice.call(document.querySelectorAll("img.lazy"));--}}
{{--            let active = false;--}}
{{--            if (active === false) {--}}
{{--                active = true;--}}
{{--                setTimeout(function () {--}}
{{--                    lazyImages.forEach(function (lazyImage) {--}}

{{--                        if ((lazyImage.getBoundingClientRect().top <= window.innerHeight && lazyImage.getBoundingClientRect().bottom >= 0) && getComputedStyle(lazyImage).display !== "none") {--}}

{{--                            lazyImage.src = lazyImage.dataset.src;--}}
{{--                            lazyImage.classList.remove("lazy");--}}

{{--                            lazyImages = lazyImages.filter(function (image) {--}}
{{--                                return image !== $(this);--}}
{{--                            });--}}

{{--                            if (lazyImages.length === 0) {--}}
{{--                                window.removeEventListener("load", lazyLoad);--}}
{{--                                document.removeEventListener("scroll", lazyLoad);--}}
{{--                                window.removeEventListener("resize", lazyLoad);--}}
{{--                                window.removeEventListener("orientationchange", lazyLoad);--}}
{{--                            }--}}

{{--                            lazyImage.onerror = function () {--}}
{{--                                lazyImage.src = "{{asset('assets/App_Images/defultimg.jpg')}}";--}}
{{--                                lazyImage.classList.remove("lazy");--}}

{{--                                lazyImages = lazyImages.filter(function (image) {--}}
{{--                                    return image !== $(this);--}}
{{--                                });--}}

{{--                                if (lazyImages.length === 0) {--}}
{{--                                    window.removeEventListener("load", lazyLoad);--}}
{{--                                    document.removeEventListener("scroll", lazyLoad);--}}
{{--                                    window.removeEventListener("resize", lazyLoad);--}}
{{--                                    window.removeEventListener("orientationchange", lazyLoad);--}}
{{--                                }--}}
{{--                            };--}}
{{--                        }--}}
{{--                    });--}}

{{--                    active = false;--}}
{{--                }, 200);--}}
{{--            }--}}
{{--        };--}}
{{--        window.addEventListener("load", lazyLoad);--}}
{{--        document.addEventListener("scroll", lazyLoad);--}}
{{--        window.addEventListener("resize", lazyLoad);--}}
{{--        window.addEventListener("orientationchange", lazyLoad);--}}
{{--    });--}}


{{--</script>--}}
<script src="{{ asset('assets/js/multi-select.js') }}"></script>

<script src="{{ asset('assets/js/jquery-3.5.1.min.js') }}"></script>
<script src="{{ asset('assets/js/popper.min.js') }}"></script>

<script src="{{ asset('assets/js/slick.min.js') }}"></script>

<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/first.js') }}"></script>



</body>




</html>
