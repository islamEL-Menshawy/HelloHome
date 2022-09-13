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

    <title>HelloHome - @yield('title')</title>
    <meta name="title" content="">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="icon" type="imge/x-icon" sizes="16x16" href="{{ asset('assets/') }}App_Images/Cl-Logo-w.png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" /> <!-- Swiper Js -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slim-select/1.27.1/slimselect.min.css"></link>
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

<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script> <!-- Swiper Js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/slim-select/1.27.1/slimselect.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB41DRUbKWJHPxaFjMAwdrzWzbVKartNGg&callback=initMap&v=weekly"        defer>
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.5.10/clipboard.min.js"></script> 
<script src="{{ asset('assets/js/multi-select.js') }}"></script>

<script src="{{ asset('assets/js/jquery-3.5.1.min.js') }}"></script>
<script src="{{ asset('assets/js/popper.min.js') }}"></script>

<script src="{{ asset('assets/js/slick.min.js') }}"></script>

<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/first.js') }}"></script>

<script>
    const swiper1 = new Swiper('.swiper.swiper-home-header', {
        // Optional parameters
        direction: 'horizontal',
        loop: false,
        slidesPerView: 1,
        spaceBetween: 10,
        autoplay: true,
        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });

    const swiper2 = new Swiper('.swiper.swiper-home-brands', {
        // Optional parameters
        direction: 'horizontal',
        loop: false,

        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            // when window width is >= 320px
            320: {
                slidesPerView: 2.5,
                spaceBetween: 10
            },
            // when window width is >= 480px
            480: {
                slidesPerView: 3,
                spaceBetween: 30
            },
            // when window width is >= 640px
            640: {
                slidesPerView: 3,
                spaceBetween: 20
            },
            991: {
                slidesPerView: 4,
                spaceBetween: 20
            },
            1199: {
                slidesPerView: 5,
                spaceBetween: 20
            }
        }
    });

    new SlimSelect({
        select: '.slim-select-1',
        selected: true, // Optional - default is false
        disabled: false,
        showSearch: false,
    });

    new SlimSelect({
        select: '.slim-select-2',
        selected: true, // Optional - default is false
        disabled: false,
        showSearch: false,
    });

    new SlimSelect({
        select: '.slim-select-3',
        selected: true, // Optional - default is false
        disabled: false,
        showSearch: false,
    });

</script>

<script type="text/javascript">
    function CopyTextFunction() {
                // const params = new URLSearchParams(window.location.search);
                // params.get('ID')
                var copyText = document.location.href;
                //alert(copyText);
                // alert(copyText);
                navigator.clipboard
                  .writeText(copyText)
                  .then(() => {
                      alert("successfully copied");
                  })
                  .catch(() => {
                      alert("something went wrong");
                  });
            }

</script>

</body>
</html>





