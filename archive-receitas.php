<?php get_header(); ?>
<div class="banner-mobile-receita"></div>
<?php layerslider(4) ?>
<div class="faixa title_receita" style="font-family: Arial;">
			<div class="container cozinha-receita" style="font-family: Arial;">
				<h2>Confira abaixo as receitas assinadas pelos nossos Chefs!</h2>
			</div>
		</div>
<section class="container-fluid receitas">
	<div class="filtr-container">

<?
$posts = get_posts(array(
'posts_per_page'	=> 15,
'post_type'	=> 'receitas'
));
if( $posts ): ?>

		<?php foreach( $posts as $post ): setup_postdata( $post );?>
		<style type="text/css">
		.<?php global $post;
			echo $post->post_name;
			?> {
				background-image: url("<?php echo get_the_post_thumbnail_url() ?>");
				background-position: center;
				background-repeat: none;
			}
		}
		</style>

		<?php
		$terms = get_the_terms( $post->ID, 'hoteis_restaurantes' );
		if ( $terms ) {
			foreach ( $terms as $term ) {
				$term_id = $term->term_id;
			}
		}
		?>
          <?php $aguarde = get_field('aguarde');
		
		if( $aguarde && in_array('sim', $aguarde)) { ?>
		<div class="aguarde_item col-lg-4 col-md-4 col-sm-6 filtr-item <?php global $post; echo $post->post_name; ?> " data-category="<?php echo $term_id ?>">
			<a>
						<div class="resumobeneficio">
				<h2><?php echo the_title() ?></h2>
				
				</div>
			</a>
		</div>
		<? } else{ ?> 
			<div class="col-lg-4 col-md-4 col-sm-12 filtr-item <?php global $post; echo $post->post_name; ?> " data-category="<?php echo $term_id ?>">
			<a href="<?php echo get_permalink()?>">
						<div class="resumobeneficio">
				<h2><?php echo the_title() ?></h2>
				
				</div>
			</a>
		</div>
<?php } ?>
		<?php endforeach; ?>
	


	</div>

	<?php endif; ?>
</section>

<?php get_footer();?>
