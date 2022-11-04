{{--
  Template Name: About Template
--}}

@extends('layouts.app')

@section('content')

  <section class="about">
    <div class="row">
        <div class="column img-column" style="background-image:url(@field('about_image', 'url'))"></div>
        <div class="column">
          <div class="about-content">
            <ul>
              @php($content_sections = get_field('content_sections'))
              @foreach($content_sections as $content)
                @if($loop->first)
                  <li class="content-item">
                    <h2 class="content-title">{{ $content['title'] }}</h2>
                    <div class="content">
                      {!! $content['content'] !!}
                    </div>
                  </li>
                  <li class="hidden-tablet-up">
                    <img src="@field('about_image', 'url')" alt="">
                  </li>
                @else
                <li class="content-item">
                  <h2 class="content-title">{{ $content['title'] }}</h2>
                  <div class="content">
                    {!! $content['content'] !!}
                  </div>
                </li>
                @endif
              @endforeach
            </ul>
            <a href="@field('page_link')" class="link"><span>@field('page_link_text')</span> ></a>
          </div>
        </div>
    </div>
  </section>

@endsection
