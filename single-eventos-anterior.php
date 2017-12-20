<?php get_header(); ?>
<?php get_field("imagem_de_banner_evento") ?>
<?php $image_fundo = get_field('imagem_de_banner_evento'); ?>
<style type="text/css"> #banner{background-image: url("<?php echo $image_fundo['url']; ?>");}</style>
<a href="#redevento" style="display:block"><section id="banner" class="even"></section></a>
	    <div class="faixa event">
			<div class="container">
				<h2><?php the_title() ?></h2>
			</div>
		</div>
			<section class="evento">
			<div class="container">
				<div class="col-lg-12"><?php the_field('galeria_de_fotos')?>
				</div>
			</div>
			<div class="container">
			teste
			</div>
		</section>
		
			<section id="redevento">
			<div class="container">
		<?php the_field("formulario_de_cadastro") ?>
			</div>
		</section>
		
		
<? echo $category = get_term_by('name', 'anterior', 'category') ?>

<!--section style="min-height: 0px;" id="antefooter">
	<div class="container">
		<h2 style="margin-bottom: 20px !important;">Confira o que já rolou por aqui</h2>
	</div>
	<div class="container">
		<ul>
			<a href="#">
				<div class="col-lg-4">
					<span class="foto evento">
						<img width="279" height="186" src="http://cookloversleclub.com.br/wp-content/uploads/2017/05/destaque-le-grand-chef.jpg">
					</span>
				</div>
			</a>
			<a href="#">
				<div class="col-lg-4">
					<span class="foto evento">
						<img width="279" height="186" src="http://cookloversleclub.com.br/wp-content/uploads/2017/05/destaque-nespresso.jpg">
					</span>
				</div>
			</a>
			<a href="#">
				<div class="col-lg-4">
					<span class="foto evento">
						<img width="279" height="186" src="http://cookloversleclub.com.br/wp-content/uploads/2017/05/destaque-art-battle.jpg">
					</span>
				</div>
			</a>
		</ul>
		<a href="#" class="mais">Confira mais</a>
	</div>
</section-->
<?php get_footer(); ?>
