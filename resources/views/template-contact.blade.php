{{--
  Template Name: Contact Us
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.banner-header')
  @endwhile
@endsection
