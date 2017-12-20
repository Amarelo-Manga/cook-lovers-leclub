<footer>
			<div class="container">

<img alt="marcas de hoteis rede Accor Hotels" class="rodape-mobile" src="<?php echo get_template_directory_uri()?>/img/rodape-hoteis.png">



			<div class="row rodape-desk">
					<img alt="Sofitel" src="<?php echo get_template_directory_uri()?>/img/logo-sofitel-negativo.png">
					<img alt="MGallery" src="<?php echo get_template_directory_uri()?>/img/logo-mgallery-negativo.png">
					<img alt="Pullman" src="<?php echo get_template_directory_uri()?>/img/logo-pullman-negativo.png">
					<img alt="Grand Mercure" src="<?php echo get_template_directory_uri()?>/img/logo-grandmercure-negativo.png">
					<img alt="The Sebel" src="<?php echo get_template_directory_uri()?>/img/logo-thesebel-negativo.png">
					<img alt="Novotel" src="<?php echo get_template_directory_uri()?>/img/logo-novotel-negativo.png">
			</div>
			<div class="row rodape-desk">
					<img alt="Mercure" src="<?php echo get_template_directory_uri()?>/img/logo-mercure-negativo.png">
					<img alt="Mama Shelter" src="<?php echo get_template_directory_uri()?>/img/logo-mamashelter-negativo.png">
					<img alt="Adagio" src="<?php echo get_template_directory_uri()?>/img/logo-adagio-negativo.png">
					<img alt="ibis e ibis Styles" src="<?php echo get_template_directory_uri()?>/img/logo-ibis-negativo.png">
					<img alt="Adagio Access" src="<?php echo get_template_directory_uri()?>/img/logo-adagioaccess-negativo.png">
					<img alt="Thalassa" src="<?php echo get_template_directory_uri()?>/img/logo-thalassa-negativo.png">
			</div>
			</div>
			<nav>
			     <?php
					wp_nav_menu( array(
						'theme_location' => 'footer',
						'menu_class' => 'footer-menu',
					) );
	?>
			</nav>
		</footer>
		<section id="pattern"></section>
<?php wp_footer(); ?>

	<script src="<?php echo get_template_directory_uri()?>/js/jquery.easing.min.js"></script>
        <script src="<?php echo get_template_directory_uri()?>/js/bootstrap.min.js"></script>
        <script src="<?php echo get_template_directory_uri()?>/js/scrolling-nav.js"></script>
        
       
        <!-- Filtro da página de restaurantes  -->

		<script>
                       var $a = jQuery.noConflict()
			$a(function() {
				//caches a jQuery object containing the header element
				var header = $a(".menuexpand");
				$a(window).scroll(function() {
					var scroll = $a(window).scrollTop();

					if (scroll >= 600) {
						header.removeClass('menuexpand').addClass("menucollapse");
					} else {
						header.removeClass("menucollapse").addClass('menuexpand');
					}
				});
			});
		</script>
		<script>
 		 (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-97484598-1', 'auto');
		  ga('send', 'pageview');
		</script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-97484598-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-97484598-1');
</script>

   
    </body>
</html>
