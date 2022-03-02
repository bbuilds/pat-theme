<div {{ $attributes }} class="border border-neutral-50/30 bg-slate-50/10 p-10 lg:py-14 lg:px-20 flex flex-col justify-center items-center text-center rounded-tr-3xl rounded-bl-3xl">
   @svg("images.svg.icon-quote")
   <h3 class="mb-4">{{$title}}</h3>
   <blockquote class="lg:text-xl">{{$testimonial}}
      <footer class="mt-2">
          <cite class="not-italic">{{$name}}</cite>, <cite class="not-italic">{{$company}}</cite>
      </footer>
    </blockquote>
</div>


