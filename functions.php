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

/**
 * Product Short Description Shortcode
 * Outputs the WooCommerce product short description with HTML formatting preserved
 */
function kfc_product_short_description_shortcode() {
	global $product;

	if ( ! $product ) {
		return '';
	}

	$short_description = $product->get_short_description();

	if ( empty( $short_description ) ) {
		return '';
	}

	// Return the short description with HTML preserved
	return '<div class="woocommerce-product-details__short-description product-short-description">' . $short_description . '</div>';
}
add_shortcode( 'product_short_description', 'kfc_product_short_description_shortcode' );

/**
 * PERFORMANCE OPTIMIZATION: Conditionally load PayPal and WooCommerce scripts
 *
 * Problem: Payment gateway scripts (PayPal, ApplePay, GooglePay) and cart scripts
 * load on every page, even where checkout is impossible (homepage, about, etc.)
 * This causes ~3-4 seconds of unnecessary API calls and JavaScript execution.
 *
 * Solution: Only load heavy payment/cart scripts on pages where users can actually
 * add items to cart or checkout (shop, product, cart, checkout, courses pages).
 *
 * Cart menu item remains visible on all pages, but heavy scripts only load where needed.
 */
add_action( 'wp_enqueue_scripts', 'kfc_optimize_payment_scripts', 999 );
function kfc_optimize_payment_scripts() {
	// Define pages where users can actually checkout or add to cart
	$is_shop_page = is_checkout() || is_cart() || is_shop() || is_product() || is_page( 'courses' );

	// If NOT on a shop-related page, disable heavy payment gateway scripts
	if ( ! $is_shop_page ) {

		// Disable PayPal button scripts (ApplePay, GooglePay, standard buttons)
		// These make multiple API calls to PayPal servers (~700ms each)
		wp_dequeue_script( 'ppcp-button' );
		wp_deregister_script( 'ppcp-button' );
		wp_dequeue_script( 'ppcp-googlepay-boot' );
		wp_deregister_script( 'ppcp-googlepay-boot' );
		wp_dequeue_script( 'ppcp-applepay-boot' );
		wp_deregister_script( 'ppcp-applepay-boot' );

		// Disable additional PayPal scripts
		wp_dequeue_script( 'ppcp-smart-button' );
		wp_deregister_script( 'ppcp-smart-button' );
		wp_dequeue_script( 'wc-gateway-ppcp-smart-button' );
		wp_deregister_script( 'wc-gateway-ppcp-smart-button' );

		// Disable PayPal styles
		wp_dequeue_style( 'ppcp-button' );
		wp_dequeue_style( 'ppcp-googlepay' );
		wp_dequeue_style( 'ppcp-applepay' );

		// Disable WooCommerce cart fragments (heavy AJAX calls to update cart count)
		// This makes ~1.1 second AJAX calls on every page load
		wp_dequeue_script( 'wc-cart-fragments' );
		wp_deregister_script( 'wc-cart-fragments' );

		// Disable WooCommerce add-to-cart script (not needed on info pages)
		wp_dequeue_script( 'wc-add-to-cart' );
		wp_deregister_script( 'wc-add-to-cart' );

		// Disable WooCommerce blocks checkout scripts (only needed on checkout)
		wp_dequeue_script( 'wc-blocks-checkout' );
		wp_deregister_script( 'wc-blocks-checkout' );
		wp_dequeue_script( 'wc-blocks-components' );
		wp_deregister_script( 'wc-blocks-components' );

		// Disable WooCommerce sourcebuster tracking (analytics, not critical)
		wp_dequeue_script( 'sourcebuster-js' );
		wp_deregister_script( 'sourcebuster-js' );
		wp_dequeue_script( 'wc-order-attribution' );
		wp_deregister_script( 'wc-order-attribution' );
	}
}

/**
 * PERFORMANCE OPTIMIZATION: Disable PayPal SDK loading on non-shop pages
 * PayPal SDK is loaded via inline script tag, so we need to filter it out
 */
add_filter( 'script_loader_tag', 'kfc_filter_paypal_sdk', 10, 3 );
function kfc_filter_paypal_sdk( $tag, $handle, $src ) {
	// Define pages where PayPal SDK is needed
	$is_shop_page = is_checkout() || is_cart() || is_shop() || is_product() || is_page( 'courses' );

	// If NOT on shop page and this is a PayPal SDK script, remove it
	if ( ! $is_shop_page && ( strpos( $src, 'paypal.com' ) !== false || strpos( $src, 'paypalobjects.com' ) !== false ) ) {
		return '';
	}

	return $tag;
}

