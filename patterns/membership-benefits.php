<?php
/**
 * Title: Membership Benefits
 * Slug: kfc-theme/membership-benefits
 * Categories: featured, kfc-theme
 * Description: Grid of membership benefits with icons and descriptions
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","right":"var:preset|spacing|30","bottom":"var:preset|spacing|50","left":"var:preset|spacing|30"}}},"backgroundColor":"white","layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group alignfull has-white-background-color has-background" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--30)">
	<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"xx-large"} -->
		<h2 class="wp-block-heading has-text-align-center has-xx-large-font-size" style="font-style:normal;font-weight:600"><?php echo esc_html__( 'The Benefits of Membership', 'kfc-theme' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}}} -->
		<p class="has-text-align-center" style="margin-bottom:var(--wp--preset--spacing--50)"><?php echo esc_html__( 'Join Kingston Fencing Club and unlock these exclusive member benefits', 'kfc-theme' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} -->
		<div class="wp-block-columns alignwide">
			<!-- wp:column {"className":"membership-benefit-card"} -->
			<div class="wp-block-column membership-benefit-card">
				<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|30","bottom":"var:preset|spacing|40","left":"var:preset|spacing|30"},"blockGap":"var:preset|spacing|20"},"border":{"radius":"8px","width":"1px"}},"borderColor":"primary","backgroundColor":"light","layout":{"type":"constrained"}} -->
				<div class="wp-block-group has-border-color has-primary-border-color has-light-background-color has-background" style="border-width:1px;border-radius:8px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--30)">
					<!-- wp:image {"width":"60px","sizeSlug":"full","linkDestination":"none","align":"center"} -->
					<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/icon-sword.svg" alt="<?php echo esc_attr__( 'Training sessions icon', 'kfc-theme' ); ?>" style="width:60px"/></figure>
					<!-- /wp:image -->

					<!-- wp:heading {"textAlign":"center","level":3,"fontSize":"large"} -->
					<h3 class="wp-block-heading has-text-align-center has-large-font-size"><?php echo esc_html__( 'Open Fencing Sessions', 'kfc-theme' ); ?></h3>
					<!-- /wp:heading -->

					<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
					<p class="has-text-align-center has-small-font-size"><?php echo esc_html__( 'Fence at Kingston Fencing Club on Monday and Tuesday nights. Junior members can participate in junior sessions.', 'kfc-theme' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"className":"membership-benefit-card"} -->
			<div class="wp-block-column membership-benefit-card">
				<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|30","bottom":"var:preset|spacing|40","left":"var:preset|spacing|30"},"blockGap":"var:preset|spacing|20"},"border":{"radius":"8px","width":"1px"}},"borderColor":"primary","backgroundColor":"light","layout":{"type":"constrained"}} -->
				<div class="wp-block-group has-border-color has-primary-border-color has-light-background-color has-background" style="border-width:1px;border-radius:8px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--30)">
					<!-- wp:image {"width":"60px","sizeSlug":"full","linkDestination":"none","align":"center"} -->
					<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/icon-equipment.svg" alt="<?php echo esc_attr__( 'Equipment icon', 'kfc-theme' ); ?>" style="width:60px"/></figure>
					<!-- /wp:image -->

					<!-- wp:heading {"textAlign":"center","level":3,"fontSize":"large"} -->
					<h3 class="wp-block-heading has-text-align-center has-large-font-size"><?php echo esc_html__( 'Club Equipment Access', 'kfc-theme' ); ?></h3>
					<!-- /wp:heading -->

					<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
					<p class="has-text-align-center has-small-font-size"><?php echo esc_html__( 'Use club equipment including clothing, weapons and electric scoring equipment on club nights.', 'kfc-theme' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"className":"membership-benefit-card"} -->
			<div class="wp-block-column membership-benefit-card">
				<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|30","bottom":"var:preset|spacing|40","left":"var:preset|spacing|30"},"blockGap":"var:preset|spacing|20"},"border":{"radius":"8px","width":"1px"}},"borderColor":"primary","backgroundColor":"light","layout":{"type":"constrained"}} -->
				<div class="wp-block-group has-border-color has-primary-border-color has-light-background-color has-background" style="border-width:1px;border-radius:8px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--30)">
					<!-- wp:image {"width":"60px","sizeSlug":"full","linkDestination":"none","align":"center"} -->
					<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/icon-coach.svg" alt="<?php echo esc_attr__( 'Coaching icon', 'kfc-theme' ); ?>" style="width:60px"/></figure>
					<!-- /wp:image -->

					<!-- wp:heading {"textAlign":"center","level":3,"fontSize":"large"} -->
					<h3 class="wp-block-heading has-text-align-center has-large-font-size"><?php echo esc_html__( 'Coaching & Training', 'kfc-theme' ); ?></h3>
					<!-- /wp:heading -->

					<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
					<p class="has-text-align-center has-small-font-size"><?php echo esc_html__( 'One-to-one coaching lessons and group training exercises with our experienced instructors (first come, first served).', 'kfc-theme' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->

		<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"},"margin":{"top":"var:preset|spacing|40"}}}} -->
		<div class="wp-block-columns alignwide" style="margin-top:var(--wp--preset--spacing--40)">
			<!-- wp:column {"className":"membership-benefit-card"} -->
			<div class="wp-block-column membership-benefit-card">
				<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|30","bottom":"var:preset|spacing|40","left":"var:preset|spacing|30"},"blockGap":"var:preset|spacing|20"},"border":{"radius":"8px","width":"1px"}},"borderColor":"primary","backgroundColor":"light","layout":{"type":"constrained"}} -->
				<div class="wp-block-group has-border-color has-primary-border-color has-light-background-color has-background" style="border-width:1px;border-radius:8px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--30)">
					<!-- wp:image {"width":"60px","sizeSlug":"full","linkDestination":"none","align":"center"} -->
					<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/icon-discount.svg" alt="<?php echo esc_attr__( 'Discount icon', 'kfc-theme' ); ?>" style="width:60px"/></figure>
					<!-- /wp:image -->

					<!-- wp:heading {"textAlign":"center","level":3,"fontSize":"large"} -->
					<h3 class="wp-block-heading has-text-align-center has-large-font-size"><?php echo esc_html__( 'Affiliated Club Discounts', 'kfc-theme' ); ?></h3>
					<!-- /wp:heading -->

					<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
					<p class="has-text-align-center has-small-font-size"><?php echo esc_html__( 'Receive discounts when visiting affiliated fencing clubs across the UK and beyond.', 'kfc-theme' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"className":"membership-benefit-card"} -->
			<div class="wp-block-column membership-benefit-card">
				<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|30","bottom":"var:preset|spacing|40","left":"var:preset|spacing|30"},"blockGap":"var:preset|spacing|20"},"border":{"radius":"8px","width":"1px"}},"borderColor":"primary","backgroundColor":"light","layout":{"type":"constrained"}} -->
				<div class="wp-block-group has-border-color has-primary-border-color has-light-background-color has-background" style="border-width:1px;border-radius:8px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--30)">
					<!-- wp:image {"width":"60px","sizeSlug":"full","linkDestination":"none","align":"center"} -->
					<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/icon-calendar.svg" alt="<?php echo esc_attr__( 'Year round icon', 'kfc-theme' ); ?>" style="width:60px"/></figure>
					<!-- /wp:image -->

					<!-- wp:heading {"textAlign":"center","level":3,"fontSize":"large"} -->
					<h3 class="wp-block-heading has-text-align-center has-large-font-size"><?php echo esc_html__( 'Year-Round Fencing', 'kfc-theme' ); ?></h3>
					<!-- /wp:heading -->

					<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
					<p class="has-text-align-center has-small-font-size"><?php echo esc_html__( 'The club fences throughout the year including the summer months, so you never have to stop training.', 'kfc-theme' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"className":"membership-benefit-card"} -->
			<div class="wp-block-column membership-benefit-card">
				<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|30","bottom":"var:preset|spacing|40","left":"var:preset|spacing|30"},"blockGap":"var:preset|spacing|20"},"border":{"radius":"8px","width":"1px"}},"borderColor":"primary","backgroundColor":"light","layout":{"type":"constrained"}} -->
				<div class="wp-block-group has-border-color has-primary-border-color has-light-background-color has-background" style="border-width:1px;border-radius:8px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--30)">
					<!-- wp:image {"width":"60px","sizeSlug":"full","linkDestination":"none","align":"center"} -->
					<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/icon-community.svg" alt="<?php echo esc_attr__( 'Community icon', 'kfc-theme' ); ?>" style="width:60px"/></figure>
					<!-- /wp:image -->

					<!-- wp:heading {"textAlign":"center","level":3,"fontSize":"large"} -->
					<h3 class="wp-block-heading has-text-align-center has-large-font-size"><?php echo esc_html__( 'Welcoming Community', 'kfc-theme' ); ?></h3>
					<!-- /wp:heading -->

					<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
					<p class="has-text-align-center has-small-font-size"><?php echo esc_html__( 'Join a friendly, supportive community of fencers who share your passion for the sport.', 'kfc-theme' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
