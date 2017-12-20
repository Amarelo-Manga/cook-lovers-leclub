<?php get_header(); ?>
<?php layerslider(4) ?>


<nav class="receita">
			<ul class="container">
			
<?php 
$posts = get_posts(array(
'posts_per_page'	=> -1,
'post_type'	=> 'receitas'
));
if( $posts ): ?>			
<?php foreach( $posts as $post ): setup_postdata( $post );?>
			<?php
				$ord = get_field('ordem_nos_destaque');
				if($ord == "primeiro"){$link_nav ="#receitaum";}
				elseif($ord =="segundo"){$link_nav ="#receitadois";}
				elseif($ord =="terceiro"){$link_nav ="#receitatres";}
				?>
				<a href="<?php echo $link_nav ?>" class="page-scroll">
					<li class="col-lg-4">
					<?php the_post_thumbnail(); ?>
					<h2><?php the_title(); ?></h2>
					</li>
				</a>
				<?php endforeach; ?>
	</ul>
	<?php wp_reset_postdata(); ?>
	<?php endif; ?>
		</nav>
		

<?php 
$posts = get_posts(array(
'posts_per_page'	=> -1,
'post_type'	=> 'receitas'
));
if( $posts ): ?>			
<?php foreach( $posts as $post ): setup_postdata( $post );?>	

		
<?php if($ord == "primeiro"){ ?>	
<section class="red" id="receitaum">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-6 col-md-6 fotoprato">
						<div class="title"><h2><?php the_title(); ?></h2></div>
					</div>
					<div class="col-lg-6 col-md-6 direito">
						<div class="description">
							<h3 class="autor"><?php the_field('nome_do_chefe') ?></h3>
							<h3 class="hotel"><?php the_field('nome_do_hotel') ?></h3>
						</div>
						<div class="col-lg-8 col-md-12">
							<?php the_field('descrição_da_receita') ?>
							<h3>INGREDIENTES</h3>
							<?php the_field('ingredientes') ?>
						</div>
						<div class="col-md-4 ingredientes"><img src="img/semente-de-chia.png"></div>
						<div class="col-lg-8 col-md-12">
							<h3>MODO DE PREPARO</h3>
				             <?php the_field('modo_de_preparo'); ?>
						</div>
						<div class="col-md-4 preparo"><img src="img/pedacos-de-salmao.png"></div>
					</div>
				</div>
			</div>
		</section>
	<?php }elseif($ord == "segundo"){ ?>
	
	<section class="blue" id="receitadois">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-6 col-md-6 fotoprato">
						<div class="title"><h2><?php the_title(); ?></div>
					</div>
					<div class="col-lg-6 col-md-6 esquerdo">
						<div class="description">
							<div class="col-md-4"></div>
							<div class="col-md-8">
								<h3 class="autor"><?php the_field('nome_do_chefe') ?></a></h3>
								<h3 class="hotel"><?php the_field('nome_do_hotel') ?></h3>
							</div>
						</div>
						<div class="col-md-4 ingredientes"><img src="img/limao.png"></div>
						<div class="col-lg-8 col-md-12">
							<?php the_field('descrição_da_receita') ?>
							<h3>INGREDIENTES</h3>
							<?php the_field('ingredientes') ?>	
						</div>
						<div class="col-md-4 preparo"><img src="img/salsa.png"></div>
						<div class="col-lg-8 col-md-12">
							<h3>MODO DE PREPARO</h3>
					       <?php the_field('modo_de_preparo'); ?>
						</div>
					</div>
				</div>
			</div>
	</section>
    <?php } ?>
    <?php endforeach; ?>
	<?php wp_reset_postdata(); ?>
	<?php endif; ?>
	
	
	
	
		
<div class="container questions_area">
	<?php if ( have_posts() ) : ?>
	<?php//the_archive_title( '', '' );//the_archive_description( '<div class="taxonomy-description">', '</div>' );?>
	<?php endif; ?>
			<?php
			if ( have_posts() ): ?>
			<?php
			while ( have_posts() ): the_post();

			get_template_part( 'template-parts/post/content-receitas', get_post_format() );

			endwhile;
			the_posts_pagination( array(
				'prev_text' => twentyseventeen_get_svg( array( 'icon' => 'arrow-left' ) ) . '<span class="screen-reader-text">' . __( 'Previous page', 'twentyseventeen' ) . '</span>',
				'next_text' => '<span class="screen-reader-text">' . __( 'Next page', 'twentyseventeen' ) . '</span>' . twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyseventeen' ) . ' </span>',
			) );
			else :
				get_template_part( 'template-parts/post/content', 'none' );

			endif;
			?>
	
</div>
<?php get_footer();?>