@extends('layouts.master')
@section('title','Contact Us')
    @section('slider')
        <!-- SLIDER -->
<div class="site-slider">
    <div class="flexslider">
        <ul class="slides">
            <li class="slide">
                <img src="images/slide1.jpg" alt="">
                <div class="slider-caption">
                    <div class="title">
                        @foreach ($contacts as $contact)
                        <p><font size="30px" color="black">{{$contact->deskripsi}}</font></p>
                        <a href="{{$contact->link}}"> Contact us </a>
                        @endforeach
                    </div>
                </div>
            </li>
        </ul>
    </div>   
</div> <!-- .site-slider -->
 
@endsection