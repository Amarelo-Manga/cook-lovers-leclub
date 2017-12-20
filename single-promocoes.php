<?php get_header(); ?>
<?php the_field('slide');?>
	<?php
				/* Start the Loop */
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/post/content-promocoes', get_post_format() );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
		endwhile; // End of the loop.
			?>
<?php get_footer(); ?>
