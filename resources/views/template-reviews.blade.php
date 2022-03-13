{{--
  Template Name: All Reviews
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.banner-header')
  <section id="reviews" class="py-10 lg:py-20">
    <div class="container mx-auto px-4 lg:px-0">
      @if($reviews)
        @foreach($reviews as $review)
          <x-testimonial :name="$review->post_title" :testimonial="$review->post_content" company="google" />
        @endforeach
      @endif
    </div>
  </section>
  @endwhile
@endsection
