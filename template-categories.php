<?php

/*
Template Name: Categories
*/

?>


<?php get_header();?>

<div class="container mb-4">
     <h1 class="display-4"><?php the_title();?></h1>

     <?php get_template_part('includes/section', 'content');?>

     <ul class="pl-2 flush-list">
     <?php
     $categories = get_categories();
    foreach($categories as $category) {
        echo '<li><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></li>';
    }
    ?>
    </ul>

</div>

<?php get_footer();?>
