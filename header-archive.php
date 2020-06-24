<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo get_bloginfo( 'name' ) ?> | <?php single_cat_title();?></title>
    <?php wp_head();?>
</head>
<body>
 <nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
  <a class="navbar-brand mb-0 h1" href="/">
     <?php
    $custom_logo_id = get_theme_mod( 'custom_logo' );
    $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
    if ( has_custom_logo() ) {
            echo '<img class="brand-image img-fluid" src="' . esc_url( $logo[0] ) . '"> ' . get_bloginfo( 'name' ) . '';
    } else {
            echo '<h1>'. get_bloginfo( 'name' ) .'</h1>';
    }
    ?>
    </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse-1" aria-controls="navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div id="navbar-collapse-1" class="collapse navbar-collapse">
        <?php
        wp_nav_menu( array(
            'theme_location'    => 'top-menu',
            'depth'             => 2,
            'container'         => false,
            'menu_class'        => 'navbar-nav mr-auto mt-2 mt-lg-0',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
        ) );
        ?>
        <?php get_search_form();?>
    </div>
</nav>
