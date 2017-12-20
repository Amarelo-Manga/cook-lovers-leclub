<?php get_header(); ?>
<div class="banner-mobile-perg"><img src="<?php echo get_template_directory_uri()?>/img/mobile_pergunte_ao_chef.jpg"/></div>
<?php layerslider(2) ?>

<div class="container_quest">
<!-- FOrulário de questões -->
	<?php $recent = new WP_Query("page_id=83"); while($recent->have_posts()) : $recent->the_post();?>
	<?php the_content(); ?>
	<?php endwhile; ?>
</div>
<div class="container questions_area">
	<?php if ( have_posts() ) : ?>
	<?php//the_archive_title( '', '' );//the_archive_description( '<div class="taxonomy-description">', '</div>' );?>
	<?php endif; ?>
			<?php
			if ( have_posts() ): ?>
			<?php
			while ( have_posts() ): the_post();

			get_template_part( 'template-parts/post/content-papo_de_chefe', get_post_format() );

			endwhile;
			the_posts_pagination( array(
				'prev_text' => twentyseventeen_get_svg( array( 'icon' => 'arrow-left' ) ) . '<span class="screen-reader-text">' . __( 'Previous page', 'twentyseventeen' ) . '</span>',
				'next_text' => '<span class="screen-reader-text">' . __( 'Next page', 'twentyseventeen' ) . '</span>' . twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyseventeen' ) . ' </span>',
			) );
			else :
				//get_template_part( 'template-parts/post/content', 'none' );

			endif;
			?>
	
</div>
<?php get_footer();?>