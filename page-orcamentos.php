<?php
/**
  Template Name: ORÇAMENTOS DINÂMICOS
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Skeleton
 * @since 1.0
 * @version 1.0
 */
 ?>

<?php get_template_part('template-parts/header/header','orcamentos'); ?>

<?php 
		global $page;
		//Busca dados no campo personalizado da Página
		$resumoPage = get_post_custom_values('wpcf-resume');
		$resumoPage = $resumoPage[0];
		$slug_current = basename(get_permalink());
		if ( has_post_thumbnail() ) {
			
			//Imagem Destacada	
			$image_id = get_post_thumbnail_id();
			$sizeThumbs = 'full';
			$urlThumbnail = wp_get_attachment_image_src($image_id, $sizeThumbs);
			$urlThumbnail = $urlThumbnail[0];


		} else {
			$urlThumbnail	= '';
		}

		if( is_page_budget()['verify'] == 'yes' ) {
			
			$labelBudget = 'FALE COM UM ESPECIALISTA';
			$classPlus = 'SiteMain--budget';
		
		}

	 ?>

<div id="main" class="SiteMain <?php echo $classPlus; ?>" role="main">
	<?php get_template_part('template-parts/page/intro','page');?>
	
	<div class="u-maxSize--container u-alignCenterBox u-paddingVertical--hzt u-flex u-flexDirectionColumn">
		<main class="SiteMain-main">
			<?php get_template_part('template-parts/forms/form','orcamento-dinamico');?>
		</main>
	</div>

</div><!-- #main -->

<?php get_template_part('template-parts/footer/footer','orcamentos');