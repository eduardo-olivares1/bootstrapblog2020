<?php get_header();?>

<div class="container mb-4">
    <h1 class="display-4 text-center"><?php the_title();?></h1>

    <?php get_template_part('includes/section', 'content');?>
    <hr class="mt-4">
    <?php
        $args = array( 'numberposts' => '1');
        $recent_posts = wp_get_recent_posts( $args );
        if (empty($recent_posts) != true):
        foreach( $recent_posts as $recent ):
        ?>

    <div class="card text-center my-4">
        <div class="card-header">
            Latest Post
        </div>
        <div class="card-body">

       <h2 class="card-title"><?php echo $recent["post_title"];?></h2>
       <?php echo '<p class="card-text">'.get_the_excerpt($recent["ID"]).'</p><a href="'. get_permalink($recent["ID"]) .'" class="btn btn-primary">Read latest post</a>';?>
        </div>
    </div>
    <?php endforeach;?>
    <?php endif;?>



</div>

<?php get_footer();?>
