<?php get_header('index');?>

<div class="container mb-4">
     <h1 class="display-4 text-center mb-4"><?php echo single_post_title();?></h1>
     <?php get_template_part('includes/section', 'archive');?>

     <?php previous_posts_link();?>
     <?php next_posts_link();?>
</div>

<?php get_footer();?>
