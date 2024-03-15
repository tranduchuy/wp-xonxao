<?php
/**
 * Title: You Missed
 * Slug: newsnest/you-missed
 * Categories: newsnest
 * Keywords: you-missed
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-base-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"padding":{"top":"10px","bottom":"10px","left":"12px","right":"12px"}},"border":{"radius":"6px"}},"backgroundColor":"secondary","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group has-secondary-background-color has-background" style="border-radius:6px;padding-top:10px;padding-right:12px;padding-bottom:10px;padding-left:12px"><!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"21px","textTransform":"uppercase","letterSpacing":"1px"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}}},"textColor":"base-2"} -->
<h2 class="wp-block-heading has-base-2-color has-text-color has-link-color" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;font-size:21px;font-style:normal;font-weight:700;letter-spacing:1px;text-transform:uppercase"><?php echo esc_html__( 'You Missed', 'newsnest' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"base-2","textColor":"contrast","style":{"spacing":{"padding":{"left":"var:preset|spacing|10","right":"var:preset|spacing|10","top":"6px","bottom":"6px"}},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"border":{"radius":"6px","bottom":{"style":"none","width":"0px"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-contrast-color has-base-2-background-color has-text-color has-background has-link-color wp-element-button" style="border-radius:6px;border-bottom-style:none;border-bottom-width:0px;padding-top:6px;padding-right:var(--wp--preset--spacing--10);padding-bottom:6px;padding-left:var(--wp--preset--spacing--10)"><?php echo esc_html__( 'View All', 'newsnest' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:query {"queryId":22,"query":{"perPage":"4","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":4}} -->
<!-- wp:cover {"useFeaturedImage":true,"dimRatio":40,"overlayColor":"contrast","minHeight":280,"contentPosition":"bottom center","isDark":false,"style":{"border":{"radius":"6px"},"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}}},"className":"banner-has-slider-inner","layout":{"type":"constrained"}} -->
<div class="wp-block-cover is-light has-custom-content-position is-position-bottom-center banner-has-slider-inner" style="border-radius:6px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20);min-height:280px"><span aria-hidden="true" class="wp-block-cover__background has-contrast-background-color has-background-dim-40 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:tag-cloud {"numberOfTags":2} /-->

<!-- wp:post-title {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}},"typography":{"fontSize":"21px","fontStyle":"normal","fontWeight":"600"}}} /--></div></div>
<!-- /wp:cover -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->