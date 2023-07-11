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
<section class="Section Section--newsletter Section--style1 LineUp u-paddingHorizontal--vrt--inter--px u-boxShadow u-size24of24 u-marginBottom u-positionRelative u-displayFlex">
	<header class="Section-header u-flex u-flexDirectionRow u-marginBottom--inter--half u-flexJustifyContentCenter">
		<i class="u-inlineFlex">
			<svg class="iconEnvelope u-icon is-animating">
				<use xlink:href="#iconEnvelope"></use>
			</svg>
		</i>
		<h3 class="Section-header-title u-lineHeight100 u-paddingLeft--inter--half">NEWSLETTER</h3>
	</header>
	<div class="Section-content u-alignCenter">
		<?php get_template_part('template-parts/forms/form','newsletter');?>
	</div>
</section>