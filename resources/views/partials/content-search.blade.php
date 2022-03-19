<article @php(post_class('text-black py-6'))>
  <header>
    <h2 class="entry-title">
      <a href="{{ get_permalink() }}">
        {!! get_the_title(); !!}
      </a>
    </h2>
  </header>

  <div class="entry-summary">
    @php(the_excerpt())
  </div>
</article>
