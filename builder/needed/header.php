<header class="banner">
  <div class="container-fluid">
    <div class="navbar-header" >
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><img width="200" src="<?php echo get_field("logo","option") ?>" alt="<?php echo bloginfo('name'); ?>"></a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <nav class="nav-primary">
        <?php
        if (has_nav_menu('primary_navigation')) :
           wp_nav_menu(['theme_location' => 'primary_navigation', 'walker' => new wp_bootstrap_navwalker(), 'menu_class' => 'nav navbar-nav ']);
        endif;
        ?>
      </nav>
    </div>
  </div>
</header>
