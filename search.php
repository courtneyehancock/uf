<?php /* Template Name: Search Page */
get_header();
?>
<div class="main-content">
  <div class="container pt-5 pb-5">
        <?php if(have_posts()){?>
                <h1><?php printf(__('Search Results For: %s'), '<span>' . get_search_query() . '</span>');?></h1>
                <hr>
                <?php while(have_posts()){
                  the_post(); ?>
                  <p><i class="fa-solid fa-chevrons-right icon-blue"></i> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                  <?php the_excerpt();
                }
              }else{?>
                <h1>Nothing was found</h1>
                <p>Try another search term.</p>
                <?php
                get_search_form();
              }
        ?>
  </div>
</div>
<?php get_footer(); ?>
