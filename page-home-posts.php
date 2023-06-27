<?php /*Template Name: Home Page With Dynamic Posts Template*/ ?>

<?php get_header(); ?>

<div class="main-content">
        <?php
          if(have_posts()){
            while(have_posts()){
              the_post();?>
              <?php the_content();
            }
          }
        ?>
        <div class="container pt-5">
          <div class="row">
            <div class="col-lg-6">
          <!--Recent Posts-->
          <?php dynamic_sidebar('recent-posts'); ?>
        </div>
        <div class="col-lg-6">
          <!--Recent Posts-->
          <?php dynamic_sidebar('recent-posts-list'); ?>
        </div>
        </div>
</div>


<?php get_footer(); ?>
