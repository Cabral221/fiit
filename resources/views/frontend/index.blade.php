@extends('frontend.layouts.app')


@section('content')
<div class="container">
    
    <!-- Slider main container -->
    <div class="swiper-container swiper__carousel">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide" style="background-image: url(https://picsum.photos/1080/1080?random=1);">Slide 1</div>
            <div class="swiper-slide" style="background-image: url(https://picsum.photos/1080/1080?random=2);">Slide 2</div>
            <div class="swiper-slide" style="background-image: url(https://picsum.photos/1080/1080?random=3);">Slide 3</div>
        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>
        
        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
        
        <!-- If we need scrollbar -->
        <div class="swiper-scrollbar"></div>
    </div>
    
    
    <div class="title m-b-md">
        <h1>FIIT PROTECTION INTERNATIONALE</h1>
    </div><!--title-->
</div><!--content-->
@endsection
