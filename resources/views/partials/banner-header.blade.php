<section class="text-center container mx-auto border-b border-slate-300/50 py-10">
  <div class="px-4 lg:px-32">
    <h1 id="scramble-header" class="mb-2">{!! $page_title !!}</h1>
    <p class="mb-4 py-4">{!!$banner_copy!!}</p>
    @if($banner_cta)
      <x-button type="red" :id="($is_internal_cta_url) ? 'scroll-contact' : 'contact-button'" link=true url={{$banner_url}} pop=true :target="($is_internal_cta_url) ? '_self' : '_blank'">
        {{$banner_cta}}
      </x-button>
    @endif
  </div>
</section>
