<header class="page-header py-10 lg:py-20">
  <div class="container px-4 mx-auto lg:px:0">
    <div class="flex items-center flex-wrap md:justify-between mb-6">
      @if(!is_single())
        <h1 id="scramble-header" class="order-1">{!! $title !!}</h1>
      @else
        <p id="scramble-header" class="order-1 semi-bold text-5xl">{!! $title !!}</p>
      @endif

      <div class="w-full order-3 md:w-3/5 md:order-2 lg:w-2/5">
       {!! get_search_form(false) !!}
      </div>
      <div class="w-full order-2 py-4 md:order-3"><?php if (function_exists('rank_math_the_breadcrumbs')) rank_math_the_breadcrumbs(); ?></div>
    </div>

  </div>
</header>
