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
        <div class="container">
          <!--Recent Posts-->
          <?php dynamic_sidebar('recent-posts'); ?>
        </div>
</div>


<?php get_footer(); ?>
