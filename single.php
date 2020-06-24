<?php get_header();?>

<div class="container mb-4">
     <h1><?php the_title();?></h1>

     <?php get_template_part('includes/section', 'blogcontent');?>
</div>

<?php get_footer();?>
