<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <!-- Basic meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, ">
    <meta name="rating" content="general">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @yield('seo-tags')

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-QKSEJ88RZG"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-QKSEJ88RZG');
    </script>


    <!-- Bing Search meta tags -->
    <meta name="msvalidate.01" content="" />
    <!-- Project Shortcut Icon -->
  <link rel="shortcut icon" href="{{ asset('assets/App_Images/heart-logo.png') }}" type="image/x-icon" />
  <link rel="icon" href="{{ asset('assets/App_Images/heart-logo.png') }}" type="image/x-icon" />

    <title>HelloHome - @yield('title')</title>
    <meta name="title" content="">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" /> <!-- Swiper Js -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slim-select/1.27.1/slimselect.min.css"></link>
    <link rel="stylesheet" href="{{ asset('assets/content/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/content/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/content/css/shared-ltr.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/content/css/intlTelInput.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/slick/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/slick/slick-theme.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/content/css/toast.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/content/css/rtl-dir.css') }}">

    @yield('main-style')

    <style>
        select {
            width: 100%;
        }
        .iti__flag {background-image: url("{{ asset('assets/App_Images/flags.png') }}");}
    </style>
</head>
<body class="bg-white @if(app()->getLocale() === "ar") body-rtl @endif"> <!-- body-rtl -->

@include('partial.header')
@yield('content')
<!-- <script type='text/javascript'
        src='https://platform-api.sharethis.com/js/sharethis.js#property=63030dc8de1069001998acc6&product=sop&url=test.com'
        async='async'></script> -->
        <div id="whatsappBtn" class="whatsapp-btn">
            <a href="https://wa.me/201222212766?&text=Check out this home on HelloHome!" target="_blank">
                <img src="{{ asset('assets/App_Images/whatsapp.svg') }}" class="img-fluid" alt="" />
            </a>
        </div>
@include('partial.footer')

<script src="{{ asset('assets/js/jquery-3.5.1.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script> <!-- Swiper Js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/slim-select/1.27.1/slimselect.min.js"></script>
<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAn_HgrPw1nlEQr3tyYsdAL0yfbbRIGeGc&callback=initMap&v=weekly"        defer>
</script> -->
 <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAn_HgrPw1nlEQr3tyYsdAL0yfbbRIGeGc&callback=initMap&v=weekly"
      defer
    ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.5.10/clipboard.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js"></script>
<script src="{{ asset('assets/js/multi-select.js') }}"></script>
<script src="{{ asset('assets/js/popper.min.js') }}"></script>

<script src="{{ asset('assets/js/slick.min.js') }}"></script>
<script src="{{ asset('assets/js/phoneform.js') }}"></script>
<script src="{{ asset('assets/js/toast.js') }}"></script>

<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/first.js') }}"></script>
<script src="{{ asset('assets/js/ajax-requests.js') }}"></script>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v13.0&appId=629322731899614&autoLogAppEvents=1" nonce="ywRETNx8"></script>


<script>
    // Initialize and add the map
    function initMap() {
        const tagData = document.getElementById("map");
        console.log(tagData.getAttribute("data-lat"));
        // The location of Uluru
        const uluru = { lat: parseFloat(tagData.getAttribute("data-lat")), lng: parseFloat(tagData.getAttribute("data-lng")) };
        // The map, centered at Uluru
        const map = new google.maps.Map(document.getElementById("map"), {
            zoom: 15,
            center: uluru
        });

        // The marker, positioned at Uluru
        const marker = new google.maps.Marker({
            position: uluru,
            map: map,
            // title:"Hello World!",
            icon: {
                url: "https://res.cloudinary.com/aramco-sa/image/upload/c_scale,h_28/v1663098563/heart-logo_zquyjl.png",
                scale: 12,
                fillColor: "#080",
                fillOpacity: 0.4,
                strokeWeight: 0.4
            },
        });

    }

    window.initMap = initMap;
</script>

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
        lazy: {
            loadPrevNext: true, // pre-loads the next image to avoid showing a loading placeholder if possible
            loadPrevNextAmount: 1 //or, if you wish, preload the next 2 images
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
        showContent: 'down'
    });

    new SlimSelect({
        select: '.slim-select-2',
        selected: true, // Optional - default is false
        disabled: false,
        showSearch: false,
        showContent: 'down'
    });

    new SlimSelect({
        select: '.slim-select-3',
        selected: true, // Optional - default is false
        disabled: false,
        showSearch: false,
        showContent: 'down'
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

<script>
    const phoneInputField = document.querySelector("#phone");
    const phoneInput = window.intlTelInput(phoneInputField, {
        utilsScript:
            "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
    });
</script>

<script type="text/javascript">
    // Share Facebook Link
    $("#shareFacebook").on('click', function () {
        var url = window.location.href;
        window.open(`https://www.facebook.com/sharer/sharer.php?u=${url}`, '_blank');
    });

</script>

<script type="text/javascript">
    window.fbAsyncInit = function() {
        FB.init({
            appId: '629322731899614',
            xfbml: true,
            version: 'v2.9'
        });
        FB.AppEvents.logPageView();
    };
    function isMobile() {
        const toMatch = [/Android/i, /webOS/i, /iPhone/i, /iPad/i, /iPod/i, /BlackBerry/i, /Windows Phone/i];
        return toMatch.some((toMatchItem) => {
            return navigator.userAgent.match(toMatchItem);
        });
    }
function messengerShare() {
    var url = window.location.href;
    if (isMobile()) {
        window.location.href = "fb-messenger://share/?link=" + url;
    } else {
        FB.ui({
            method: 'send',
            link: url,
            redirect_uri: url
        });
    }
}
</script>

<script type="text/javascript">
    $(".wap-btn").on('click', function () {
        var url = window.location.href;
        var text = 'https://wa.me/send?text=Check out this home on HelloHome! ' + url;
        window.open(text,'_blank');
    });

    $(".whatsapp-unit").on('click', function () {
        var url = window.location.href;
        var title = $(".unit-title").text();
        var text = 'https://wa.me/201222212766?&text=' + url + ' ' + title;
        window.open(text,'_blank');
    });

</script>

</body>
</html>





