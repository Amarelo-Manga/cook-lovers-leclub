
	<?php
		if ( is_sticky() && is_home() ) :
			echo twentyseventeen_get_svg( array( 'icon' => 'thumb-tack' ) );
		endif;
	?>
<div class="col-lg-12 question_unit">
		<?php
			if ( 'post' === get_post_type() ) :
				echo '<div class="entry-meta">';
					if ( is_single() ) :
						twentyseventeen_posted_on();
					else :
						echo twentyseventeen_time_link();
						twentyseventeen_edit_link();
					endif;
				echo '</div><!-- .entry-meta -->';
			endif;

			if ( is_single() ) {
				the_title( '<h1 class="entry-title">', '</h1>' );
			} else {
				echo "<span class='name_quest_cliente'>Nome: &nbsp;</span>".the_field('nome_do_cliente')."<br>";
				echo "<span class='data_quest_cliente'>Data: &nbsp;</span>".the_field('data')."";
				the_title( "</br></br><h3 class='quest'>", "</h3></br>" );
				echo "<span class='resp_quest_cliente'>RESPOSTA DO CHEF:&nbsp;". the_field('nome_do_chef')."</span><br><br>";
                
				echo "<span class='content_papo'>".the_field('resposta')."</span><br><hr>";
			}
		?>
		<?php
			/* translators: %s: Name of current post */
			the_content( sprintf(
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentyseventeen' ),
				get_the_title()
			) );

			wp_link_pages( array(
				'before'      => '<div class="page-links">' . __( 'Pages:', 'twentyseventeen' ),
				'after'       => '</div>',
				'link_before' => '<span class="page-number">',
				'link_after'  => '</span>',
			) );
		?>
</div>
	<?php if ( is_single() ) : ?>
		<?php twentyseventeen_entry_footer(); ?>
	<?php endif; ?>