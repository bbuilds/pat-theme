@extends('layouts.single')

@section('content')
  @while(have_posts()) @php(the_post())
    @includeFirst(['partials.content-single-' . get_post_type(), 'partials.content-single'])
  @endwhile
@endsection

@section('sidebar')
    {!! get_the_post_thumbnail(null, 'card', array( 'class' => 'rounded-lg mb-6 lg:mb-10'));!!}
    @php(dynamic_sidebar('sidebar-primary'))
@endsection
