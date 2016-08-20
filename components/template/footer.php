<footer id="footer" class="content-info">
  <div class="container">
	<span> &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></span>
    <?php dynamic_sidebar('sidebar-footer'); ?>
  </div>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js" />
<script type="text/javascript" src="<?php echo get_template_directory_uri().'/dist/bundle.js'; ?>" />
<div id="debug_console">

</div>
</body>
</html>
