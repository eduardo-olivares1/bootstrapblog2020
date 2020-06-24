<?php

/*
Template Name: About
*/

?>


<?php get_header();?>

<div class="container mb-4">
     <h1 class="display-4 text-center"><?php the_title();?></h1>

     <?php get_template_part('includes/section', 'content');?>
</div>

<?php get_footer();?>
