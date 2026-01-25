<?php
/**
 * Title: Membership Pricing
 * Slug: kfc-theme/membership-pricing
 * Categories: featured, kfc-theme
 * Description: Pricing cards for different membership types
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|30","bottom":"var:preset|spacing|20","left":"var:preset|spacing|30"}}},"backgroundColor":"light","layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group alignfull has-light-background-color has-background" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--30)">
	<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"large"} -->
		<h2 class="wp-block-heading has-text-align-center has-large-font-size" style="font-style:normal;font-weight:600"><?php echo esc_html__( 'Membership Fees', 'kfc-theme' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}}} -->
		<p class="has-text-align-center" style="margin-bottom:var(--wp--preset--spacing--10)"><?php echo esc_html__( 'Fees as of 1st September 2023', 'kfc-theme' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|15","left":"var:preset|spacing|15"}}}} -->
		<div class="wp-block-columns alignwide">
			<!-- wp:column {"className":"pricing-card"} -->
			<div class="wp-block-column pricing-card">
				<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|10","right":"var:preset|spacing|15","bottom":"var:preset|spacing|10","left":"var:preset|spacing|15"},"blockGap":"var:preset|spacing|5"},"border":{"radius":"6px","width":"1px"}},"borderColor":"primary","backgroundColor":"white","layout":{"type":"constrained"}} -->
				<div class="wp-block-group has-border-color has-primary-border-color has-white-background-color has-background" style="border-width:1px;border-radius:6px;padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--15);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--15)">
					<!-- wp:heading {"textAlign":"center","level":3} -->
					<h3 class="wp-block-heading has-text-align-center"><?php echo esc_html__( 'Adult', 'kfc-theme' ); ?></h3>
					<!-- /wp:heading -->

					<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontSize":"small","fontFamily":"body"} -->
					<p class="has-text-align-center has-body-font-family has-small-font-size" style="margin-top:0;margin-bottom:0"><?php echo esc_html__( '(18+)', 'kfc-theme' ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
					<div class="wp-block-group">
						<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"24px","fontWeight":"700","lineHeight":"1"}},"textColor":"primary"} -->
						<p class="has-text-align-center has-primary-color has-text-color" style="font-size:24px;font-weight:700;line-height:1"><?php echo esc_html__( '£110', 'kfc-theme' ); ?></p>
						<!-- /wp:paragraph -->

						<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"4px"}}},"fontSize":"small"} -->
						<p class="has-text-align-center has-small-font-size" style="margin-top:4px"><?php echo esc_html__( 'per 3 months', 'kfc-theme' ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->

					<!-- wp:separator {"className":"is-style-wide","backgroundColor":"primary"} -->
					<hr class="wp-block-separator has-text-color has-primary-color has-alpha-channel-opacity has-primary-background-color has-background is-style-wide"/>
					<!-- /wp:separator -->

					<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
					<p class="has-text-align-center has-small-font-size"><?php echo esc_html__( 'Full access to all club facilities and sessions', 'kfc-theme' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"className":"pricing-card"} -->
			<div class="wp-block-column pricing-card">
				<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|10","right":"var:preset|spacing|15","bottom":"var:preset|spacing|10","left":"var:preset|spacing|15"},"blockGap":"var:preset|spacing|5"},"border":{"radius":"6px","width":"1px"}},"borderColor":"primary","backgroundColor":"white","layout":{"type":"constrained"}} -->
				<div class="wp-block-group has-border-color has-primary-border-color has-white-background-color has-background" style="border-width:1px;border-radius:6px;padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--15);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--15)">
					<!-- wp:heading {"textAlign":"center","level":3} -->
					<h3 class="wp-block-heading has-text-align-center"><?php echo esc_html__( 'Junior', 'kfc-theme' ); ?></h3>
					<!-- /wp:heading -->

					<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontSize":"small","fontFamily":"body"} -->
					<p class="has-text-align-center has-body-font-family has-small-font-size" style="margin-top:0;margin-bottom:0"><?php echo esc_html__( '(under 18)', 'kfc-theme' ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
					<div class="wp-block-group">
						<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"24px","fontWeight":"700","lineHeight":"1"}},"textColor":"primary"} -->
						<p class="has-text-align-center has-primary-color has-text-color" style="font-size:24px;font-weight:700;line-height:1"><?php echo esc_html__( '£90', 'kfc-theme' ); ?></p>
						<!-- /wp:paragraph -->

						<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"4px"}}},"fontSize":"small"} -->
						<p class="has-text-align-center has-small-font-size" style="margin-top:4px"><?php echo esc_html__( 'per 3 months', 'kfc-theme' ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->

					<!-- wp:separator {"className":"is-style-wide","backgroundColor":"primary"} -->
					<hr class="wp-block-separator has-text-color has-primary-color has-alpha-channel-opacity has-primary-background-color has-background is-style-wide"/>
					<!-- /wp:separator -->

					<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
					<p class="has-text-align-center has-small-font-size"><?php echo esc_html__( 'Access to junior sessions and all member benefits', 'kfc-theme' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"className":"pricing-card"} -->
			<div class="wp-block-column pricing-card">
				<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|10","right":"var:preset|spacing|15","bottom":"var:preset|spacing|10","left":"var:preset|spacing|15"},"blockGap":"var:preset|spacing|5"},"border":{"radius":"6px","width":"1px"}},"borderColor":"primary","backgroundColor":"white","layout":{"type":"constrained"}} -->
				<div class="wp-block-group has-border-color has-primary-border-color has-white-background-color has-background" style="border-width:1px;border-radius:6px;padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--15);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--15)">
					<!-- wp:heading {"textAlign":"center","level":3} -->
					<h3 class="wp-block-heading has-text-align-center"><?php echo esc_html__( 'Student', 'kfc-theme' ); ?></h3>
					<!-- /wp:heading -->

					<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontSize":"small","fontFamily":"body"} -->
					<p class="has-text-align-center has-body-font-family has-small-font-size" style="margin-top:0;margin-bottom:0"><?php echo esc_html__( '(full-time)*', 'kfc-theme' ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
					<div class="wp-block-group">
						<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"24px","fontWeight":"700","lineHeight":"1"}},"textColor":"primary"} -->
						<p class="has-text-align-center has-primary-color has-text-color" style="font-size:24px;font-weight:700;line-height:1"><?php echo esc_html__( '£90', 'kfc-theme' ); ?></p>
						<!-- /wp:paragraph -->

						<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"4px"}}},"fontSize":"small"} -->
						<p class="has-text-align-center has-small-font-size" style="margin-top:4px"><?php echo esc_html__( 'per 3 months', 'kfc-theme' ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->

					<!-- wp:separator {"className":"is-style-wide","backgroundColor":"primary"} -->
					<hr class="wp-block-separator has-text-color has-primary-color has-alpha-channel-opacity has-primary-background-color has-background is-style-wide"/>
					<!-- /wp:separator -->

					<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
					<p class="has-text-align-center has-small-font-size"><?php echo esc_html__( 'Discounted rate for full-time students with valid ID', 'kfc-theme' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->

		<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|15","left":"var:preset|spacing|15"},"margin":{"top":"var:preset|spacing|15"}}}} -->
		<div class="wp-block-columns alignwide" style="margin-top:var(--wp--preset--spacing--15)">
			<!-- wp:column {"className":"pricing-card"} -->
			<div class="wp-block-column pricing-card">
				<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|10","right":"var:preset|spacing|15","bottom":"var:preset|spacing|10","left":"var:preset|spacing|15"},"blockGap":"var:preset|spacing|5"},"border":{"radius":"6px","width":"1px"}},"borderColor":"primary","backgroundColor":"white","layout":{"type":"constrained"}} -->
				<div class="wp-block-group has-border-color has-primary-border-color has-white-background-color has-background" style="border-width:1px;border-radius:6px;padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--15);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--15)">
					<!-- wp:heading {"textAlign":"center","level":3} -->
					<h3 class="wp-block-heading has-text-align-center"><?php echo esc_html__( 'Senior', 'kfc-theme' ); ?></h3>
					<!-- /wp:heading -->

					<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontSize":"small","fontFamily":"body"} -->
					<p class="has-text-align-center has-body-font-family has-small-font-size" style="margin-top:0;margin-bottom:0"><?php echo esc_html__( '(over 65)', 'kfc-theme' ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
					<div class="wp-block-group">
						<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"24px","fontWeight":"700","lineHeight":"1"}},"textColor":"primary"} -->
						<p class="has-text-align-center has-primary-color has-text-color" style="font-size:24px;font-weight:700;line-height:1"><?php echo esc_html__( '£90', 'kfc-theme' ); ?></p>
						<!-- /wp:paragraph -->

						<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"4px"}}},"fontSize":"small"} -->
						<p class="has-text-align-center has-small-font-size" style="margin-top:4px"><?php echo esc_html__( 'per 3 months', 'kfc-theme' ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->

					<!-- wp:separator {"className":"is-style-wide","backgroundColor":"primary"} -->
					<hr class="wp-block-separator has-text-color has-primary-color has-alpha-channel-opacity has-primary-background-color has-background is-style-wide"/>
					<!-- /wp:separator -->

					<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
					<p class="has-text-align-center has-small-font-size"><?php echo esc_html__( 'Discounted rate for seniors aged 65 and over', 'kfc-theme' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"className":"pricing-card"} -->
			<div class="wp-block-column pricing-card">
				<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|10","right":"var:preset|spacing|15","bottom":"var:preset|spacing|10","left":"var:preset|spacing|15"},"blockGap":"var:preset|spacing|5"},"border":{"radius":"6px","width":"1px"}},"borderColor":"primary","backgroundColor":"white","layout":{"type":"constrained"}} -->
				<div class="wp-block-group has-border-color has-primary-border-color has-white-background-color has-background" style="border-width:1px;border-radius:6px;padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--15);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--15)">
					<!-- wp:heading {"textAlign":"center","level":3} -->
					<h3 class="wp-block-heading has-text-align-center"><?php echo esc_html__( 'Affiliated Club', 'kfc-theme' ); ?></h3>
					<!-- /wp:heading -->

					<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontSize":"small","fontFamily":"body"} -->
					<p class="has-text-align-center has-body-font-family has-small-font-size" style="margin-top:0;margin-bottom:0"><?php echo esc_html__( '(Wimbledon/Epsom)*', 'kfc-theme' ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
					<div class="wp-block-group">
						<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"24px","fontWeight":"700","lineHeight":"1"}},"textColor":"primary"} -->
						<p class="has-text-align-center has-primary-color has-text-color" style="font-size:24px;font-weight:700;line-height:1"><?php echo esc_html__( '50%', 'kfc-theme' ); ?></p>
						<!-- /wp:paragraph -->

						<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"4px"}}},"fontSize":"small"} -->
						<p class="has-text-align-center has-small-font-size" style="margin-top:4px"><?php echo esc_html__( 'discount', 'kfc-theme' ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->

					<!-- wp:separator {"className":"is-style-wide","backgroundColor":"primary"} -->
					<hr class="wp-block-separator has-text-color has-primary-color has-alpha-channel-opacity has-primary-background-color has-background is-style-wide"/>
					<!-- /wp:separator -->

					<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
					<p class="has-text-align-center has-small-font-size"><?php echo esc_html__( 'Members of affiliated clubs receive 50% off membership', 'kfc-theme' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"className":"pricing-card"} -->
			<div class="wp-block-column pricing-card">
				<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|10","right":"var:preset|spacing|15","bottom":"var:preset|spacing|10","left":"var:preset|spacing|15"},"blockGap":"var:preset|spacing|5"},"border":{"radius":"6px","width":"1px"}},"borderColor":"primary","backgroundColor":"white","layout":{"type":"constrained"}} -->
				<div class="wp-block-group has-border-color has-primary-border-color has-white-background-color has-background" style="border-width:1px;border-radius:6px;padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--15);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--15)">
					<!-- wp:heading {"textAlign":"center","level":3} -->
					<h3 class="wp-block-heading has-text-align-center"><?php echo esc_html__( 'Visitor', 'kfc-theme' ); ?></h3>
					<!-- /wp:heading -->

					<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontSize":"small","fontFamily":"body"} -->
					<p class="has-text-align-center has-body-font-family has-small-font-size" style="margin-top:0;margin-bottom:0"><?php echo esc_html__( '(single evening)', 'kfc-theme' ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
					<div class="wp-block-group">
						<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"24px","fontWeight":"700","lineHeight":"1"}},"textColor":"primary"} -->
						<p class="has-text-align-center has-primary-color has-text-color" style="font-size:24px;font-weight:700;line-height:1"><?php echo esc_html__( '£15', 'kfc-theme' ); ?></p>
						<!-- /wp:paragraph -->

						<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"4px"}}},"fontSize":"small"} -->
						<p class="has-text-align-center has-small-font-size" style="margin-top:4px"><?php echo esc_html__( 'per evening', 'kfc-theme' ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->

					<!-- wp:separator {"className":"is-style-wide","backgroundColor":"primary"} -->
					<hr class="wp-block-separator has-text-color has-primary-color has-alpha-channel-opacity has-primary-background-color has-background is-style-wide"/>
					<!-- /wp:separator -->

					<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
					<p class="has-text-align-center has-small-font-size"><?php echo esc_html__( 'Try before you join with a one-night visitor pass', 'kfc-theme' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->

		<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--20)">
			<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
			<p class="has-text-align-center has-small-font-size"><?php echo esc_html__( '* Proof required', 'kfc-theme' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"align":"center"} -->
			<p class="has-text-align-center"><?php echo esc_html__( 'Fees are paid every 3 months on the anniversary of joining. The club fences throughout the year including the summer.', 'kfc-theme' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"align":"center"} -->
			<p class="has-text-align-center"><?php echo esc_html__( 'The club is non-profit and all fees are used to cover the costs of running the club.', 'kfc-theme' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
