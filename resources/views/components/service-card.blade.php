<div class="bg-white rounded overflow-hidden text-center p-6 flex flex-col item-center text-black lg:py-8">
   @if($image)
      @svg($image, 'h-20 lg:h-32 w-auto mb-4')
    @endif
    @if($title)
      <p class="text-4xl mb-4">{!! $title !!}</p>
    @endif
    @if($excerpt)
      <p>{!! $excerpt !!}</p>
    @endif
</div>
