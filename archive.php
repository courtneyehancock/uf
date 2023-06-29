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
  <div class="container page-top">
       <?php
         if(have_posts()){
           while(have_posts()){
             the_post();?>

             <div class="posts">
               <div class="row align-items-center shadow p-3 mb-4 rounded-lg bg-white">
                 <div class="col-lg-4">
               <?php the_post_thumbnail('medium'); ?>
             </div>
             <div class="col-lg-8">
               <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
               <?php the_excerpt(); ?>
               <p>    <a href="<?php the_permalink(); ?>" class="btn btn-primary card-btn">READ POST</a>

               <?php
                 $archive_year = get_the_time('Y');
                 $archive_month = get_the_time('m');
                 $archive_day = get_the_time('d');
               ?>
               <div class="post-info d-flex align-items-center justify-content-end">
                 <p class="font-italic">Published: <?php echo get_the_date(); ?></p>
               <p class="category-label font-italic">Category: <?php the_category(); ?></p>
               </div>

             </div>
             </div>
           </div>
       <?php } //ends while loop
         }//end if statement
         ?>
  </div>
</div>

<?php get_footer(); ?>
