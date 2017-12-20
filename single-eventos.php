<?php get_header(); ?>
<?php get_field("imagem_de_banner_evento") ?>
<?php $image_fundo = get_field('imagem_de_banner_evento'); ?>
<div style="visibility:hidden"><? $id = the_category_id(); ?></div>
<?php 
$image_fundo_mobile = get_field('imagem_banner_mobile'); 

?>






<style type="text/css"> 
#banner{background-image: url("<?php echo $image_fundo['url']; ?>");}

</style>

<a href="#redevento" style="display:block"><section id="banner" class="even "></section></a>
<!--Banner mobile-->
<a href="#redevento" style="display:block">
 <section id="banner_mobile_evento" class="even">
  <img src="<?php echo $image_fundo_mobile['url']; ?>" alt="<?php echo the_title(); ?>"/>
 </section>
</a>
	    <div class="faixa event">
			<div class="container">
				<h2><?php the_title() ?></h2>
			</div>
		</div>

<? //Condição -  Se não está marcada a condição "Anteiores"

if ($id != 21){ ?>

			<section class="evento <?php the_field('classe'); ?>">
			<div class="container vazio">
<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12"><?php the_field('galeria_de_fotos')?>
				
				<? if (get_term_by('name','anterior','category')){ echo "<h1>anterior funcionando</h1>"; } ?>
				</div>
</div>
			</div>
			<div class="container">
				<div class="col-lg-6 col-md-6 col-sm-12 sobreevento">
			     <?php the_field("texto_da_coluna")?>
				<a class="ctaeventos" href="<?php the_field('link_do_call_to_action')?>"><?php the_field('call_to_action') ?></a>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 fotosevento">
					<?php the_field("imagem_da_coluna") ?>
				</div>
			</div>
		</section>
				
<? }
	//Fechar Condição -  Se não está marcada a condição "Anteiores"  ?>			
					
<?php 
//Condição -  Se estiver fechado como anteriores
	if($id == 21){?>
	
		<section class="evento_old">
			<div class="container">
			<div class="row">
			<div class="col-lg-12">
	<? the_field('galeria_de_imagens');?>
	</div>
		</div>
			</div>
</section>
	
	<?}	?>			
			<section id="redevento">
			<div class="container">
		<?php the_field("formulario_de_cadastro") ?>
			</div>
		</section>

<!--section style="min-height: 0px;" id="antefooter" class="foot_event">
	<div class="container">
		<h2 style="margin-bottom: 20px !important;">Confira o que já rolou por aqui</h2>
	</div>
	<div class="container">
		

	
			
			
	<?php 
$posts = get_posts(array(
    'posts_per_page' => 2,
    'orderby'   => 'rand',
	'post_type'	=> 'eventos'
));
if( $posts ): ?>			
<?php foreach( $posts as $post ): setup_postdata( $post );?>				
			<a href="<?php echo get_permalink()?>">
				<div class="col-lg-4">
					<span class="foto ">
						<?php the_post_thumbnail()?>
					</span>
				</div>
			</a>
			<?php endforeach; ?>
		
		<?php wp_reset_postdata(); ?>
	<?php endif; ?>	
		
	</div>
</section-->
<?php get_footer(); ?>
