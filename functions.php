<?php
/**
 * KFC Theme functions and definitions
 *
 * @package KFC_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Include Course Booker helper functions
if ( file_exists( WP_PLUGIN_DIR . '/course-booker/includes/course-attribute-helpers.php' ) ) {
	require_once WP_PLUGIN_DIR . '/course-booker/includes/course-attribute-helpers.php';
}

/**
 * Theme setup
 */
function kfc_theme_setup() {
	// Add support for block styles
	add_theme_support( 'wp-block-styles' );

	// Add support for editor styles
	add_theme_support( 'editor-styles' );

	// Add support for responsive embeds
	add_theme_support( 'responsive-embeds' );

	// Add support for custom logo
	add_theme_support( 'custom-logo', array(
		'height'      => 100,
		'width'       => 300,
		'flex-height' => true,
		'flex-width'  => true,
	) );

	// Add support for post thumbnails
	add_theme_support( 'post-thumbnails' );

	// WooCommerce support
	add_theme_support( 'woocommerce' );
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );

	// Register navigation menus
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'kfc-theme' ),
		'footer'  => __( 'Footer Menu', 'kfc-theme' ),
	) );
}
add_action( 'after_setup_theme', 'kfc_theme_setup' );

/**
 * Enqueue scripts and styles
 */
function kfc_theme_scripts() {
	// Enqueue custom styles
	wp_enqueue_style(
		'kfc-theme-custom',
		get_theme_file_uri( 'assets/css/custom.css' ),
		array(),
		wp_get_theme()->get( 'Version' )
	);
}
add_action( 'wp_enqueue_scripts', 'kfc_theme_scripts' );

/**
 * Recent News Shortcode
 * Displays the 6 most recent posts
 * Usage: [recent_news] or [recent_news count="4"]
 */
function kfc_recent_news_shortcode( $atts ) {
	$atts = shortcode_atts( array(
		'count' => 6,
	), $atts, 'recent_news' );

	$args = array(
		'post_type'      => 'post',
		'posts_per_page' => intval( $atts['count'] ),
		'post_status'    => 'publish',
		'orderby'        => 'date',
		'order'          => 'DESC',
	);

	$query = new WP_Query( $args );

	if ( ! $query->have_posts() ) {
		return '<p>No news posts found.</p>';
	}

	$output = '<div class="kfc-recent-news">';

	while ( $query->have_posts() ) {
		$query->the_post();

		$output .= '<article class="news-item">';

		// Featured image
		if ( has_post_thumbnail() ) {
			$output .= '<div class="news-thumbnail">';
			$output .= '<a href="' . esc_url( get_permalink() ) . '">';
			$output .= get_the_post_thumbnail( get_the_ID(), 'medium' );
			$output .= '</a>';
			$output .= '</div>';
		}

		$output .= '<div class="news-content">';

		// Title
		$output .= '<h3 class="news-title">';
		$output .= '<a href="' . esc_url( get_permalink() ) . '">' . esc_html( get_the_title() ) . '</a>';
		$output .= '</h3>';

		// Date
		$output .= '<p class="news-date">' . get_the_date() . '</p>';

		// Excerpt
		$output .= '<div class="news-excerpt">' . get_the_excerpt() . '</div>';

		// Read more link
		$output .= '<a href="' . esc_url( get_permalink() ) . '" class="news-read-more">Read more</a>';

		$output .= '</div>'; // .news-content
		$output .= '</article>';
	}

	$output .= '</div>'; // .kfc-recent-news

	wp_reset_postdata();

	return $output;
}
add_shortcode( 'recent_news', 'kfc_recent_news_shortcode' );

/**
 * Disable comments on all post types (except products for reviews)
 */
