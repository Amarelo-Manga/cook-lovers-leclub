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
	<div id="filtroestado" class="container">
		<span>Selecione o estado: </span>
		<select class="select-estado">
			<option value='all'>Selecione</option>
			<option value='all'>Todos</option>
		<?php 
			$estadosBrasileiros = array('ac'=>'Acre','al'=>'Alagoas','ap'=>'Amapá','am'=>'Amazonas','ba'=>'Bahia','ce'=>'Ceará','df'=>'Distrito Federal','es'=>'Espírito Santo','go'=>'Goiás','ma'=>'Maranhão','mt'=>'Mato Grosso','ms'=>'Mato Grosso do Sul','mg'=>'Minas Gerais','pa'=>'Pará','pb'=>'Paraíba','pr'=>'Paraná','pe'=>'Pernambuco','pi'=>'Piauí','rj'=>'Rio de Janeiro','rn'=>'Rio Grande do Norte','rs'=>'Rio Grande do Sul','ro'=>'Rondônia','rr'=>'Roraima','sc'=>'Santa Catarina','sp'=>'São Paulo','se'=>'Sergipe','to'=>'Tocantins');
			while ( have_posts() ) : the_post();
				if( get_field('estado') ) {
				   $estPost[] = get_field('estado');
				} 
			endwhile;
			$estPost = array_unique($estPost);
			natcasesort($estPost);
			foreach ( $estPost as $v) {
				echo "<option value='".$v."'>".$estadosBrasileiros[$v]."</option>";
			}
		?>
		</select>
	</div>
</nav>

<section class="container-fluid restaurante">
	<div class="filtr-container">
	<?php
		$count_multiplo = 0;
		while ( have_posts() ) : the_post();
			$estado = get_field('estado');
	?>
		<div  class="col-lg-4 col-md-4 col-sm-12 filtr-item <?php the_title(); ?>" style="background-image: url('<?php echo get_the_post_thumbnail_url();?>')" data-estado="<?php echo $estado ?>">
			<a href="<?php the_permalink(); ?>">
				<?php $icon = get_field('icone_promocao'); ?>
				<?php if ($icon){ ?>
					<img src="<?php echo  $icon['url'] ?>" alt="<?php echo  $icon['alt']?>" class="icon_rest_promo"/><?php }
				 ?>
				<div class="resumobeneficio">
					<h2><?php the_title() ?></h2>
					<h3><?php the_field('nome_completo_do_hotel') ?></h3>
				</div>
			</a>
		</div>
	<?php 
		$count_multiplo++;
		endwhile; 
	?>
	<?php 
		$htmlEspaco = '<div class="col-lg-4 col-md-4 col-sm-12 filtr-item <?php the_title(); ?>" 
						style="background:url(/wp-content/uploads/2017/06/Restaurant_em_breve.jpg)"><a href="#"><div class="resumobeneficio"><h2>Aguarde</h2><h3>Em breve novos benefícios</h3></div></a></div>';
		$count_multiplo = $count_multiplo % 3;
		if( $count_multiplo == 1 ){
			echo $htmlEspaco . $htmlEspaco;
		}if($count_multiplo == 2){ 
			echo $htmlEspaco;
		};
	?>
	</div>
</section>

<?php get_footer();?>