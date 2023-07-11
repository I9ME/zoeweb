<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Skeleton
 * @since 1.0
 * @version 1.2
 */
?>
<section class="Section Section--blogLoop Section--style1">
	<?php

	$num_posts_per_page = 12;

	$is_content_page =  is_content_page();

	if ( $is_content_page['verify'] == 'yes' ){

		//Listagens de POSTS na página
		if ( $is_content_page['type'] == 'page'){
			
			// Aponta qual o ID do post que não deve ser exibido, devido ao fato ele já está sendo usado no banner principal
			$id_first_post = id_first_post();

			$newsArgs = array( 'post_type' => $is_content_page['content_page'], 'posts_per_page' => $num_posts_per_page, 'post__not_in' => array($id_first_post), 'paged' => $paged, 'orderby' => 'date', 'order' => 'DESC');

		}
		//Listagem de Posts na Categoria
		elseif ( $is_content_page['type'] == 'category'){

			if ( $is_content_page['content_page'] != 'post') {

			 	$tax_slug = 'categoria-' . $is_content_page['content_page'];
			} else {
				$tax_slug = 'category';
			}

			$newsArgs = array( 'post_type' => $is_content_page['content_page'], 'posts_per_page' => $num_posts_per_page, 'paged' => $paged, 'orderby' => 'date', 'order' => 'DESC', 'tax_query' => array(  array( 'taxonomy'  => $tax_slug, 'field' => 'slug','terms' => get_queried_object()->slug,),),);

		}
		//Listagem de posts na Busca
		elseif ( $is_content_page['type'] == 'search'){

			$newsArgs = array( 'post_type' => $is_content_page['content_page'], 'posts_per_page' => $num_posts_per_page, 'paged' => $paged, 'orderby' => 'date', 'order' => 'DESC', 's' => $_GET['s'] );

		}
		//Listagem de posts no Archive
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

 ?>

<ul class="Section-items u-size24of24 u-positionRelative u-flex u-flexDirectionColumn">
	<?php                     
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


	

	      	$terms = get_the_terms( $post->ID, $tax_slug );
	      	if( $terms != '' ) {
	      		$term = array_pop($terms);
	      		$termLink = get_term_link($term->slug, $tax_slug);
	      		$termName = $term->name;
	      	} else {
	      		$termLink = $linkPage;
	      		$termName = $titlePage;
	      	}


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



	<li class="Section-items-item Item u-size24of24 u-marginBottom u-positionRelative u-flex u-flexDirectionColumn u-flexFolowSize u-flexAlignItemsCenter">
		<a href="<?php echo $linkPost; ?>" class="Lightbox-window-content Section-items-item-figure u-positionRelative u-sizeFull">
			
				<div style="background-image: url(<?php echo $urlThumbnail; ?>); top:0px; left: 0px; bottom: 0px; border: 0px; background-size: cover; background-position: center center;" class="u-displayBlock u-positionAbsolute u-sizeFull u-sizeHeight100"></div>
		</a>
		<div class="Section--blogLoop-texts u-paddingTop--inter--half">
			<a class="ReadMore ReadMore--background u-borderRadius30 Button Item-category is-animating" href="<?php echo $termLink; ?>"><?php echo $termName; ?></a>
			<p class="Section-items-item-resume Item-author u-paddingTop--inter--half">POR <?php echo get_the_author(); ?> EM <?php the_date(); ?></p>
			<h3 class="Section-items-item-title Item-title">
				<a class="is-animating" href="<?php echo $linkPost; ?>"><?php echo get_the_title(); ?></a>
			</h3>
		</div>
	</li>
	
	<?php endwhile; ?>
</ul>
<div class="Pagination u-marginTop--inter u-flex u-justifyContentCenter u-overflowHidden">
	<?php pagination_bar( $newsLoop ); ?>
		</div>
		<?php 
		wp_reset_postdata(); 
		endif; ?>
</section>