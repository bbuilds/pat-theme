@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('sections.home.hero')
    @include('sections.home.specialize')
    @include('sections.home.testimonial')
    @include('sections.home.callout')
  @endwhile
@endsection
