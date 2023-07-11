<?php 
/*
$lastArg = array( 'post_type' => 'post', 'posts_per_page' => 1, 'orderby' => 'date', 'order' => 'DESC');

$argsLoop = new WP_Query( $lastArg );

if($argsLoop->have_posts()) :


 while ( $argsLoop->have_posts() ) : $argsLoop->the_post();

*/

 ?>


 <?php

	$num_posts_per_page = 1;

	$is_content_page =  is_content_page();

	if ( $is_content_page['verify'] == 'yes' ){


		if ( $is_content_page['type'] == 'page'){
			
			// Aponta qual o ID do post que não deve ser exibido, devido ao fato ele já está sendo usado no banner principal

			$newsArgs = array( 'post_type' => $is_content_page['content_page'], 'posts_per_page' => $num_posts_per_page, 'paged' => $paged, 'orderby' => 'date', 'order' => 'DESC');

		}

		elseif ( $is_content_page['type'] == 'category'){

			if ( $is_content_page['content_page'] != 'post') {

			 	$tax_slug = 'categoria-' . $is_content_page['content_page'];
			} else {
				$tax_slug = 'category';
			}

			$newsArgs = array( 'post_type' => $is_content_page['content_page'], 'posts_per_page' => $num_posts_per_page, 'paged' => $paged, 'orderby' => 'date', 'order' => 'DESC', 'tax_query' => array(  array( 'taxonomy'  => $tax_slug, 'field' => 'slug','terms' => get_queried_object()->slug,),),);

		}

		elseif ( $is_content_page['type'] == 'search'){

			$newsArgs = array( 'post_type' => $is_content_page['content_page'], 'posts_per_page' => $num_posts_per_page, 'paged' => $paged, 'orderby' => 'date', 'order' => 'DESC', 's' => $_GET['s'] );

		}

		elseif ( $is_content_page['type'] == 'archive'){

			$newsArgs = array( 'post_type' => $is_content_page['content_page'], 'posts_per_page' => $num_posts_per_page, 'paged' => $paged, 'orderby' => 'date', 'order' => 'DESC' );

		}


		elseif ( $is_content_page['type'] == 'single'){

		}

	} 

	if( $is_content_page['content_page'] == 'video' ){

		$post_type_is = 'video';
		$tax_slug =  'categoria-video';
		$titlePage = 'Vídeos';
		$linkPage = get_home_url() . '/videos/';
	
	} elseif( $is_content_page['content_page'] == 'material' ){
	
		$post_type_is = 'material';
		$tax_slug =  'categoria-material';
		$titlePage = 'Materiais';
		$linkPage = get_home_url() . '/materiais/';
	
	} else {
	
		$post_type_is = 'post';
		$tax_slug =  'category';
		$titlePage = 'Blog';
		$linkPage = get_home_url() . '/blog/';
	
	}

	$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

	

	                       
	$newsLoop = new WP_Query( $newsArgs );      

	if ( $newsLoop->have_posts() ):

		while ( $newsLoop->have_posts() ) : $newsLoop->the_post();

			$linkSwitch = get_post_meta( get_the_ID(), '_urlswitch', true );

	      	if( $linkSwitch != '') {

	      		if ( 'material' == get_post_type() ) {
					$linkPost = $linkSwitch;
				} else {
					$linkPost = get_permalink();
				}

	      	} else {
	      		$linkPost = get_permalink();
	      	}



 ?>

<div class="Intro--blog-header u-paddingVertical u-flex u-justifyContentCenter u-flexAlignCenter u-positionRelative u-size24of24 u-alignCenter u-imgBgSizeCover" <?php echo contentIntro('image'); ?>>	
	<div class="Intro--blog-containerHeader u-maxSize--container u-alignCenterBox">
		<h2 class="Intro--blog-title u-marginBottom--inter"><?php echo contentIntro('title'); ?></h2>
		<a href="<?php echo $linkPost; ?>" class="ButtonLink ButtonLink--largeSize Button Button--border hover is-animating">VEJA MAIS</a>
		<!-- <h3 class="Intro--blog-subtitle"><?php //echo contentIntro('resume'); ?></h3> -->
	</div>
</div>
 <?php endwhile; endif; wp_reset_postdata(); ?>
