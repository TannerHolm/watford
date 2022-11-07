{{--
  Template Name: Press Template
--}}

@extends('layouts.app')

@section('content')

  <section class="press">
    <div class="row">
      @fields('press_items')
        <div class="column">
          <p class="source">
            @sub('source')
          </p>
          <h4 class="title">@sub('title')</h4>
          <div class="description">
            @sub('description')
          </div>
          <a href="@sub('link')" class="link"><span>@sub('link_title')</span> ></a>
        </div>
      @endfields
    </div>
  </section>

@endsection
