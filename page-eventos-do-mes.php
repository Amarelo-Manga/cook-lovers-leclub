<?php 
/*
 * Template name: Eventos Mês
 */
?>
<?php get_header(); ?>
<div class="mobile_event_ante">
<img src="http://cookloversleclub.com.br/wp-content/themes/twentyseventeen/img/mobile_banner_eventos.jpg" alt="Confira como foram os eventos culinários do Le Club AccorHotels. Fique ligado nos eventos futuros e curta toda a experiência culianária nos hotéis da AccorHotels."/>
</div>
<section id="banner" style="background-image:url(http://cookloversleclub.com.br/wp-content/themes/twentyseventeen/img/bg_banner_eventos.jpg);    background-size: 100% 100%;" class="event_futuro">
	<div class="container">
		<div class="col-lg-6"></div>
		<div class="col-lg-5 col-md-8 col-sm-12">
			<h1>Eventos do Mês</h1>
			<h2>Confira os eventos <br>gastronômicos do <br>Cook Lovers</h2>
		</div>
	</div>
</section>
<nav class="faixa salmao"></nav>
<section class="container-fluid restaurante evento_anterior">
	<div class="filtr-container">
	<?php
		$args = array(
					'posts_per_page' => -1,
					'post_type'		 => 'eventos',
					'category'		 => 28
				);
		$posts = get_posts( $args );
		if( $posts ){ 
			foreach( $posts as $post ): setup_postdata( $post );
			 	$style = 'background-image:url('.get_the_post_thumbnail_url().');background-position: center;background-repeat: none;';
				
				$terms = get_the_terms( $post->ID, 'hoteis_restaurantes' );
				if ( $terms ) {
					foreach ( $terms as $term ) {
						$term_id = $term->term_id;
					}
				};
				 
				$aguarde = get_field('aguarde');
				if( $aguarde && in_array('sim', $aguarde) ){ 
	?>
				<div class="col-lg-6 col-md-6 col-sm-12 filtr-item <?php echo $post->post_name; ?>"
					style="<?php echo $style; ?>" 
					data-category="<?php echo $term_id ?>" >

					<? if (get_field('post_de_aguarde') != 'sim') { $link = get_permalink()."/?am_force_theme_layout=desktop";}?>
					<?php $icon = get_field('icone_promocao'); ?>
			<?php if ($icon){ ?><img src="<?php echo  $icon['url'] ?>" alt="<?php echo  $icon['alt']?>" class="icon_rest_promo"/><?php } ?>
			<div class="resumobeneficio">
				<h2><?php the_title() ?></h2><br>Em breve mais eventos gastronômicos
			</div>
		</a>
	</div>
		<?php }else{?> 
				<div class="col-lg-6 col-md-6 col-sm-12 filtr-item <?php global $post; echo $post->post_name; ?> " style="<?php echo $style; ?>"  data-category="<?php echo $term_id ?>">
			
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
		<?php //endif $posts
			}else{
		?>	
			<div class="col-lg-12 col-md-12 col-sm-12 filtr-item">
				<a href="#">
					<div class="resumobeneficio">
						<h2 style="font-weight: bold;">Aguarde os próximos eventos, fique ligado para participar</h2><br ><br>
					</div>
				</a>
			</div>
		<?php	
			} //endif $posts
		?>
	</div>
</section>

<?php get_footer();?>