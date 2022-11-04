<footer class="content-info">
  <div class="row">
    <div class="column social-copyright">
      <p class="copyright">@option('copyright')</p>
      @hasoptions('socials')
      <ul class="socials">
        @options('socials')
        <li>
          <a href="@sub('link')" target="_blank">
            @hassub('icon')
            @sub('icon')
            @endsub
          </a>
        </li>
        @endoptions
      </ul>
      @endhasoptions
      <div class="footer-menu">
        {!! wp_nav_menu(['menu' => 'Footer Menu', 'menu_class' => 'nav', 'echo' => false]) !!}
      </div>
    </div>
    
    <div class="column logo-column">
      @isoption('logo', 'type', 'image')
        <a href="/">
          <img src="@option('logo', 'url')" alt="{{ get_bloginfo('name', 'display') }}" />
        </a>
       @endoption
    </div>
    
    <div class="column made-by-column">
    <p>@option('made_by')</p>
    </div>
  
  </div>
</footer>
