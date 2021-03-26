@extends('layouts.master') 
@section('title','Program')
    @section('slider')
    <!-- SLIDER -->
    <div class="site-slider">
        <div class="flexslider">
            <ul class="slides">
                <li class="slide">
                    <img src="images/slide1.jpg" alt="">
                    <div class="slider-caption"> 
                        <div class="title">
                            @foreach ($programs as $program)
                            <p><font size="30px" color="black">{{$program->deskripsi}}</font></p>
                            <a href="{{$program->link}}">Karir</a><br>
                            <a href="https://www.educastudio.com/program/magang">Magang</a><br>
                            <a href="https://www.educastudio.com/program/kunjungan-industri">Kunjungan Industri</a>
                            @endforeach
                        </div>
                    </div>
                </li>
            </ul>
        </div>   
    </div> <!-- .site-slider -->
    
@endsection