<div class="bg-white rounded overflow-hidden text-center p-6 flex flex-col item-center justify-center">
   @if($imageElement)
        <figure>{!! $imageElement !!}</figure>
    @endif
    @if($title)
      <p class="text-4xl">{!! $title !!}</p>
    @endif
    @if($excerpt)
      <p>{!! $excerpt !!}</p>
    @endif
</div>
