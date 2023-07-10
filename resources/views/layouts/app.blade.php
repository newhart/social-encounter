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
        @include('layouts.chat.content')
    </div>

    <div class="modal bottom side fade" id="Modalstries" tabindex="-1" role="dialog" style="overflow-y: auto">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content border-0 bg-transparent">
                <button type="button" class="close mt-0 position-absolute top--30 right--10" data-dismiss="modal"
                    aria-label="Close">
                    <i class="ti-close text-white font-xssss"></i>
                </button>
                <div class="modal-body p-0">
                    <div class="card w-100 border-0 rounded-3 overflow-hidden bg-gradiant-bottom bg-gradiant-top">
                        <div class="owl-carousel owl-theme dot-style3 story-slider owl-dot-nav nav-none">
                            <div class="item">
                                <img src="https://via.placeholder.com/450x800.png" alt="image" />
                            </div>
                            <div class="item">
                                <img src="https://via.placeholder.com/450x800.png" alt="image" />
                            </div>
                            <div class="item">
                                <img src="https://via.placeholder.com/450x800.png" alt="image" />
                            </div>
                            <div class="item">
                                <img src="https://via.placeholder.com/450x800.png" alt="image" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group mt-3 mb-0 p-3 position-absolute bottom-0 z-index-1 w-100">
                        <input type="text"
                            class="style2-input w-100 bg-transparent border-light-md p-3 pe-5 font-xssss fw-500 text-white"
                            value="Write Comments" />
                        <span class="feather-send text-white font-md text-white position-absolute"
                            style="bottom: 35px; right: 30px"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal-popup-chat">
        <div class="modal-popup-wrap bg-white p-0 shadow-lg rounded-3">
            <div class="modal-popup-header w-100 border-bottom">
                <div class="card p-3 d-block border-0 d-block">
                    <figure class="avatar mb-0 float-left me-2">
                        <img src="https://via.placeholder.com/50x50.png" alt="image" class="w35 me-1" />
                    </figure>
                    <h5 class="fw-700 text-primary font-xssss mt-1 mb-1">
                        Hendrix Stamp
                    </h5>
                    <h4 class="text-grey-500 font-xsssss mt-0 mb-0">
                        <span class="d-inline-block bg-success btn-round-xss m-0"></span>
                        Available
                    </h4>
                    <a href="#" class="font-xssss position-absolute right-0 top-0 mt-3 me-4"><i
                            class="ti-close text-grey-900 mt-2 d-inline-block"></i></a>
                </div>
            </div>
            <div class="modal-popup-body w-100 p-3 h-auto">
                <div class="message">
                    <div class="message-content font-xssss lh-24 fw-500">
                        Hi, how can I help you?
                    </div>
                </div>
                <div class="date-break font-xsssss lh-24 fw-500 text-grey-500 mt-2 mb-2">
                    Mon 10:20am
                </div>
                <div class="message self text-right mt-2">
                    <div class="message-content font-xssss lh-24 fw-500">
                        I want those files for you. I want you to send 1 PDF and 1 image
                        file.
                    </div>
                </div>
                <div class="snippet pt-3 ps-4 pb-2 pe-3 mt-2 bg-grey rounded-xl float-right" data-title=".dot-typing">
                    <div class="stage">
                        <div class="dot-typing"></div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="modal-popup-footer w-100 border-top">
                <div class="card p-3 d-block border-0 d-block">
                    <div class="form-group icon-right-input style1-input mb-0">
                        <input type="text" placeholder="Start typing.."
                            class="form-control rounded-xl bg-greylight border-0 font-xssss fw-500 ps-3" /><i
                            class="feather-send text-grey-500 font-md"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/plugin.js') }}"></script>

    <script src="{{ asset('js/lightbox.js') }}"></script>
    <script src="{{ asset('js/scripts.js') }}"></script>
</body>

</html>
