<?php get_header(); ?>
<?php $image_banner_rest = get_field('banner'); ?>
	<style type="text/css"> #banner{background-image: url("<?php echo $image_banner_rest['url']; ?>");}</style>
		<section id="banner" class="interno kitasushi">
			<div class="container">
			</div>
		</section>
		<div class="faixa restauranteinterno">
			<div class="container">
				<div class="col-lg-4 col-md-4  col-sm-12">
				
     <?php $image_logo_rest = get_field('logo_do_restaurante'); ?>
	<img class="logorestaurante" src="<?php echo $image_logo_rest['url']; ?>" alt="<?php the_title() ?>" />
				</div>
				<div class="col-lg-8 col-md-8 col-sm-12 title_rest">
				 <h1><?php the_title()?></h1>
				 <h2><?php the_field('nome_do_hotel')?></h2>
				</div>
			</div>
			
		</div>
		<section class="contentrestaurante">
			<div class="container">
				<div id="logo_hotel_rest" class="col-lg-4 col-md-4 col-sm-12">
				<? 
$img_hotel =get_field('thum_dos_hoteis');?>
<img src="<? echo $img_hotel['url']; ?>"/>
                                     <div class="info">
						<div class="tipodecomida">
						<?php the_field('tipo_de_cozinha') ?>
						</div>
						 <?php if(!empty(get_field('horario_de_atendimento'))){ ?>				 
                       <div class="funcionamento">
						<?php the_field('horario_de_atendimento') ?>
						</div>
						<?php } ?>	
										  <?php if(!empty(get_field('telefone'))){ ?>		
						<div class="telefone">
						<?php the_field('telefone') ?>
						</div>
										 <?php } ?>
						 <?php if(!empty(get_field('link'))){ ?>				 
						<div class="site">
                         <a href="<?php the_field('link')?>" target="_blank">Visite nosso site</a>
						</div>
						<?php } ?>			 				 
                         <?php if(!empty(get_field('e-mail_da_reserva'))){ ?>
						 <div class="email">
                          <a href="mailto:<?php the_field('e-mail_da_reserva')?>">Faça sua reserva</a>
                          </div>
                          <?php } ?>
						<div class="endereco">
						<?php the_field('endereco_do_hotel') ?>
						</div>
					</div>
				</div>
				<div class="col-lg-8 col-md-8 col-sm-12">
				<h2>Benefícios Le Club AccorHotels</h2>
					<div id="yellow_block"><div class="beneficiolcah"><?php the_field('beneficios_le_club_accorhotels') ?></div></div><img class="bubble_card" src="http://www.cookloversleclub.com.br/wp-content/themes/twentyseventeen/img/bubble-cartao-hotel.png" alt="apresente seu cartão Le Club AccorHotels">
					<div class="container-fluid"></div>
					<?php the_field('descrição_do_restaurante')?>
					
				<?php $galeria_fotos = get_field('galeria_de_fotos');?>
					
				<? if(!empty($galeria_fotos)){ ?>	
				<h2>Galeria de fotos</h2>
		     	<?php the_field('galeria_de_fotos'); ?>
				<? } ?>
				</div>
			</div>
			</div>
		</section>
		<section class="vermelho restgal">
			<div class="container">
				<h2>Conheça outros Restaurantes que participam do Cook Lovers</h2>
				
				
<?php 
$posts = get_posts(array(
    'posts_per_page' => 3,
    'orderby'   => 'rand',
	'post_type'	=> 'restaurante'
));
if( $posts ): ?>			
<?php foreach( $posts as $post ): setup_postdata( $post );?>
			
			<?php $ord++; if($ord==1){$ord_class = "fotoum";}elseif($ord==2){$ord_class ="fotodois";}else{$ord_class ="fototres";} ?>
	   
				<div class="col-lg-4 col0md-4 col-sm-12">
					 <a href="<?php echo get_permalink();?>"><img class="<?php echo $ord_class; ?> more_rest" src="<?php echo get_the_post_thumbnail_url(); ?>"></a>
				</div>
        <?php endforeach; ?>
		<?php wp_reset_postdata(); ?>
		<?php endif; ?>
			</div>
		</section>
	
	<?php get_footer(); ?>