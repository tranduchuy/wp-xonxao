<?php
/**
 * Title: Author
 * Slug: newsnest/author
 * Categories: newsnest
 * Keywords: author
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"margin":{"bottom":"var:preset|spacing|10"}},"border":{"radius":"6px"}},"backgroundColor":"base","layout":{"type":"default"}} -->
<div class="wp-block-group has-base-background-color has-background" style="border-radius:6px;margin-bottom:var(--wp--preset--spacing--10);padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:image {"align":"center","id":111,"width":"120px","height":"120px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"100%","width":"0px","style":"none"}},"className":"is-style-rounded"} -->
<figure class="wp-block-image aligncenter size-full is-resized has-custom-border is-style-rounded"><img src="<?php echo esc_url( get_stylesheet_directory_uri() );?>/assets/images/author.jpg" alt="" class="wp-image-111" style="border-style:none;border-width:0px;border-radius:100%;object-fit:cover;width:120px;height:120px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"21px"}}} -->
<h2 class="wp-block-heading has-text-align-center" style="font-size:21px;font-style:normal;font-weight:700"><?php echo esc_html__( ' John Doe', 'newsnest' ); ?>  </h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast-2"}}},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"contrast-2","fontSize":"sml-medium"} -->
<p class="has-text-align-center has-contrast-2-color has-text-color has-link-color has-sml-medium-font-size" style="margin-top:0;margin-bottom:0"><?php echo esc_html__( ' Senior Editor', 'newsnest' ); ?> </p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"}},"typography":{"fontSize":"16px"}}} -->
<p class="has-text-align-center" style="margin-top:var(--wp--preset--spacing--10);margin-bottom:var(--wp--preset--spacing--10);font-size:16px"> <?php echo esc_html__( 'Proin magna. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Proin pretium, leo ac pellentesque mollis, felis nunc ultrices eros', 'newsnest' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:social-links {"openInNewTab":true,"showLabels":true,"size":"has-small-icon-size","align":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|10","left":"5px"}}},"className":"is-style-default","layout":{"type":"flex","justifyContent":"center"}} -->
<ul class="wp-block-social-links aligncenter has-small-icon-size has-visible-labels is-style-default"><!-- wp:social-link {"url":"#","service":"facebook","label":"Facebook"} /-->

<!-- wp:social-link {"url":"#","service":"youtube"} /-->

<!-- wp:social-link {"url":"#","service":"linkedin"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group -->