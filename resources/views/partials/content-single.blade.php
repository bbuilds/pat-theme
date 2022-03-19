<article @php(post_class('bg-white text-black shadow  rounded-xl overflow-hidden drop-shadow-md p-6 lg:p-8'))>
  <header>
    <time class="updated block text-sm text-gray" datetime="{{ get_post_time('c', true) }}">
      {{ get_the_date("m.d.y") }}
    </time>

    <h1 class="entry-title text-primary leading-tight mb-6">
      {!! $title !!}
    </h1>
  </header>

  <div class="entry-content">
    @php(the_content())
  </div>

  <footer>
    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
  </footer>

</article>
