@extends('layouts.master', ['title' => 'Home'])

@section('content')

<div class="swiper-container swiper-container-main" id="swiper-container1">
    <div class="swiper-wrapper">
        @foreach (config('data.slides') as $slide => $value)

        <div class="swiper-slide {{ $slide }}">

            <div class="swiper-container" id="swiper-{{ $slide }}">
                <div class="swiper-wrapper">
                    <div id="{{ $slide }}" class="swiper-slide {{ $slide }}">

                        @include('page.slides.'.$slide)

                    </div>
                </div>

                <div class="swiper-scrollbar"></div>

            </div>
        </div>
        @endforeach

    </div>




    <div class="d-none d-md-block">

        {{-- 
    <div class="arrow-up swiper-nav-btn">
        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
            x="0px" y="0px" viewBox="0 0 37 37" style="enable-background:new 0 0 37 37;" xml:space="preserve">
            <style type="text/css">
                .st1 {
                    fill: #FFFFFF;
                }
            </style>
            <g>
                <path class="st1" d="M6.4,24.3c-0.6,0.5-1.6,0.5-2.1-0.1c-0.5-0.6-0.5-1.6,0.1-2.1L6.4,24.3z M4.4,22.1l13.1-11.4l2,2.3L6.4,24.3
           L4.4,22.1z M17.5,10.7c0.6-0.5,1.6-0.5,2.1,0.1c0.5,0.6,0.5,1.6-0.2,2.1L17.5,10.7z" />
                <path class="st1" d="M32.6,22.1c0.6,0.5,0.7,1.5,0.2,2.1c-0.5,0.6-1.5,0.7-2.1,0.1L32.6,22.1z M30.6,24.3L17.5,13l2-2.3l13.1,11.4
           L30.6,24.3z M17.5,13c-0.6-0.6-0.7-1.5-0.1-2.1c0.5-0.6,1.5-0.7,2.1-0.1L17.5,13z" />
            </g>
        </svg>
    </div> --}}

        {{-- <div class="arrow-down swiper-nav-btn">
        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
            x="0px" y="0px" viewBox="0 0 37 37" style="enable-background:new 0 0 37 37;" xml:space="preserve">
            <style type="text/css">
                .st1 {
                    fill: #FFFFFF;
                }
            </style>
            <g>
                <path class="st1" d="M30.6,12.7c0.6-0.5,1.6-0.5,2.1,0.2c0.5,0.6,0.5,1.6-0.2,2.1L30.6,12.7z M32.6,14.9L19.5,26.3l-2-2.3
       l13.1-11.4L32.6,14.9z M19.5,26.3c-0.6,0.5-1.6,0.5-2.1-0.2c-0.5-0.6-0.5-1.6,0.2-2.1L19.5,26.3z" />
                <path class="st1" d="M6.4,12.7c-0.6-0.5-1.6-0.5-2.1,0.2c-0.5,0.6-0.5,1.6,0.2,2.1L6.4,12.7z M4.4,14.9l13.1,11.4l2-2.3L6.4,12.7
       L4.4,14.9z M17.5,26.3c0.6,0.5,1.6,0.5,2.1-0.2c0.5-0.6,0.5-1.6-0.2-2.1L17.5,26.3z" />
            </g>
        </svg>
    </div> --}}
{{-- 
        <div class="btn-hover btn-hover-up" data-btn="arrow-up"></div>
        <div class="btn-hover btn-hover-down" data-btn="arrow-down"></div> --}}
    </div>


    <img  id="arrow-top" class="arrow-top" src="{{asset('/img/icon/00_arrow_top.svg')}}" alt="00_arrow_top.svg">

    <!-- Add Pagination -->
    {{-- <div class="swiper-pagination"></div> --}}

</div>

@stop