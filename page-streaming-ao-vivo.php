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

<main id="main" class="SiteMain Page Page--transmitaAovivo" role="main">
	<?php get_template_part('template-parts/page/intro','page');?>
	<?php get_template_part('template-parts/transmita-aovivo/section','transmissao-aovivo');?>
	<?php get_template_part('template-parts/transmita-aovivo/section','diferenciais'); ?>
	<?php get_template_part('template-parts/home/section','cases');?>
	<?php get_template_part('template-parts/home/section','clientes'); ?>
	<?php get_template_part('template-parts/transmita-aovivo/section','cta'); ?>
	<?php get_template_part('template-parts/section','como-transmitir-aovivo'); ?>
	<?php if( !wp_is_mobile() ) { get_template_part('template-parts/section','blog'); } ?>
</main><!-- #main -->



<?php get_footer();
