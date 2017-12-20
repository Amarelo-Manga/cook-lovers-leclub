<?php get_header(); ?>
<div class="mobile_event_ante">
<img src="http://cookloversleclub.com.br/wp-content/themes/twentyseventeen/img/mobile_banner_eventos_anteriores.jpg" alt="Confira como foram os eventos culinários do Le Club AccorHotels. Fique ligado nos eventos futuros e curta toda a experiência culianária nos hotéis da AccorHotels."/>
</div>
<section id="banner" class="event_ante">
	<div class="container">
		<div class="col-lg-6"></div>
		<div class="col-lg-5 col-md-8 col-sm-12">
			<h1>Eventos Anteriores</h1>
			<h2>
				Confira como foram <br>os eventos gastronômicos<br> do Cook Lovers</h2>
			
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




<section class="container-fluid restaurante evento_anterior">
	<div class="filtr-container">

<?
$posts = get_posts(array(
'posts_per_page'	=> -1,
'post_type'	=> 'eventos',
'term_id'=> 21
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
		
		<div class="col-lg-6 col-md-6 col-sm-12 filtr-item <?php global $post; echo $post->post_name; ?> " data-category="<?php echo $term_id ?>">
			
			<? if (get_field('post_de_aguarde') != 'sim') { $link = get_permalink()."/?am_force_theme_layout=desktop";}?>
			
			<?php $icon = get_field('icone_promocao'); ?>
				<a>
			<?php if ($icon){ ?><img src="<?php echo  $icon['url'] ?>" alt="<?php echo  $icon['alt']?>" class="icon_rest_promo"/><?php } ?>
			<div class="resumobeneficio">
	
				<h2><?php the_title() ?></h2><br>
					Em breve mais eventos gastronômicos

				
				
				</div>
		</a>
	</div>
		<?php }else{?> 
				<div class="col-lg-6 col-md-6 col-sm-12 filtr-item <?php global $post; echo $post->post_name; ?> " data-category="<?php echo $term_id ?>">
			
			<? if (get_field('post_de_aguarde') != 'sim') { $link = get_permalink()."/?am_force_theme_layout=desktop";}?>
			<a href="<?php echo $link ?>">
			<?php $icon = get_field('icone_promocao'); ?>
			<?php if ($icon){ ?><img src="<?php echo  $icon['url'] ?>" alt="<?php echo  $icon['alt']?>" class="icon_rest_promo"/><?php } ?>
			<div class="resumobeneficio">
				<div class="calendar_ant">
<span class="day"><? the_field('dia_mes_evento')?></span><br>
<span class="year"><? the_field('ano_do_evento') ?></span>

</div><br>
				<h2 style="font-weight: bold;"><?php the_field('nome_do_evento')?></h2>
					<?php the_field('nome_hotel') ?>
				<br>
<br>

				<span class="call_event_ant">Confira a galeria de fotos</span>
				</div>
			</a>
	</div>
<? } ?>
		<?php endforeach; ?>
		<?php wp_reset_postdata(); ?>
		
		
<div class="nav-previous alignleft"><?php next_posts_link( 'Anteriores' ); ?></div>
<div class="nav-next alignright"><?php previous_posts_link( 'Novos' ); ?></div>
		<?php endif; ?>
	</div>
</section>

<?php get_footer();?>