/**
 * PERFORMANCE OPTIMIZATION: Disable WooCommerce PayPal Payments plugin assets on non-shop pages
 * The plugin loads assets even when payment buttons aren't displayed
 */
add_action( 'wp_enqueue_scripts', 'kfc_disable_paypal_plugin_assets', 999 );
function kfc_disable_paypal_plugin_assets() {
	$is_shop_page = is_checkout() || is_cart() || is_shop() || is_product() || is_page( 'courses' );

	if ( ! $is_shop_page ) {
		// Dequeue all PayPal plugin styles
		global $wp_styles;
		if ( isset( $wp_styles->registered ) ) {
			foreach ( $wp_styles->registered as $handle => $data ) {
				if ( strpos( $handle, 'ppcp' ) !== false || strpos( $handle, 'paypal' ) !== false ) {
					wp_dequeue_style( $handle );
					wp_deregister_style( $handle );
				}
				if ( isset( $data->src ) && strpos( $data->src, 'woocommerce-paypal-payments' ) !== false ) {
					wp_dequeue_style( $handle );
					wp_deregister_style( $handle );
				}
			}
		}

		// Dequeue all PayPal plugin scripts
		global $wp_scripts;
		if ( isset( $wp_scripts->registered ) ) {
			foreach ( $wp_scripts->registered as $handle => $data ) {
				if ( strpos( $handle, 'ppcp' ) !== false || strpos( $handle, 'paypal' ) !== false ) {
					wp_dequeue_script( $handle );
					wp_deregister_script( $handle );
				}
				if ( isset( $data->src ) && strpos( $data->src, 'woocommerce-paypal-payments' ) !== false ) {
					wp_dequeue_script( $handle );
					wp_deregister_script( $handle );
				}
			}
		}
	}
}

/**
 * PERFORMANCE OPTIMIZATION: Remove PayPal inline scripts from non-shop pages
 */
add_action( 'wp_print_scripts', 'kfc_remove_paypal_inline_scripts', 999 );
function kfc_remove_paypal_inline_scripts() {
	$is_shop_page = is_checkout() || is_cart() || is_shop() || is_product() || is_page( 'courses' );

	if ( ! $is_shop_page ) {
		global $wp_scripts;
		if ( isset( $wp_scripts->registered ) ) {
			foreach ( $wp_scripts->registered as $handle => $data ) {
				if ( strpos( $handle, 'ppcp' ) !== false || strpos( $handle, 'paypal' ) !== false ) {
					wp_dequeue_script( $handle );
					wp_deregister_script( $handle );
				}
			}
		}
	}
}

/**
 * PERFORMANCE OPTIMIZATION: Disable WooCommerce CSS on non-shop pages
 * WooCommerce loads CSS globally even on pages without shop functionality
 * This removes ~21KB of unnecessary CSS on homepage and other non-shop pages
 */
add_action( 'wp_enqueue_scripts', 'kfc_disable_woocommerce_css_non_shop', 999 );
function kfc_disable_woocommerce_css_non_shop() {
	// Only load WooCommerce CSS on pages that actually need it
	$is_shop_page = is_woocommerce() || is_cart() || is_checkout() || is_account_page() || is_shop() || is_product() || is_page( 'courses' ) || is_page( 'store' );

	// If NOT on a shop-related page, remove WooCommerce styles
	if ( ! $is_shop_page ) {
		// Dequeue WooCommerce core styles
		wp_dequeue_style( 'woocommerce-general' );
		wp_dequeue_style( 'woocommerce-layout' );
		wp_dequeue_style( 'woocommerce-smallscreen' );

		// Dequeue block theme specific styles
		wp_dequeue_style( 'woocommerce-blocktheme' );

		// Dequeue WooCommerce block styles
		wp_dequeue_style( 'wc-blocks-style' );
		wp_deregister_style( 'wc-blocks-style' );
		wp_dequeue_style( 'wc-block-style' );
		wp_dequeue_style( 'wc-blocks-style-active-filters' );
		wp_dequeue_style( 'wc-blocks-style-add-to-cart-form' );
		wp_dequeue_style( 'wc-blocks-vendors-style' );

		// Dequeue block theme integration
		wp_dequeue_style( 'wc-blocks-integration' );

		// Dequeue PW WooCommerce Gift Cards styles (correct handle from HTML source)
		wp_dequeue_style( 'pwgc-wc-blocks-style' );
		wp_deregister_style( 'pwgc-wc-blocks-style' );
	}
}

