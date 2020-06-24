<?php if(have_posts()): while(have_posts()): the_post();?>
    <p class="font-weight-light"><?php echo get_the_date();?></p>
    <?php the_content();?>
    <p class="font-weight-light">Posted By: <?php the_author();?></p>


    <?php if (empty(get_the_category()) != true): ?>
    <span class="font-weight-light">Categories:</span>
    <?php
    $categories = get_the_category();
    foreach($categories as $category):?>

      <a class="badge badge-pill badge-primary" href="<?php echo get_tag_link($category->term_id);?>">
          <?php echo $category->name;?>
      </a>

    <?php endforeach;?>
    <?php endif ?>

    <?php if (empty(get_the_tags()) != true): ?>
    <span class="ml-2 font-weight-light">Tags:</span>
    <?php
    $tags = get_the_tags();
    foreach($tags as $tag):?>

      <a class="badge badge-pill badge-secondary" href="<?php echo get_tag_link($tag->term_id);?>">
          <?php echo $tag->name;?>
      </a>

    <?php endforeach;?>

    <?php endif ?>




<?php endwhile; else: endif;?>
