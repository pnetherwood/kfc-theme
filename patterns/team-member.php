<?php
/**
 * Title: Team Member
 * Slug: kfc-theme/team-member
 * Categories: featured, kfc-theme
 */
?>
<!-- wp:group {"metadata":{"name":"Team Member"},"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"margin":{"bottom":"var:preset|spacing|30"}}},"backgroundColor":"white","className":"team-member-card","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide team-member-card has-white-background-color has-background" style="margin-bottom:var(--wp--preset--spacing--30);padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--30)">
	<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} -->
	<div class="wp-block-columns are-vertically-aligned-center">
		<!-- wp:column {"verticalAlignment":"center","width":"35%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:35%">
			<!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"large","linkDestination":"none","className":"team-member-photo"} -->
			<figure class="wp-block-image size-large team-member-photo"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/team-member.jpg" alt="<?php echo esc_attr__( 'Team Member', 'kfc-theme' ); ?>" style="aspect-ratio:1;object-fit:cover"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","width":"65%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:65%">
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group">
				<!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600"}},"textColor":"dark","fontSize":"large"} -->
				<h3 class="wp-block-heading has-dark-color has-text-color has-large-font-size" style="font-weight:600"><?php echo esc_html__( 'John Smith', 'kfc-theme' ); ?></h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontWeight":"500"}},"textColor":"primary","fontSize":"medium"} -->
				<p class="has-primary-color has-text-color has-link-color has-medium-font-size" style="font-weight:500"><?php echo esc_html__( 'Head Coach', 'kfc-theme' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:separator {"style":{"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"backgroundColor":"primary","className":"is-style-wide"} -->
				<hr class="wp-block-separator has-text-color has-primary-color has-alpha-channel-opacity has-primary-background-color has-background is-style-wide" style="margin-top:var(--wp--preset--spacing--20);margin-bottom:var(--wp--preset--spacing--20)"/>
				<!-- /wp:separator -->

				<!-- wp:paragraph {"textColor":"dark"} -->
				<p class="has-dark-color has-text-color"><?php echo esc_html__( 'John has over 15 years of experience in competitive fencing and has coached numerous national champions. He specializes in épée and foil techniques and is passionate about developing young talent.', 'kfc-theme' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|dark"}}}},"textColor":"dark","fontSize":"small"} -->
				<p class="has-dark-color has-text-color has-link-color has-small-font-size"><strong><?php echo esc_html__( 'Qualifications:', 'kfc-theme' ); ?></strong> <?php echo esc_html__( 'British Fencing Level 3 Coach, Former GB Squad Member', 'kfc-theme' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
