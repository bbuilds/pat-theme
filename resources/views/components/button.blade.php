@if($link)
  <a href={{$url}} {{ $attributes->merge(['class' => $classes]) }}>
    {!! $slot !!}
  </a>
@endif

@if(!$link)
  <button {{ $attributes->merge(['class' => $classes]) }}>
    {!! $slot !!}
  </button>
@endif
