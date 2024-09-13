<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/img/favicon.svg')}}">
    <title>Web - {{ $title ?? '' }}</title>
    @stack('styles')
    @include('dashboard.partials.styles')
</head>
<body>
    @include('dashboard.partials.header')
    <main class="geex-main-content">
        @include('dashboard.partials.sidebar')
        @yield('content')
        {{-- @include('dashboard.partials.footer') --}}
    </main>
    @stack('scripts')
    @include('dashboard.partials.scripts')
</body>
</html>
