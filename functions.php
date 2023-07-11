<?php
/**
 * Skeleton funções e definições
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage skeleton
 * @since 1.0
 */


/**
 * Funções e Configurações do Tema
 */
function skeleton_setup() {
	load_theme_textdomain( 'site-zoeweb' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Ativando o recurso de Imagem Destacada
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );


	
	// Localizações dos Menus
	register_nav_menus( array(
		'top'    => __( 'Top Menu', 'skeleton' ),
		'social' => __( 'Social Links Menu', 'skeleton' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Habilitando os Formatos de POst
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
		'gallery',
		'audio',
	) );

	// Habilitando o recurso de Logotipo Customizável.

	add_theme_support( 'custom-logo', array(
		'width'       => 250,
		'height'      => 250,
		'flex-width'  => true,
	) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/*
	 * Editor de Estilo
 	 */
	//add_editor_style( array( 'assets/css/editor-style.css', skeleton_fonts_url() ) );

}

add_action( 'after_setup_theme', 'skeleton_setup' );



/**
 * Customizando o "Saiba mais / Continue lendo"
 * 
 *
 * @since Skeleton 1.0
 *
 * @param string $link Link to single post/page.
 * @return string 'Continue reading' link prepended with an ellipsis.
 */
function skeleton_excerpt_more( $link ) {
	if ( is_admin() ) {
		return $link;
	}

	$link = sprintf( '<p class="link-more"><a href="%1$s" class="more-link">%2$s</a></p>',
		esc_url( get_permalink( get_the_ID() ) ),
		/* translators: %s: Name of current post */
		sprintf( __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'skeleton' ), get_the_title( get_the_ID() ) )
	);
	return ' &hellip; ' . $link;
}
add_filter( 'excerpt_more', 'skeleton_excerpt_more' );


/**
 * Handles JavaScript detection.
 *
 * Adds a `js` class to the root `<html>` element when JavaScript is detected.
 *
 * @since Skeleton 1.0
 */
function skeleton_javascript_detection() {
	echo "<script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>\n";
}
add_action( 'wp_head', 'skeleton_javascript_detection', 0 );

/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function skeleton_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">' . "\n", get_bloginfo( 'pingback_url' ) );
	}
}
add_action( 'wp_head', 'skeleton_pingback_header' );


/**
 * Enqueue scripts and styles.
 */
