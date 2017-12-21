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
	<?php
		$count_multiplo = 0;
		$count_posts = wp_count_posts();
		while ( have_posts() ) : the_post();
	?>
		<div class="col-lg-4 col-md-4 col-sm-12 filtr-item <?php the_title(); ?>" style="background-image: url('<?php echo get_the_post_thumbnail_url();?>')">
			<a href="<?php the_permalink(); ?>">
				<div class="resumobeneficio">
					<h2><?php the_title(); ?></h2>
				</div>
			</a>
		</div>
	<?php 
		$count_multiplo++;
		endwhile; 
	?>
	<?php 
		$htmlEspaco = '<div class="col-lg-4 col-md-4 col-sm-12 filtr-item <?php the_title(); ?>" 
						style="background:url(/wp-content/themes/twentyseventeen/img/thumb_receitas.jpg)"><a href="#" >"><div class="resumobeneficio"><h2>Aguarde</h2></div></a></div>';
		$count_multiplo = $count_multiplo % 3;
		if( $count_multiplo == 1 ){
			echo $htmlEspaco . $htmlEspaco;
		}if($count_multiplo == 2){ 
			echo $htmlEspaco;
		};
	?>
	</div>
</section>
<aside id="paginacao" class="container-fluid faixa">
	<div class="container ">
		<?php
			the_posts_pagination( array(
				'mid_size'  => 5,
				'prev_text' => __( 'Anterior', 'textdomain' ),
				'next_text' => __( 'Próxima', 'textdomain' ),
			) );
		?> 
	</div>
</aside>
<?php get_footer();?>
