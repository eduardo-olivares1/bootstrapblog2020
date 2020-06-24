<?php

/*
Template Name: Tags
*/

?>


<?php get_header();?>

<div class="container mb-4">
     <h1 class="display-4"><?php the_title();?></h1>

     <?php get_template_part('includes/section', 'content');?>

     <ul class="pl-2 flush-list">
     <?php
     $tags = get_tags();
    foreach($tags as $tag) {
        echo '<li><a href="' . get_tag_link($tag->term_id) . '">' . $tag->name . '</a></li>';
    }
    ?>
    </ul>

</div>
<?php get_footer();?>
