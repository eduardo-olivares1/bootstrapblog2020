<?php get_header('search');?>

<div class="container mb-4">
     <h1 class="display-4 text-center mb-4">Results for "<?php echo get_search_query();?>"</h1>
     <?php get_template_part('includes/section', 'searchresults');?>

     <?php previous_posts_link();?>
     <?php next_posts_link();?>
</div>

<?php get_footer();?>
