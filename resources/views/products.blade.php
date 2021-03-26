@extends('layouts.master')
@section('title','Products')
    @section('slider')
    <!-- SLIDER -->
    <div class="site-slider">
        <div class="flexslider">
            <ul class="slides">
                <li class="slide">
                    <img src="images/slide1.jpg" alt="">
                    <div class="slider-caption"> 
                        <div class="title">
                            @foreach ($products as $product)
                            <p><font size="30px" color="black">{{$product->deskripsi}}</font></p>
                            <a href="{{$product->link}}">Marbel Edu Games</a><br>
                            <a href="https://www.educastudio.com/category/marbel-and-friends-kids-games">Marbel and Friends Kids Games</a><br>
                            <a href="https://www.educastudio.com/category/riri-story-books">Riri Story Books</a><br>
                            <a href="https://www.educastudio.com/category/kolak-kids-songs">Kolak Kids Song</a>
                            @endforeach
                        </div>
                    </div>
                </li>
            </ul>
        </div>   
    </div> <!-- .site-slider -->

@endsection