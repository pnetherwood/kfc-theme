<?php
/**
 * Title: Weekly Schedule
 * Slug: kfc-theme/schedule
 * Categories: featured, kfc-theme
 */
?>
<!-- wp:group {"metadata":{"name":"Weekly Schedule"},"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"margin":{"bottom":"var:preset|spacing|40"}}},"backgroundColor":"light","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide has-light-background-color has-background" style="margin-bottom:var(--wp--preset--spacing--40);padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--30)">
	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10","margin":{"bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--40)">
		<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"small"} -->
		<p class="has-text-align-center has-primary-color has-text-color has-link-color has-small-font-size"><?php echo esc_html__( 'TRAINING TIMES', 'kfc-theme' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontWeight":"600"}},"textColor":"dark","fontSize":"xx-large"} -->
		<h2 class="wp-block-heading has-text-align-center has-dark-color has-text-color has-xx-large-font-size" style="font-weight:600"><?php echo esc_html__( 'Weekly Schedule', 'kfc-theme' ); ?></h2>
		<!-- /wp:heading -->
	</div>
	<!-- /wp:group -->

	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"bottom":"var:preset|spacing|30"}}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--30);padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
				<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"backgroundColor":"primary","layout":{"type":"constrained"}} -->
				<div class="wp-block-group has-primary-background-color has-background" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--30)">
					<!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontWeight":"600"}},"textColor":"white","fontSize":"large"} -->
					<h3 class="wp-block-heading has-text-align-center has-white-color has-text-color has-large-font-size" style="font-weight:600"><?php echo esc_html__( 'Monday', 'kfc-theme' ); ?></h3>
					<!-- /wp:heading -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"className":"schedule-card","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"margin":{"top":"0","bottom":"var:preset|spacing|20"}}},"backgroundColor":"white","layout":{"type":"constrained"}} -->
				<div class="wp-block-group schedule-card has-white-background-color has-background" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--20);padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--30)">
					<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"constrained"}} -->
					<div class="wp-block-group">
						<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontWeight":"600","fontSize":"0.875rem","textTransform":"uppercase","letterSpacing":"1px"}},"textColor":"primary"} -->
						<p class="has-primary-color has-text-color has-link-color" style="font-size:0.875rem;font-weight:600;letter-spacing:1px;text-transform:uppercase"><?php echo esc_html__( 'Junior Sessions', 'kfc-theme' ); ?></p>
						<!-- /wp:paragraph -->

						<!-- wp:heading {"level":4,"style":{"typography":{"fontWeight":"700","fontSize":"2rem"}},"textColor":"dark"} -->
						<h4 class="wp-block-heading has-dark-color has-text-color" style="font-size:2rem;font-weight:700"><?php echo esc_html__( '6:00 PM - 8:00 PM', 'kfc-theme' ); ?></h4>
						<!-- /wp:heading -->

						<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|dark"}}}},"textColor":"dark"} -->
						<p class="has-dark-color has-text-color has-link-color"><?php echo esc_html__( 'All weapons • Ages 7-17', 'kfc-theme' ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"className":"schedule-card","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"backgroundColor":"white","layout":{"type":"constrained"}} -->
				<div class="wp-block-group schedule-card has-white-background-color has-background" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--30)">
					<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"constrained"}} -->
					<div class="wp-block-group">
						<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|accent"}}},"typography":{"fontWeight":"600","fontSize":"0.875rem","textTransform":"uppercase","letterSpacing":"1px"}},"textColor":"accent"} -->
						<p class="has-accent-color has-text-color has-link-color" style="font-size:0.875rem;font-weight:600;letter-spacing:1px;text-transform:uppercase"><?php echo esc_html__( 'Adult Sessions', 'kfc-theme' ); ?></p>
						<!-- /wp:paragraph -->

						<!-- wp:heading {"level":4,"style":{"typography":{"fontWeight":"700","fontSize":"2rem"}},"textColor":"dark"} -->
						<h4 class="wp-block-heading has-dark-color has-text-color" style="font-size:2rem;font-weight:700"><?php echo esc_html__( '8:00 PM - 10:00 PM', 'kfc-theme' ); ?></h4>
						<!-- /wp:heading -->

						<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|dark"}}}},"textColor":"dark"} -->
						<p class="has-dark-color has-text-color has-link-color"><?php echo esc_html__( 'All weapons • Ages 18+', 'kfc-theme' ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"bottom":"var:preset|spacing|30"}}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--30);padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
				<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"backgroundColor":"primary","layout":{"type":"constrained"}} -->
				<div class="wp-block-group has-primary-background-color has-background" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--30)">
					<!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontWeight":"600"}},"textColor":"white","fontSize":"large"} -->
					<h3 class="wp-block-heading has-text-align-center has-white-color has-text-color has-large-font-size" style="font-weight:600"><?php echo esc_html__( 'Tuesday', 'kfc-theme' ); ?></h3>
					<!-- /wp:heading -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"className":"schedule-card","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"margin":{"top":"0","bottom":"var:preset|spacing|20"}}},"backgroundColor":"white","layout":{"type":"constrained"}} -->
				<div class="wp-block-group schedule-card has-white-background-color has-background" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--20);padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--30)">
					<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"constrained"}} -->
					<div class="wp-block-group">
						<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontWeight":"600","fontSize":"0.875rem","textTransform":"uppercase","letterSpacing":"1px"}},"textColor":"primary"} -->
						<p class="has-primary-color has-text-color has-link-color" style="font-size:0.875rem;font-weight:600;letter-spacing:1px;text-transform:uppercase"><?php echo esc_html__( 'Junior Sessions', 'kfc-theme' ); ?></p>
						<!-- /wp:paragraph -->

						<!-- wp:heading {"level":4,"style":{"typography":{"fontWeight":"700","fontSize":"2rem"}},"textColor":"dark"} -->
						<h4 class="wp-block-heading has-dark-color has-text-color" style="font-size:2rem;font-weight:700"><?php echo esc_html__( '6:00 PM - 8:00 PM', 'kfc-theme' ); ?></h4>
						<!-- /wp:heading -->

						<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|dark"}}}},"textColor":"dark"} -->
						<p class="has-dark-color has-text-color has-link-color"><?php echo esc_html__( 'All weapons • Ages 7-17', 'kfc-theme' ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"className":"schedule-card","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"backgroundColor":"white","layout":{"type":"constrained"}} -->
				<div class="wp-block-group schedule-card has-white-background-color has-background" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--30)">
					<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"constrained"}} -->
					<div class="wp-block-group">
						<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|accent"}}},"typography":{"fontWeight":"600","fontSize":"0.875rem","textTransform":"uppercase","letterSpacing":"1px"}},"textColor":"accent"} -->
						<p class="has-accent-color has-text-color has-link-color" style="font-size:0.875rem;font-weight:600;letter-spacing:1px;text-transform:uppercase"><?php echo esc_html__( 'Adult Sessions', 'kfc-theme' ); ?></p>
						<!-- /wp:paragraph -->

						<!-- wp:heading {"level":4,"style":{"typography":{"fontWeight":"700","fontSize":"2rem"}},"textColor":"dark"} -->
						<h4 class="wp-block-heading has-dark-color has-text-color" style="font-size:2rem;font-weight:700"><?php echo esc_html__( '8:00 PM - 10:00 PM', 'kfc-theme' ); ?></h4>
						<!-- /wp:heading -->

						<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|dark"}}}},"textColor":"dark"} -->
						<p class="has-dark-color has-text-color has-link-color"><?php echo esc_html__( 'All weapons • Ages 18+', 'kfc-theme' ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
