<section id="" class="white-bg container padding-4 margin-0 text-left" >
 	<article class="col-md-12  molecule card">
    <div class="entry-content">
      <?php the_content(); ?>
    </div>
    <footer>
      <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
    </footer>
		</article>
</section>