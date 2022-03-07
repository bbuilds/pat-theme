{{--
  Template Name: Service Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.banner-header')
    <section id="service-intro" class="py-6">
      <div class="container mx-auto px-4 md:px-0">
        <div class="flex flex-wrap md:flex-nowrap">
          <h2 class="text-5xl md:w-1/2 md:pr-4 mb-4 md:mb-0">{!! $intro_title !!}</h2>
          <div class="md:w-1/2 md:pr-2">
            {!!$intro_copy!!}
          </div>
        </div>
      </div>
    </section>
  @endwhile
@endsection
