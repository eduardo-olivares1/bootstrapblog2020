<?php if(have_posts()): while(have_posts()): the_post();?>

<div class="card">
   <div class="card-body">
    <h2><?php the_title();?></h2>
    <?php the_excerpt();?>

<a class="btn btn-primary" href="<?php the_permalink();?>">Go to <?php the_title();?></a>
</div>
</div>

<?php endwhile; else: ?>
<p>There are no results for <b>"<?php echo get_search_query();?>"</b></p>
<?php endif;?>