function skeleton_scripts() {
	// Add custom fonts, used in the main stylesheet.
	//wp_enqueue_style( 'skeleton-fonts', skeleton_fonts_url(), array(), null );

	// Theme stylesheet.
	wp_enqueue_style('css-main', get_template_directory_uri() . '/assets/css/main.min.css', array(), null);
    // Theme JS Script.
    //wp_register_script('main', get_template_directory_uri() . '/assets/js/main.min.js', array(), '', true);

    // Icons SVG
	//wp_enqueue_style('icons-svg', get_template_directory_uri() . '/assets/images/icons.svg', array(), null);
    

      


	// Load the Internet Explorer 9 specific stylesheet, to fix display issues in the Customizer.
	/*if ( is_customize_preview() ) {
		wp_enqueue_style( 'skeleton-ie9', get_theme_file_uri( '/assets/css/ie9.css' ), array( 'skeleton-style' ), '1.0' );
		wp_style_add_data( 'skeleton-ie9', 'conditional', 'IE 9' );
	}*/

	// Load the Internet Explorer 8 specific stylesheet.
	/*wp_enqueue_style( 'skeleton-ie8', get_theme_file_uri( '/assets/css/ie8.css' ), array( 'skeleton-style' ), '1.0' );
	wp_style_add_data( 'skeleton-ie8', 'conditional', 'lt IE 9' );
*/
	// Load the html5 shiv.
	/*wp_enqueue_script( 'html5', get_theme_file_uri( '/assets/js/html5.js' ), array(), '3.7.3' );
	wp_script_add_data( 'html5', 'conditional', 'lt IE 9' );*/


    wp_enqueue_script('main');

    // jQUery Library
    //wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery-3.2.1.min', array(), '', true);
    

	//wp_enqueue_script( 'jquery-scrollto', get_theme_file_uri( '/assets/js/jquery.scrollTo.js' ), array( 'jquery' ), '2.1.2', true );


//SVG

echo'<svg style="position: absolute; width: 0; height: 0; overflow: hidden;" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
<defs>
<symbol id="iconMenu" viewBox="0 0 24 24">
<path d="M21 11h-18c-0.6 0-1 0.4-1 1s0.4 1 1 1h18c0.6 0 1-0.4 1-1s-0.4-1-1-1z"></path>
<path d="M3 7h18c0.6 0 1-0.4 1-1s-0.4-1-1-1h-18c-0.6 0-1 0.4-1 1s0.4 1 1 1z"></path>
<path d="M21 17h-18c-0.6 0-1 0.4-1 1s0.4 1 1 1h18c0.6 0 1-0.4 1-1s-0.4-1-1-1z"></path>
</symbol>
<symbol id="iconUser" viewBox="0 0 20 28">
<path d="M20 21.859c0 2.281-1.5 4.141-3.328 4.141h-13.344c-1.828 0-3.328-1.859-3.328-4.141 0-4.109 1.016-8.859 5.109-8.859 1.266 1.234 2.984 2 4.891 2s3.625-0.766 4.891-2c4.094 0 5.109 4.75 5.109 8.859zM16 8c0 3.313-2.688 6-6 6s-6-2.688-6-6 2.688-6 6-6 6 2.688 6 6z"></path>
</symbol>
<symbol id="iconClose" viewBox="0 0 24 24">
<path d="M18.984 6.422l-5.578 5.578 5.578 5.578-1.406 1.406-5.578-5.578-5.578 5.578-1.406-1.406 5.578-5.578-5.578-5.578 1.406-1.406 5.578 5.578 5.578-5.578z"></path>
</symbol>
<symbol id="iconFacebook" viewBox="0 0 16 28">
<path d="M14.984 0.187v4.125h-2.453c-1.922 0-2.281 0.922-2.281 2.25v2.953h4.578l-0.609 4.625h-3.969v11.859h-4.781v-11.859h-3.984v-4.625h3.984v-3.406c0-3.953 2.422-6.109 5.953-6.109 1.687 0 3.141 0.125 3.563 0.187z"></path>
</symbol>
<symbol id="iconTwitter" viewBox="0 0 26 28">
<path d="M25.312 6.375c-0.688 1-1.547 1.891-2.531 2.609 0.016 0.219 0.016 0.438 0.016 0.656 0 6.672-5.078 14.359-14.359 14.359-2.859 0-5.516-0.828-7.75-2.266 0.406 0.047 0.797 0.063 1.219 0.063 2.359 0 4.531-0.797 6.266-2.156-2.219-0.047-4.078-1.5-4.719-3.5 0.313 0.047 0.625 0.078 0.953 0.078 0.453 0 0.906-0.063 1.328-0.172-2.312-0.469-4.047-2.5-4.047-4.953v-0.063c0.672 0.375 1.453 0.609 2.281 0.641-1.359-0.906-2.25-2.453-2.25-4.203 0-0.938 0.25-1.797 0.688-2.547 2.484 3.062 6.219 5.063 10.406 5.281-0.078-0.375-0.125-0.766-0.125-1.156 0-2.781 2.25-5.047 5.047-5.047 1.453 0 2.766 0.609 3.687 1.594 1.141-0.219 2.234-0.641 3.203-1.219-0.375 1.172-1.172 2.156-2.219 2.781 1.016-0.109 2-0.391 2.906-0.781z"></path>
</symbol>
<symbol id="iconInstagram" viewBox="0 0 24 28">
<path d="M16 14c0-2.203-1.797-4-4-4s-4 1.797-4 4 1.797 4 4 4 4-1.797 4-4zM18.156 14c0 3.406-2.75 6.156-6.156 6.156s-6.156-2.75-6.156-6.156 2.75-6.156 6.156-6.156 6.156 2.75 6.156 6.156zM19.844 7.594c0 0.797-0.641 1.437-1.437 1.437s-1.437-0.641-1.437-1.437 0.641-1.437 1.437-1.437 1.437 0.641 1.437 1.437zM12 4.156c-1.75 0-5.5-0.141-7.078 0.484-0.547 0.219-0.953 0.484-1.375 0.906s-0.688 0.828-0.906 1.375c-0.625 1.578-0.484 5.328-0.484 7.078s-0.141 5.5 0.484 7.078c0.219 0.547 0.484 0.953 0.906 1.375s0.828 0.688 1.375 0.906c1.578 0.625 5.328 0.484 7.078 0.484s5.5 0.141 7.078-0.484c0.547-0.219 0.953-0.484 1.375-0.906s0.688-0.828 0.906-1.375c0.625-1.578 0.484-5.328 0.484-7.078s0.141-5.5-0.484-7.078c-0.219-0.547-0.484-0.953-0.906-1.375s-0.828-0.688-1.375-0.906c-1.578-0.625-5.328-0.484-7.078-0.484zM24 14c0 1.656 0.016 3.297-0.078 4.953-0.094 1.922-0.531 3.625-1.937 5.031s-3.109 1.844-5.031 1.937c-1.656 0.094-3.297 0.078-4.953 0.078s-3.297 0.016-4.953-0.078c-1.922-0.094-3.625-0.531-5.031-1.937s-1.844-3.109-1.937-5.031c-0.094-1.656-0.078-3.297-0.078-4.953s-0.016-3.297 0.078-4.953c0.094-1.922 0.531-3.625 1.937-5.031s3.109-1.844 5.031-1.937c1.656-0.094 3.297-0.078 4.953-0.078s3.297-0.016 4.953 0.078c1.922 0.094 3.625 0.531 5.031 1.937s1.844 3.109 1.937 5.031c0.094 1.656 0.078 3.297 0.078 4.953z"></path>
</symbol>
<symbol id="iconArrowLeft" viewBox="0 0 24 24">
<path d="M15.422 16.078l-1.406 1.406-6-6 6-6 1.406 1.406-4.594 4.594z"></path>
</symbol>
<symbol id="iconArrowDown" viewBox="0 0 24 24">
<path d="M7.406 7.828l4.594 4.594 4.594-4.594 1.406 1.406-6 6-6-6z"></path>
</symbol>
<symbol id="iconArrowRight" viewBox="0 0 24 24">
<path d="M8.578 16.359l4.594-4.594-4.594-4.594 1.406-1.406 6 6-6 6z"></path>
</symbol>
<symbol id="iconArrowUp" viewBox="0 0 24 24">
<path d="M7.406 15.422l-1.406-1.406 6-6 6 6-1.406 1.406-4.594-4.594z"></path>
</symbol>
<symbol id="iconMore" viewBox="0 0 24 24">
<path d="M18.984 12.984h-6v6h-1.969v-6h-6v-1.969h6v-6h1.969v6h6v1.969z"></path>
</symbol>
<symbol id="iconCheck" viewBox="0 0 28 28">
<path d="M26.109 8.844c0 0.391-0.156 0.781-0.438 1.062l-13.438 13.438c-0.281 0.281-0.672 0.438-1.062 0.438s-0.781-0.156-1.062-0.438l-7.781-7.781c-0.281-0.281-0.438-0.672-0.438-1.062s0.156-0.781 0.438-1.062l2.125-2.125c0.281-0.281 0.672-0.438 1.062-0.438s0.781 0.156 1.062 0.438l4.594 4.609 10.25-10.266c0.281-0.281 0.672-0.438 1.062-0.438s0.781 0.156 1.062 0.438l2.125 2.125c0.281 0.281 0.438 0.672 0.438 1.062z"></path>
</symbol>
<symbol id="iconSearch" viewBox="0 0 26 28">
<path d="M18 13c0-3.859-3.141-7-7-7s-7 3.141-7 7 3.141 7 7 7 7-3.141 7-7zM26 26c0 1.094-0.906 2-2 2-0.531 0-1.047-0.219-1.406-0.594l-5.359-5.344c-1.828 1.266-4.016 1.937-6.234 1.937-6.078 0-11-4.922-11-11s4.922-11 11-11 11 4.922 11 11c0 2.219-0.672 4.406-1.937 6.234l5.359 5.359c0.359 0.359 0.578 0.875 0.578 1.406z"></path>
</symbol>
<symbol id="iconEnvelope" viewBox="0 0 28 28">
<path d="M28 11.094v12.406c0 1.375-1.125 2.5-2.5 2.5h-23c-1.375 0-2.5-1.125-2.5-2.5v-12.406c0.469 0.516 1 0.969 1.578 1.359 2.594 1.766 5.219 3.531 7.766 5.391 1.313 0.969 2.938 2.156 4.641 2.156h0.031c1.703 0 3.328-1.188 4.641-2.156 2.547-1.844 5.172-3.625 7.781-5.391 0.562-0.391 1.094-0.844 1.563-1.359zM28 6.5c0 1.75-1.297 3.328-2.672 4.281-2.438 1.687-4.891 3.375-7.313 5.078-1.016 0.703-2.734 2.141-4 2.141h-0.031c-1.266 0-2.984-1.437-4-2.141-2.422-1.703-4.875-3.391-7.297-5.078-1.109-0.75-2.688-2.516-2.688-3.938 0-1.531 0.828-2.844 2.5-2.844h23c1.359 0 2.5 1.125 2.5 2.5z"></path>
</symbol>
<symbol id="iconArrowDropDownCircle" viewBox="0 0 24 24">
<path d="M12 14.016l3.984-4.031h-7.969zM12 2.016c5.531 0 9.984 4.453 9.984 9.984s-4.453 9.984-9.984 9.984-9.984-4.453-9.984-9.984 4.453-9.984 9.984-9.984z"></path>
</symbol>
<symbol id="iconQuoteRight" viewBox="0 0 26 28">
<title>quote-right</title>
<path d="M12 5v11c0 4.406-3.594 8-8 8h-1c-0.547 0-1-0.453-1-1v-2c0-0.547 0.453-1 1-1h1c2.203 0 4-1.797 4-4v-0.5c0-0.828-0.672-1.5-1.5-1.5h-3.5c-1.656 0-3-1.344-3-3v-6c0-1.656 1.344-3 3-3h6c1.656 0 3 1.344 3 3zM26 5v11c0 4.406-3.594 8-8 8h-1c-0.547 0-1-0.453-1-1v-2c0-0.547 0.453-1 1-1h1c2.203 0 4-1.797 4-4v-0.5c0-0.828-0.672-1.5-1.5-1.5h-3.5c-1.656 0-3-1.344-3-3v-6c0-1.656 1.344-3 3-3h6c1.656 0 3 1.344 3 3z"></path>
</symbol>
<symbol id="iconPlayCircle" viewBox="0 0 24 24">
<path d="M12 20.016c4.406 0 8.016-3.609 8.016-8.016s-3.609-8.016-8.016-8.016-8.016 3.609-8.016 8.016 3.609 8.016 8.016 8.016zM12 2.016c5.531 0 9.984 4.453 9.984 9.984s-4.453 9.984-9.984 9.984-9.984-4.453-9.984-9.984 4.453-9.984 9.984-9.984zM9.984 16.5v-9l6 4.5z"></path>
</symbol>
</defs>
</svg>';
?>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TKJV22G');</script>
<!-- End Google Tag Manager -->

<?php

}
add_action( 'wp_enqueue_scripts', 'skeleton_scripts' );

