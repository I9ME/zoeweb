<?php 
	$is_content_page =  is_content_page();
	$is_page_budget = is_page_budget();
	
	if( $is_content_page['content_page'] == 'material' ){

		$content_title = 'MATERIAIS';

	} elseif( $is_content_page['content_page'] == 'video' ) {
		
		$content_title = 'VÍDEOS';

	} else {

		$content_title = 'BLOG';	
	
	}
?>

<?php if ( is_home() || is_front_page() ) { ?>
	<section id="up" class="Intro Intro--home u-positionRelative u-flex u-flexAlignItemsCenter">	
		<div class="u-paddingVertical u-size24of24 Captions u-positionRelative u-displayBlock u-maxSize--container u-alignCenterBox">		
			<h1 class="Captions--title">GERE <em>LUCROS</em> COM SEUS VÍDEOS!</h1>
			<h2 class="Captions--subtitle">Transmita ao vivo pela Zoeweb. Nós cuidamos de tudo para você!</h2>
			<div class="Button Button--border u-displayInlineBlock">
				<?php if ( wp_is_mobile() ) { ?>
					<a class="Button--link" href="tel:08008855616">0800-885-5616</a>
				<?php } else { ?>
					0800-885-5616
				<?php } ?>
			
			</div>
			<a class="Button Button--border ButtonLink ButtonLink--nav u-displayInlineBlock is-animating hover" href="<?php echo get_home_url(); ?>/orcamentos/" title="FAÇA UM ORÇAMENTO">FAÇA UM ORÇAMENTO</a>
		</div>
		<?php if ( !wp_is_mobile() ) {?>
		<video poster="<?php echo get_template_directory_uri() . '/assets/images/ZoeWeb-banner-intro-lg.png'; ?>" id="bgvid" playsinline autoplay muted loop>
			<!-- <source src="{CODE}/assets/videos/video-intro.webm" type="video/webm"> -->
			<source src="<?php echo get_template_directory_uri(); ?>/assets/videos/video-intro.mp4" type="video/mp4">
		</video>
		<?php } ?>

	</section>

<?php } elseif ( is_content_page()['verify'] == 'yes' ){ ?>

<section id="up" class="Intro Intro--blog u-positionRelative u-displayBlock" <?php  if( is_content_page()['type'] != 'search' && is_content_page()['type'] != 'category' ) { echo contentIntro('image'); } ?> >
		
		<div id="BlogheaderBar" class="Intro--blog-headerBar u-positionAbsolute u-sizeFull u-paddingVertical u-zIndex3 is-animating">
			<?php if (!wp_is_mobile()){ ?>
			<div class="u-maxSize--container u-alignCenterBox u-flex u-flexFolowSize u-flexDirectionRow u-flexSwitchReverse--mobile u-sizeFull">
			<?php } ?>
			
				<!-- Toggle -->
				<div class="ToglleContainer u-positionRelative u-flex u-flexDirectionRow">
					<a id="BlogNavigation" class="e-Toglle NavigationButton--blog u-flex u-flexAlignCenter u-contentHide--button u-size12of24 u-isCollapsed is-animating" href="javascript:;">
						<h1 class="u-inlineFlex"><?php echo $content_title; ?></h1>
						<i class="u-inlineFlex">
							<svg class="NavigationButton-icon u-icon iconArrowDown is-animating is-animating--rotate">
								<use xlink:href="#iconArrowDown"></use>
							</svg>
								
						</i>
					</a>
					<a id="SeachHeader" class="e-Toglle NavigationButton--blog u-contentHide--button u-size12of24 u-isCollapsed u-alignRight is-animating" href="javascript:;">
						<i class="u-inlineFlex">
							<svg class="NavigationButton-icon u-icon iconSearch is-animating is-animating--switch is-animating--switch--imgA is-animating--rotate">
								<use xlink:href="#iconSearch"></use>
							</svg>
							<svg class="NavigationButton-icon u-icon iconClose is-animating is-animating--switch is-animating--switch--imgB is-animating--rotate">
								<use xlink:href="#iconClose"></use>
							</svg>	
						</i>
					</a>
				</div>
				<!-- END Toggle -->
				<div class="Site-header-branding u-size3of24--px"> 
					<h2><?php echo $content_title; ?></h2>
				</div>
				<div class="Site-header-content u-size24of24">
					<!-- Menu de Navegação -->
					<?php get_template_part('template-parts/navigation/navigation','blog');?>
					<!-- Login -->
					<?php  get_template_part('template-parts/post/post','searchform');?>
				</div>
			<?php if (!wp_is_mobile()){ ?>
			</div>
			<?php } ?>
		</div>
		
		<?php
		if ( is_content_page()['type'] == 'page'){
		//Título e Banner
			 get_template_part('template-parts/post/post','last');
		} elseif ( is_content_page()['type'] == 'category'){
		?>
			<div class="Intro--blog-header u-paddingVertical u-flex u-justifyContentCenter u-flexAlignCenter u-positionAbsolute u-size24of24 u-alignCenter">	
				<div class="Intro--blog-containerHeader u-maxSize--container u-alignCenterBox">
					<h1 class="Intro--blog-title">
						
						<?php 
						if( is_content_page()['type'] == 'category' ){
							echo '<span class="label">CATEGORIA:</span> <br /><em>';
						}
						single_cat_title() . '</em>'; 
						?>
							
						</h1>
				</div>
			</div>
		<?php } elseif( is_content_page()['type'] == 'archive' ) { ?>

		<?php 
		$tag_name = mb_strtolower( get_the_archive_title(), 'UTF-8' );
		$tag_name = explode('tag: ', $tag_name);
		$tag_name = 'TAG: #' . $tag_name[1];

		?>

		<div class="Intro--blog-header u-paddingVertical u-flex u-justifyContentCenter u-flexAlignCenter u-positionAbsolute u-size24of24 u-alignCenter">	
				<div class="Intro--blog-containerHeader u-maxSize--container u-alignCenterBox">
					<h1 class="Intro--blog-title">
						
						<?php 
							echo $tag_name; 
						?>
							
						</h1>
				</div>
			</div>

		<?php } elseif( is_content_page()['type'] == 'search' ) { ?>
		
		<div class="Intro--blog-header u-paddingVertical u-flex u-justifyContentCenter u-flexAlignCenter u-positionAbsolute u-size24of24 u-alignCenter">	
				<div class="Intro--blog-containerHeader u-maxSize--container u-alignCenterBox">
		<?php if ( have_posts() ) : ?>
			<h1 class="Intro--blog-title"><?php printf( __( 'Search Results for: %s', 'twentyseventeen' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
		<?php else : ?>
			<h1 class="Intro--blog-title"><?php _e( 'Nothing Found', 'twentyseventeen' ); ?></h1>
		<?php endif; ?> 
				</div>
		</div>
		<?php } ?>
	
	</section>

	
		<?php } elseif( is_404() ) { ?>


		<section id="up" class="Intro Intro--page u-positionRelative u-displayBlock" <?php echo contentIntro('image'); ?> >
		<div class="Intro--page-header u-paddingVertical u-flex u-justifyContentCenter u-flexAlignCenter u-positionAbsolute u-size24of24 u-alignCenter">	
			<div class="Intro--page-containerHeader u-maxSize--container u-alignCenterBox">
				<h1 class="Intro--page-title">ERRO 404! PÁGINA NÃO ENCONTRADA</h1>
				<h2 class="Intro--page-subtitle">Infelizmente não localizamos a página que você está tentando acessar.</h2>
			</div>
		</div>
	</section>

	<?php } 
	elseif( $is_page_budget['verify'] == 'yes' ) {
	?>
	<section id="up" class="Intro Intro--page u-positionRelative u-displayBlock" <?php echo contentIntro('image'); ?> >
		<div class="Intro--page-header u-paddingVertical u-flex u-justifyContentCenter u-flexAlignCenter u-positionAbsolute u-size24of24 u-alignCenter">	
			<div class="Intro--page-containerHeader u-maxSize--container u-alignCenterBox">
				<h1 class="Intro--page-title"><?php echo 'FALE COM UM ESPECIALISTA'; //contentIntro('title'); ?></h1>
				<h2 class="Intro--page-subtitle"><?php echo contentIntro('resume'); ?></h2>
			</div>
		</div>
	</section>
	<?php } else { ?>
	<section id="up" class="Intro Intro--page u-positionRelative u-displayBlock" <?php echo contentIntro('image'); ?> >
		<div class="Intro--page-header u-paddingVertical u-flex u-justifyContentCenter u-flexAlignCenter u-positionAbsolute u-size24of24 u-alignCenter">	
			<div class="Intro--page-containerHeader u-maxSize--container u-alignCenterBox">
				<h1 class="Intro--page-title"><?php echo contentIntro('title'); ?></h1>
				<h2 class="Intro--page-subtitle"><?php echo contentIntro('resume'); ?></h2>
			</div>
		</div>
	</section>
	<?php } ?>


<!-- Debugando a Fuñção is_content_page()	
	<h1>
		<?php 
			//$array_ =  is_content_page();
			//echo $array_['verify'] . '<br />';
			//echo $array_['type'] . '<br />';
			//echo $array_['content_page'] . '<br />';
 		?>
	</h1> -->



