<section id="clientes" class="Section Section--style1 u-paddingVertical u-paddingHorizontal">
	<div class="u-maxSize--container u-alignCenterBox"><!-- Max Size Container -->
		<header class="Section-header Section-header--clientes u-positionRelative u-alignCenter u-size16of24 u-alignCenterBox">
			<h2 class="Section-header-title Section-header-title--clientes">CLIENTES QUE CONFIAM NA PLATAFORMA ZOEWEB</h2>
			<h3 class="Section-header-subtitle">Parcerias realizadas com nossos serviços</h3>
		</header>

		<div class="Section-navigation u-maxSize--container u-marginTop--inter u-overflowHidden">
		
			<ul id="clientes-carousel--control" class="Section-navigation-items Section-navigation-items--tabs u-size24of24 u-flex u-justifyContentCenter u-flexDirectionRow owl-theme owl-carousel">
				
<?php 

$newsArgs = array( 'post_type' => 'cases_sucesso', 'posts_per_page' => 20, 'orderby' => 'rand');                   
                        
      $newsLoop = new WP_Query( $newsArgs );                  
                        
      while ( $newsLoop->have_posts() ) : $newsLoop->the_post(); 

      	$slugPost = basename(get_permalink());

      	if ( has_post_thumbnail() ) {
			
			//Imagem Destacada	
			$image_id = get_post_thumbnail_id();
			$sizeThumbs = 'thumbnail';
			$urlThumbnail = wp_get_attachment_image_src($image_id, $sizeThumbs);
			$urlThumbnail = $urlThumbnail[0];

      	?>
				<li class="Section-navigation-items-item u-paddingVertical--inter--half">
					<figure class="Section--cases-logo"><img  src="<?php echo $urlThumbnail; ?>" alt="Clientes Zoeweb | <?php the_title(); ?>" title="Clientes Zoeweb | <?php the_title(); ?>" /></figure>
				</li>
				<?php } ?>
				<?php endwhile; ?>
			</ul>
		</div>
	
		
		<!-- <div class="Pagination u-marginTop--inter u-flex u-justifyContentCenter">
			<a class="navController navController--left navController--prev navController--button navController--button--largeSize navController--border u-borderRadius50 is-animating u-marginRight--inter" href="#">
				<svg class="Pagination-items-item-icon u-icon iconArrowLeft">
					<use xlink:href="#iconArrowLeft"></use>
				</svg>
			</a>
			<a class="navController navController--center navController--left navController--all  navController--button  navController--border ReadMore ReadMore--background  Button ButtonLink u-lineHeight0 hover is-animating u-marginRight--inter" href="#">
				<span class="ShowText">VER TODOS</span>
			</a>
			<a class="navController navController--right navController--next navController--button navController--button--largeSize navController--border u-borderRadius50 is-animating" href="#">
				<svg class="Pagination-items-item-icon u-icon iconArrowRight">
					<use xlink:href="#iconArrowRight"></use>
				</svg>
			</a>
		
		
			<ul class="Pagination-items Pagination-items--center  u-positionRelative u-size12of24 u-maxSize u-alignCenterBox u-flex u-justifyContentCenter">
				<li class="Pagination-items-item Pagination-items-item--center Pagination-items-item--prev">
					<a class="Button Button--border ButtonLink u-lineHeight100 hover u-displayBlock is-animating u-boxShadow--hover" href="#">
						<svg class="Pagination-items-item-icon u-icon iconArrowLeft">
							<use xlink:href="#iconArrowLeft"></use>
						</svg>
					</a>
				</li>
				<li class="Pagination-items-item Pagination-items-item--center Pagination-items-item--todos">
					<a class="u-positionRelative u-displayBlock Button Button--border ButtonLink u-lineHeight100 hover is-animating" href="#">VEJA TODOS</a>
				</li>
				<li class="Pagination-items-item Pagination-items-item--center Pagination-items-item--next">
					<a class="Button Button--border ButtonLink u-lineHeight100 hover u-positionRelative u-displayBlock is-animating u-boxShadow--hover" href="#">
						<svg class="Pagination-items-item-icon u-icon iconArrowRight">
							<use xlink:href="#iconArrowRight"></use>
						</svg>
					</a>
				</li>
			</ul>
		</div> -->
</section>