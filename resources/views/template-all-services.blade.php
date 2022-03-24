{{--
  Template Name: All Services
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.banner-header')
    <section id="service-content" class="p-10 lg:py-20 dark-content entry-content">
      <div class="container mx-auto px-4 md:px-0">
        {!!get_the_content()!!}
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 lg:gap-8 pt-10">
          @foreach($services as $service)
            <x-service-card :image="$service['icon']" :title="$service['title']" :excerpt="$service['excerpt']"/>
          @endforeach
        </div>
      </div>
    </section>
  @endwhile
@endsection
