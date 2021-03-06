<header id="site-header" class="site-header bg-white text-black py-4 w-full z-40 transition-all duration-300 ease-in-out fixed top-0 left-0 right-0 shadow">
  <div class="container mx-auto px-4 flex items-center justify-between md:px-0">
    <a href="{{ home_url('/') }}" class="w-24 md:w-1/4 flex items-center">
      @svg("images.svg.pat-logo-icon", 'w-auto h-12 md:h-auto md:w-3/12')
      @svg("images.svg.pat-logo-text", 'hidden h-auto pl-2 md:block md:w-9/12')
      <span class="screen-reader-text">{!! $siteName !!}</span>
    </a>
    @if (has_nav_menu('primary_navigation'))
      <nav class="nav-primary" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
        <button class="md:hidden" aria-haspopup="true" aria-label="Open menu" data-micromodal-trigger="modal-primary-navigation"><svg width="40" height="40" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" focusable="false"><rect x="4" y="7.5" width="30" height="1.5"></rect><rect x="4" y="15" width="30" height="1.5"></rect><rect x="4" y="22.5" width="30" height="1.5"></svg></button>
        <div id="modal-primary-navigation" class="modal menu-modal transition-all duration-300 ease-in-out fixed right-0 left-0 bottom-0 top-0 flex flex-col z-50 px-6 py-8 bg-white translate-x-full delay-150 md:block md:relative md:w-full md:translate-x-0 md:py-0 md:pr-0 lg:pl-0 overflow-visible" aria-hidden="true">
          <div class="modal-responsive-close" tabindex="-1" data-micromodal-close>
            <div class="modal-dialog relative" aira-label="Menu">
              <button aria-label="Close menu" data-micromodal-close class="modal-close absolute block top-0 right-0 md:hidden"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32" height="32" role="img" aria-hidden="true" focusable="false"><path d="M13 11.8l6.1-6.3-1-1-6.1 6.2-6.1-6.2-1 1 6.1 6.3-6.5 6.7 1 1 6.5-6.6 6.5 6.6 1-1z"></path></svg></button>
              <div id="modal-primary-content" class="flex flex-col flex-nowrap items-end pt-10 md:pt-0 md:flex-row md:items-center">
                {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'primary-nav','walker' => new PAT_Nav_Walker()]) !!}
              </div>
            </div>
          </div>
        </div>
      </nav>
    @endif
  </div><!--end container -->
</header>