//Excerpt
add_post_type_support( 'page', 'excerpt' );


/**
 * Customizer additions.
 */
require get_parent_theme_file_path( '/inc/customizer.php' );

/**
 * SVG icons functions and filters.
 */
require get_parent_theme_file_path( '/inc/icon-functions.php' );


function linkHome(){
	if( is_home() || is_front_page() ) {
		return '#up';
	} else {
		return get_home_url();
	}
}

function classScrollDown(){
	if ( is_home() || is_front_page() ){
		return 'u-isScrollDown';
	} else {
		return false;
	}
}

function contentIntro($typeContent){
	
	if( $typeContent == 'title' ) {
	
		return get_the_title();
	
	} elseif( $typeContent == 'resume' ) {
	
		return get_the_excerpt();
	
	} elseif( $typeContent == 'image' ) {

		if( wp_is_mobile() ){
			$size = 'thumbnail';
		} else {
			$size = 'full';
		}
		if ( has_post_thumbnail() ) {
				
				//Imagem Destacada	
				$image_id = get_post_thumbnail_id();
				$sizeThumbs = $size;
				$urlThumbnail = wp_get_attachment_image_src($image_id, $sizeThumbs);
				$urlThumbnail = $urlThumbnail[0];

				$bg_banner_single = 'style="background-image:url(' . $urlThumbnail . ');"';

				} else {
							$urlThumbnail	= '';
							$bg_banner_single = '';
				}

				return $bg_banner_single;


		}
}

