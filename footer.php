<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Skeleton
 * @since 1.0
 * @version 1.0
 */

?>
		</div><!-- #content -->

		<footer class="Site-footer u-paddingTop" role="contentinfo">
			<div class="u-displayTable u-positionRelative u-size24of24 u-paddingVertical u-paddingBottom">
				<div class="u-maxSize--container u-alignCenterBox u-size24of24">
				<div class="u-size7of24 u-floatLeft Newsletter Newsletter--container">
					<figure class="u-marginBottom--inter u-size24of24"><img class="Site-header-branding Branding Branding--img u-displayInlineBlock" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-zoeweb-streaming.png" alt="ZOEWEB"></figure>
					<?php get_template_part('template-parts/forms/form','newsletter');?>
				</div>
				<div class="u-size16of24 u-floatRight NavigationContainer">
					<?php get_template_part('template-parts/navigation/navigation','bottom'); ?>
				</div>
			</div>
			</div>
			<div class="Site-info u-paddingVertical u-paddingHorizontal--inter u-positionRelative u-displayTable u-size24of24">
				<div class="u-maxSize--container u-alignCenterBox"><!-- Max Size Container -->
				<div class="SocialBar u-size12of24 u-displayBlock u-floatRight u-alignRight">
					
						<ul class="SocialBar-items u-displayBlock u-height1of10  u-floatRight">
							<li class="SocialBar-item facebook u-flex u-flexAlignCenter u-floatLeft u-size1of24--px u-height1of10"><a href="https://www.facebook.com/zoeweb/" target="_blank" class="u-alignCenter u-size24of24 u-lineHeight0 is-animating u-borderRounded--5">
								<svg class="SocialBar-item-icon u-icon iconFacebook u-displayInlineBlock">
									<use xlink:href="#iconFacebook"></use>
								</svg>
							</a></li>
							<li class="SocialBar-item twitter u-flex u-flexAlignCenter u-floatLeft u-size1of24--px u-height1of10"><a href="https://twitter.com/zoeweb" target="_blank" class="u-alignCenter u-size24of24 u-lineHeight0 is-animating u-borderRounded--5">
								<svg class="SocialBar-item-icon u-icon iconTwitter u-displayInlineBlock">
									<use xlink:href="#iconTwitter"></use>
								</svg>
							</a></li>
							<li class="SocialBar-item instagram u-flex u-flexAlignCenter u-floatLeft u-size1of24--px u-height1of10"><a href="https://www.instagram.com/zoeweboficial/" target="_blank" class="u-alignCenter u-size24of24 u-lineHeight0 is-animating u-borderRounded--5">
								<svg class="SocialBar-item-icon u-icon iconInstagram u-displayInlineBlock">
									<use xlink:href="#iconInstagram"></use>
								</svg>
							</a></li>
						</ul>
						<h5 class="u-height1of10 u-flex u-flexAlignCenter u-floatRight SocialBar-title">Redes Sociais:</h5>

				</div>
				<p class="Site-info-copyright u-size12of24 u-floatLeft u-height1of10 u-flex u-flexAlignCenter">
					Copyright © 2017 - Todos os direitos reservados.
				</p>
				</div><!-- Max Size Container -->
			</div>
		</footer>
	</div><!-- .site-content-contain -->
</div><!-- #page -->
<script type="text/javascript" src="<?php echo get_template_directory_uri() . '/assets/js/jquery-3.2.1.min.js'; ?>"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() . '/assets/js/main.min.js'; ?>"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() . '/assets/js/owl.carousel.js'; ?>"></script>
<link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/assets/css/owl.carousel.min.css'; ?>" />
<!-- <link rel="stylesheet" href="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.theme.default.min.css" />
 -->
<?php wp_footer(); ?>

</body>
</html>
