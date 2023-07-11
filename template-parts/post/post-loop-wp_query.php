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

	if( is_page('videos') ){

		$post_type_is = 'video';
	
	} elseif( is_page('materiais') ){
	
		$post_type_is = 'material';
	
	} else {
	
		$post_type_is = 'post';
	
	}

	$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

 	if ( is_category() ) {
 	$tax_slug = 'category';
	$newsArgs = array( 'post_type' => $post_type_is, 'posts_per_page' => 12, 'paged' => $paged, 'orderby' => 'date', 'order' => 'DESC', 'tax_query' => array(  array( 'taxonomy'  => $tax_slug, 'field' => 'slug','terms' => get_queried_object()->slug,),),
);
	} else {

		$id_first_post = id_first_post();


	$newsArgs = array( 'post_type' => $post_type_is, 'posts_per_page' => 12, 'post__not_in' => array($id_first_post), 'paged' => $paged, 'orderby' => 'date', 'order' => 'DESC');   
	}                        
	      $newsLoop = new WP_Query( $newsArgs );      

	      if ( $newsLoop->have_posts() ):
 ?>

<ul class="Section-items u-size24of24 u-positionRelative u-flex u-flexDirectionColumn">
	<?php                     
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
			
			$categCurrentPost = get_the_category( get_the_ID() );
			$categ_id = $categCurrentPost[0]->cat_ID;
			$categ_name = get_cat_name( $categ_id );
			$categ_link = get_category_link( $categ_id );

  	?>



	<li class="Section-items-item Item u-size24of24 u-marginBottom u-positionRelative u-flex u-flexDirectionColumn u-flexFolowSize u-flexAlignItemsCenter">
		<a href="<?php echo get_permalink(); ?>" class="Lightbox-window-content Section-items-item-figure u-positionRelative u-sizeFull">
			
				<div style="background-image: url(<?php echo $urlThumbnail; ?>); top:0px; left: 0px; bottom: 0px; border: 0px; background-size: cover; background-position: center center;" class="u-displayBlock u-positionAbsolute u-sizeFull u-sizeHeight100"></div>
		</a>
		<div class="Section--blogLoop-texts u-paddingTop--inter--half">
			<a class="ReadMore ReadMore--background u-borderRadius30 Button Item-category is-animating" href="<?php echo $categ_link; ?>"><?php echo $categ_name; ?></a>
			<p class="Section-items-item-resume Item-author u-paddingTop--inter--half">POR <?php echo get_the_author(); ?> EM <?php the_date(); ?></p>
			<h3 class="Section-items-item-title Item-title"><a class="is-animating" href="<?php echo get_permalink(); ?>"><?php echo get_the_title(); ?></a></h3>
		</div>
	</li>
	
	<?php endwhile; ?>
</ul>
<div class="Pagination u-marginTop--inter u-flex u-justifyContentCenter u-overflowHidden">
	<?php pagination_bar( $newsLoop ); ?>

			<!-- <a class="navController navController--left navController--prev navController--button navController--button--largeSize navController--border u-borderRadius50 is-animating u-marginRight--inter" href="#">
				<svg class="Pagination-items-item-icon u-icon iconArrowLeft">
					<use xlink:href="#iconArrowLeft"></use>
				</svg>
			</a> -->

			<!-- <a class="navController navController--center navController--left navController--all navController--button  navController--tabs ReadMore Button ButtonLink u-lineHeight0 hover is-animating u-marginRight--inter active" href="#">
				<span class="ShowText">1</span>
			</a>
			<a class="navController navController--center navController--left navController--all navController--button  navController--tabs ReadMore  Button ButtonLink u-lineHeight0 hover is-animating u-marginRight--inter" href="#">
				<span class="ShowText">2</span>
			</a>
			<a class="navController navController--center navController--left navController--all  navController--button  navController--tabs ReadMore Button ButtonLink u-lineHeight0 hover is-animating u-marginRight--inter" href="#">
				<span class="ShowText">3</span>
			</a>
			<a class="navController navController--center navController--left navController--all navController--button  navController--tabs ReadMore Button ButtonLink u-lineHeight0 hover is-animating u-marginRight--inter" href="#">
				<span class="ShowText">...</span>
			</a>
			<a class="navController navController--center navController--left navController--all navController--button  navController--tabs ReadMore Button ButtonLink u-lineHeight0 hover is-animating u-marginRight--inter" href="#">
				<span class="ShowText">50</span>
			</a> -->

			<!-- <a class="navController navController--right navController--next navController--button navController--button--largeSize navController--border u-borderRadius50 is-animating" href="#">
				<svg class="Pagination-items-item-icon u-icon iconArrowRight">
					<use xlink:href="#iconArrowRight"></use>
				</svg>
			</a> -->
		</div>
		<?php 
		wp_reset_postdata(); 
		endif; ?>
</section>