add_filter( 'body_class','my_body_classes' );
function my_body_classes( $classes ) {
 
    if ( is_page() ) {
     
        $classes[] = 'Page--' . basename(get_permalink());
        //$classes[] = 'class-name-two'; // Second Class
         
    }
     
    return $classes;
     
}



class Custom_Post_Type_Image_Upload {
	
	
	public function __construct() {
		
		add_action( 'init', array( &$this, 'init' ) );
		
		if ( is_admin() ) {
			add_action( 'admin_init', array( &$this, 'admin_init' ) );
		}
	}
	
	
	/** Frontend methods ******************************************************/
	
	
	/**
	 * Register the custom post type
	 */
	public function init() {
		
	// CASES
	$labels_cases = array(
		"name" => __( "Cases", "" ),
		"singular_name" => __( "Case", "" ),
		"menu_name" => __( "Cases de sucesso", "" ),
		"all_items" => __( "Todos os cases", "" ),
		"add_new" => __( "Adicionar novo case", "" ),
		"add_new_item" => __( "Adicionar novo case", "" ),
		"edit_item" => __( "Editar case", "" ),
		"new_item" => __( "Novo case", "" ),
		"view_item" => __( "Visualizar case", "" ),
		"view_items" => __( "Visualizar cases", "" ),
		"search_items" => __( "Pesquisar cases", "" ),
		"not_found" => __( "Sem resultados", "" ),
		"not_found_in_trash" => __( "Sem resultados", "" ),
		"parent_item_colon" => __( "Relacionados", "" ),
		"featured_image" => __( "Imagem destacada", "" ),
		"set_featured_image" => __( "Editar imagem destacada", "" ),
		"remove_featured_image" => __( "Remover imagem destacada", "" ),
		"parent_item_colon" => __( "Relacionados", "" ),
	);

	$args_cases = array(
		"label" => __( "Cases", "" ),
		"labels" => $labels_cases,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => false,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "cases_sucesso", "with_front" => true ),
		"query_var" => true,
		"menu_icon" => "dashicons-awards",
		"supports" => array( "title", "excerpt", "thumbnail"),
		//'register_meta_box_cb' => 'noticias_meta_box'
	);

	register_post_type( "cases_sucesso", $args_cases );


	// MATERIAIS
	$labels_materiais = array(
		"name" => __( "Materiais", "" ),
		"singular_name" => __( "Material", "" ),
		"menu_name" => __( "Materiais de sucesso", "" ),
		"all_items" => __( "Todos os materiais", "" ),
		"add_new" => __( "Adicionar novo material", "" ),
		"add_new_item" => __( "Adicionar novo material", "" ),
		"edit_item" => __( "Editar material", "" ),
		"new_item" => __( "Novo material", "" ),
		"view_item" => __( "Visualizar material", "" ),
		"view_items" => __( "Visualizar materiais", "" ),
		"search_items" => __( "Pesquisar materiais", "" ),
		"not_found" => __( "Sem resultados", "" ),
		"not_found_in_trash" => __( "Sem resultados", "" ),
		"parent_item_colon" => __( "Relacionados", "" ),
		"featured_image" => __( "Imagem destacada", "" ),
		"set_featured_image" => __( "Editar imagem destacada", "" ),
		"remove_featured_image" => __( "Remover imagem destacada", "" ),
		"parent_item_colon" => __( "Relacionados", "" ),
	);

