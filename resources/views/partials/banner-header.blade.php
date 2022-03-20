<section class="text-center container mx-auto border-b border-slate-300/50 py-10">
  <div class="px-4 lg:px-32">
    <h1 class="mb-2">{!! $page_title !!}</h1>
    <p class="mb-4 py-4">{!!$banner_copy!!}</p>
    @if($banner_cta)
      <x-button type="red" id="scroll-contact" link=true url={{$banner_url}} pop=true>
        {{$banner_cta}}
      </x-button>
    @endif
  </div>
</section>
