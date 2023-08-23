<article class="card_ext col-lg-4 align-items-center">
    <div class="card__header p-2">
    <?php
      $urlSource = (get_the_post_thumbnail_url()) ? 
       get_the_post_thumbnail_url() :  get_template_directory_uri() . '/assets/images/blog-post-banner.jpeg';
    ?>
      <img width="100%" src="<?php echo $urlSource; ?>" alt="card__image" class="card__image">
    </div>
    <div class="card__body">
      <h3><?php the_title(); ?></h3>
      <div class="desc">
      <?php the_excerpt(); ?>
      </div>
      <div class="read-more-button">
            <a href="<?php the_permalink(); ?>">Read More ></a>
        </div>
    </div>
    <div class="card__footer">
    <?php echo get_the_date(); ?>
    </div>
</article>