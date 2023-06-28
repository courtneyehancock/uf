<?php get_header(); ?>

<div class="main-content pt-5 pb-5">
  <div class="internal-hero-image" style="background-color:#001b3d; background-image: linear-gradient(360deg, #00529be3, #00285ddb, #001a3d), url('https://pwd.aa.ufl.edu/wp-content/uploads/2021/03/0I1A5562-scaled.jpg');">

</div>
  <div class="container mt-5 page-top">
  <?php
    if(have_posts()){
      while(have_posts()){
        the_post(); ?>

        <div class="row d-flex align-items-start">
          <div class="col-lg-9 pr-4 pl-4 pb-4 mb-5">
            <div class="post-feature">
              <?php the_post_thumbnail(); ?>
            </div>
            <div class="post-details">
            <p class="written-by mt-3"><i class="fa-solid fa-user mr-2"></i><?php echo get_the_author(); ?></p>
            <p class="published"><i class="fa-solid fa-calendar-days mr-2"></i><?php echo get_the_date(); ?></p>
            <p class="category-label"><?php the_category(); ?></p>
          </div>
            <h2 class="post-title mt-3"><?php the_title(); ?></h2>
            <div class="block"></div>
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
