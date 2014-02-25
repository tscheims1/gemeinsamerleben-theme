<header class="banner container" role="banner">
  <div class="row">
    <div class="col-lg-12">
      <a class="brand" href="<?php echo home_url('/') ?>"><?php bloginfo('name'); ?></a>
      <nav class="nav-main" role="navigation">
        <?php 
          if (has_nav_menu('primary_navigation')) :
			if(current_user_can('ungeladen'))
				wp_nav_menu(array('menu' => 'secondary_navigation', 'theme_location' => 'secondary_navigation', 'menu_class' => 'nav nav-pills'));
				
			else   
		    	wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav nav-pills'));
          endif;
        ?>
      </nav>
    </div>
  </div>
</header>
