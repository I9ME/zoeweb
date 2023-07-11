
<?php
/**
 * Template for displaying search forms in Twenty Seventeen
 *
 * @package WordPress
 * @subpackage Skeleton
 * @since 1.0
 * @version 1.0
 */

?>

<?php $unique_id = esc_attr( uniqid( 'search-form-' ) ); ?>

<?php 

$is_content_page =  is_content_page();

if( isset( $_GET['post_type'] ) ) {
	
	$get_post_type = $_GET['post_type'];
	
	if( !empty($get_post_type) ){

		$get_post_type = $get_post_type; 

	} else {
		
		$get_post_type = '';
	
	}
}

if( $is_content_page['content_page'] == 'material' || get_post_type_search('material') ) {
	
	$actionForm = '<input type="hidden" name="post_type" value="material" />';
	$placeholder = 'PESQUISE EM TODOS OS MATERIAIS';
}

elseif( $is_content_page['content_page'] == 'video' || get_post_type_search('video') ) {
	
	$actionForm = '<input type="hidden" name="post_type" value="video" />';
	$placeholder = 'PESQUISE EM TODOS OS VÍDEOS';

}

else {
	
	$actionForm = '';
	$placeholder = 'PESQUISE EM TODOS OS POSTS';
}

 ?>

<div id="SeachHeader-container" class="Form Form--style3 Navigation Navigation--content Navigation--content--level2 Navigation--content--style1  u-isCollapsed u-contentHide u-contentHide--height u-size24of24 is-animating">
	<form role="search" method="get" class="search-form Item is-animating u-paddingVertical" action="<?php echo get_home_url(); ?>">

		<?php 
			if( $actionForm != '') {
				echo $actionForm;
			}
		?>

	  	<div class="Navigation--content-container u-alignRight u-flex">
	    	<input type="search" id="<?php echo $unique_id; ?>" class="search-field Form-input u-borderRadius50 u-size18of24 u-inlineFlex" placeholder="<?php echo $placeholder; ?>" value="<?php echo get_search_query(); ?>" name="s" required />

	    	<button type="submit" class="search-submit Form-input Form-input--searchSubmit u-borderRadius50 u-inlineFlex u-marginLeft--inter FigureIcon FigureIcon--search is-animating"></button>
	  	</div>
	</form>
</div>


