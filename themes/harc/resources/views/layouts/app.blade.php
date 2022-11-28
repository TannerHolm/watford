@include('sections.header')


  <main id="main" class="main">
    @yield('content')
  </main>

  @hasSection('sidebar')
    <aside class="sidebar">
      @yield('sidebar')
    </aside>
  @endif

@include('sections.footer')

<style>
  html {
    margin-top: 0 !important;
}
</style>