@extends('layouts.app')

@section('content')
  @include('partials.blog-header')
  <div class="container px-4 mx-auto lg:px:0">
    @if (! have_posts())
      <x-alert type="warning">
        {!! __('Sorry, no results were found.', 'sage') !!}
      </x-alert>

      {!! get_search_form(false) !!}
    @endif
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10 lg:gap-x-8">
      @while(have_posts()) @php(the_post())
        @includeFirst(['partials.content-' . get_post_type(), 'partials.content'])
      @endwhile
    </div>

    {!! get_the_posts_navigation() !!}
  </div>
@endsection
