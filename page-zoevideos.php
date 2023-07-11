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

<main id="main" class="SiteMain Page Page--ead" role="main">
	<?php get_template_part('template-parts/plugin','lightbox');?>
	<?php get_template_part('template-parts/page/intro','page');?>
	<?php get_template_part('template-parts/zoevideos/section','zoevideos-plataforma');?>
	<?php get_template_part('template-parts/zoevideos/section','zoevideos-gerar-lucro');?>
	<?php get_template_part('template-parts/home/section','clientes'); ?>
	<?php get_template_part('template-parts/zoevideos/section','zoevideos-aplicativo');?>
	<?php get_template_part('template-parts/zoevideos/section','zoevideos-tecnologias');?>
	<?php get_template_part('template-parts/zoevideos/section','zoevideos-plataforma-profissional');?>
	<?php get_template_part('template-parts/zoevideos/section','zoevideos-solucoes');?>
	<?php get_template_part('template-parts/zoevideos/section','zoevideos-funcionalidades-comparadas');?>
	<?php get_template_part('template-parts/zoevideos/section','zoevideos-cta');?>
	<?php get_template_part('template-parts/section','blog'); ?>
</main><!-- #main -->



<?php get_footer();