function kfc_disable_comments() {
	// Close comments on the front-end (except products)
	add_filter( 'comments_open', function( $open, $post_id ) {
		if ( get_post_type( $post_id ) === 'product' ) {
			return $open; // Allow WooCommerce to control product reviews
		}
		return false;
	}, 20, 2 );
	add_filter( 'pings_open', '__return_false', 20, 2 );

	// Hide existing comments (except on products)
	add_filter( 'comments_array', function( $comments, $post_id ) {
		if ( get_post_type( $post_id ) === 'product' ) {
			return $comments; // Show product reviews
		}
		return array();
	}, 10, 2 );

	// Remove comments page from admin menu
	add_action( 'admin_menu', function() {
		remove_menu_page( 'edit-comments.php' );
	} );

	// Redirect any user trying to access comments page
	add_action( 'admin_init', function() {
		global $pagenow;
		if ( $pagenow === 'edit-comments.php' ) {
			wp_redirect( admin_url() );
			exit;
		}
	} );

	// Remove comments metabox from dashboard
	add_action( 'admin_init', function() {
		remove_meta_box( 'dashboard_recent_comments', 'dashboard', 'normal' );
	} );

	// Remove comments links from admin bar
	add_action( 'wp_before_admin_bar_render', function() {
		global $wp_admin_bar;
		$wp_admin_bar->remove_menu( 'comments' );
	} );
}
add_action( 'init', 'kfc_disable_comments' );

/**
 * Remove comment support from post types (except products for reviews)
 */
function kfc_remove_comment_support() {
	remove_post_type_support( 'post', 'comments' );
	remove_post_type_support( 'page', 'comments' );
	// Keep comments enabled for products to allow WooCommerce reviews
}
add_action( 'init', 'kfc_remove_comment_support', 100 );

/**
 * Add theme favicon/site icon
 */
function kfc_theme_favicon() {
	$favicon_32 = get_theme_file_uri( 'assets/images/favicon-32x32.png' );
	$favicon_192 = get_theme_file_uri( 'assets/images/favicon-192x192.png' );
	$apple_touch = get_theme_file_uri( 'assets/images/apple-touch-icon.png' );
	?>
	<link rel="icon" href="<?php echo esc_url( $favicon_32 ); ?>" sizes="32x32" />
	<link rel="icon" href="<?php echo esc_url( $favicon_192 ); ?>" sizes="192x192" />
	<link rel="apple-touch-icon" href="<?php echo esc_url( $apple_touch ); ?>" />
	<?php
}
add_action( 'wp_head', 'kfc_theme_favicon' );

/**
 * WooCommerce Cart Customizations
 * Migrated from course-booker plugin
 */

// Add custom text after the "Proceed to Checkout" button in WooCommerce Cart
add_action( 'woocommerce_proceed_to_checkout', 'kfc_add_payment_info_text', 15 );
function kfc_add_payment_info_text() {
	echo '<p style="margin-top:1em; font-size: 1.2rem; font-weight: bold;">Proceed to checkout to pay by Credit Card (Visa/Mastercard), Paypal, Apple Pay or Google Pay.</p>';
}

// Add custom note after the cart totals
add_action( 'woocommerce_after_cart_totals', 'kfc_add_paypal_note' );
function kfc_add_paypal_note() {
	echo '<p style="margin-top: 1em;">Note: you do not need a PayPal account to pay by Credit Card.</p>';
}

/**
 * Register block patterns and categories
 */
