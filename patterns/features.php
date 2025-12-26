<?php
/**
 * Title: Features
 * Slug: kfc-theme/features
 * Categories: featured, kfc-theme
 */
?>
<!-- wp:group {"metadata":{"name":"Features"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","right":"var:preset|spacing|30","bottom":"var:preset|spacing|50","left":"var:preset|spacing|30"}}},"backgroundColor":"light","layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group alignfull has-light-background-color has-background" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--30)">
	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"0px","padding":{"bottom":"0px"}}},"layout":{"inherit":false}} -->
	<div class="wp-block-group alignwide" style="padding-bottom:0px">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"10px","padding":{"bottom":"var:preset|spacing|40"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
		<div class="wp-block-group alignwide" style="padding-bottom:var(--wp--preset--spacing--40)">
			<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} -->
				<p class="has-text-align-left has-primary-color has-text-color has-link-color"><?php echo esc_html__( 'OUR PROGRAMMES', 'kfc-theme' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
				<div class="wp-block-group">
					<!-- wp:separator {"style":{"layout":{"selfStretch":"fixed","flexSize":"50px"}},"backgroundColor":"primary"} -->
					<hr class="wp-block-separator has-text-color has-primary-color has-alpha-channel-opacity has-primary-background-color has-background"/>
					<!-- /wp:separator -->

					<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"600","textTransform":"capitalize"},"elements":{"link":{"color":{"text":"var:preset|color|dark"}}}},"textColor":"dark","fontSize":"xx-large"} -->
					<h2 class="wp-block-heading has-text-align-center has-dark-color has-text-color has-link-color has-xx-large-font-size" style="font-style:normal;font-weight:600;text-transform:capitalize"><?php echo esc_html__( 'Train with us at Kingston Fencing Club', 'kfc-theme' ); ?></h2>
					<!-- /wp:heading -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"0px","padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center","verticalAlignment":"top"}} -->
			<div class="wp-block-group alignwide" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px">
				<!-- wp:buttons {"style":{"spacing":{"blockGap":"10px","margin":{"top":"20px","bottom":"20px"}}},"layout":{"type":"flex","justifyContent":"left"}} -->
				<div class="wp-block-buttons" style="margin-top:20px;margin-bottom:20px">
					<!-- wp:button {"textColor":"primary","className":"is-style-outline","style":{"spacing":{"padding":{"left":"0px","right":"0px","top":"0","bottom":"0"}},"border":{"bottom":{"color":"var:preset|color|primary","width":"2px"},"top":{"width":"0px","style":"none"},"right":{"width":"0px","style":"none"},"left":{"width":"0px","style":"none"}},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}}} -->
					<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-primary-color has-text-color has-link-color wp-element-button" href="/courses" style="border-top-style:none;border-top-width:0px;border-right-style:none;border-right-width:0px;border-bottom-color:var(--wp--preset--color--primary);border-bottom-width:2px;border-left-style:none;border-left-width:0px;padding-top:0;padding-right:0px;padding-bottom:0;padding-left:0px"><?php echo esc_html__( 'View All Courses', 'kfc-theme' ); ?></a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"0","left":"0"}}}} -->
		<div class="wp-block-columns alignwide">
			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:media-text {"align":"wide","mediaType":"image","verticalAlignment":"center","imageFill":true,"backgroundColor":"primary"} -->
				<div class="wp-block-media-text alignwide is-stacked-on-mobile is-vertically-aligned-center is-image-fill-element has-primary-background-color has-background">
					<figure class="wp-block-media-text__media">
						<img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/feature-adult.jpg" alt="<?php echo esc_attr__( 'Adult fencing classes', 'kfc-theme' ); ?>" style="object-position:50% 50%"/>
					</figure>
					<div class="wp-block-media-text__content">
						<!-- wp:group {"style":{"spacing":{"blockGap":"20px","padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|20","bottom":"var:preset|spacing|40","left":"var:preset|spacing|20"}}},"textColor":"white"} -->
						<div class="wp-block-group has-white-color has-text-color" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--20)">
							<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"constrained"}} -->
							<div class="wp-block-group">
								<!-- wp:heading {"textAlign":"left","level":3,"style":{"typography":{"textTransform":"capitalize","fontStyle":"normal","fontWeight":"600"}},"textColor":"white","fontSize":"large"} -->
								<h3 class="wp-block-heading has-text-align-left has-white-color has-text-color has-large-font-size" style="font-style:normal;font-weight:600;text-transform:capitalize"><?php echo esc_html__( 'Adult Classes', 'kfc-theme' ); ?></h3>
								<!-- /wp:heading -->

								<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} -->
								<p class="has-white-color has-text-color has-link-color"><?php echo esc_html__( 'Whether you are a complete beginner or an experienced fencer looking to improve, our adult classes cater to all skill levels with expert coaching.', 'kfc-theme' ); ?></p>
								<!-- /wp:paragraph -->
							</div>
							<!-- /wp:group -->

							<!-- wp:buttons -->
							<div class="wp-block-buttons">
								<!-- wp:button {"textColor":"white","className":"is-style-outline","style":{"spacing":{"padding":{"top":"10px","bottom":"10px","left":"30px","right":"30px"}}}} -->
								<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-white-color has-text-color wp-element-button" href="/adult-fencing" style="padding-top:10px;padding-right:30px;padding-bottom:10px;padding-left:30px"><?php echo esc_html__( 'Learn More', 'kfc-theme' ); ?></a></div>
								<!-- /wp:button -->
							</div>
							<!-- /wp:buttons -->
						</div>
						<!-- /wp:group -->
					</div>
				</div>
				<!-- /wp:media-text -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:media-text {"align":"wide","mediaType":"image","imageFill":true,"backgroundColor":"white"} -->
				<div class="wp-block-media-text alignwide is-stacked-on-mobile is-image-fill-element has-white-background-color has-background">
					<figure class="wp-block-media-text__media">
						<img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/feature-junior.jpg" alt="<?php echo esc_attr__( 'Junior fencing classes', 'kfc-theme' ); ?>" style="object-position:50% 50%"/>
					</figure>
					<div class="wp-block-media-text__content">
						<!-- wp:group {"style":{"spacing":{"blockGap":"20px","padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|20","bottom":"var:preset|spacing|40","left":"var:preset|spacing|20"}}}} -->
						<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--20)">
							<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"constrained"}} -->
							<div class="wp-block-group">
								<!-- wp:heading {"textAlign":"left","level":3,"style":{"typography":{"textTransform":"capitalize","fontStyle":"normal","fontWeight":"600"}},"textColor":"dark","fontSize":"large"} -->
								<h3 class="wp-block-heading has-text-align-left has-dark-color has-text-color has-large-font-size" style="font-style:normal;font-weight:600;text-transform:capitalize"><?php echo esc_html__( 'Junior Classes', 'kfc-theme' ); ?></h3>
								<!-- /wp:heading -->

								<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|dark"}}}},"textColor":"dark"} -->
								<p class="has-dark-color has-text-color has-link-color"><?php echo esc_html__( 'Fun and engaging fencing sessions for young people aged 7-17. Build confidence, coordination and fitness while learning the art of swordplay.', 'kfc-theme' ); ?></p>
								<!-- /wp:paragraph -->
							</div>
							<!-- /wp:group -->

							<!-- wp:buttons -->
							<div class="wp-block-buttons">
								<!-- wp:button {"className":"is-style-outline","style":{"spacing":{"padding":{"top":"10px","bottom":"10px","left":"30px","right":"30px"}}}} -->
								<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/junior-fencing" style="padding-top:10px;padding-right:30px;padding-bottom:10px;padding-left:30px"><?php echo esc_html__( 'Learn More', 'kfc-theme' ); ?></a></div>
								<!-- /wp:button -->
							</div>
							<!-- /wp:buttons -->
						</div>
						<!-- /wp:group -->
					</div>
				</div>
				<!-- /wp:media-text -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->

		<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"0","left":"0"}}}} -->
		<div class="wp-block-columns alignwide">
			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:media-text {"align":"wide","mediaPosition":"right","mediaType":"image","imageFill":true,"backgroundColor":"white"} -->
				<div class="wp-block-media-text alignwide has-media-on-the-right is-stacked-on-mobile is-image-fill-element has-white-background-color has-background">
					<div class="wp-block-media-text__content">
						<!-- wp:group {"style":{"spacing":{"blockGap":"20px","padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|20","bottom":"var:preset|spacing|40","left":"var:preset|spacing|20"}}}} -->
						<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--20)">
							<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"constrained"}} -->
							<div class="wp-block-group">
								<!-- wp:heading {"textAlign":"left","level":3,"style":{"typography":{"textTransform":"capitalize","fontStyle":"normal","fontWeight":"600"}},"textColor":"dark","fontSize":"large"} -->
								<h3 class="wp-block-heading has-text-align-left has-dark-color has-text-color has-large-font-size" style="font-style:normal;font-weight:600;text-transform:capitalize"><?php echo esc_html__( 'Private Lessons', 'kfc-theme' ); ?></h3>
								<!-- /wp:heading -->

								<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|dark"}}}},"textColor":"dark"} -->
								<p class="has-dark-color has-text-color has-link-color"><?php echo esc_html__( 'One-on-one coaching sessions with our experienced instructors. Perfect for accelerating your progress or preparing for competitions.', 'kfc-theme' ); ?></p>
								<!-- /wp:paragraph -->
							</div>
							<!-- /wp:group -->

							<!-- wp:buttons -->
							<div class="wp-block-buttons">
								<!-- wp:button {"className":"is-style-outline","style":{"spacing":{"padding":{"top":"10px","bottom":"10px","left":"30px","right":"30px"}}}} -->
								<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/private-lessons" style="padding-top:10px;padding-right:30px;padding-bottom:10px;padding-left:30px"><?php echo esc_html__( 'Learn More', 'kfc-theme' ); ?></a></div>
								<!-- /wp:button -->
							</div>
							<!-- /wp:buttons -->
						</div>
						<!-- /wp:group -->
					</div>
					<figure class="wp-block-media-text__media">
						<img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/feature-private.jpg" alt="<?php echo esc_attr__( 'Private fencing lessons', 'kfc-theme' ); ?>" style="object-position:50% 50%"/>
					</figure>
				</div>
				<!-- /wp:media-text -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:media-text {"align":"wide","mediaPosition":"right","mediaType":"image","imageFill":true,"backgroundColor":"primary","textColor":"white"} -->
				<div class="wp-block-media-text alignwide has-media-on-the-right is-stacked-on-mobile is-image-fill-element has-white-color has-primary-background-color has-text-color has-background">
					<div class="wp-block-media-text__content">
						<!-- wp:group {"style":{"spacing":{"blockGap":"20px","padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|20","bottom":"var:preset|spacing|40","left":"var:preset|spacing|20"}}}} -->
						<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--20)">
							<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"constrained"}} -->
							<div class="wp-block-group">
								<!-- wp:heading {"textAlign":"left","level":3,"style":{"typography":{"textTransform":"capitalize","fontStyle":"normal","fontWeight":"600"}},"textColor":"white","fontSize":"large"} -->
								<h3 class="wp-block-heading has-text-align-left has-white-color has-text-color has-large-font-size" style="font-style:normal;font-weight:600;text-transform:capitalize"><?php echo esc_html__( 'Competition Training', 'kfc-theme' ); ?></h3>
								<!-- /wp:heading -->

								<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} -->
								<p class="has-white-color has-text-color has-link-color"><?php echo esc_html__( 'Take your fencing to the next level with our competition-focused training sessions. Prepare for local, regional and national competitions.', 'kfc-theme' ); ?></p>
								<!-- /wp:paragraph -->
							</div>
							<!-- /wp:group -->

							<!-- wp:buttons -->
							<div class="wp-block-buttons">
								<!-- wp:button {"textColor":"white","className":"is-style-outline","style":{"spacing":{"padding":{"top":"10px","bottom":"10px","left":"30px","right":"30px"}}}} -->
								<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-white-color has-text-color wp-element-button" href="/competition-training" style="padding-top:10px;padding-right:30px;padding-bottom:10px;padding-left:30px"><?php echo esc_html__( 'Learn More', 'kfc-theme' ); ?></a></div>
								<!-- /wp:button -->
							</div>
							<!-- /wp:buttons -->
						</div>
						<!-- /wp:group -->
					</div>
					<figure class="wp-block-media-text__media">
						<img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/feature-competition.jpg" alt="<?php echo esc_attr__( 'Competition fencing training', 'kfc-theme' ); ?>" style="object-position:50% 50%"/>
					</figure>
				</div>
				<!-- /wp:media-text -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
