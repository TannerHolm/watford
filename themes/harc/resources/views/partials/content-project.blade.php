<article class="project">
  <img src="@field('featured_image', 'url')">

  <div class="info-banner">
    <div class="row">
      <div class="title">
        <h1>@title</h1>
      </div>
      <div class="details">
        @fields('project_details')
        <div class="detail">
          <div class="detail-title">
            @sub('title')
          </div>
          <div class="detail-content">
            @sub('content')
          </div>  
        </div>
        @endfields
      </div>
    </div>
  </div>
  <div class="project-gallery">
      @fields('project_gallery')
        @if( get_row_layout() == '2_column_row' )
        @php($images = get_sub_field('gallery'))
        <div class="two-column">
          <div class="row">
            @foreach($images as $image)
              <img src="{{$image['url']}}">
            @endforeach
          </div>
        </div>
        
        @elseif(get_row_layout() == '1_column_row')
        <div class="one-column">
          <div class="row">
            @php($images = get_sub_field('gallery'))
            @php($orientation = get_sub_field('orientation'))
            @foreach($images as $image)
              <img class="{{$orientation}}" src="{{$image['url']}}">
            @endforeach
          </div>
        </div>
        
        @else
        @endif
      @endfields
  </div>
  <div class="projects-link">
    <a href="/projects/">Back To Projects</a>
  </div>
</article>
