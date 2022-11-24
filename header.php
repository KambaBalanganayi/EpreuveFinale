<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kamba_theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
	<?php  //Affichage du menu principal
			wp_nav_menu(array(
			"menu" => "primary_menu",
			"container" => "nav",
			"container_class" => "primary__menu")); 
	?>
<div id="page" class="site">
	<header id="masthead" class="site-header">

		<div class="site__branding">
				<h2 class="site__title">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
				</h2>
			
			<?php
				$kamba_theme_description = get_bloginfo( 'description', 'display' );
				if ( $kamba_theme_description || is_customize_preview() ) :
			?>
				<p class="site-description"><?php echo $kamba_theme_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
				<?php endif; ?>
		</div><!-- .site-branding -->
		
	</header><!-- #masthead -->
	<aside class="widget__area">
		<h2>Menu Secondaire</h2>
		<?php wp_nav_menu(array(
					"menu" => "aside",
					"container" => "nav",
					"container_class" => "menu__aside"
		)); 		
		?>
		<div><?php get_sidebar( 'aside-2' ); ?></div>
	</aside>
	<aside class="widget__area-2">
		<div><?php get_sidebar( 'aside-1' ); ?></div>
		<div><?php get_sidebar( 'aside-3' ); ?></div>
	</aside>