/**
 * PERFORMANCE OPTIMIZATION: Add fetchpriority to first MetaSlider image
 *
 * Marks the first MetaSlider image as high priority to improve LCP.
 * Only targets MetaSlider (msDefaultImage class) to avoid affecting other sliders.
 */
add_filter( 'the_content', 'kfc_add_fetchpriority_to_slider', 1000 );

function kfc_add_fetchpriority_to_slider( $content ) {
	// Skip if content is empty or not a string
	if ( empty( $content ) || ! is_string( $content ) ) {
		return $content;
	}

	// Add fetchpriority="high" to the first MetaSlider image
	// Only matches MetaSlider images (msDefaultImage class)
	$content = preg_replace(
		'/<img([^>]*class="[^"]*msDefaultImage[^"]*"[^>]*)>/i',
		'<img$1 fetchpriority="high">',
		$content,
		1  // Only replace the first occurrence
	);

	return $content;
}

/**
 * PERFORMANCE OPTIMIZATION: Disable lazy loading on first MetaSlider image
 *
 * Removes lazy loading from the first MetaSlider image to improve LCP.
 * Only targets MetaSlider (msDefaultImage class) to avoid breaking other sliders.
 */
add_filter( 'the_content', 'kfc_disable_lazy_on_lcp', 1001 );

function kfc_disable_lazy_on_lcp( $content ) {
	// Skip if content is empty or not a string
	if ( empty( $content ) || ! is_string( $content ) ) {
		return $content;
	}

	// Only affect MetaSlider images (msDefaultImage class)
	// This avoids breaking Smart Post Slider and other carousels
	$content = preg_replace_callback(
		'/<img([^>]*class="[^"]*msDefaultImage[^"]*"[^>]*)>/i',
		function( $matches ) {
			$img_tag = $matches[0];

			// Move data-src to src
			$img_tag = preg_replace( '/data-src="([^"]+)"/', 'src="$1"', $img_tag );

			// Remove lazy class
			$img_tag = preg_replace( '/\s*lazy\s*/', ' ', $img_tag );

			// Remove placeholder src if present
			$img_tag = preg_replace( '/src="data:image\/svg\+xml[^"]*"\s*/', '', $img_tag );

			return $img_tag;
		},
		$content,
		1  // Only replace the first occurrence
	);

	return $content;
}

/**
 * PERFORMANCE OPTIMIZATION: Replace logo.png with logo.webp for supported browsers
 *
 * Uses output buffering to replace the logo URL across the entire page.
 */
add_action( 'template_redirect', 'kfc_start_logo_webp_buffer' );

function kfc_start_logo_webp_buffer() {
	// Only replace if browser supports WebP
	if ( isset( $_SERVER['HTTP_ACCEPT'] ) && strpos( $_SERVER['HTTP_ACCEPT'], 'image/webp' ) !== false ) {
		ob_start( 'kfc_replace_logo_with_webp' );
	}
}

function kfc_replace_logo_with_webp( $content ) {
	// Replace logo.png with logo.webp in the theme assets
	$content = str_replace(
		'/wp-content/themes/kfc-theme/assets/images/logo.png',
		'/wp-content/themes/kfc-theme/assets/images/logo.webp',
		$content
	);

	return $content;
}

/**
 * PERFORMANCE FIX: Prevent W3TC lazy loading from breaking Smart Post Carousel
 *
 * W3TC's lazy loading conflicts with the carousel's built-in lazy loading.
 * This function removes W3TC's lazy loading attributes from carousel images after
 * W3TC has processed the page, so it doesn't interfere with minify or other operations.
 */
add_filter( 'the_content', 'kfc_fix_carousel_lazy_loading', 999 );

