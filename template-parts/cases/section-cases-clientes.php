<section id="clientes" class="Section Section--style1 u-paddingVertical u-paddingHorizontal">
	<div class="u-maxSize--container u-alignCenterBox"><!-- Max Size Container -->
		<header class="Section-header Section-header--clientes u-positionRelative u-alignCenter u-size22of24 u-alignCenterBox">
			<h2 class="Section-header-title Section-header-title--clientes">CONFIRA MAIS CLIENTES SATISFEITOS COM NOSSA PLATAFORMA!</h2>
			<!-- <h3 class="Section-header-subtitle">Parcerias realizadas com nossos serviços</h3> -->
		</header>

		<div class="Section-navigation u-maxSize--container u-marginTop--inter">
		
			<ul class="Section-navigation-items u-size24of24 u-flex u-flexFlowWrap u-flexJustifyContentCenter">
				<?php 

$newsArgs = array( 'post_type' => 'cases_sucesso', 'meta_key' => 'var_tipo', 'meta_query'=> array(array('key' => 'var_tipo', 'value' => 3)), 'posts_per_page' => 200, 'orderby' => 'date', 'order' => 'ASC');                   
                        
      $newsLoop = new WP_Query( $newsArgs );                  
                        
      while ( $newsLoop->have_posts() ) : $newsLoop->the_post(); 

      	$slugPost = basename(get_permalink());

      	if ( has_post_thumbnail() ) {
			
			//Imagem Destacada	
			$image_id = get_post_thumbnail_id();
			$sizeThumbs = 'thumbnail';
			$urlThumbnail = wp_get_attachment_image_src($image_id, $sizeThumbs);
			$urlThumbnail = $urlThumbnail[0];

			if ( get_post_meta( get_the_ID(), 'var_tipo', true ) == 3 ){

      	?>
				<li class="Section-navigation-items-item u-paddingHorizontal--vrt--inter--px">
					<figure class="Section--cases-logo u-size2of24--px">
						<img class="u-sizeFull" src="<?php echo $urlThumbnail; ?>" alt="Clientes Zoeweb | <?php the_title(); ?>" title="Clientes Zoeweb | <?php the_title(); ?>" />
					</figure>
				</li>

				<?php } } ?>

				<?php endwhile; ?>
			</ul>
		</div>
</section>