{{--
  Template Name: Home Template
--}}

@extends('layouts.app')

@section('content')
  <img class="cover-img" src="@field('background_video_poster_image', 'url')" alt="">
  <video width="400px" height="700px" playsinline autoplay="autoplay" loop="true" autoplay="autoplay" muted poster="@field('background_video_poster_image', 'url')" class="home-video" data-src="@field('background_video', 'url')"> </video>
@endsection