function kfc_fix_carousel_lazy_loading( $content ) {
	// Skip if in admin
	if ( is_admin() ) {
		return $content;
	}

	// Skip if content is empty or not a string
	if ( empty( $content ) || ! is_string( $content ) ) {
		return $content;
	}

	// Skip if content doesn't have carousel
	if ( strpos( $content, 'sp-pcp-carousel' ) === false ) {
		return $content;
	}

	// Remove W3TC lazy loading attributes from carousel images
	// W3TC adds data-src and a placeholder src, we need to restore the real src
	$content = preg_replace_callback(
		'/<img([^>]*class="[^"]*(?:sp-pcp|pcp_wrapper)[^"]*"[^>]*)>/i',
		function( $matches ) {
			$img_tag = $matches[0];

			// If W3TC added lazy loading, fix it
			if ( strpos( $img_tag, 'data-src=' ) !== false ) {
				// Move data-src back to src
				$img_tag = preg_replace( '/src="[^"]*"\s*data-src="([^"]+)"/', 'src="$1"', $img_tag );
				// Remove any remaining data-src
				$img_tag = preg_replace( '/\s*data-src="[^"]*"/', '', $img_tag );
			}

			return $img_tag;
		},
		$content
	);

	return $content;
}

/**
 * LOCAL SEO: Add LocalBusiness/SportsActivityLocation Schema Markup
 *
 * Outputs JSON-LD structured data for Google to understand this is a local
 * sports club. This helps with "near me" searches and local pack results.
 *
 * Schema type: SportsActivityLocation (subtype of LocalBusiness)
 * @see https://schema.org/SportsActivityLocation
 */
add_action( 'wp_head', 'kfc_local_business_schema' );

function kfc_local_business_schema() {
	// Only output on the homepage to avoid duplicate schema
	if ( ! is_front_page() ) {
		return;
	}

	$schema = array(
		'@context'    => 'https://schema.org',
		'@type'       => 'SportsActivityLocation',
		'@id'         => 'https://kingstonfencing.club/#organization',
		'name'        => 'Kingston Fencing Club',
		'alternateName' => 'KFC',
		'description' => 'Friendly recreational fencing club near Kingston-upon-Thames offering beginner courses, private lessons and weekly training in Foil, Epee and Sabre for adults and juniors.',
		'url'         => 'https://kingstonfencing.club',
		'logo'        => 'https://kingstonfencing.club/wp-content/uploads/2021/12/cropped-kfc-logo-1.png',
		'image'       => 'https://kingstonfencing.club/wp-content/uploads/2021/12/cropped-kfc-logo-1.png',
		'address'     => array(
			'@type'           => 'PostalAddress',
			'streetAddress'   => 'Coombe Boys School, College Gardens',
			'addressLocality' => 'New Malden',
			'addressRegion'   => 'Surrey',
			'postalCode'      => 'KT3 6NU',
			'addressCountry'  => 'GB',
		),
		'geo'         => array(
			'@type'     => 'GeoCoordinates',
			'latitude'  => 51.3950,
			'longitude' => -0.2476,
		),
		'openingHoursSpecification' => array(
			array(
				'@type'     => 'OpeningHoursSpecification',
				'dayOfWeek' => 'Monday',
				'opens'     => '18:30',
				'closes'    => '21:30',
			),
			array(
				'@type'     => 'OpeningHoursSpecification',
				'dayOfWeek' => 'Tuesday',
				'opens'     => '18:00',
				'closes'    => '21:30',
			),
		),
		'sameAs'      => array(
			'https://www.facebook.com/kingstonfencing',
			'https://www.instagram.com/kingstonfencing',
			'https://www.youtube.com/@kingstonfencing',
			'https://www.tiktok.com/@kingstonfencing',
		),
		'priceRange'  => '£20-£80',
		'sport'       => 'Fencing',
		'areaServed'  => array(
			array(
				'@type' => 'City',
				'name'  => 'Kingston upon Thames',
			),
			array(
				'@type' => 'City',
				'name'  => 'New Malden',
			),
			array(
				'@type' => 'AdministrativeArea',
				'name'  => 'Surrey',
			),
			array(
				'@type' => 'AdministrativeArea',
				'name'  => 'South West London',
			),
		),
		'memberOf'    => array(
			'@type' => 'Organization',
			'name'  => 'British Fencing',
			'url'   => 'https://www.britishfencing.com',
		),
		'hasOfferCatalog' => array(
			'@type'           => 'OfferCatalog',
			'name'            => 'Fencing Classes and Courses',
			'itemListElement' => array(
				array(
					'@type'       => 'Offer',
					'itemOffered' => array(
						'@type' => 'Service',
						'name'  => 'Adult Beginner Fencing Course',
					),
				),
				array(
					'@type'       => 'Offer',
					'itemOffered' => array(
						'@type' => 'Service',
						'name'  => 'Junior Beginner Fencing Course',
					),
				),
				array(
					'@type'       => 'Offer',
					'itemOffered' => array(
						'@type' => 'Service',
						'name'  => 'Private Fencing Lessons',
					),
				),
				array(
					'@type'       => 'Offer',
					'itemOffered' => array(
						'@type' => 'Service',
						'name'  => 'Weekly Training Sessions',
					),
				),
			),
		),
	);

	echo '<script type="application/ld+json">' . "\n";
	echo wp_json_encode( $schema, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES );
	echo "\n</script>\n";
}

