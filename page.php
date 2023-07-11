<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Skeleton
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>


<main id="main" class="SiteMain Page Page--ead" role="main">
	<?php get_template_part('template-parts/plugin','lightbox');?>
	<?php get_template_part('template-parts/page/intro','page');?>
	<div class="u-maxSize--container u-alignCenterBox u-paddingHorizontal--vrt"><!-- Max Size Container -->
		<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/page/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
		?>
	</div><!-- Max Size Container -->
	
</main><!-- #main -->


<?php get_footer();
