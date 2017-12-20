<?php get_header(); ?>

		<section  id="receitaum">
			<style type="text/css">
				.fotoprato-mobile{
				<?php $foto_mobile = get_field('banner_mobile') ?>	
				background-image: url("<?php echo $foto_mobile['url'] ?>");
				background-repeat: none; 
				background-size:cover;}
			</style>
			
		<div class="fotoprato-mobile">
			
			</div>
			<div class="container-fluid <?php the_field('cor_da_pagina') ?>">
				<div class="row">
		<style type="text/css">
				.fotoprato{
				<?php $foto_bg = get_field('Imagem_fundo') ?>	
				background-image: url("<?php echo $foto_bg['url'] ?>");
				background-position: center;
				background-repeat: none;
			}
		</style>
				
					<div class="col-lg-6 col-md-6 col-sm-12 fotoprato">
						
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12 direito">
					<div class="title"><?php the_title( '<h2>', '</h2>' ); ?></div>
						<div class="description">
							<h3 class="autor"><?php the_field('nome_do_chefe'); ?></h3>
							<h3 class="hotel"><?php the_field('nome_do_hotel') ?></h3>
						</div>
						<div class="col-lg-8 col-md-12">
							<div id="description"><?php the_field('descrição_da_receita') ?></div>
							<h3>INGREDIENTES</h3>
							<?php the_field('ingredientes') ?>
						</div>
						<?php $img_ingrediente = get_field('imagem_para_ingredientes'); ?>
						<div class="col-md-4 ingredientes"><img src="<?php echo $img_ingrediente['url'] ?>" alt="<?php echo  $img_ingrediente['alt'] ?>"></div>
						<div class="col-lg-8 col-md-12 modopreparo">
							<h3>MODO DE PREPARO</h3>
							<?php the_field('modo_de_preparo') ?>
						</div>
						<?php $img_modo = get_field('imagem_do_modo_de_preparo'); ?>
						<div class="col-md-4 preparo"><img src="<?php echo $img_modo ['url'] ?>" alt="<?php $img_modo['alt'] ?>"></div>
					</div>
				</div>
			</div>
		</section>

	
	<?php get_footer(); ?>