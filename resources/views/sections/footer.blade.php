<footer class="site-footer">
  <div class="container mx-auto px-4 lg:px-0 border-y border-slate-300/50 py-10">
    <div class="md:flex md:flex-wrap md:justify-between">
      @php(dynamic_sidebar('sidebar-footer'))
    </div>

  </div>
  <div class="p-4 container mx-auto">
      <div class="flex flex-wrap text-center justify-center items-center md:flex-nowrap md:justify-between md:text-left">
        <p class="w-full mb-2">&copy; <?php echo date("Y"); ?> | Power Asset Technology</p> @if (has_nav_menu('copyright_navigation'))<nav class="w-full"></an><?php echo wp_nav_menu(['theme_location' => 'copyright_navigation', 'menu_class' => 'copyright-nav flex text-white','walker' => new PAT_Nav_Walker()]); ?></nav>@endif
      </div>
    </div>
</footer>