	$args_materiais = array(
		"label" => __( "Materiais", "" ),
		"labels" => $labels_materiais,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => false,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "material", "with_front" => true ),
		"query_var" => true,
		"menu_icon" => "dashicons-welcome-learn-more",
		"supports" => array( "title", "editor", "thumbnail"),
	);

	register_post_type( "material", $args_materiais );



	// VÍDEOS
	$labels_videos = array(
		"name" => __( "Vídeos", "" ),
		"singular_name" => __( "Vídeos", "" ),
		"menu_name" => __( "Vídeos", "" ),
		"all_items" => __( "Todos os vídeos", "" ),
		"add_new" => __( "Adicionar novo vídeo", "" ),
		"add_new_item" => __( "Adicionar novo vídeo", "" ),
		"edit_item" => __( "Editar vídeo", "" ),
		"new_item" => __( "Novo vídeo", "" ),
		"view_item" => __( "Visualizar vídeo", "" ),
		"view_items" => __( "Visualizar vídeos", "" ),
		"search_items" => __( "Pesquisar vídeos", "" ),
		"not_found" => __( "Sem resultados", "" ),
		"not_found_in_trash" => __( "Sem resultados", "" ),
		"parent_item_colon" => __( "Relacionados", "" ),
		"featured_image" => __( "Imagem destacada", "" ),
		"set_featured_image" => __( "Editar imagem destacada", "" ),
		"remove_featured_image" => __( "Remover imagem destacada", "" ),
		"parent_item_colon" => __( "Relacionados", "" ),
	);

	$args_videos = array(
		"label" => __( "Materiais", "" ),
		"labels" => $labels_videos,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => true,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => true,
		"rewrite" => array( "slug" => "video", "with_front" => true ),
		"query_var" => true,
		"menu_icon" => "dashicons-video-alt",
		"supports" => array( "title", "editor", "thumbnail"),
	);

	register_post_type( "video", $args_videos );

	}

//==========================================
// METABOX
//========================================




