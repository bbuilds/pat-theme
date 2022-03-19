<div class="bg-white text-black shadow  rounded-xl overflow-hidden drop-shadow-md p-6 lg:p-8 mb-10 lg:mb-20">
@php(the_content())
{!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
</div>
