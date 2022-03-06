{{--
  Template Name: Service Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.banner-header')
    @include('partials.content-page')
  @endwhile
@endsection
