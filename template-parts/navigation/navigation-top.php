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

<a id="MainNavigation" href="javascript:;" class="e-Toglle u-contentHide--button NavigationButton NavigationButton--main is-animating u-flex u-zIndex4 u-isCollapsed">
	<i class="u-inlineFlex">

		<svg class="iconMenu NavigationButton-icon u-icon is-animating is-animating--switch is-animating--switch--imgA is-animating--rotate">
			<use xlink:href="#iconMenu"></use>
		</svg>
		<svg class="iconClose NavigationButton-icon u-icon is-animating is-animating--switch is-animating--switch--imgB is-animating--rotate">
			<use xlink:href="#iconClose"></use>
		</svg>
		<span class="u-isOut">MENU</span>
	</i>
</a>
<nav id="MainNavigation-container" class="Navigation Navigation--menu Navigation--menu--main Navigation--menu--style2 is-animating u-size24of24 u-isCollapsed u-contentHide u-contentHide--height" role="navigation" aria-label="">
	<ul class="Navigation-items u-alignCenter u-paddingTop--inter">
		<li class="Navigation-items-item Item Item-level1 u-flex u-flexAlignCenter is-animating">
			<a id="Categorias" class="NavigationLink u-positionRelative Item-level1 is-hasSubMenu is-animating u-isCollapsed" href="javascript:;">
				STREAMING AO VIVO
				<i class="NavigationLink-icon NavigationLink-icon--right u-positionAbsolute u-flex u-flexAlignCenter">
					<svg class="NavigationButton-icon u-icon iconArrowRight is-animating is-animating--rotate">
						<use xlink:href="#iconArrowRight"></use>
					</svg>
						
				</i>
			</a>
			<div id="Categorias--container" class="Navigation--subMenu is-animating u-isCollapsed u-paddingVertical">
				<a id="BackNav" href="javascript:;" class="NavigationLink NavigationLink--backNav Button Button--border u-positionRelative u-inlineFlex u-flexAlignCenter">
					<i class="NavigationLink-icon NavigationLink-icon--left u-positionAbsolute u-flex u-flexAlignCenter">
						<svg class="NavigationButton-icon u-icon iconArrowLeft is-animating">
							<use xlink:href="#iconArrowLeft"></use>
						</svg>		
					</i>
					<span>Voltar</span>
				</a>
				<h4 class="Navigation--subMenu-title u-alignCenter u-inlineFlex u-marginLeft--inter">STREAMING AO VIVO</h4>	
				<ul class="Navigation Navigation-items Navigation-items--level2 u-paddingTop--inter u-isCollapsed is-animating">
					<li class="Navigation-items-item Navigation-items--level2-item u-marginHorizontal--inter--half is-animating">
						<a class="NavigationLink NavigationLink--level2 is-animating" href="<?php echo get_home_url(); ?>/streaming-ao-vivo">Como funciona</a>
					</li>
					<li class="Navigation-items-item Navigation-items--level2-item u-marginHorizontal--inter--half is-animating">
						<a class="NavigationLink NavigationLink--level2 is-animating" href="<?php echo get_home_url(); ?>/streaming-ao-vivo/congressos-feiras-workshops">Feiras, eventos e Workshops</a>
					</li>
					<li class="Navigation-items-item Navigation-items--level2-item u-marginHorizontal--inter--half is-animating">
						<a class="NavigationLink NavigationLink--level2 is-animating" href="<?php echo get_home_url(); ?>/streaming-ao-vivo/shows-entretenimento">Shows e Entretenimento</a>
					</li>
					<li class="Navigation-items-item Navigation-items--level2-item u-marginHorizontal--inter--half is-animating">
						<a class="NavigationLink NavigationLink--level2 is-animating" href="<?php echo get_home_url(); ?>/streaming-ao-vivo/eventos-corporativos">Eventos corporativos</a>
					</li>
					<li class="Navigation-items-item Navigation-items--level2-item u-marginHorizontal--inter--half is-animating">
						<a class="NavigationLink NavigationLink--level2 is-animating" href="<?php echo get_home_url(); ?>/streaming-ao-vivo/webinar">Webinar</a>
					</li>
					<li class="Navigation-items-item Navigation-items--level2-item u-marginHorizontal--inter--half is-animating">
						<a class="NavigationLink NavigationLink--level2 is-animating" href="<?php echo get_home_url(); ?>/streaming-ao-vivo/ensino-a-distancia">Ensino à distância</a>
					</li>
					<li class="Navigation-items-item Navigation-items--level2-item u-marginHorizontal--inter--half is-animating">
						<a class="NavigationLink NavigationLink--level2 is-animating" href="<?php echo get_home_url(); ?>/streaming-ao-vivo/cameras-ip">Câmeras IP</a>
					</li>
					<li class="Navigation-items-item Navigation-items--level2-item u-marginHorizontal--inter--half is-animating">
						<a class="NavigationLink NavigationLink--level2 is-animating" href="<?php echo get_home_url(); ?>/streaming-ao-vivo/radio-online">Rádio</a>
					</li>
					<li class="Navigation-items-item Navigation-items--level2-item u-marginHorizontal--inter--half is-animating">
						<a class="NavigationLink NavigationLink--level2 is-animating" href="<?php echo get_home_url(); ?>/streaming-ao-vivo/aplicativos">Aplicativos</a>
					</li>
				</ul>
			</div>
		</li>
		<li class="Navigation-items-item Item Item-level1 u-flex u-flexAlignCenter is-animating">
			<a class="NavigationLink u-positionRelative Item-level1 is-animating " href="<?php echo get_home_url(); ?>/zoevideos">ZOEVÍDEOS</a>
		</li>
		<li class="Navigation-items-item Item Item-level1 u-flex u-flexAlignCenter is-animating">
			<a class="NavigationLink u-positionRelative Item-level1 is-animating " href="<?php echo get_home_url(); ?>/cases">CASES</a>
		</li>
		<li class="Navigation-items-item Item Item-level1 u-flex u-flexAlignCenter is-animating">
			<a id="Conteudo" class="NavigationLink u-positionRelative Item-level1 is-hasSubMenu is-animating u-isCollapsed" href="javascript:;">
				CONTEÚDO
				<i class="NavigationLink-icon NavigationLink-icon--right u-positionAbsolute u-flex u-flexAlignCenter">
					<svg class="NavigationButton-icon u-icon iconArrowRight is-animating is-animating--rotate">
						<use xlink:href="#iconArrowRight"></use>
					</svg>
						
				</i>
			</a>
			<div id="Conteudo--container" class="Navigation--subMenu is-animating u-isCollapsed u-paddingVertical">
				<a id="BackNav" href="javascript:;" class="NavigationLink NavigationLink--backNav Button Button--border u-positionRelative u-inlineFlex u-flexAlignCenter">
					<i class="NavigationLink-icon NavigationLink-icon--left u-positionAbsolute u-flex u-flexAlignCenter">
						<svg class="NavigationButton-icon u-icon iconArrowLeft is-animating">
							<use xlink:href="#iconArrowLeft"></use>
						</svg>		
					</i>
					<span>Voltar</span>
				</a>
				<h4 class="Navigation--subMenu-title u-alignCenter u-inlineFlex u-marginLeft--inter">CONTEÚDO</h4>	
				<ul class="Navigation Navigation-items Navigation-items--level2 u-paddingTop--inter u-isCollapsed is-animating">
					<li class="Navigation-items-item Navigation-items--level2-item u-marginHorizontal--inter--half is-animating">
						<a class="NavigationLink NavigationLink--level2 is-animating" href="<?php echo get_home_url(); ?>/blog/">Blog</a>
					</li>
					<li class="Navigation-items-item Navigation-items--level2-item u-marginHorizontal--inter--half is-animating">
						<a class="NavigationLink NavigationLink--level2 is-animating" href="<?php echo get_home_url(); ?>/videos/">Vídeos</a>
					</li>
					<li class="Navigation-items-item Navigation-items--level2-item u-marginHorizontal--inter--half is-animating">
						<a class="NavigationLink NavigationLink--level2 is-animating" href="<?php echo get_home_url(); ?>/materiais/">Materiais de sucesso</a>
					</li>
				</ul>
			</div>
		</li>
		<li class="Navigation-items-item Item Item-level1 u-flex u-flexAlignCenter is-animating">
			<a class="NavigationLink u-positionRelative Item-level1 is-animating " href="<?php echo get_home_url(); ?>/atendimento">ATENDIMENTO</a>
		</li>
		<li class="Navigation-items-item Item Item-level1 u-flex u-flexAlignCenter is-animating">
			<a class="NavigationLink u-positionRelative Item-level1 Button ButtonLink ButtonLink--nav is-animating" href="<?php echo get_home_url(); ?>/atendimento">FALE COM UM ESPECIALISTA</a>
		</li>
		
	</ul>
</nav><!-- #site-navigation -->

