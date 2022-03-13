<article @php(post_class('relative group transition duration-300 ease-in-out bg-white text-black h-full rounded-xl overflow-hidden translate-y-0 hover:drop-shadow-md focus:drop-shadow-md hover:-translate-y-2'))>
  <div
    class="post-preview-image  h-48 w-full relative overflow-hidden"
  >
    {!! get_the_post_thumbnail(null, 'card', array( 'class' => 'w-full h-auto object-cover' )) !!}
  </div>
  <header class="p-4">
    <span class="text-gray text-sm uppercase">{!!get_the_category()[0]->name!!}</span>
    <h2 class="text-3xl">
      <a class="link-shield" href="{{ get_permalink() }}">
        {!! $title !!}
      </a>
    </h2>
  </header>
  <div class="p-4">
    <span class="text-accent uppercase text-sm">{{ _x('Read More', 'sage') }}</span>
  </div>
</article>
