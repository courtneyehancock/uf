<?php get_header(); ?>

<div class="main-content pt-5 pb-5">
  <div class="container">
  <?php
    if(have_posts()){
      while(have_posts()){
        the_post(); ?>

        <div class="row d-flex align-items-start">
          <div class="col-lg-9 pr-4 pl-4 pb-4 mb-5">
            <div class="post-feature">
              <?php $thumbnail_id = get_post_thumbnail_id(); 
        $alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true); ?>
        <?php the_post_thumbnail('large', [ 
                                 'alt' => esc_attr($alt ?: get_the_title())
                                 ]); ?>
            </div>
            <div class="post-details mt-3 d-flex align-items-center">
          <p class="written-by">
<span class="screen-reader-text">Author: </span><?php echo get_the_author(); ?>
</p>

<p class="published">
<span class="screen-reader-text">Published on: </span><?php echo get_the_date('m/d/Y'); ?>
</p>
            <p class="category-label">
<span class="screen-reader-text">Categories: </span>
<?php the_category(', '); ?>
</p>
          </div>
            <h1 class="post-title mt-3"><?php the_title(); ?></h1>
            <?php the_content(); ?>
          </div>
          <div class="col-lg-3">
            <!--Recent Posts-->
           <aside aria-label="Recent blog posts">
<?php dynamic_sidebar('recent-posts'); ?>
</aside>

        </div>
        </div>

      </div>


        <?php
      }
    }
  /*  if (comments_open() || get_comments_number()):
      comments_template();
    endif;*/
  ?>
  </div>
</div>
<?php get_footer(); ?>
