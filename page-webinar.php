<?php
/**
 * The main template file
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Skeleton
 * @since 1.0
 * @version 1.0
 */
 
get_header(); ?>

<main id="main" class="SiteMain Page--webinar" role="main">
	<?php get_template_part('template-parts/page/intro','page');?>
	<?php get_template_part('template-parts/webinar/section','webinar-interacao');?>
	<?php get_template_part('template-parts/webinar/section','webinar-cuidamos');?>
	<?php get_template_part('template-parts/webinar/section','webinar-solucoes'); ?>
	<?php get_template_part('template-parts/webinar/section','webinar-cta');?>
	<?php get_template_part('template-parts/home/section','clientes'); ?>
	<?php if( !wp_is_mobile() ) { get_template_part('template-parts/section','blog'); } ?>
</main><!-- #main -->



<?php get_footer();
