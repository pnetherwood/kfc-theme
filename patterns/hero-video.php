<?php
/**
 * Title: Hero with Video
 * Slug: kfc-theme/hero-video
 * Categories: featured, kfc-theme
 */
?>
<!-- wp:group {"metadata":{"name":"Hero Video"},"align":"full","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"navy","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group alignfull has-navy-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
	<!-- wp:columns {"align":"full","style":{"spacing":{"blockGap":{"top":"0","left":"0"}}}} -->
	<div class="wp-block-columns alignfull">
		<!-- wp:column {"width":"55%"} -->
		<div class="wp-block-column" style="flex-basis:55%">
			<!-- wp:video {"className":"hero-video"} -->
			<figure class="wp-block-video hero-video">
				<video autoplay loop muted playsinline src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/videos/hero.mp4"></video>
			</figure>
			<!-- /wp:video -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","width":"45%","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","right":"var:preset|spacing|40","bottom":"var:preset|spacing|50","left":"var:preset|spacing|40"}}}} -->
		<div class="wp-block-column is-vertically-aligned-center" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40);flex-basis:45%">
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"small"} -->
				<p class="has-primary-color has-text-color has-link-color has-small-font-size"><?php echo esc_html__( 'WELCOME TO', 'kfc-theme' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:heading {"level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"700","textTransform":"uppercase"}},"textColor":"white","fontSize":"xx-large"} -->
				<h1 class="wp-block-heading has-white-color has-text-color has-xx-large-font-size" style="font-style:normal;font-weight:700;text-transform:uppercase"><?php echo esc_html__( 'Kingston Fencing Club', 'kfc-theme' ); ?></h1>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|light"}}}},"textColor":"light"} -->
				<p class="has-light-color has-text-color has-link-color"><?php echo esc_html__( 'Learn the Olympic sport of fencing with us. We offer classes for all ages and abilities, from complete beginners to competitive fencers.', 'kfc-theme' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
				<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--30)">
					<!-- wp:button {"style":{"spacing":{"padding":{"top":"14px","bottom":"14px","left":"32px","right":"32px"}}}} -->
					<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/courses" style="padding-top:14px;padding-right:32px;padding-bottom:14px;padding-left:32px"><?php echo esc_html__( 'View Our Courses', 'kfc-theme' ); ?></a></div>
					<!-- /wp:button -->

					<!-- wp:button {"textColor":"white","className":"is-style-outline","style":{"spacing":{"padding":{"top":"14px","bottom":"14px","left":"32px","right":"32px"}}}} -->
					<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-white-color has-text-color wp-element-button" href="/contact" style="padding-top:14px;padding-right:32px;padding-bottom:14px;padding-left:32px"><?php echo esc_html__( 'Contact Us', 'kfc-theme' ); ?></a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
