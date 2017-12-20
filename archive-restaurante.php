<?php get_header(); ?>
<section id="banner" class="rest">
	<div class="container">
		<div class="col-lg-6"></div>
		<div class="col-lg-5 col-md-8 col-sm-12">
			<h1>Restaurantes</h1>
			<p>Quem é associado Le Club AccorHotels tem benefícios únicos e exclusivos em diversos restaurantes nos hotéis da rede AccorHotels.</p><p>Confira abaixo os estabelecimentos que participam <br>
do Cook Lovers e os benefícios que eles oferecem<br> para nossos associados.</p>
		</div>
	</div>
</section>

<nav class="faixa salmao">

	<?php //$taxonomy = 'hoteis_restaurantes'; $tax_terms = get_terms( $taxonomy );?>

	<!--ul class="simplefilter">
		<li class="active" data-filter="all">All</li>
		<?php // foreach ( $tax_terms as $tax_term ) {echo '<li data-filter="' . $tax_term->term_id. '" class="">' . $tax_term->name . '</li>';}?>

	</ul-->
</nav>




<section class="container-fluid restaurante">
	<div class="filtr-container">

<?
$posts = get_posts(array(
'posts_per_page'	=> -1,
'post_type'	=> 'restaurante'
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
		
		<div class="col-lg-4 col-md-6 col-sm-12 filtr-item <?php global $post; echo $post->post_name; ?> " data-category="<?php echo $term_id ?>">
			
			<? if (get_field('post_de_aguarde') != 'sim') { $link = get_permalink()."/?am_force_theme_layout=desktop";}?>
			
			<?php $icon = get_field('icone_promocao'); ?>
				<a>
			<?php if ($icon){ ?><img src="<?php echo  $icon['url'] ?>" alt="<?php echo  $icon['alt']?>" class="icon_rest_promo"/><?php } ?>
			<div class="resumobeneficio">
				<h2><?php the_title() ?></h2>
				<h3><?php the_field('nome_completo_do_hotel') ?></h3>
				</div>
		</a>
	</div>
		<?php }else{?> 
				<div class="col-lg-4 col-md-6 col-sm-12 filtr-item <?php global $post; echo $post->post_name; ?> " data-category="<?php echo $term_id ?>">
			
			<? if (get_field('post_de_aguarde') != 'sim') { $link = get_permalink()."/?am_force_theme_layout=desktop";}?>
			<a href="<?php echo $link ?>">
			<?php $icon = get_field('icone_promocao'); ?>
			<?php if ($icon){ ?><img src="<?php echo  $icon['url'] ?>" alt="<?php echo  $icon['alt']?>" class="icon_rest_promo"/><?php } ?>
			<div class="resumobeneficio">
				<h2><?php the_title() ?></h2>
				<h3><?php the_field('nome_completo_do_hotel') ?></h3>
				</div>
			</a>
	</div>
<? } ?>
		<?php endforeach; ?>
		<?php wp_reset_postdata(); ?>
		<?php endif; ?>
	</div>
</section>

<?php get_footer();?>