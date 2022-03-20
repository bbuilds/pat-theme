<article @php(post_class('reveal bg-white text-black shadow  rounded-xl overflow-hidden drop-shadow-md pb-6 lg:px-8 lg:py-10'))>
  {!! get_the_post_thumbnail(null, 'card', array( 'class' => 'lg:hidden rounded-tr-lg rounded-tl-lg mb-6'));!!}
  <header class="px-6 lg:px-0">
    <time class="updated block text-sm text-gray" datetime="{{ get_post_time('c', true) }}">
      {{ get_the_date("m.d.y") }}
    </time>

    <h1 class="entry-title text-4xl text-primary leading-tight mb-6">
      {!! $title !!}
    </h1>
  </header>

  <div class="entry-content px-6 lg:px-0">
    @php(the_content())
  </div>

  <footer class="px-6 lg:px-0">
    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
  </footer>

</article>