//================================
// CASES DE SUCESSO
//================================
	
	
	/** Admin methods ******************************************************/
	
	
	/**
	 * Initialize the admin, adding actions to properly display and handle 
	 * the Book custom post type add/edit page
	 */
	public function admin_init() {
		global $pagenow;
		
		if ( $pagenow == 'post-new.php' || $pagenow == 'post.php' || $pagenow == 'edit.php' ) {
			
			add_action( 'add_meta_boxes', array( &$this, 'meta_boxes' ) );
			add_filter( 'enter_title_here', array( &$this, 'enter_title_here' ), 1, 2 );
			add_action( 'save_post', array( &$this, 'meta_boxes_save' ), 1, 2 );
		}
	}
	
	
	/**
	 * Save meta boxes
	 * 
	 * Runs when a post is saved and does an action which the write panel save scripts can hook into.
	 */
	public function meta_boxes_save( $post_id, $post ) {
		if ( empty( $post_id ) || empty( $post ) || empty( $_POST ) ) return;
		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
		if ( is_int( wp_is_post_revision( $post ) ) ) return;
		if ( is_int( wp_is_post_autosave( $post ) ) ) return;
		if ( ! current_user_can( 'edit_post', $post_id ) ) return;
		if ( $post->post_type != 'cases_sucesso' ) return;
			
		$this->process_book_meta( $post_id, $post );
	}
	
	
	/**
	 * Function for processing and storing all book data.
	 */
	private function process_book_meta( $post_id, $post ) {
		update_post_meta( $post_id, '_image_id', $_POST['upload_image_id'] );
		update_post_meta( $post_id, 'var_tipo', $_POST['multimidia_tipo'] );
		update_post_meta( $post_id, 'iframe_video', $_POST['multimidia_iframe_video'] );
		update_post_meta( $post_id, 'color', $_POST['multimidia_color'] );
		update_post_meta( $post_id, 'representante', $_POST['multimidia_representante'] );

	}
	
	
	/**
	 * Set a more appropriate placeholder text for the New Book title field
	 */
	public function enter_title_here( $text, $post ) {
		if ( $post->post_type == 'cases_sucesso' ) return __( 'Título do Case' );
		return $text;
	}
	
	
	/**
	 * Add and remove meta boxes from the edit page
	 */
	public function meta_boxes() {
		add_meta_box( 'book-image', __( 'Multimidia' ), array( &$this, 'book_image_meta_box' ), 'cases_sucesso', 'normal', 'high' );
	}
	
	
	/**
	 * Display the image meta box
	 */
	public function book_image_meta_box() {
		global $post;

		$var_tipo = intval( get_post_meta( $post->ID, 'var_tipo', true ) );
		$iframe_video = esc_html( get_post_meta( $post->ID, 'iframe_video', true ) );
    	$color = esc_html( get_post_meta( $post->ID, 'color', true ) );
    	$representante = esc_html( get_post_meta( $post->ID, 'representante', true ) );
		
		$image_src = '';
		
		$image_id = get_post_meta( $post->ID, '_image_id', true );
		$image_src = wp_get_attachment_url( $image_id );
		
		?>

		<table>
		 <tr>
            <td style="width: 100%;">Tipo</td>
            <td>
                <select id="tipoCase" style="width: 200px" name="multimidia_tipo" onchange="showdiv()">
                <?php
                // Generate all items of drop-down list
                for ( $tipo = 3; $tipo >= 1; $tipo -- ) {
                	
                	switch ( $tipo ) {
                		case 1 : 
                			$titleOption = 'Vídeo';
                			break;
                		
                		case 2 : 
                			$titleOption = 'Depoimento';
                			break;

                		case 3 : 
                			$titleOption = 'Apenas logotipo';
                			break;
                	}


                ?>
                    <option value="<?php echo $tipo; ?>" <?php echo selected( $tipo, $var_tipo ) ?>  data-div="Div<?php echo $tipo; ?>">
                    	<?php echo $titleOption; ?>  
					</option>
                    <?php } ?>
                </select>
            </td>
        </tr>

        <tr id="Div1" class="contentTipo Div1" style="display: none;">
            <td style="width: 100%"><strong>Iframe ou Embed do vídeo</strong></td>
            <td><input type="text" size="80" name="multimidia_iframe_video" value="<?php echo $iframe_video; ?>" placeholder="Cole o código HTML do iframe ou embed do vídeo" /></td>
        </tr>
    	 <tr id="Div2" class="contentTipo Div2" style="display: none;">
            <td style="width: 100%"><strong>Cor principal</strong></td>
            <td><input type="text" size="80" name="multimidia_color" value="<?php echo $color; ?>" /></td>
        </tr>
         <tr id="Div2" class="contentTipo Div2" style="display: none;">
            <td style="width: 100%"><strong>Representante</strong></td>
            <td><input type="text" size="80" name="multimidia_representante" value="<?php echo $representante; ?>" /></td>
        </tr>
         <tr id="Div1" class="contentTipo Div1 Div2" style="display: none;">
            <td style="width: 100%"><strong>Imagem de capa</strong></td>
            <td>
            	<img id="book_image" src="<?php echo $image_src ?>" style="max-width:280px;" />
		<input type="hidden" name="upload_image_id" id="upload_image_id" value="<?php echo $image_id; ?>" />
		<p>
			<a title="<?php esc_attr_e( 'Incluir / Alterar imagem' ) ?>" href="#" id="set-book-image"><?php _e( 'Incluir / Alterar imagem' ) ?></a>
			<a title="<?php esc_attr_e( 'Remover imagem' ) ?>" href="#" id="remove-book-image" style="<?php echo ( ! $image_id ? 'display:none;' : '' ); ?>"><?php _e( 'Remover imagem' ) ?></a>
		</p>
            </td>
        </tr>
    </table>
		
		<script type="text/javascript">
			
			function showdiv()
				{
				   var divID = $("#tipoCase option:selected").attr("data-div");
				   divID = divID.replace(" ","");
				   // $("tr#"+divID).show();
				   // $("tr#"+divID).siblings().hide();
   					$("tr.contentTipo").hide();
   					$("tr."+divID).show();
				}

		jQuery(document).ready(function($) {

			// Hide Or show by Tipo
			var divID = $("#tipoCase option:selected").attr("data-div");
			$("tr."+divID).show();
			
			// save the send_to_editor handler function
			window.send_to_editor_default = window.send_to_editor;
	
			$('#set-book-image').click(function(){
				
				// replace the default send_to_editor handler function with our own
				window.send_to_editor = window.attach_image;
				tb_show('', 'media-upload.php?post_id=<?php echo $post->ID ?>&amp;type=image&amp;TB_iframe=true');
				
				return false;
			});
			
			$('#remove-book-image').click(function() {
				
				$('#upload_image_id').val('');
				$('img').attr('src', '');
				$(this).hide();
				
				return false;
			});
			
			// handler function which is invoked after the user selects an image from the gallery popup.
			// this function displays the image and sets the id so it can be persisted to the post meta
			window.attach_image = function(html) {
				
				// turn the returned image html into a hidden image element so we can easily pull the relevant attributes we need
				$('body').append('<div id="temp_image">' + html + '</div>');
					
				var img = $('#temp_image').find('img');
				
				imgurl   = img.attr('src');
				imgclass = img.attr('class');
				imgid    = parseInt(imgclass.replace(/\D/g, ''), 10);
	
				$('#upload_image_id').val(imgid);
				$('#remove-book-image').show();
	
				$('img#book_image').attr('src', imgurl);
				try{tb_remove();}catch(e){};
				$('#temp_image').remove();
				
				// restore the send_to_editor handler function
				window.send_to_editor = window.send_to_editor_default;
				
			}
	
		});
		</script>
		<?php
	}
}

// finally instantiate our plugin class and add it to the set of globals
$GLOBALS['custom_post_type_image_upload'] = new Custom_Post_Type_Image_Upload();




//================================
// MATERIAIS e VÍDEOS
//================================



// Cria a meta_box
function conteudo_metabox() {
	
	// Tipos de post para a metabox
	$screens = array( 'material', 'video' );

	foreach ( $screens as $screen ) {

		add_meta_box(
			'conteudo_meta_box',          // ID da Meta Box 
			'Campos adicionais do conteúdo',   // Título
			'conteudo_metabox_callback',  // Função de callback
			$screen,                    // Local onde ela vai aparecer
			'normal',                   // Contexto
			'high'                      // Prioridade
		);
		
	} // foreach
	
} // Cria a meta_box
add_action( 'add_meta_boxes', 'conteudo_metabox', 1 );

