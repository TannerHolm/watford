{{--
  Template Name: Contact Template
--}}

@extends('layouts.app')

@section('content')

  <section class="contact">
    <div class="row">
      <div class="column text-column">
        <div class="contact-content">
          <ul>
            <li class="content-item intro">
              <div class=" introduction">
                @field('introduction')
              </div>
              <img class="hidden-tablet-up" src="@field('contact_image', 'url')" alt="">
            </li>
            <li class="content-item first">
              <div class="content">
               @field('form')
              </div>
            </li>
            <li class="content-item address">
              <div class="content">
                @field('address')
              </div>
            </li>
            </ul>
          </div>
        </div>
        <div class="column img-column">
          <img src="@field('contact_image', 'url')" alt="">
        </div>

      </div>
  </section>

@endsection
