<section id="blog" class="Section Section--style1 Section--blog u-paddingVertical Section Section--clientes u-paddingHorizontal">
	<ul class="Section-items u-size24of24 u-marginTop--inter u-displayTable u-size24of24 u-maxSize--container u-alignCenterBox"><!-- Max Size Container -->

		<?php 
			$newsArgs = array( 'post_type' => 'post', 'posts_per_page' => 1, 'orderby' => 'date', 'order' => 'DESC');                    
	      	$newsLoop = new WP_Query( $newsArgs );      

	      	if ( $newsLoop->have_posts() ):
	      		 while ( $newsLoop->have_posts() ) : $newsLoop->the_post();

	      		if ( has_post_thumbnail() ) {

	      			//Imagem Destacada	
					$image_id = get_post_thumbnail_id();
					$sizeThumbs = 'thumbnail';
					$urlThumbnail = wp_get_attachment_image_src($image_id, $sizeThumbs);
					$urlThumbnail = $urlThumbnail[0];

				} else {
					$urlThumbnail = '';
				}
         ?>


			<li class="Section-items-item u-size8of24 u-displayBlock u-floatLeft">
				<h2 class="Section-items-item-header u-displayBlock u-size24of24 u-marginBottom--inter--half u-positionRelative">
					<a class="Section-items-item-title u-displayInlineBlock" href="">Blog ZoeWeb</a>
					<a class="Section-items-item-readMore ReadMore ReadMore--icon u-displayInlineBlock u-positionRelative u-borderRadius50 u-positionRelative is-animating" href="#">
						<svg class="u-icon iconMore">
							<use xlink:href="#iconMore"></use>
						</svg>
					</a>
				</h2>
				
				<figure class="Section-items-item-figure u-size24of24 u-positionRelative u-flex u-flexDirectionColumn u-flexAlignItemsCenter u-marginBottom--inter u-boxShadow u-overflowHidden">
					<img class="Section-items-item-figure-img u-size24of24 u-displayBlock u-objectFitCover" src="<?php echo $urlThumbnail; ?>" alt="<?php echo get_the_title(); ?>"  title="<?php echo get_the_title(); ?>" />

					<figurecaption class="Section-items-item-figure-figureCaption u-sizeFull">
						<p class="Section-items-item-resume u-displayBlock u-size24of24 u-marginBottom--inter--half u-paddingVertical u-marginTop--inter--half"><?php echo get_the_title(); ?></p>
						<a class="Section-items-item-button u-displayInlineBlock u-marginVertical u-marginBottom--inter--half ReadMore ReadMore--background Button Button--border ButtonLink hover is-animating" href="<?php echo get_the_permalink(); ?>" title="LEIA MAIS"><span class="ShowText">LEIA MAIS</span></a>
					</figurecaption>
				</figure>
			</li>

		<?php endwhile; endif; ?>


		<?php 
			$newsArgs = array( 'post_type' => 'video', 'posts_per_page' => 1, 'orderby' => 'date', 'order' => 'DESC');                    
	      	$newsLoop = new WP_Query( $newsArgs );      

	      	if ( $newsLoop->have_posts() ):
	      		 while ( $newsLoop->have_posts() ) : $newsLoop->the_post();

	      		if ( has_post_thumbnail() ) {
	      			//Imagem Destacada	
					$image_id = get_post_thumbnail_id();
					$sizeThumbs = 'thumbnail';
					$urlThumbnail = wp_get_attachment_image_src($image_id, $sizeThumbs);
					$urlThumbnail = $urlThumbnail[0];

				} else {
					$urlThumbnail = '';
				}
         ?>

			<li class="Section-items-item u-size8of24 u-displayBlock u-floatLeft">
				<h2 class="Section-items-item-header u-displayBlock u-size24of24 u-marginBottom--inter--half u-positionRelative">
					<a class="Section-items-item-title u-displayInlineBlock" href="#">Vídeos</a>
					<a class="Section-items-item-readMore ReadMore ReadMore--icon u-displayInlineBlock u-positionRelative u-borderRadius50 u-positionRelative is-animating" href="#">
						<svg class="u-icon iconMore">
							<use xlink:href="#iconMore"></use>
						</svg>
					</a>
				</h2>
				<figure class="Section-items-item-figure u-size24of24 u-positionRelative u-flex u-flexDirectionColumn u-flexAlignItemsCenter u-marginBottom--inter u-boxShadow  u-overflowHidden">
					<img class="Section-items-item-figure-img u-size24of24 u-displayBlock u-objectFitCover" src="<?php echo $urlThumbnail; ?>" alt="<?php echo get_the_title(); ?>"  title="<?php echo get_the_title(); ?>" />
					<figurecaption class="Section-items-item-figure-figureCaption u-sizeFull Section-items-item-figure-figureCaption--blog">
						<p class="Section-items-item-resume u-displayBlock u-size24of24 u-marginBottom--inter--half u-paddingVertical u-marginTop--inter--half"><?php echo get_the_title(); ?></p>
						<a class="Section-items-item-button u-displayInlineBlock u-marginVertical u-marginBottom--inter--half ReadMore ReadMore--background Button Button--border ButtonLink hover is-animating" href="<?php echo get_the_permalink(); ?>" title="LEIA MAIS"><span class="ShowText">LEIA MAIS</span></a>
					</figurecaption>
				</figure>
			</li>
		<?php endwhile; endif; ?>
		<?php 
			$newsArgs = array( 'post_type' => 'material', 'posts_per_page' => 1, 'orderby' => 'date', 'order' => 'DESC');                    
	      	$newsLoop = new WP_Query( $newsArgs );      

	      	if ( $newsLoop->have_posts() ):
	      		 while ( $newsLoop->have_posts() ) : $newsLoop->the_post();

	      		if ( has_post_thumbnail() ) {
	      			//Imagem Destacada	
					$image_id = get_post_thumbnail_id();
					$sizeThumbs = 'thumbnail';
					$urlThumbnail = wp_get_attachment_image_src($image_id, $sizeThumbs);
					$urlThumbnail = $urlThumbnail[0];

				} else {
					$urlThumbnail = '';
				}
         ?>

			<li class="Section-items-item u-size8of24 u-displayBlock u-floatLeft">
				<h2 class="Section-items-item-header u-displayBlock u-size24of24 u-marginBottom--inter--half u-positionRelative">
					<a class="Section-items-item-title u-displayInlineBlock" href="#">Materiais de Sucesso</a>
					<a class="Section-items-item-readMore ReadMore ReadMore--icon u-displayInlineBlock u-positionRelative u-borderRadius50 u-positionRelative is-animating" href="#">
						<svg class="u-icon iconMore">
							<use xlink:href="#iconMore"></use>
						</svg>
					</a>
				</h2>
				<figure class="Section-items-item-figure u-size24of24 u-positionRelative u-flex u-flexDirectionColumn u-flexAlignItemsCenter u-marginBottom--inter u-boxShadow  u-overflowHidden">
					<img class="Section-items-item-figure-img u-size24of24 u-displayBlock u-objectFitCover" src="<?php echo $urlThumbnail; ?>" alt="<?php echo get_the_title(); ?>"  title="<?php echo get_the_title(); ?>" />
					<figurecaption class="Section-items-item-figure-figureCaption Section-items-item-figure-figureCaption--blog u-sizeFull">
						<p class="Section-items-item-resume u-displayBlock u-size24of24 u-marginBottom--inter--half u-paddingVertical u-marginTop--inter--half"><?php echo get_the_title(); ?></p>
						<a class="Section-items-item-button u-displayInlineBlock u-marginVertical u-marginBottom--inter--half ReadMore ReadMore--background Button Button--border ButtonLink hover is-animating" href="<?php echo get_the_permalink(); ?>" title="LEIA MAIS"><span class="ShowText">LEIA MAIS</span></a>
					</figurecaption>
				</figure>
			
			</li>
		<?php endwhile; endif; ?>
	</ul>
	
</section>