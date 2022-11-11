{{--
  Template Name: Home Template
--}}

@extends('layouts.app')

@section('content')
  <video playsinline autoplay="autoplay" loop="true" autoplay="autoplay" muted poster="@field('background_video_poster_image', 'url')" class="home-video" data-src="@field('background_video', 'url')"> </video>
@endsection
