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
<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Main Menu', 'crawford' ); ?>">

	<?php wp_nav_menu( array(
		'theme_location' => 'main-menu',
		'menu_id'        => 'main-menu',
	) ); ?>

	<?php if ( ( crawford_is_frontpage() || ( is_home() && is_front_page() ) ) && has_custom_header() ) : ?>
		<a href="#content" class="menu-scroll-down"><?php echo crawford_get_svg( array( 'icon' => 'arrow-right' ) ); ?><span class="sr-only"><?php _e( 'Scroll down to content', 'crawford' ); ?></span></a>
	<?php endif; ?>
</nav><!-- #site-navigation -->
