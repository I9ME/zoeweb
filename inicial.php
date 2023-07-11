<?php
/* Template Name: HOME */
/**
 * 
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

<main id="main" class="SiteMain" role="main">
	<?php get_template_part('template-parts/page/intro','page');?>
	<?php get_template_part('template-parts/home/section','solucoes');?>
	<?php get_template_part('template-parts/home/section','aplicacoes');?>
	<?php get_template_part('template-parts/home/section','como-usar-servicos');?>
	<?php if( !wp_is_mobile() ) { get_template_part('template-parts/section','armazene'); } ?>
	<?php if( !wp_is_mobile() ) { get_template_part('template-parts/section','tecnologias'); } ?>
	<?php if( !wp_is_mobile() ) { get_template_part('template-parts/section','cta'); } ?>
	<?php get_template_part('template-parts/home/section','cases');?>
	<?php if( !wp_is_mobile() ) { get_template_part('template-parts/home/section','clientes'); } ?>
	<?php get_template_part('template-parts/section','blog'); ?>
</main><!-- #main -->



<?php get_footer();
