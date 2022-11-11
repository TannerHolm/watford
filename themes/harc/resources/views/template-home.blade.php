{{--
  Template Name: Home Template
--}}

@extends('layouts.app')

@section('content')
  <video poster="@field('background_video_poster_image', 'url')" loop playsinline autoplay muted class="home-video" data-src="@field('background_video', 'url')"> </video>
@endsection