/**
 * LOCAL SEO: Add Sitelinks Search Box Schema
 *
 * Enables Google to show a search box directly in search results for branded
 * queries like "Kingston Fencing Club". Users can search the site from Google.
 *
 * @see https://developers.google.com/search/docs/appearance/structured-data/sitelinks-searchbox
 */
add_action( 'wp_head', 'kfc_sitelinks_searchbox_schema' );

function kfc_sitelinks_searchbox_schema() {
	// Only output on the homepage
	if ( ! is_front_page() ) {
		return;
	}

	$schema = array(
		'@context'        => 'https://schema.org',
		'@type'           => 'WebSite',
		'@id'             => 'https://kingstonfencing.club/#website',
		'name'            => 'Kingston Fencing Club',
		'url'             => 'https://kingstonfencing.club',
		'potentialAction' => array(
			'@type'       => 'SearchAction',
			'target'      => array(
				'@type'       => 'EntryPoint',
				'urlTemplate' => 'https://kingstonfencing.club/?s={search_term_string}',
			),
			'query-input' => 'required name=search_term_string',
		),
	);

	echo '<script type="application/ld+json">' . "\n";
	echo wp_json_encode( $schema, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES );
	echo "\n</script>\n";
}

/**
 * LOCAL SEO: Add Breadcrumb Schema
 *
 * Outputs BreadcrumbList structured data for better search result appearance.
 * Shows breadcrumb trail in Google search results instead of plain URL.
 *
 * @see https://developers.google.com/search/docs/appearance/structured-data/breadcrumb
 */
add_action( 'wp_head', 'kfc_breadcrumb_schema' );

function kfc_breadcrumb_schema() {
	// Don't output on homepage (no breadcrumbs needed)
	if ( is_front_page() ) {
		return;
	}

	// Skip products - WooCommerce already outputs breadcrumb schema
	if ( is_singular( 'product' ) ) {
		return;
	}

	$breadcrumbs = array();
	$position    = 1;

	// Always start with Home
	$breadcrumbs[] = array(
		'@type'    => 'ListItem',
		'position' => $position++,
		'name'     => 'Home',
		'item'     => 'https://kingstonfencing.club/',
	);

	// Handle different page types
	if ( is_singular( 'post' ) ) {
		// Blog posts: Home > Category > Post
		$categories = get_the_category();
		if ( ! empty( $categories ) ) {
			$category      = $categories[0];
			$breadcrumbs[] = array(
				'@type'    => 'ListItem',
				'position' => $position++,
				'name'     => $category->name,
				'item'     => get_category_link( $category->term_id ),
			);
		}
		$breadcrumbs[] = array(
			'@type'    => 'ListItem',
			'position' => $position++,
			'name'     => get_the_title(),
		);
	} elseif ( is_page() ) {
		// Pages: Home > Page
		// Check for parent page
		$post   = get_post();
		$parent = $post->post_parent;
		if ( $parent ) {
			$breadcrumbs[] = array(
				'@type'    => 'ListItem',
				'position' => $position++,
				'name'     => get_the_title( $parent ),
				'item'     => get_permalink( $parent ),
			);
		}
		$breadcrumbs[] = array(
			'@type'    => 'ListItem',
			'position' => $position++,
			'name'     => get_the_title(),
		);
	} elseif ( is_category() ) {
		// Category archive: Home > Category
		$breadcrumbs[] = array(
			'@type'    => 'ListItem',
			'position' => $position++,
			'name'     => single_cat_title( '', false ),
		);
	} elseif ( is_tax( 'product_cat' ) ) {
		// Product category: Home > Courses > Category
		$breadcrumbs[] = array(
			'@type'    => 'ListItem',
			'position' => $position++,
			'name'     => 'Courses',
			'item'     => 'https://kingstonfencing.club/courses/',
		);
		$breadcrumbs[] = array(
			'@type'    => 'ListItem',
			'position' => $position++,
			'name'     => single_term_title( '', false ),
		);
	}

	// Only output if we have more than just Home
	if ( count( $breadcrumbs ) < 2 ) {
		return;
	}

	$schema = array(
		'@context'        => 'https://schema.org',
		'@type'           => 'BreadcrumbList',
		'itemListElement' => $breadcrumbs,
	);

	echo '<script type="application/ld+json">' . "\n";
	echo wp_json_encode( $schema, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES );
	echo "\n</script>\n";
}

