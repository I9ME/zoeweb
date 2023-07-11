<section id="cases-de-sucesso" class="Section Section--style1 Section--cases u-paddingHorizontal">
	<div class="u-maxSize--container u-alignCenterBox u-paddingVertical"><!-- Max Size Container -->
		<header class="Section-header u-positionRelative u-alignCenter u-size16of24 u-alignCenterBox">
			<h2 class="Section-header-title">CASES DE SUCESSO</h2>
			<h3 class="Section-header-subtitle">Confira a satisfação dos nossos clientes</h3>
		</header>
	</div>

	

	<div class="u-positionRelative u-displayBlock u-alignCenter u-size24of24 u-maxSize--container u-alignCenterBox">
	
	<nav class="Section-navigation u-maxSize--container u-marginTop--inter">
		<!-- <a class="owl-prev navController navController--left navController--prev navController--button navController--border u-borderRadius50 navController--button--uniSize u-displayBlock u-positionAbsolute is-animating" href="#">
			<svg class="Pagination-items-item-icon u-icon iconArrowLeft">
				<use xlink:href="#iconArrowLeft"></use>
			</svg>
		</a>
		<a class="owl-next navController navController--right navController--next navController--button navController--border u-borderRadius50 navController--button--uniSize u-displayBlock u-positionAbsolute is-animating" href="#">
			<svg class="Pagination-items-item-icon u-icon iconArrowRight">
				<use xlink:href="#iconArrowRight"></use>
			</svg>
		</a> -->
		<ul id="cases-carousel--control" class="Section-navigation-items Section-navigation-items--tabs u-marginVertical u-flex u-justifyContentCenter u-flexDirectionRow owl-theme owl-carousel">
			
<?php 

$newsArgsControll = array( 'post_type' => 'cases_sucesso', 'meta_key' => 'var_tipo', 'meta_query'=> array(array('key' => 'var_tipo', 'value' => 1)), 'posts_per_page' => 20, 'orderby' => 'date', 'order' => 'ASC');                   
                        
      $newsLoop = new WP_Query( $newsArgsControll );                  
                        
      while ( $newsLoop->have_posts() ) : $newsLoop->the_post(); 

      	$count = $newsLoop->post_count;
      	
      	if( $count <= 4 ){
      		$classPadding = 'style="padding: 0px 35px !important;"';
      	} 
      	elseif( $count <= 5 ){
      		$classPadding = 'style="padding: 0px 20px !important;"';
      	}
      	else {
      		$classPadding = '';
      	}

      	$slugPost = basename(get_permalink());

      	if ( has_post_thumbnail() ) {
			
			//Imagem Destacada	
			$image_id = get_post_thumbnail_id();
			$sizeThumbs = 'thumbnail';
			$urlThumbnail = wp_get_attachment_image_src($image_id, $sizeThumbs);
			$urlThumbnail = $urlThumbnail[0];
      	?>

			<li id="<?php echo $slugPost; ?>--ControllLink" class="Section-navigation-items-item Item u-paddingVertical--inter--px active" <?php echo $classPadding; ?> data-hash="<?php echo $slugPost; ?>">
				<a class="NavigationLink u-displayBlock u-sizeFull is-animating url" href="#<?php echo $slugPost; ?>">
					<figure class="Section--cases-logo u-sizeFull"><img src="<?php echo $urlThumbnail; ?>" alt="Cases de Sucesso Zoeweb | <?php the_title(); ?>" title="Cases de Sucesso Zoeweb | <?php the_title(); ?>" /></figure></a>
			</li>
			<?php }  ?>
			
<?php endwhile; ?>

		</ul>
	</nav>
	
	<div class="u-maxSize--container u-alignCenterBox"><!-- Max Size Container -->
	<div id="cases-carousel" class="Section-items u-size24of24 owl-theme owl-carousel">
		<?php 

$newsArgs = array( 'post_type' => 'cases_sucesso', 'meta_key' => 'var_tipo', 'meta_query'=> array(array('key' => 'var_tipo', 'value' => 1)), 'posts_per_page' => 20, 'orderby' => 'date', 'order' => 'ASC');  

      $newsLoop = new WP_Query( $newsArgs );                  
                        
      	while ( $newsLoop->have_posts() ) : $newsLoop->the_post();
      		if ( has_post_thumbnail() ) {
				$slugPost = basename(get_permalink());

      	?>


		<div class="Section-items-item u-size24of24 u-positionRelative u-paddingVertical" data-hash="<?php echo $slugPost; ?>"><!-- ITEM -->
			<div class="Section-iframe u-zIndex2">
				<?php echo get_post_meta( get_the_ID(), 'iframe_video', true ) ; ?>
			</div>
			<div class="Section-items-item-info u-marginVertical--inter u-paddingBottom--inter u-paddingVertical--inter u-boxShadow">
				<h4 class="Section-items-item-title"><?php the_title(); ?></h4>
				<p class="Section-items-item-resume"><?php echo get_the_excerpt(); ?></p>
				<?php if( !wp_is_mobile() ) { ?>
				<a class="Section-items-item-readMore ReadMore ReadMore--border Section-items-item-button Button Button--border ButtonLink u-displayInlineBlock hover is-animating u-marginTop--inter--half" href="#" title="SAIBA MAIS"><span class="ShowText">SAIBA MAIS</span></a>
				<?php } ?>
			</div>
		</div><!-- ITEM -->
		<?php } ?>
		
		<?php endwhile; ?>

	</div>
	<div/><!-- Max Size Container -->
	
</section>