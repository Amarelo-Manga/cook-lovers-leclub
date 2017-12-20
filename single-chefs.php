<?php get_header(); ?>
<?php get_field("imagem_de_banner_evento") ?>
<?php $image_banner_chef = get_field('imagem_do_banner'); ?>
<style type="text/css"> #banner{background-image: url("<?php echo $image_banner_chef['url']; ?>");}</style>
	<section id="banner" class="chef victor">
			<div class="container">
				<div class="col-lg-4 col-md-5 col-sm-5">
				  <?php the_field('texto_do_banner') ?>
				</div>
			</div>
		</section>
		
		<div class="faixa chef">
			<div class="container titulochef">
			<div class="col-lg-6 col-md-6 col-sm-12">
				<h2><?php the_field('subtitulo'); ?></h2>
			</div>
	         <div class="col-lg-6 col-md-6 col-sm-12 dados_hotels"> 
                  <?php the_field('nome_do_hotel') ?><br>
	         <?php the_field('nome_do_restaurate') ?>
	       
	         </div>
			</div>
       </div>
			<section class="bio bege">
			<div class="container">
				<div class="col-lg-6 col-md-6 col-sm-12">
					<?php the_field('texto_da_coluna1'); ?>
		   	       <?php $image_quadro1 = get_field('imagem_coluna_1');?>
		   	       <?php if(!empty($image_quadro1)){ ?>
			   	   <img src="<?php echo $image_quadro1['url']; ?>" class="esquerdo">
			   	   <?php } ?>
				</div>
				<?php $logo_hotel = get_field('logo_do_hotel')?>
				<div class="col-lg-6 col-md-6 col-sm-12">
		      <?php if(!empty($logo_hotel)){ ?>
			   <img class="logohotel" src="<?php echo $logo_hotel['url'] ?>" alt="<? echo  $logo_hotel['alt']?> "/>
			   <?php } ?>
				   <?php $image_quadro2 = get_field('imagem_coluna_2');?>
		   	      <?php if(!empty($image_quadro2)){ ?>
			   	   <img src="<?php echo $image_quadro2['url']; ?>" class="esquerdo">
			   	    <?php } ?>
			   	    
			   	   <?php $image_quadro2_2 = get_field('segunda_imagem_da_coluna');?>
			   	  
			   	    <?php if(!empty($image_quadro2_2)){ ?>
			   	   <img src="<?php echo $image_quadro2_2['url']; ?>" class="direito image_chef_2">
			   	    <?php } ?>
			   	    
				   <?php the_field('texto_da_coluna2');?>
				</div>
			</div>
		</section>
		<section class="outroschefs">



			<div class="container">
				<div class="col-lg-12 col-md-12 col-sm-12"><h2>Conheça nossos outros Chefs</h2></div>
		
<?php 
$posts = get_posts(array(
    'posts_per_page' => 3,
    'orderby'   => 'rand',
	'post_type'	=> 'chefs'
));
if( $posts ): ?>			
<?php foreach( $posts as $post ): setup_postdata( $post );?>		
<?php echo $ord++ ; if($ord==1){$class_frame="um";}elseif($ord==2){$class_frame="dois";}elseif($ord==3){$class_frame="tres";}elseif($ord==4){$class_frame="um";}elseif($ord==5){$class_frame="dois";}elseif($ord==6){$class_frame="tres";}elseif($ord==7){$class_frame="um";}elseif($ord==8){$class_frame="dois";}elseif($ord==9){$class_frame="tres";}else{$class_frame="1";}?>				
				<div class="col-lg-4 col-md-6 col-sm-12 chef-cards">
					<a href="<?php echo get_permalink()?>/?am_force_theme_layout=desktop">
						<span class="foto"><?php the_post_thumbnail()?></span>
						<div class="frame chefs <? echo $class_frame ?>">
							<h3><?php the_title()?></h3>
						</div>
					</a>
				</div>
			<?php endforeach; ?>
			</div>
	<?php wp_reset_postdata(); ?>
	<?php endif; ?>
		</section>
<?php get_footer(); ?>