function kfc_register_block_patterns() {
	// Register pattern category
	register_block_pattern_category(
		'kfc-theme',
		array(
			'label' => __( 'KFC Theme', 'kfc-theme' ),
		)
	);

	// Register Features pattern manually
	$pattern_file = get_theme_file_path( 'patterns/features.php' );
	if ( file_exists( $pattern_file ) ) {
		ob_start();
		include $pattern_file;
		$pattern_content = ob_get_clean();

		register_block_pattern(
			'kfc-theme/features',
			array(
				'title'       => __( 'Features', 'kfc-theme' ),
				'description' => __( 'A 2x2 grid showcasing club features', 'kfc-theme' ),
				'content'     => $pattern_content,
				'categories'  => array( 'featured', 'kfc-theme' ),
			)
		);
	}

	// Register Hero Video pattern manually
	$hero_pattern_file = get_theme_file_path( 'patterns/hero-video.php' );
	if ( file_exists( $hero_pattern_file ) ) {
		ob_start();
		include $hero_pattern_file;
		$hero_pattern_content = ob_get_clean();

		register_block_pattern(
			'kfc-theme/hero-video',
			array(
				'title'       => __( 'Hero with Video', 'kfc-theme' ),
				'description' => __( 'Hero section with video on left and text on right', 'kfc-theme' ),
				'content'     => $hero_pattern_content,
				'categories'  => array( 'featured', 'kfc-theme' ),
			)
		);
	}

	// Register Hero Content pattern manually
	$hero_content_file = get_theme_file_path( 'patterns/hero-content.php' );
	if ( file_exists( $hero_content_file ) ) {
		ob_start();
		include $hero_content_file;
		$hero_content_pattern = ob_get_clean();

		register_block_pattern(
			'kfc-theme/hero-content',
			array(
				'title'       => __( 'Hero with Image', 'kfc-theme' ),
				'description' => __( 'Hero section with animated image and text', 'kfc-theme' ),
				'content'     => $hero_content_pattern,
				'categories'  => array( 'featured', 'kfc-theme' ),
			)
		);
	}

	// Register Team Member pattern manually
	$team_member_file = get_theme_file_path( 'patterns/team-member.php' );
	if ( file_exists( $team_member_file ) ) {
		ob_start();
		include $team_member_file;
		$team_member_pattern = ob_get_clean();

		register_block_pattern(
			'kfc-theme/team-member',
			array(
				'title'       => __( 'Team Member', 'kfc-theme' ),
				'description' => __( 'Team member profile with photo and description', 'kfc-theme' ),
				'content'     => $team_member_pattern,
				'categories'  => array( 'featured', 'kfc-theme' ),
			)
		);
	}

	// Register Schedule pattern manually
	$schedule_file = get_theme_file_path( 'patterns/schedule.php' );
	if ( file_exists( $schedule_file ) ) {
		ob_start();
		include $schedule_file;
		$schedule_pattern = ob_get_clean();

		register_block_pattern(
			'kfc-theme/schedule',
			array(
				'title'       => __( 'Weekly Schedule', 'kfc-theme' ),
				'description' => __( 'Weekly training schedule for Monday and Tuesday', 'kfc-theme' ),
				'content'     => $schedule_pattern,
				'categories'  => array( 'featured', 'kfc-theme' ),
			)
		);
	}
}
add_action( 'init', 'kfc_register_block_patterns' );

/**
 * Add waiver notice after checkout terms and conditions
 */
function kfc_add_waiver_notice_checkout() {
	echo '<p class="form-row terms kfc-waiver-notice">';
	echo wp_kses_post( __( 'By accepting these terms you also accept the <a href="/waiver" target="_blank">Fencing Activity Waiver and Release</a>.', 'kfc-theme' ) );
	echo '</p>';
}
add_action( 'woocommerce_checkout_after_terms_and_conditions', 'kfc_add_waiver_notice_checkout' );

/**
 * Add JavaScript to fix button styles with inline styles
 */
function kfc_button_style_fix() {
	// Only load on the 'courses' page where these plugins are used
	if ( ! is_page( 'courses' ) ) {
		return;
	}
	?>
	<script>
	document.addEventListener('DOMContentLoaded', function() {
		// Fix MailPoet submit button border radius
		var mailpoetButtons = document.querySelectorAll('.mailpoet_submit');
		mailpoetButtons.forEach(function(button) {
			button.style.setProperty('border-radius', '6px', 'important');
			button.style.setProperty('border-top-left-radius', '6px', 'important');
			button.style.setProperty('border-top-right-radius', '6px', 'important');
			button.style.setProperty('border-bottom-left-radius', '6px', 'important');
			button.style.setProperty('border-bottom-right-radius', '6px', 'important');
		});

		// Fix Instagram Load More button border radius
		var loadMoreButtons = document.querySelectorAll('.LoadMoreButton');
		loadMoreButtons.forEach(function(button) {
			button.style.setProperty('border-radius', '6px', 'important');
			button.style.setProperty('border-top-left-radius', '6px', 'important');
			button.style.setProperty('border-top-right-radius', '6px', 'important');
			button.style.setProperty('border-bottom-left-radius', '6px', 'important');
			button.style.setProperty('border-bottom-right-radius', '6px', 'important');
		});
	});
	</script>
	<?php
}
add_action( 'wp_footer', 'kfc_button_style_fix' );

