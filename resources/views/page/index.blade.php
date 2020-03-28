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



    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>

</div>

@stop