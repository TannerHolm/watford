{{--
  Template Name: Services Template
--}}

@extends('layouts.app')

@section('content')

  <section class="services">
    <div class="row">
      <div class="column text-column">
        <div class="services-content">
          <ul>
            <li class="content-item intro">
              <div class=" introduction">
                @field('introduction')
              </div>
              <img class="hidden-tablet-up" src="@field('services_image', 'url')" alt="">
            </li>
              @php($content_sections = get_field('content_sections'))
              @foreach($content_sections as $content)
                @if($loop->first)
                  <li class="content-item first">
                    <h2 class="content-title">
                      <span>{{ $content['subtitle'] }}</span>
                      {{ $content['title'] }}
                    </h2>
                    <div class="content">
                      {!! $content['content'] !!}
                    </div>
                  </li>
                @else
                <li class="content-item">
                  <h2 class="content-title">
                    <span>{{ $content['subtitle'] }}</span>
                    {{ $content['title'] }}
                  </h2>
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
        <div class="column img-column">
          <img src="@field('services_image', 'url')" alt="">
        </div>

      </div>
  </section>

@endsection
