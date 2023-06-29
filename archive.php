<?php /* Template Name: Archive Page */
get_header();
?>
<div class="main-content pt-5 pb-5">
  <div class="internal-hero-image" style="background-color:#001b3d; background-image: linear-gradient(360deg, #00529be3, #00285ddb, #001a3d), url('https://pwd.aa.ufl.edu/wp-content/uploads/2021/03/0I1A5562-scaled.jpg');">
<div class="container internal-div">
  <h1 class="text-center archive-title text-white">Search Results: <?php
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
<div class="container mt-5 page-top">
  <div class="row">
    <div class="col-lg-9">
  <?php
    if(have_posts()){
      while(have_posts()){
        the_post();?>

        <div class="posts">
          <div class="row p-3 mb-4">
            <div class="col-lg-3 mt-3">
          <?php the_post_thumbnail('medium'); ?>
        </div>
        <div class="col-lg-9">
          <h1 class="post-title lines"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
          <p><?php the_excerpt(); ?> | <a href="<?php the_permalink(); ?>" class="underline-from-left arrow-link">Read Post</a></p>

          <?php
            $archive_year = get_the_time('Y');
            $archive_month = get_the_time('m');
            $archive_day = get_the_time('d');
          ?>
          <div class="post-info d-flex align-items-center">
            <p><i class="fa-solid fa-calendar-days mr-2"></i> <?php echo get_the_date(); ?></p>
          <p class="category-label"><?php the_category(); ?></p>
          </div>

        </div>
        </div>

      </div>


  <?php } //ends while loop
    }//end if statement
    ?>
    </div>
    <div class="col-lg-3">
      <!--Recent Posts-->
      <?php dynamic_sidebar('recent-posts'); ?>

    </div>
  </div>
</div>
</div>
<?php get_footer(); ?>
