@extends('layouts.master')

@section('title','News')
@section('slider')
    <!-- SLIDER -->
    <div class="site-slider">
        <div class="flexslider">
            <ul class="slides">
                <li class="slide">
                    <img src="images/slide1.jpg" alt="">
                    <div class="slider-caption">
                        <div class="title">
                            @foreach ($news as $news) 
                            <p><font size="30px" color="black">{{$news->deskripsi}}</font></p>
                            <a href="{{$news->link}}">News</a><br>
                            <a href="https://www.educastudio.com/news/educa-studio-berbagi-untuk-warga-sekitar-terdampak-covid-19">Educa Studio Berbagi Untuk Warga Sekitar Terdampak Covid-19</a>
                            @endforeach
                        </div>
                    </div>
                </li>
            </ul>
        </div>   
    </div> <!-- .site-slider -->

@endsection