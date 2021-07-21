<?php
/**
 * codex functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package codex
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'codex_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function codex_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on codex, use a find and replace
		 * to change 'codex' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'codex', get_template_directory() . '/languages' );

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
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'codex' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'codex_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'codex_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function codex_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'codex_content_width', 640 );
}
add_action( 'after_setup_theme', 'codex_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function codex_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'codex' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'codex' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'codex_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function codex_scripts() {
	wp_enqueue_style( 'codex-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css' );
	wp_style_add_data( 'codex-style', 'rtl', 'replace' );

	wp_enqueue_script('jquery');
	wp_enqueue_script( 'codex-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'bootstrap-bundle', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js' );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'codex_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}


	
function hide_menu(){
 global $current_user;
 $user_id = get_current_user_id();
 // echo "user:".$user_id;   // Use this to find your user id quickly

    if(get_field('clear_theme_mode','user_'. $user_id )){

        // To remove the whole Appearance admin menu you would use;

//        remove_menu_page( 'themes.php' );

        // To remove the theme editor and theme options submenus from
        // the Appearance admin menu, as well as the main 'Themes'
        // submenu you would use 

//         remove_menu_page( 'index.php' );
//         remove_submenu_page( 'index.php', 'update-core.php' );

//         remove_submenu_page( 'themes.php', 'themes.php' );
//         remove_submenu_page( 'themes.php', 'theme-editor.php' );
//         remove_submenu_page( 'themes.php', 'theme_options' );

//         remove_menu_page( 'users.php' );
//         remove_submenu_page( 'users.php', 'user-new.php' );
//         remove_submenu_page( 'users.php', 'profile.php' );


        remove_menu_page( 'admin.php?page=Wordfence' );
        remove_submenu_page( 'admin.php?page=Wordfence', 'media-new.php' );

		
//         remove_menu_page( 'edit.php' );
//         remove_submenu_page( 'edit.php', 'post-new.php' );
//         remove_submenu_page( 'edit.php', 'edit-tags.php?taxonomy=category' );
//         remove_submenu_page( 'edit.php', 'edit-tags.php?taxonomy=post_tag' );


        // Remove Page menu Items
        //remove_menu_page( 'edit.php?post_type=page' );
        //remove_submenu_page( 'edit.php?post_type=page', 'post-new.php?post_type=page' );


        // Remove Comments Menu

        //remove_menu_page( 'edit-comments.php' );


		// Remove acf fields
		
		remove_menu_page('edit.php?post_type=acf-field-group');




// Not working
// Remove WP Contacts Items  
        remove_menu_page( 'admin.php?page=shwcp_options' );
        remove_submenu_page( 'admin.php?page=shwcp_options', 'admin.php?page=shwcp_options&db=1' );
        remove_submenu_page( 'admin.php?page=shwcp_options', 'admin.php?page=shwcp_add_db' );
        remove_submenu_page( 'admin.php?page=shwcp_options', 'admin.php?page=shwcp_delete_db' );    


        remove_menu_page( 'admin.php?page=upme-settings' ); 

        remove_menu_page( 'admin.php?page=ultimate_affiliates_pro' );     


    }
}




add_action('admin_head', 'hide_menu');

