<?php get_header(); ?>

<div class="main-content pt-5 pb-5">
  <div class="container mt-5 pt-5">
  <?php
    if(have_posts()){
      while(have_posts()){
        the_post(); ?>

        <div class="row d-flex align-items-start">
          <div class="col-lg-9 pr-4 pl-4 pb-4 mb-5">
            <div class="post-feature">
              <?php the_post_thumbnail(); ?>
            </div>
            <div class="post-details mt-3 d-flex align-items-center">
            <p class="written-by"><?php echo get_the_author(); ?></p>
            <p class="published"><?php echo get_the_date(); ?></p>
            <p class="category-label"><?php the_category(); ?></p>
          </div>
            <h1 class="post-title mt-3 lines"><?php the_title(); ?></h1>
            <?php the_content(); ?>
          </div>
          <div class="col-lg-3">
            <!--Recent Posts-->
            <?php dynamic_sidebar('recent-posts'); ?>

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
