<?php get_header(); ?>
<div id="banner-mobile"><img src="<?php echo get_template_directory_uri()?>/img/mobile_COOKLOVERS.jpg"/></div>
<section id="slider">
	<img class="barra" src="<?php echo get_template_directory_uri()?>/img/barra-transparente.png">
	<?php layerslider(1) ?>
</section>
<section id="chamadas">
	<div class="container">
<h2>Confira os destaques do Cook Lovers</h2>
		<?php 
$ord="0";
$posts = get_posts(array(
	'posts_per_page'	=> -1,
	'post_type'			=> 'destaque'
));
if( $posts ): ?>
		<?php foreach( $posts as $post ): 
		setup_postdata( $post );
		$ord++;	
		?>
		<div class="col-lg-4 <?php if(the_field('borda') == "border"){echo "border";}?>">

			<h2>
				<?php the_title(); ?>
			</h2>
			<a href="<?php the_field('link') ?>/?am_force_theme_layout=desktop">
                          <?php the_post_thumbnail(); ?>
			  <?php the_content(); ?>
			  <?php if(($ord==1)||($ord==2)||($ord==3)){ ?> <div class="linha"><p></p></div> <?php }?>
                       </a>
		</div>
		<?php endforeach; ?>
	</div>
	<?php wp_reset_postdata(); ?>
	<?php endif; ?>
</section>
<section id="contato">
	<div class="container">
		<h2>Inscreva-se no Cook Lovers</h2>
	</div>
	<div class="container">
		<div class="col-lg-6 esquerdo">
			<p>Que tal ter descontos exclusivos em bares e restaurantes? Imagine ter a receita daquele grande Chef, ou melhor, ter acesso a experiências únicas dentro do universo da gastronomia. Cadastre-se no clube de gastronomia do Le Club AccorHotels, receba conteúdos e promoções exclusivas e aproveite o melhor do mundo gourmet.<br><br>Para participar, basta ser associado do Le Club AccorHotels e se inscrever no Cook Lovers preenchendo o formulário ao lado. É simples,<br> rápido e muito gostoso!</p>
		</div>
		<div class="col-lg-6 direito">
			<?php $recent = new WP_Query("page_id=32"); while($recent->have_posts()) : $recent->the_post();?>
			<?php the_content(); ?>
			<?php endwhile; ?>
		</div>
	</div>
</section>
<section id="antefooter">
	<div class="container">
		<h2>Receitas de dar água na boca</h2>
		<p>Confira três receitas maravilhosas <br> que o Cook Lovers preparou para você</p>
	</div>
	<div class="container">

<?php 
$posts = get_posts(array(
	'posts_per_page'	=> 3,
	'post_type'			=> 'receitas'
));

if( $posts ): ?>


			<?php foreach( $posts as $post ): 
		setup_postdata( $post );
		?>
			<a href="<?php echo get_permalink(); ?>">
				<div class="col-lg-4">
					<span class="foto">
						<?php the_post_thumbnail(); ?>
					</span>
					<div class="frame um">
						<h3>
							<?php the_field('titulo_curto') ?>
						</h3>
					</div>
				</div>
			</a>
			<?php endforeach; ?>
		<?php wp_reset_postdata(); ?>
		<?php endif; ?>

<span class="call_to_receita"><a href="http://cookloversleclub.com.br/receita/">CLIQUE AQUI E CONFIRA TODAS AS NOSSAS RECEITAS</a></span>

	</div>
</section>
<?php get_footer(); ?>