// Essa é a função que vai exibir os dados para o usuário
function conteudo_metabox_callback( $post ) {

	// Adiciona um campo para verificação posterior
	wp_nonce_field( 'conteudo_custom_metabox', 'conteudo_custom_metabox_nonce' );
	
	$_urlswitch = get_post_meta( $post->ID, '_urlswitch', true );

	if ( 'material' == get_post_type() ) {
		$placeholder = 'Cole aqui o novo link do Material';
		$title = 'LINK SUBSTITUTO DO MATERIAL';
	}
	elseif ( 'video' == get_post_type() ) {
		$placeholder = 'Cole aqui embed ou iframe do Vídeo';
		$title = 'EMBED DO VÍDEO';
	}

	
	echo '<h4>' . $title . '</h4>';
	echo '<input type="text" name="_urlswitch" class="widefat" value="' . esc_html( $_urlswitch ) . '" placeholder="' . $placeholder . '" />';
}

function conteudo_save_custom_metabox_data( $post_id ) {

	// Verifica o campo nonce
	if ( ! isset( $_POST['conteudo_custom_metabox_nonce'] ) ) {
		return;
	}

	// Verifica se o campo nonce é válido
	if ( ! wp_verify_nonce( $_POST['conteudo_custom_metabox_nonce'], 'conteudo_custom_metabox' ) ) {
		return;
	}

	// Se o formulário ainda não foi enviado (estiver fazendo autosave) 
	// não faremos nada
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}

	// Verifica as permissões do usuário (mínimo: editar post).
	if ( isset( $_POST['post_type'] ) && 'contato' == $_POST['post_type'] ) {

		if ( ! current_user_can( 'edit_post', $post_id ) ) {
			return;
		}
	}

	/* Perfeito, agora vamos aos campos. */
	
	$_urlswitch = isset( $_POST['_urlswitch'] ) ? $_POST['_urlswitch'] : null;

	// Atualiza os dados no BD
	
	update_post_meta( $post_id, '_urlswitch', $_urlswitch );
}
add_action( 'save_post', 'conteudo_save_custom_metabox_data' );






//======================
// Taxonomies
//=====================

add_action( 'init', 'create_my_taxonomies', 0 );

function create_my_taxonomies() {
    register_taxonomy(
        'categoria-material',
        'material',
        array(
            'labels' => array(
                'name' => 'Categoria de Material',
                'add_new_item' => 'Adicionar nova Categoria',
                'new_item_name' => "Nova Categoria"
            ),
            'show_ui'           => true,
	        'show_admin_column' => true,
	        'query_var'         => true,
	        'rewrite'           => array( 'slug' => 'categoria-material' ),
	        'public' => true,
	        'hierarchical' => true,
	        'show_ui' => true,
	        'show_in_nav_menus' => true,
	        'query_var' => true,
	        'publicly_queryable' => true,
	        'capability_type' => 'post',
	        'hierarchical' => true,
	        'has_archive' => true
        )
    );
    register_taxonomy(
        'categoria-video',
        'video',
        array(
            'labels' => array(
                'name' => 'Categoria de Vídeo',
                'add_new_item' => 'Adicionar nova Categoria',
                'new_item_name' => "Nova Categoria"
            ),
            'show_ui' => true,
            'show_tagcloud' => false,
            'show_admin_column' => true,
			'query_var'         => true,
			'rewrite' => array( 'slug' => 'categoria-video' ),
			'hierarchical' => true,
        )
    );
}

//==================================
// Filter and Columns in postTypes
//==================================

add_filter( 'manage_edit-cases_sucesso_columns', 'my_columns' );

function my_columns( $columns ) {
    $columns['var_tipo'] = 'Tipo';
    unset( $columns['comments'] );
    return $columns;
}

add_action( 'manage_posts_custom_column', 'populate_columns' );

function populate_columns( $column ) {
    if ( 'var_tipo' == $column ) {
        $tipo = get_post_meta( get_the_ID(), 'var_tipo', true );
        
        switch ($tipo) {
        	case 1:
        		echo 'Vídeo';
        		break;
        	case 2:
        		echo 'Depoimento';
        		break;
        	case 3:
        		echo 'Apenas logotipo';
        		break;
        	
        }
    }
}

add_filter( 'manage_edit-cases_sucesso_sortable_columns', 'sort_me' );

function sort_me( $columns ) {
    $columns['var_tipo'] = 'var_tipo';
 
    return $columns;
}


//add_filter( 'request', 'column_ordering' );
 
add_filter( 'request', 'column_orderby' );
 
function column_orderby ( $vars ) {
    if ( !is_admin() )
        return $vars;
    
    if ( isset( $vars['orderby'] ) && 'var_tipo' == $vars['orderby'] ) {
        $vars = array_merge( $vars, array( 'meta_key' => 'var_tipo', 'orderby' => 'meta_value_num' ) );
    }
    return $vars;
}


//=============================
// Trata as páginas de conteúdo
//=============================


// POST_TYPE no Search
function get_post_type_search($variable_compare) {

	if( isset( $_GET['post_type'] ) ) {
		
		$get_post_type = $_GET['post_type'];
		
		if( !empty($get_post_type) && $get_post_type  == $variable_compare ){

			return true;

		} 

		
	}

}


