{{--
  Template Name: Projects Template
--}}

@extends('layouts.app')

@section('content')

  <section class="projects">
    @query([
      'post_type' => 'project'
    ])
    @posts
    <a href="@permalink" class="row">
      <div class="column text-column">
        <h2 class="entry-title">@title</h2>
      </div>
      <div class="column img-column">
          @thumbnail('full')
      </div>
    </a>
      <hr>
      @endposts
  </section>

@endsection
