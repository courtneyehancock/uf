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
          <div class="col-lg-9 pr-4 pl-4 pb-4 mb-5 shadow" style="border-radius:15px;">
            <div class="post-feature">
              <?php the_post_thumbnail(); ?>
            </div>
            <h2 class="post-title mt-3"><?php the_title(); ?></h2>
            <div class="block"></div>
            <?php the_content(); ?>
          </div>
          <div class="col-lg-3">
            <div class="p-4" style="background-color:#f4f4f4; border-radius:15px;">
            <?php
              echo get_avatar( get_the_author_email(), '60' );
            ?>
            <p class="written-by mt-3"><?php echo "Written by: <br>" . get_the_author(); ?></p>
            <p class="published"><?php echo "Published: <br>" . get_the_date(); ?></p>
          </div>
          <div class="p-4 mt-3" style="background-color:#f4f4f4; border-radius:15px;">
            <p><em>Keep up with all things OPWD by reading our office updates.</em></p>

            <p><em>Is there a topic you would like to learn more about? Email Courtney Glancy at <a href="mailto:courtneyglancy@ufl.edu">courtneyglancy@ufl.edu</a> with your ideas.</em></p>
          </div>
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
