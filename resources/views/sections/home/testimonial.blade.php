<section id="home-testimonial" class="py-10 lg:py-20">
  <header>
    <h2 class="sr-only">Real Estate IT Services in Virginia Beach Testimonials</h2>
  </header>
  <div class="px-4 max-w-6xl mx-auto">
    <div class="border border-neutral-50/30 bg-slate-50/10 p-10 lg:py-14 lg:px-20 flex flex-col justify-center items-center text-center rounded-tr-3xl rounded-bl-3xl">
      @svg("images.svg.icon-quote", 'h-10 w-auto mb-6 md:h-20')
      <h3 class="mb-4">{{$testimonial_title}}</h3>
      <blockquote class="lg:text-xl">
        <em>{{$testimonial[0]->post_content}}</em>
        <footer class="mt-2">
            <cite class="not-italic">{{$testimonial[0]->post_title}}</cite>, <cite class="not-italic">{{get_field('company', $testimonial[0]->ID)}}</cite>
        </footer>
      </blockquote>
    </div>
  </div>
</section>
