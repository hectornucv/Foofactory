<header class="banner">
  <div class="container-fluid">
    <div class="navbar-header" >
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#primay_menu_wrapper" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
       <?php 
      get_component([
            'template' => 'parts/brand',
            'vars' => [
                        'logo' => get_field('logo','option')
                      ]
      ]);
      ?>
    </div>
    <div class="collapse navbar-collapse" id="primay_menu_wrapper">
      <nav class="nav-primary">
        <?php
        if (has_nav_menu('primary')) :
           wp_nav_menu(['theme_location' => 'primary', 'walker' => new wp_bootstrap_navwalker(), 'menu_class' => 'nav navbar-nav ']);
        endif;
        ?>
      </nav>
    </div>
  </div>
</header>
