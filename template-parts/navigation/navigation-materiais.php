<?php
/**
 * Displays top navigation
 *
 * @package WordPress
 * @subpackage Skeleton
 * @since 1.0
 * @version 1.0
 */

?>

<nav id="BlogNavigation-container" class="Navigation Navigation--menu Navigation--blog Navigation--menu--level2 Navigation--menu--style1 is-animating u-size24of24 u-isCollapsed u-contentHide u-contentHide--height" role="navigation" aria-label="">
	<ul class="Navigation-items u-alignCenter">
		<li class="Navigation-items-item Item Item-level1 u-flex u-flexAlignCenter is-animating">
			<a id="CategoriasBlog" class="NavigationLink u-positionRelative Item-level1 is-hasSubMenu is-animating u-isCollapsed" href="<?php echo get_home_url(); ?>/blog">
				CATEGORIAS
				<i class="NavigationLink-icon NavigationLink-icon--right u-positionAbsolute u-flex u-flexAlignCenter">
					<svg class="NavigationButton-icon u-icon iconArrowRight is-animating is-animating--rotate">
						<use xlink:href="#iconArrowRight"></use>
					</svg>
						
				</i>
			</a>
			<div id="CategoriasBlog--container" class="Navigation--subMenu is-animating u-isCollapsed u-paddingVertical">
				<a id="BackNav" href="javascript:;" class="NavigationLink NavigationLink--backNav Button Button--border u-positionRelative u-inlineFlex u-flexAlignCenter">
					<i class="NavigationLink-icon NavigationLink-icon--left u-positionAbsolute u-flex u-flexAlignCenter">
						<svg class="NavigationButton-icon u-icon iconArrowLeft is-animating">
							<use xlink:href="#iconArrowLeft"></use>
						</svg>		
					</i>
					<span>Voltar</span>
				</a>
				<h4 class="Navigation--subMenu-title u-alignCenter u-inlineFlex u-marginLeft--inter">CATEGORIAS</h4>	
				<ul class="Navigation Navigation-items Navigation-items--level2 u-paddingTop--inter u-isCollapsed is-animating">
					
					<?php 
							$categories = get_categories( array(
							    'orderby' => 'name',
							    'parent'  => 0
							) );
							foreach ( $categories as $category ) {
							    printf( '<li class="Navigation-items-item Navigation-items--level2-item u-marginHorizontal--inter--half is-animating"><a class="NavigationLink NavigationLink--level2 is-animating" href="%1$s">%2$s</a></li>',
							        esc_url( get_category_link( $category->term_id ) ),
							        esc_html( $category->name )
							    );
							}
					?>
				</ul>
			</div>
		</li>
		<li class="Navigation-items-item Item Item-level1 u-flex u-flexAlignCenter is-animating">
			<a class="NavigationLink u-positionRelative Item-level1 is-animating " href="<?php echo get_home_url(); ?>/blog">MATERIAIS</a>
		</li>
		<li class="Navigation-items-item Item Item-level1 u-flex u-flexAlignCenter is-animating">
			<a id="Videos" class="NavigationLink u-positionRelative Item-level1 is-animating u-isCollapsed" href="<?php echo get_home_url(); ?>/blog">
				VÍDEOS
			</a>
		</li>
	</ul>
</nav><!-- #site-navigation -->