/**
 * LOCAL SEO: Add Event Schema for Fencing Courses
 *
 * Outputs Event structured data for WooCommerce products that are courses.
 * This helps courses appear in Google's event search results.
 *
 * Uses product attributes 'Start' and 'End' for event dates.
 *
 * @see https://developers.google.com/search/docs/appearance/structured-data/event
 */
add_action( 'wp_head', 'kfc_course_event_schema' );

function kfc_course_event_schema() {
	// Only on single product pages
	if ( ! is_singular( 'product' ) ) {
		return;
	}

	global $product;
	if ( ! $product ) {
		$product = wc_get_product( get_the_ID() );
	}

	if ( ! $product ) {
		return;
	}

	// Check if product is in a course-related category
	$course_categories = array( 'courses', 'junior', 'lesson' );
	$product_cats      = wp_get_post_terms( $product->get_id(), 'product_cat', array( 'fields' => 'slugs' ) );

	$is_course = false;
	foreach ( $product_cats as $cat ) {
		if ( in_array( $cat, $course_categories, true ) ) {
			$is_course = true;
			break;
		}
	}

	if ( ! $is_course ) {
		return;
	}

	// Get course dates from product attributes
	$start_date = $product->get_attribute( 'Start' );
	$end_date   = $product->get_attribute( 'End' );

	// Skip if no start date (can't have an event without a date)
	if ( empty( $start_date ) ) {
		return;
	}

	// Parse dates - try to convert to ISO 8601 format
	$start_timestamp = strtotime( $start_date );
	$end_timestamp   = ! empty( $end_date ) ? strtotime( $end_date ) : $start_timestamp;

	// Skip if date parsing failed
	if ( ! $start_timestamp ) {
		return;
	}

	// Determine event status based on stock
	$event_status = 'https://schema.org/EventScheduled';
	if ( ! $product->is_in_stock() ) {
		$event_status = 'https://schema.org/EventMovedOnline'; // Or could use EventCancelled
	}

	// Determine availability
	$availability = 'https://schema.org/InStock';
	if ( ! $product->is_in_stock() ) {
		$availability = 'https://schema.org/SoldOut';
	}

	// Build the event schema
	$schema = array(
		'@context'         => 'https://schema.org',
		'@type'            => 'SportsEvent',
		'name'             => $product->get_name(),
		'description'      => wp_strip_all_tags( $product->get_short_description() ?: $product->get_description() ),
		'startDate'        => gmdate( 'Y-m-d', $start_timestamp ),
		'endDate'          => gmdate( 'Y-m-d', $end_timestamp ),
		'eventStatus'      => $event_status,
		'eventAttendanceMode' => 'https://schema.org/OfflineEventAttendanceMode',
		'location'         => array(
			'@type'   => 'Place',
			'name'    => 'Coombe Boys School Sports Hall',
			'address' => array(
				'@type'           => 'PostalAddress',
				'streetAddress'   => 'College Gardens',
				'addressLocality' => 'New Malden',
				'addressRegion'   => 'Surrey',
				'postalCode'      => 'KT3 6NU',
				'addressCountry'  => 'GB',
			),
		),
		'image'            => wp_get_attachment_url( $product->get_image_id() ) ?: 'https://kingstonfencing.club/wp-content/uploads/2021/12/cropped-kfc-logo-1.png',
		'organizer'        => array(
			'@type' => 'Organization',
			'name'  => 'Kingston Fencing Club',
			'url'   => 'https://kingstonfencing.club',
		),
		'performer'        => array(
			'@type' => 'Organization',
			'name'  => 'Kingston Fencing Club',
		),
		'offers'           => array(
			'@type'           => 'Offer',
			'url'             => get_permalink( $product->get_id() ),
			'price'           => $product->get_price(),
			'priceCurrency'   => get_woocommerce_currency(),
			'availability'    => $availability,
			'validFrom'       => gmdate( 'Y-m-d', strtotime( '-1 year' ) ),
		),
		'sport'            => 'Fencing',
	);

	echo '<script type="application/ld+json">' . "\n";
	echo wp_json_encode( $schema, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES );
	echo "\n</script>\n";
}
