<?php
/**
 * Title: Image Text CTA
 * Slug: kfc-theme/image-text-cta
 * Categories: featured, kfc-theme
 * Description: Image on left with text and call-to-action button on right, with light background and blue border
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","right":"var:preset|spacing|30","bottom":"var:preset|spacing|50","left":"var:preset|spacing|30"}}},"backgroundColor":"light","layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group alignfull has-light-background-color has-background" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--30)">
	<!-- wp:media-text {"align":"wide","mediaType":"image","mediaWidth":45,"verticalAlignment":"center","imageFill":false,"backgroundColor":"white","style":{"border":{"width":"1px","style":"solid","color":"#0099ff"},"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
	<div class="wp-block-media-text alignwide is-stacked-on-mobile is-vertically-aligned-center has-white-background-color has-background" style="border-color:#0099ff;border-style:solid;border-width:1px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;grid-template-columns:45% auto">
		<figure class="wp-block-media-text__media">
			<img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/placeholder.jpg" alt="<?php echo esc_attr__( 'Feature image', 'kfc-theme' ); ?>"/>
		</figure>
		<div class="wp-block-media-text__content">
			<!-- wp:group {"style":{"spacing":{"blockGap":"20px","padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|30"}}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--30)">
				<!-- wp:heading {"level":2,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"dark","fontSize":"x-large"} -->
				<h2 class="wp-block-heading has-dark-color has-text-color has-x-large-font-size" style="font-style:normal;font-weight:600"><?php echo esc_html__( 'Your Title Here', 'kfc-theme' ); ?></h2>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|dark"}}}},"textColor":"dark"} -->
				<p class="has-dark-color has-text-color has-link-color"><?php echo esc_html__( 'Add your descriptive text here. This pattern features a light background with a blue border, image on the left, and text content with a call-to-action button on the right. Perfect for highlighting key features, services, or special offers.', 'kfc-theme' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:buttons -->
				<div class="wp-block-buttons">
					<!-- wp:button {"className":"is-style-outline","style":{"spacing":{"padding":{"top":"10px","bottom":"10px","left":"30px","right":"30px"}}}} -->
					<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#" style="padding-top:10px;padding-right:30px;padding-bottom:10px;padding-left:30px"><?php echo esc_html__( 'Call to Action', 'kfc-theme' ); ?></a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:group -->
		</div>
	</div>
	<!-- /wp:media-text -->
</div>
<!-- /wp:group -->
