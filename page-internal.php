<?php /*Template Name: Internal Page Template*/ ?>

<?php get_header(); ?>

<div class="breadcrumbs-container">
<div class="container">
<?php
if ( function_exists('yoast_breadcrumb') ) {
  yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
}
?>
</div>
</div>

<div class="main-content">
    <?php
      if(have_posts()){
        while(have_posts()){
          the_post();?>
          <?php the_content();
        }
      }
    ?>
</div>

<?php get_footer(); ?>
