<header class="page-header py-10 lg:py-20">
  <div class="container px-4 mx-auto lg:px:0">
    <div class="flex items-center md:justify-between mb-6">
      @if(!is_single())
        <h1>{!! $title !!}</h1>
      @else
        <p class="semi-bold text-9xl">{!! $title !!}</p>
      @endif

      <div class="md:w-2/5">
       {!! get_search_form(false) !!}
      </div>
    </div>
    <?php if (function_exists('rank_math_the_breadcrumbs')) rank_math_the_breadcrumbs(); ?>
  </div>
</header>
