@extends('layouts.app')

@section('content')
  @include('partials.page-header')
  <div class="max-w-4xl mx-auto px-4 lg:px-0 pb-10">
    @if (! have_posts())
      <x-alert type="warning" class="mb-10 p-6">
        {!! __('Sorry, but the page you are trying to view does not exist.', 'sage') !!}
      </x-alert>

      {!! get_search_form(false) !!}
    @endif
  </div>
@endsection
