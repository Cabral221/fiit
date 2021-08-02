@extends('frontend.layouts.app')


@section('content')
<div id="app" class="flex-center position-ref full-height">
    <div class="top-right links">
        @auth
            @if ($logged_in_user->isUser())
                <a href="{{ route('frontend.user.dashboard') }}">@lang('Dashboard')</a>
            @endif

            <a href="{{ route('frontend.user.account') }}">@lang('Account')</a>
        @else
            <a href="{{ route('frontend.auth.login') }}">@lang('Login')</a>

            @if (config('boilerplate.access.user.registration'))
                <a href="{{ route('frontend.auth.register') }}">@lang('Register')</a>
            @endif
        @endauth
    </div><!--top-right-->

    <div class="content">
        @include('includes.partials.messages')

        <div class="title m-b-md">
            <h1>FIIT PROTECTION INTERNATIONALE</h1>
        </div><!--title-->
    </div><!--content-->
</div><!--app-->
@endsection
