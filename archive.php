r<?php /* Template Name: Archive Page */
get_header();
?>
<div class="main-content">
  <div class="internal-hero-image" style="background-color:#001b3d; background-image: linear-gradient(360deg, #00529be3, #00285ddb, #001a3d), url('https://pwd.aa.ufl.edu/wp-content/uploads/2021/03/0I1A5562-scaled.jpg');">
  <div class="container internal-div">
  <h1 class="internal-hero-text text-center archive-title">Exploring: <?php
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

  </div>
  </div>
  <div class="container pt-5 pb-5">
    <div class="row">
      <div class="col-lg-9">
    <div class="row justify-content-center align-items-start">
    <?php
      if(have_posts()){

        while(have_posts()){
          the_post();?>
          <div class="col-xl-4 m-3">
          <div class="card shadow">
            <img class="card-img-top" <?php the_post_thumbnail('medium'); ?>
            <div class="post-info">
              <p><?php echo get_the_author();?><p>
              <p><?php echo get_the_date(); ?></p>
            </div>

          <div class="card-body mb-2">
          <h3 class="post-title card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
          <span class="blog-excerpt"><?php the_excerpt(); ?></span>
          <div class="card-line"></div>
          <span class="blog-category pt-2"><?php the_category(); ?></span>
          </div>
        </div>
          </div>

    <?php
  } //ends while loop
      }//end if statement
      ?>
    </div>
  </div>
    <div class="col-lg-3 p-3">
      <!--Recent Posts-->
      <?php dynamic_sidebar('recent-posts'); ?>

    </div>
  </div>
  </div>
  </div>
  <?php get_footer(); ?>