function is_content_page (){

if( is_page('blog') || is_page('materiais')  || is_page('videos') || is_category()  || is_tax() || is_archive() || is_single() || is_search() ){

		if( is_page('blog') ){
			$type_content = 'page';
			$content_page = 'post';
		}
		
		elseif( is_page('materiais') ){

			$type_content = 'page';
			$content_page = 'material';
		}
		
		elseif( is_page('videos') ){

			$type_content = 'page';
			$content_page = 'video';

		}
		
		//Categories
		elseif( is_category() ){
		
			$type_content = 'category';
			$content_page = 'post';
		}
		elseif( is_tax() ){
			if( 'material' == get_post_type() ){
				$type_content = 'category';
				$content_page = 'material';
			}
			if( 'video' == get_post_type() ){
				$type_content = 'category';
				$content_page = 'video';
			}
		}

		//Search results
		elseif( is_search() ){
		
			$type_content = 'search';

			 if ( get_post_type_search('material') ) {

			 	$content_page = 'material';
			 
			 }
			 elseif ( get_post_type_search('video') ) {
			 
			 	$content_page = 'video';
			 
			 }

			 else{

			 	$content_page = 'post';
			 
			 }
		}
		//Archives
		elseif( is_archive() ){

			if( 'material' == get_post_type() ){
				$type_content = 'archive';
				$content_page = 'material';
			}

			elseif( 'video' == get_post_type() ){
				$type_content = 'archive';
				$content_page = 'video';
			}
			
			else{
		
				$type_content = 'archive';
				$content_page = 'post';
			}

		}
		
		
		

		//Singles
		elseif( is_single() ){

			$type_content = 'single';

			 if ( 'post' == get_post_type() ) {
			 	$content_page = 'post';
			 }
			 elseif ( 'material' == get_post_type() ) {
			 	$content_page = 'material';
			 }
			 elseif ( 'video' == get_post_type() ) {
			 	$content_page = 'video';
			 }
		}

		else {

			$type_content = '';
			$content_page = '';
		}
		// Se é uma estrutura de blog retorna com a afirmação e informa qual o tipo de página
		return array('verify' => 'yes', 'type' => $type_content, 'content_page' => $content_page ); 
	} else {
		// Se não é estrutura de blog retorna vazio
		return array('verify' => '', 'type' => '', 'content_page' => '' );
	}

}

//=========
// FirstPost
//=========
function id_first_post() {
    global $post;

    $is_content_page =  is_content_page();

    $args = array(
	'posts_per_page'   => 1,
	'offset'           => 0,
	'category'         => '',
	'category_name'    => '',
	'orderby'          => 'date',
	'order'            => 'DESC',
	'include'          => '',
	'exclude'          => '',
	'meta_key'         => '',
	'meta_value'       => '',
	'post_type'        => $is_content_page['content_page'],
	'post_mime_type'   => '',
	'post_parent'      => '',
	'author'	   => '',
	'author_name'	   => '',
	'post_status'      => 'publish',
	'suppress_filters' => true, 
	);
	
	$loop = get_posts( $args ); 

    //$loop = get_posts( 'numberposts=1&order=DESC' );
    //return ( $post->ID == $first ) ? true : false;
    $first = $loop[0]->ID; 
    return $first;
} 




//==================================
//Paginação BLOG
//==================================

function pagination_bar( $custom_query ) {

    $total_pages = $custom_query->max_num_pages;
    $big = 999999999; // need an unlikely integer

    if ($total_pages > 1){
        $current_page = max(4, get_query_var('paged'));

        $pagination =  paginate_links(array(
            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
            'format' => '?paged=%#%',
            'prev_next' => false,
            'current' => $current_page,
            'total' => $total_pages,
            'before_page_number' => '<span class="navController navController--center navController--left navController--all navController--button  navController--tabs ReadMore  Button ButtonLink u-lineHeight0 hover is-animating u-marginRight--inter u-flex"><span class="ShowText">',
            'after_page_number' => '</span></span>',
            'prev_text' => '<span class="ShowText">%1$s</span>',
            'next_text' => '<span class="ShowText">%1$s</span>',
        ));



        echo $pagination;


    }
}

// Páginas de Orçamento


function is_page_budget(){

global $post;     // if outside the loop

if( is_page() ) { 

	if ( $post->post_parent) {

		$pageParent = '';
		$hasChild = 'yes';
		/* is it a page */
	
		//global $post;
	        /* Get an array of Ancestors and Parents if they exist */
		$parents = get_post_ancestors( $post->ID );
	        /* Get the top Level page->ID count base 1, array base 0 so -1 */ 
		$id = ($parents) ? $parents[count($parents)-1]: $post->ID;
		/* Get the parent and set the $class with the page slug (post_name) */
	    $parent = get_post( $id );
		$pageParent = $parent->post_name;

		if( $pageParent == 'orcamentos') {

			return array('verify' => 'yes', 'hasChild' => $hasChild );

		}
	}
	elseif ( is_page('orcamentos') ) {

		$hasChild = 'no';

		return array('verify' => 'yes', 'hasChild' => $hasChild );

		}

	}
}



function link_for_budgets($slug_page, $slug_custom){

//global $post;     // if outside the loop

	if( is_page() ) { 

		if ( $slug_custom != '' ){

			$page = get_page_by_path( $slug_custom );
		
		} else {

			$page = get_page_by_path( $slug_page );

		}


		if ( isset($page) ) {

			return get_permalink($page);
		}
		else {

			return get_permalink( get_page_by_path( 'orcamentos' ) );
		}
	
	}
}

// Pega o Slug da Página Corrente
function get_slug_current_page(){
	
	if( is_page() ) {

		global $post;
    	
    	return $post->post_name;
	
	} 
}