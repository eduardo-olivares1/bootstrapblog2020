<?php if(have_posts()): while(have_posts()): the_post();?>

<div class="card">
   <div class="card-body">
    <h2><?php the_title();?></h2>
    <p class="font-weight-light"><?php echo get_the_date();?></p>
    <?php the_excerpt();?>

<a class="btn btn-primary" href="<?php the_permalink();?>">Read <?php the_title();?></a>
</div>
</div>

<?php endwhile; else: endif;?>
