@extends('layouts.master')
@section('title','About Us')
@section('slider')
<!-- SLIDER -->
<div class="site-slider">
    <div class="flexslider">
        <ul class="slides">
            <li class="slide">
                <img src="images/slide1.jpg" alt="">
                <div class="slider-caption">
                    <div class="title">
                        @foreach ($abouts as $about)
                        <p><font size="30px" color="black">{{$about->deskripsi}}</font></p>
                        <a href="{{$about->link}}"> About us </a>
                        @endforeach
                    </div>
                </div>
            </li>
        </ul>
    </div>   
</div> <!-- .site-slider -->

@endsection