<section id="home-specialize" class="reveal py-10">
  <div class="container mx-auto">
    <h2 class="sr-only">Virginia Beach Real Estate IT Services Provided</h2>
    <p class="font-semibold text-4xl text-center mb-6 lg:mb-12">What we specialize in</p>
    <div class="flex flex-wrap md:flex-nowrap">
       @foreach($home_services as $service)
          <div class="w-full md:w-1/3 p-4 mb-8 md:mb-0">
            <div class="service flex flex-col items-center text-center justify-center h-full">
              @svg($service['icon'], 'h-10 w-auto mb-2 md:h-20')
              <p class="text-3xl mb-2">{{$service['title']}}</p>
              <h3 class="text-base mb-4">{{$service['subtitle']}}</h3>
              <p class="mb-4">{{$service['excerpt']}}</p>
              <x-button class="mt-auto" type="red" link=true :url="$service['cta_link']" pop=true>
                {!!$service['cta_text']!!} <span class="sr-only">{!!__('about ')!!} {{$service['subtitle']}} {!!__(' in Hampton Roads')!!}</span>
              </x-button>
            </div>
          </div>
       @endforeach
    </div>
  </div>
</section>
