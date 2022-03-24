@extends('layouts.app')

@section('content')
  <article @php(post_class('container mx-auto px-4'))>
    @while(have_posts()) @php(the_post())
      @include('partials.banner-header')
      @includeFirst(['partials.content-page', 'partials.content'])
    @endwhile
  </article>
@endsection
