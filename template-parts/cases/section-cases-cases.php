<section class="Section Section--style1 Section--casesCases u-paddingBottom">
	<!-- <header class="Section-header u-marginBottom--inter u-size16of24 u-alignCenterBox">
		<h2 class="Section-header-title u-alignCenter">VÍDEOS CASES</h2>
		<h3 class="Section-header-subtitle u-alignCenter">Subtitulo exemplo lorem ipsum dolor sit amet</h3>
	</header> -->
	<div class="u-maxSize--container u-alignCenterBox"><!-- Max Size Container -->

	<ul class="Section-items u-size24of24 u-flex u-paddingVertical u-flexSwitchReverse--mobile u-flexDirectionRow">

		<?php 

		$newsArgs = array( 'post_type' => 'cases_sucesso', 'meta_key' => 'var_tipo', 'meta_query'=> array(array('key' => 'var_tipo', 'value' => 2)), 'posts_per_page' => 4, 'orderby' => 'date', 'order' => 'ASC');                   
                        
	      $newsLoop = new WP_Query( $newsArgs );                  
	                        
	      while ( $newsLoop->have_posts() ) : $newsLoop->the_post();

	      		$image_id = get_post_meta( get_the_ID(), '_image_id', true );
	      		$imagemPrincipal = wp_get_attachment_url( $image_id );
	      		
	      		if( $imagemPrincipal != ''){
				
				if ( get_post_meta( get_the_ID(), 'var_tipo', true) == 2 ){

					if ( get_post_meta( get_the_ID(), 'color', true ) ){
						$color = get_post_meta( get_the_ID(), 'color', true );
					} else {
						$color = '#CCCCCC';
					}

					$representante = get_post_meta( get_the_ID(), 'representante', true );
					
	      	?>

		<li class="Section-items-item u-marginBottom--inter u-paddingHorizontal--vrt--inter--half--px u-flex u-flexDirectionColumn u-alignCenter u-size8of24">
			<div style="border-top-color: <?php echo $color; ?>" class="Section-items-item-content u-paddingHorizontal--vrt--inter--px u-boxShadow u-size24of24 u-positionRelative u-displayFlex">
				<figure class="Section-items-item-figure u-overflowHidden u-lineHeight0 u-size24of24">
					<img class="u-displayInlineFlex" src="<?php echo $imagemPrincipal; ?>" alt="Cases de Sucesso Zoeweb | <?php the_title(); ?>" title="Cases de Sucesso Zoeweb | <?php the_title(); ?>" />
				</figure>
				<h4 class="Section-items-item-title u-alignCenter u-marginHorizontal--inter--half"><?php the_title(); ?></h4>
				<blockquote cite="#">
					<p class="Section-items-item-resume">
						<?php echo get_the_excerpt(); ?>
						<br />
						<br />
						<em><strong><?php echo $representante; ?></strong></em>
					</p>
				</blockquote>
			</div>
		</li>

		<?php } }  ?>

	<?php endwhile; ?>
		
	</ul>
	</div> <!-- Max Size Container -->
</section>