<?php
/**
 * Title: Document List Section
 * Slug: kfc-theme/document-list
 * Categories: text, kfc-theme
 * Description: A section for displaying a list of documents/policies with icons
 */
?>
<!-- wp:group {"className":"document-list-section","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"margin":{"top":"2rem","bottom":"2rem"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group document-list-section" style="margin-top:2rem;margin-bottom:2rem;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
	<!-- wp:heading {"level":4,"className":"document-section-heading","style":{"spacing":{"padding":{"top":"1rem","right":"1.25rem","bottom":"1rem","left":"1.25rem"},"margin":{"top":"0","bottom":"1rem"}},"border":{"left":{"color":"var:preset|color|primary","width":"4px"},"radius":"4px"}},"backgroundColor":"light","textColor":"dark"} -->
	<h4 class="wp-block-heading document-section-heading has-dark-color has-light-background-color has-text-color has-background" style="border-radius:4px;border-left-color:var(--wp--preset--color--primary);border-left-width:4px;margin-top:0;margin-bottom:1rem;padding-top:1rem;padding-right:1.25rem;padding-bottom:1rem;padding-left:1.25rem"><?php echo esc_html__( 'Section Title', 'kfc-theme' ); ?></h4>
	<!-- /wp:heading -->

	<!-- wp:list {"className":"document-list"} -->
	<ul class="wp-block-list document-list">
		<!-- wp:list-item -->
		<li><a href="#"><?php echo esc_html__( 'Document Name', 'kfc-theme' ); ?></a></li>
		<!-- /wp:list-item -->

		<!-- wp:list-item -->
		<li><a href="#"><?php echo esc_html__( 'Document Name', 'kfc-theme' ); ?></a></li>
		<!-- /wp:list-item -->

		<!-- wp:list-item -->
		<li><a href="#"><?php echo esc_html__( 'Document Name', 'kfc-theme' ); ?></a></li>
		<!-- /wp:list-item -->
	</ul>
	<!-- /wp:list -->
</div>
<!-- /wp:group -->
