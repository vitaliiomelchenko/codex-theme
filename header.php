

<?php


/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package codex
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

<?php 

// if ($args['block_type'] == 'flexible') :
// 	$field = 'the_sub_field';
// else :
// 	$field = 'the_field';
// endif;

// $field('test');

get_template_part( 'template-parts/blocks/test-block', null, 
	array(
		'block_type' => 'flexib-le'
	)
);

?>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<p style="color: red;">I am the file from local server delivered with Git</p>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'codex' ); ?></a>

		<header id="masthead" class="site-header">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<div class="container-fluid">
					<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
						data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
						aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<?php
						
						wp_nav_menu( [
							'theme_location'  => '',
							'menu'            => '', 
							'container'       => 'div', 
							'container_class' => '', 
							'container_id'    => '',
							'menu_class'      => 'menu', 
							'menu_id'         => '',
							'echo'            => true,
							'fallback_cb'     => 'wp_page_menu',
							'before'          => '',
							'after'           => '',
							'link_before'     => '',
							'link_after'      => '',
							'items_wrap'      => '<ul id="%1$s" class="%2$s navbar-nav me-auto mb-2 mb-lg-0">%3$s</ul>',
							'depth'           => 0,
							'walker'          => '',
						] );
						?>
					</div>
				</div>
			</nav>
		</header><!-- #masthead -->