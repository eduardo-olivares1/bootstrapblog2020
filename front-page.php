<?php get_header();?>

<div class="container mb-4">
    <h1 class="display-4 text-center"><?php the_title();?></h1>

    <div class="card">
        <div class="card-header">
            Latest Post
        </div>
        <div class="card-body">

        <?php
        $args = array( 'numberposts' => '1');
        $recent_posts = wp_get_recent_posts( $args );
        foreach( $recent_posts as $recent ):
        ?>

       <h2 class="card-title"><?php the_title($recent["post_title"]);?></h2>
       <?php echo '<p class="card-text">With supporting text below as a natural lead-in to additional content.</p><a href="'. get_permalink($recent["ID"]) .'" class="btn btn-primary">Read latest post</a>' ?>

       <?php endforeach;?>

        </div>
    </div>

    <?php get_template_part('includes/section', 'content');?>



</div>

<?php get_footer();?>
