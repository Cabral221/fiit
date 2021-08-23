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
    
    <link href="{{ mix('css/frontend.css') }}" rel="stylesheet">
    <livewire:styles />
    @mapstyles
    @stack('after-styles')
</head>
<body class="dark-theme">
    <div id="app">
        @include('frontend.includes.nav')
        @include('includes.partials.messages')

        <main class="main" id="main">
            <div class="container">
                @include('includes.partials.read-only')
                @include('includes.partials.logged-in-as')
                @include('includes.partials.announcements')
    
                @include('includes.partials.messages')
            </div>

            @yield('content')
        </main>

        @include('frontend.includes.footer')

    </div><!--app-->

    @stack('before-scripts')
    <!--==================== SCROLL TOP ====================-->
    <a href="#" class="scrollup" id="scroll-up">
        <i class="uil uil-arrow-up scrollup__icon"></i>
    </a>
    
    <script src="{{ mix('js/manifest.js') }}"></script>
    <script src="{{ mix('js/vendor.js') }}"></script>
    <script src="{{ mix('js/frontend.js') }}"></script>
    

    <livewire:scripts />
    @mapscripts
    @stack('after-scripts')
</body>
</html>
