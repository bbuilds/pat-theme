<form role="search" method="get" class="search-form relative flex items-center" action="{{ home_url('/') }}">
  <label class="w-full">
    <span class="sr-only">
      {{ _x('Search for:', 'label', 'sage') }}
    </span>

    <input
      type="search"
      placeholder="{!! esc_attr_x('Search &hellip;', 'placeholder', 'sage') !!}"
      value="{{ get_search_query() }}"
      name="s"
      class="rounded-full w-full px-4 py-2 text-gray-800 bg-gray-200 text-black shadow"
    >
  </label>

  <button class="absolute right-[15px]"><span class="sr-only">{{ _x('Search', 'submit button', 'sage') }}</span>@svg("images.svg.search-icon")</button>
</form>
