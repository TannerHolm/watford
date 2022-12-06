{{--
  Template Name: Home Template
--}}

@extends('layouts.app')

@section('content')
  {{-- <img class="cover-img" src="@field('background_video_poster_image', 'url')" alt=""> --}}
  <video width="100%" height="100%" playsinline autoplay="autoplay" loop="true" autoplay="autoplay" muted class="home-video">
    <source src="@field('background_video', 'url')">
    <img src="@field('background_video_poster_image', 'url')" alt="">
  </video>
@endsection
