<?php get_header(); ?>

<div class="main-content">
  <div class="breadcrumbs-container">
<nav class="container" aria-label="Breadcrumb">
<?php
if ( function_exists('yoast_breadcrumb') ) {
  yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
}
?>
</nav>
</div>
  <div class="container mt-5 page-top">
      <div class="row">
        <div class="col-lg-9">
      <div class="row justify-content-center align-items-start">
      <?php
        if(have_posts()){

          while(have_posts()){
            the_post();?>
            <div class="col-xl-4 mb-3">
            <div class="card">
              <?php
$thumbnail_id = get_post_thumbnail_id();
$alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
?>

<?php the_post_thumbnail('medium', [
'class' => 'card-img-top',
'alt' => esc_attr($alt ?: get_the_title())
]); ?>
              <div class="post-info">
                <p><span class="screen-reader-text">Author: </span><?php echo get_the_author();?></p>
<p><span class="screen-reader-text">Published on: </span><?php echo get_the_date('m/d/Y'); ?></p>
              </div>

            <div class="card-body mb-2">
            <h3 class="post-title card-title"><a href="<?php the_permalink(); ?>" aria-label="Read blog post: <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
            <span class="blog-excerpt"><?php the_excerpt(); ?></span>
            <div class="card-line"></div>
            <span class="blog-category pt-2" aria-label="Post categories"><?php the_category(', '); ?></span>
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
        <aside aria-label="Recent blog posts">
<?php dynamic_sidebar('recent-posts'); ?>
</aside>

      </div>
    </div>
    </div>
    </div>
    <?php get_footer(); ?>
