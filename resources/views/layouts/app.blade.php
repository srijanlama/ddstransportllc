<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="img/favicon.png">
    <title>Pramod Transport- Transport & Logistics Company </title>
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/frontend.css') }}">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

</head>

<body>
    <div id="app">
        <!-- Start Preloader Area -->
        <div class="preloader">
            <div class="lds-ripple">
                <div></div>
                <div></div>
            </div>
        </div>
        <!-- End Preloader Area -->

        <!-- Start Header Area -->
        @include('layouts.partials.header')
        <!-- End Header Area -->

        @yield('content')
        <flash-message></flash-message>
        <!-- Start Footer Area -->
        @include('layouts.partials.footer')
        <!-- End Footer Area -->

        <!-- Start Copy Right Area -->
        <div class="copy-right-area">
            <div class="container">
                <p>
                    Copyright <i class="bx bx-copyright"></i>2021. Developed By
                    <a href="https://www.freelancer.com/u/srizn" target="_blank">Srijan Lama</a>
                </p>
            </div>
        </div>
        <!-- End Copy Right Area -->

        <!-- Start Go Top Area -->
        <div class="go-top">
            <i class="bx bx-chevrons-up"></i>
            <i class="bx bx-chevrons-up"></i>
        </div>
        <!-- End Go Top Area -->

    </div>
    <script src="{{ asset('js/frontend.js') }}">
    </script>
    <script src="{{ mix('/js/front.js') }}"></script>
</body>

</html>
