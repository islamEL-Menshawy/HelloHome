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















@include('partial.footer')
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
