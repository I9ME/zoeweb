<section class="Section Section--style1 Section--casesVideos u-paddingHorizontal">
	<!-- <header class="Section-header u-marginBottom--inter u-size16of24 u-alignCenterBox">
		<h2 class="Section-header-title u-alignCenter">VÍDEOS CASES</h2>
		<h3 class="Section-header-subtitle u-alignCenter">Subtitulo exemplo lorem ipsum dolor sit amet</h3>
	</header> -->

	<ul id="cases-videos-carousel" class="Section-items u-size24of24 u-paddingVertical--inter--half u-flexSwitchReverse--mobile u-flexDirectionRow owl-theme owl-carousel">

	<?php 

	$newsArgs = array( 'post_type' => 'cases_sucesso', 'meta_key' => 'var_tipo', 'meta_query'=> array(array('key' => 'var_tipo', 'value' => 1)), 'posts_per_page' => 20, 'orderby' => 'date', 'order' => 'ASC');                   
                        
      $newsLoop = new WP_Query( $newsArgs );                  
                        
      while ( $newsLoop->have_posts() ) : $newsLoop->the_post(); 

      	$iframeVideo = get_post_meta( get_the_ID(), 'iframe_video', true );

			
		if ( get_post_meta( get_the_ID(), 'var_tipo', true ) == 1  && $iframeVideo != '' ){
			
			$image_id = get_post_meta( get_the_ID(), '_image_id', true );
			$imagemPrincipal = wp_get_attachment_url( $image_id );
      	?>
		
		<li class="Section-items-item u-marginBottom--inter u-paddingHorizontal--vrt--inter--half--px u-flex u-flexDirectionColumn u-alignCenter">
			<a class="LightboxCall" href="javascript:LightboxCall(<?php echo esc_html( '\'' . $iframeVideo . '\'' ); ?>);">
			<figure class="Section-items-item-figure u-overflowHidden u-lineHeight0 u-size24of24 is-animating">
				<figcaption class=" is-animating">
					<i class="icon">
						<svg class="iconPlayCircle NavigationButton-icon u-icon is-animating is-animating--switch is-animating--switch--imgA is-animating--rotate">
							<use xlink:href="#iconPlayCircle"></use>
						</svg>
					</i>
					<strong class="label">Assista ao case</strong>
				</figcaption>
				<img class="Item-img Item-img--full u-objectFitCover is-animating" src="<?php echo $imagemPrincipal; ?>" alt="Cases de Sucesso Zoeweb | <?php the_title(); ?>" title="Cases de Sucesso Zoeweb | <?php the_title(); ?>" />
			</figure>
			</a>
			<h4 class="Section-items-item-title u-alignCenter u-marginTop--inter--half"><?php the_title(); ?></h4>
				<p class="Section-items-item-resume"><?php echo get_the_excerpt(); ?></p>
		</li>
		<?php } ?>

		<?php endwhile; ?>
		
	</ul>
</section>