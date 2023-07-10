<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="{{ asset('css/themify-icons.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/feather.css') }}" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon.png') }}" />
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/emoji.css') }}" />

    <link rel="stylesheet" href="{{ asset('css/lightbox.css') }}" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="color-theme-blue mont-font">
    <div class="preloader"></div>
    <div class="main-wrapper">
        {{-- navigation top  --}}
        @include('layouts.navigation')
        {{-- navigation top end  --}}
        {{-- navigation left  --}}
        @include('layouts.navigation-left')
        {{-- end navigation left  --}}
        {{-- main content  --}}
        {{ $slot }}
        {{-- end  main content  --}}
        {{-- right chat --}}
        @include('layouts.chat.right')
        {{-- right chat --}}
    </div>

    <script src="{{ asset('js/plugin.js') }}"></script>

    <script src="{{ asset('js/lightbox.js') }}"></script>
    <script src="{{ asset('js/scripts.js') }}"></script>
</body>

</html>
