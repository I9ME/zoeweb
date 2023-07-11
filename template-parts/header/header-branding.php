<?php
/**
 * Displays header site branding
 *
 * @package WordPress
 * @subpackage Skeleton
 * @since 1.0
 * @version 1.0
 */

?>

<?php 
	$custom_logo_id = get_theme_mod( 'custom_logo' );
	$logo = wp_get_attachment_image_src( $custom_logo_id , 'medium' );
?>

<div class="Site-header-brandingContainer">
	<div class="Site-header-title">
	<a href="<?php echo linkHome(); ?>" class="<?php echo classScrollDown(); ?>">
		<?php 
			if ( has_custom_logo() ) {
			        echo '<img class="Site-header-branding Branding Branding--img" src="'. esc_url( $logo[0] ) .'" alt="' . get_bloginfo( 'name' ) . '">';
			} else {
			        echo '<img class="Site-header-branding Branding Branding--img" src="'. get_template_directory_uri() .'/assets/images/logo-zoeweb-streaming.png" alt="' . get_bloginfo( 'name' ) . '"><img class="Site-header-branding Branding Branding--img" src="'. get_template_directory_uri() .'/assets/images/logo-zoeweb-streaming-scrollOn.png" alt="' . get_bloginfo( 'name' ) . '">';
			        //echo '<h1 class="Site-header-branding-src-text">'. get_bloginfo( 'name' ) .'</h1>';
			}
		 ?>
	</a>
	</div>
</div>

		