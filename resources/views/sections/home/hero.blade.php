<section id="home=hero">
  <div class="container mx-auto px-4 py-12 lg:py-20">
    <header>
      <h1 class="sr-only">{{$page_title}}</h1>
      <h2 id="scramble-header" class="mb-6 text-5xl lg:w-5/6">{{$hero_title}}</h2>
    </header>
    <x-button type="red" id="scroll-contact" link=true url={{$hero_cta_url}} pop=true>
      {{$hero_cta_text}}
    </x-button>
  </div>
</section>
