<a class="sr-only focus:not-sr-only" href="#main">
  {{ __('Skip to content') }}
</a>

@include('sections.header')
@svg('images.svg.bg-particles', 'bg-particles absolute w-full h-auto opacity-10 z-negative')
@svg('images.svg.pat-logo-icon', 'bg-icon absolute h-auto opacity-50 z-negative w-auto')
  @include('partials.blog-header')
  <div class="container px-4 mx-auto lg:px:0">
    <div class="flex flex-wrap lg:flex-nowrap lg:gap-x-8 pb-10 lg:pb-20">
      <main id="main" class="main relative z-10 w-full lg:w-3/4">
        @yield('content')
      </main>

      @hasSection('sidebar')
        <aside class="sidebar blog-sidebar lg:w-1/4">
          @yield('sidebar')
        </aside>
      @endif
    </div>
</div>
@include('sections.footer')
