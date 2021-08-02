<!doctype html>
<html lang="{{ htmlLang() }}" @langrtl dir="rtl" @endlangrtl>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ appName() }} | @yield('title')</title>
    <meta name="description" content="@yield('meta_description', appName())">
    <meta name="author" content="@yield('meta_author', 'Anthony Rappa')">
    @yield('meta')

    @stack('before-styles')
    {{-- <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> --}}

    <!--==================== UNICONS ====================-->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    
    <!--==================== SWIPER CSS ====================-->
    <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}">

    <link href="{{ mix('css/frontend.css') }}" rel="stylesheet">
    <livewire:styles />
    @stack('after-styles')
</head>
<body class="dark-theme">
    <div id="app">
        @include('frontend.includes.nav')
        @include('includes.partials.messages')

        <main class="main container" id="main">
            @include('includes.partials.read-only')
            @include('includes.partials.logged-in-as')
            @include('includes.partials.announcements')

            @yield('content')
        </main>

        @include('frontend.includes.footer')

    </div><!--app-->

    @stack('before-scripts')
    <!--==================== SCROLL TOP ====================-->
    <a href="#" class="scrollup" id="scroll-up">
        <i class="uil uil-arrow-up scrollup__icon"></i>
    </a>
    
    <!--==================== SWIPER JS ====================-->
    <script src="{{ asset('js/swiper-bundle.min.js') }}"></script>
    
    <script src="{{ mix('js/manifest.js') }}"></script>
    <script src="{{ mix('js/vendor.js') }}"></script>
    <script src="{{ mix('js/frontend.js') }}"></script>
    

    <livewire:scripts />
    @stack('after-scripts')
</body>
</html>
