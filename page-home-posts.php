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
          <?php while ( have_posts() ) : the_post(); ?>

  		<?php
  			$args = array(
  				'post_type'      => 'post',
  				'posts_per_page' => - 6,
  			);
  			$q    = new WP_Query( $args );
  		?>

  		<div class="row">
              <div class="parent">
  			<?php while ( $q->have_posts() ) : $q->the_post(); ?>
  				<div class="div-box">
  					<h3>
  						<a href="<?php the_permalink(); ?>">
  							<?php the_title(); ?>
  						</a>
  					</h3>
  					<?php //the_excerpt(); ?>
  				</div>
  			<?php endwhile; ?>
  			<?php wp_reset_postdata(); ?>
  		</div>
              </div>

  	<?php endwhile; ?>
        </div>
</div>


<?php get_footer(); ?>
