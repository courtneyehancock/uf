<?php /* Template Name: Archive Page */
get_header();
?>
<div class="main-content">
  <div class="container pt-5 pb-5">
    <div class="row">
      <div class="col-lg-9">
          <h1 class="mb-5">Exploring: <?php
      if(is_category()){
        single_cat_title();
      }elseif(is_tag()){
        single_tag_title();
      }elseif(is_day()){
        echo "Daily Archives: " . get_the_date();
      }elseif(is_month()){
        echo "Monthly Archives: " . get_the_date('F Y');
      }elseif(is_year()){
        echo "Yearly Archives: " . get_the_date('Y');
      }else{
        echo "Archives";
      }
     ?>
   </h1>
    <?php
      if(have_posts()){

        while(have_posts()){
          the_post();?>
          <div>
          <h3 class="post-title card-title">>> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
          <span class="blog-category pt-2"><?php the_category(); ?></span>
              <hr/>
          </div>
    <?php
  } //ends while loop
      }//end if statement
      ?>
  </div>
    <div class="col-lg-3 p-3">
      <!--Recent Posts-->
      <?php dynamic_sidebar('recent-posts'); ?>

    </div>
  </div>
  </div>
  </div>
  <?php get_footer(); ?>
