<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/img/favicon.svg')}}">
    <title>Web - {{ $title ?? '' }}</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
        .iziToast {
            padding: 20px;
            width: 400px;
            font-family:Arial, Helvetica, sans-serif;
            box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px, rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0.2) 0px -3px 0px inset;
            color: white
        }
    </style>
    @stack('styles')
    @include('dashboard.partials.styles')
</head>
<body>
    @include('dashboard.partials.header')
    <main class="geex-main-content">
        @include('dashboard.partials.sidebar')
        @yield('content')
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js"></script>
        <script>
            @if(Session::has('success'))
                iziToast.success({
                    title: 'Success',
                    message: '{{ Session::get('success') }}',
                    position: 'topRight',
                    timeout: 5000,
                    backgroundColor: 'linear-gradient(to right, #ff56a8, #ff832b)',
                    icon: 'fa fa-check',
                    iconColor: '#ffffff',
                    animateInside: true,
                    closeOnClick: true,
                    progressBarColor: 'orange',
                });
            @endif

            @if(Session::has('error'))
                iziToast.error({
                    title: 'Error',
                    message: '{{ Session::get('error') }}',
                    position: 'topRight',
                    timeout: 5000,
                    backgroundColor: 'linear-gradient(to right, #c93118,#FF3D00 )',
                    icon: 'fa fa-times',
                    iconColor: '#ffffff',
                    animateInside: true,
                    closeOnClick: true,
                    progressBarColor: '#7a0707',
                });
            @endif

            @if(Session::has('info'))
                iziToast.info({
                    title: 'Info',
                    message: '{{ Session::get('info') }}',
                    position: 'topRight',
                    timeout: 5000,
                    backgroundColor: 'linear-gradient(to right, #ff832b, #ff56a8)',
                    icon: 'fa fa-info',
                    iconColor: '#ffffff',
                    animateInside: true,
                    closeOnClick: true,
                    progressBarColor: 'pink',
                });
            @endif

            @if(Session::has('warning'))
                iziToast.warning({
                    title: 'Warning',
                    message: '{{ Session::get('warning') }}',
                    position: 'topRight',
                    timeout: 5000,
                    backgroundColor: 'linear-gradient(to right, #FF9800, #FFC107)',
                    icon: 'fa fa-exclamation',
                    iconColor: '#ffffff',
                    animateInside: true,
                    closeOnClick: true,
                    progressBarColor: '#944e06',
                });
            @endif
        </script>

    <script src="{{ asset('assets/vendor/js/jquery/jquery-3.5.1.min.js') }}"></script>
        {{-- @include('dashboard.partials.footer') --}}
    </main>
    @stack('scripts')
    @include('dashboard.partials.scripts')
</body>
</html>
