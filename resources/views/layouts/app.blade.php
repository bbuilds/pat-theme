<a class="sr-only focus:not-sr-only" href="#main">
  {{ __('Skip to content') }}
</a>

@include('sections.header')
  @svg('images.svg.bg-particles', 'bg-particles absolute w-full h-auto opacity-10 z-negative')
  @svg('images.svg.pat-logo-icon-body-bg', 'bg-icon absolute h-auto opacity-30 z-negative')
  <main id="main" class="main relative z-10">
    @yield('content')
  </main>

  @hasSection('sidebar')
    <aside class="sidebar">
      @yield('sidebar')
    </aside>
  @endif

@include('sections.footer')
