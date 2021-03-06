<?php
/**
 * Displays top navigation
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>
<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'twentyseventeen' ); ?>">
	<button class="menu-toggle" aria-controls="top-menu" aria-expanded="false">
		<?php
		echo twentyseventeen_get_svg( array( 'icon' => 'bars' ) );
		echo twentyseventeen_get_svg( array( 'icon' => 'close' ) );
		_e( 'Menu', 'twentyseventeen' );
		?>
	</button>
	<div class="nav-left">
	<?php 
	$burl = get_template_directory_uri();
	echo "<a href='http://poundofflesh.org'><img class='top-front-logo' src='" . $burl . "/logo-white.png'></a>";
	?>
	<!-- <div class="logo">	 -->
	<!-- <span class="highlight">Pound</span> of Flesh -->
	
	

	<!-- </div> -->
		</div>
<div class="nav-right">
	<?php wp_nav_menu( array(
		'theme_location' => 'top',
		'menu_id'        => 'top-menu',
	) ); ?>

	<?php if ( ( twentyseventeen_is_frontpage() || ( is_home() && is_front_page() ) ) && has_custom_header() ) : ?>
		
	<?php endif; ?>

	</div>
</nav><!-- #site-navigation -->
