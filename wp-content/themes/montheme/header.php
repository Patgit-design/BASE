<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <title><?php the_title(); ?></title>
    <?php
   wp_head();?>
</head>
<body>

<nav class="navbar  navbar-expand-md "  id="menuNavigation">
      <div class="container">
        <div class="div-logo col-2 text-left pl-md-0" id="div-logo">
          <a class="navbar-brand " href="<?php echo home_url( '/' ); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/img/logo-footer.png" alt="Logo" alt="Logo" id="logo-blue"/>
          </a>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
          data-bs-target=".navbar-collapse-3" aria-controls="navbarNav6"
          aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
       
        <div
        id="nav-link"  id="main-menu" class="collapse navbar-collapse col-md-8 navbar-collapse-3 ml-auto justify-content-end" >
        
            <?php
            wp_nav_menu(array(
                'theme_location' => 'main-menu',
                'container' => false,
                'menu_class' => '',
                'fallback_cb' => '__return_false',
                'items_wrap' => '<ul id="%1$s" class="navbar-nav ml-auto mb-2 mb-md-0 %2$s">%3$s</ul>',
                'depth' => 2,
                'walker' => new bootstrap_5_wp_nav_menu_walker()
            ));
            ?>
        </div>
         
      </div>
    </nav>
  
    <body <?php body_class(); ?>>
    
    <?php wp_body_open(); ?>

  
