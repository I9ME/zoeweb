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

<article id="post-<?php the_ID(); ?>" class="u-positionRbsolute">
	
	<header class="entry-header Intro--blog-header u-positionAbsolute u-displayBlock u-zIndex9 u-size24of24 u-alignCenter u-paddingVertical">	
			<h2 class="entry-title Intro--blog-title"><?php echo get_the_title(); ?></h2>
	</header><!-- .entry-header -->

	
	<div class="entry-content Section Section--blogTheContent u-alignJustify">
		<?php  the_content(); ?>
	</div><!-- .entry-content -->
	<div class="Section Section--blogMeta u-marginHorizontal">
		<div class="SocialBar u-size24of24 u-flex u-alignCenter u-flexJustifyContentCenter u-flexSwitchReverse--mobile u-flexDirectionColumnReverseToRowReverse">
			
					
				<ul class="SocialBar-items u-height1of10 u-flex u-flexJustifyContentCenter">
					<li class="SocialBar-item facebook u-flex u-flexAlignCenter u-floatLeft u-size1of24--px u-height1of10"><a href="#" class="u-alignCenter u-size24of24 u-lineHeight0 is-animating u-borderRounded--5">
						<svg class="SocialBar-item-icon u-icon iconFacebook u-displayInlineBlock">
							<use xlink:href="#iconFacebook"></use>
						</svg>
					</a></li>
					<li class="SocialBar-item twitter u-flex u-flexAlignCenter u-floatLeft u-size1of24--px u-height1of10"><a href="#" class="u-alignCenter u-size24of24 u-lineHeight0 is-animating u-borderRounded--5">
						<svg class="SocialBar-item-icon u-icon iconTwitter u-displayInlineBlock">
							<use xlink:href="#iconTwitter"></use>
						</svg>
					</a></li>
					<li class="SocialBar-item instagram u-flex u-flexAlignCenter u-floatLeft u-size1of24--px u-height1of10"><a href="#" class="u-alignCenter u-size24of24 u-lineHeight0 is-animating u-borderRounded--5">
						<svg class="SocialBar-item-icon u-icon iconInstagram u-displayInlineBlock">
							<use xlink:href="#iconInstagram"></use>
						</svg>
					</a></li>
				</ul>


				<h5 class="u-height1of10 SocialBar-title">COMPARTILHE ESTE POST</h5>

		</div>
	</div>


</article><!-- #post-## -->
