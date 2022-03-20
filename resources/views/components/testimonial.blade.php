<div class="reveal border border-neutral-50/30 bg-slate-50/10 p-6  flex flex-col  justify-center items-center text-center rounded-tr-3xl rounded-bl-3xl mb-10 lg:py-14 lg:px-20 lg:flex-row lg:text-left lg:items-start lg:justify-between lg:mb-16">
   @svg("images.svg.icon-quote",  'w-12 w-auto mb-4 lg:w-1/6 lg:mb-0 lg:pt-2')
   <blockquote class="lg:text-xl lg:pl-4 lg:w-5/6">{{$testimonial}}
      <footer class="mt-2 lg:mt-8">
          <cite class="not-italic">{{$name}}, {{$company}}</cite>
      </footer>
    </blockquote>
</div>
