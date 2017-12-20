<?php get_header(); ?>
		<section id="banner" class="chef menu">
			<div class="container">
				<div class="col-lg-6 col-md-5 col-sm-5">
					<h1>Nossos</h1>
					<h1 class="right">Chefs</h1>
				</div>
			</div>
		</section>
		<div class="faixa">
			<div class="container">
				<h2>Conheça os Chefs que comandam nossas cozinhas!</h2>
			</div>
		</div>
<section class="chefsmenu">
		
<div class="container">

<?php 
$posts = get_posts(array(
'posts_per_page' => -1,
'post_type'	=> 'chefs',
));
if( $posts ): ?>			
<?php foreach( $posts as $post ): setup_postdata( $post );?>
<?php echo $ord++ ; if($ord==1){$class_frame="um";}elseif($ord==2){$class_frame="dois";}elseif($ord==3){$class_frame="tres";}elseif($ord==4){$class_frame="um";}elseif($ord==5){$class_frame="dois";}elseif($ord==6){$class_frame="tres";}elseif($ord==7){$class_frame="um";}elseif($ord==8){$class_frame="dois";}elseif($ord==9){$class_frame="tres";}else{$class_frame="1";}?>

	<div class="col-lg-4 col-md-4">
					<a href="<?php get_permalink()?>/?am_force_theme_layout=desktop">
						<?php the_post_thumbnail(); ?>
						<div class="frame  chefs <? echo $class_frame ?>">
							<h3>
							<?php if(empty(the_title())){ ?>
	                         <img src="img/chef-sem-foto.jpg"/>
	                        <? }else{ the_title(); } ?>
	                        </h3>
						</div>
					</a>
					</div>
				<?php endforeach; ?>
	
	<?php wp_reset_postdata(); ?>
	<?php endif; ?>
</section>
<?php get_footer();?>
