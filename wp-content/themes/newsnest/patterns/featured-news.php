<?php
/**
 * Title: Featured News
 * Slug: newsnest/featured-news
 * Categories: newsnest
 * Keywords: featured news
 */
?>
<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-base-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|20"}}}} -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"10px","bottom":"10px","left":"12px","right":"12px"}},"border":{"radius":"6px"},"color":{"background":"#02732a"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group has-background" style="border-radius:6px;background-color:#02732a;padding-top:10px;padding-right:12px;padding-bottom:10px;padding-left:12px"><!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"21px","textTransform":"uppercase","letterSpacing":"1px"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}}},"textColor":"base-2"} -->
<h2 class="wp-block-heading has-base-2-color has-text-color has-link-color" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;font-size:21px;font-style:normal;font-weight:700;letter-spacing:1px;text-transform:uppercase"><?php echo esc_html__( 'Economic', 'newsnest' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"base-2","textColor":"contrast","style":{"spacing":{"padding":{"left":"var:preset|spacing|10","right":"var:preset|spacing|10","top":"6px","bottom":"6px"}},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"border":{"radius":"6px","bottom":{"style":"none","width":"0px"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-contrast-color has-base-2-background-color has-text-color has-background has-link-color wp-element-button" style="border-radius:6px;border-bottom-style:none;border-bottom-width:0px;padding-top:6px;padding-right:var(--wp--preset--spacing--10);padding-bottom:6px;padding-left:var(--wp--preset--spacing--10)"><?php echo esc_html__( 'View All', 'newsnest' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":7,"query":{"perPage":"1","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":{"category":[]}}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10","left":"var:preset|spacing|10","right":"var:preset|spacing|10"}}},"backgroundColor":"base-2","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-base-2-background-color has-background" style="padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--10)"><!-- wp:post-featured-image {"isLink":true,"style":{"border":{"radius":"0px"}}} /-->

<!-- wp:tag-cloud {"numberOfTags":3} /-->

<!-- wp:post-title {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"typography":{"fontSize":"21px","fontStyle":"normal","fontWeight":"700"},"spacing":{"margin":{"top":"15px","bottom":"10px"}}},"textColor":"contrast"} /-->

<!-- wp:post-date {"format":"M j, Y","style":{"spacing":{"margin":{"top":"6px","bottom":"0"}},"typography":{"fontSize":"14px"}}} /-->

<!-- wp:post-excerpt {"moreText":"Continue Reading","excerptLength":25,"style":{"spacing":{"margin":{"top":"10px","bottom":"0px"}}}} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query -->

<!-- wp:query {"queryId":27,"query":{"perPage":"3","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":{"category":[]}}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"0"}}} -->
<!-- wp:columns {"style":{"border":{"radius":"6px","color":"#ebebeb","width":"1px"},"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10","left":"var:preset|spacing|10","right":"var:preset|spacing|10"},"margin":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"}}},"backgroundColor":"base-2"} -->
<div class="wp-block-columns has-border-color has-base-2-background-color has-background" style="border-color:#ebebeb;border-width:1px;border-radius:6px;margin-top:var(--wp--preset--spacing--10);margin-bottom:var(--wp--preset--spacing--10);padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--10)"><!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:post-featured-image {"isLink":true,"style":{"border":{"radius":"6px"}}} /--></div>
<!-- /wp:column -->

<!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:post-title {"isLink":true,"style":{"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"top":"0px","bottom":"6px"}}}} /-->

<!-- wp:post-date {"format":"M j, Y","style":{"typography":{"fontSize":"14px"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"10px","bottom":"10px","left":"12px","right":"12px"}},"border":{"radius":"6px"},"color":{"background":"#8a10b7"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group has-background" style="border-radius:6px;background-color:#8a10b7;padding-top:10px;padding-right:12px;padding-bottom:10px;padding-left:12px"><!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"21px","textTransform":"uppercase","letterSpacing":"1px"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}}},"textColor":"base-2"} -->
<h2 class="wp-block-heading has-base-2-color has-text-color has-link-color" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;font-size:21px;font-style:normal;font-weight:700;letter-spacing:1px;text-transform:uppercase"><?php echo esc_html__( 'Sports', 'newsnest' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"base-2","textColor":"contrast","style":{"spacing":{"padding":{"left":"var:preset|spacing|10","right":"var:preset|spacing|10","top":"6px","bottom":"6px"}},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"border":{"radius":"6px","bottom":{"style":"none","width":"0px"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-contrast-color has-base-2-background-color has-text-color has-background has-link-color wp-element-button" style="border-radius:6px;border-bottom-style:none;border-bottom-width:0px;padding-top:6px;padding-right:var(--wp--preset--spacing--10);padding-bottom:6px;padding-left:var(--wp--preset--spacing--10)">View All</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":7,"query":{"perPage":"1","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":{"category":[]}}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10","left":"var:preset|spacing|10","right":"var:preset|spacing|10"}}},"backgroundColor":"base-2","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-base-2-background-color has-background" style="padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--10)"><!-- wp:post-featured-image {"isLink":true,"style":{"border":{"radius":"0px"}}} /-->

<!-- wp:tag-cloud {"numberOfTags":3} /-->

<!-- wp:post-title {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"typography":{"fontSize":"21px","fontStyle":"normal","fontWeight":"700"},"spacing":{"margin":{"top":"15px","bottom":"10px"}}},"textColor":"contrast"} /-->

<!-- wp:post-date {"format":"M j, Y","style":{"spacing":{"margin":{"top":"6px","bottom":"0"}},"typography":{"fontSize":"14px"}}} /-->

<!-- wp:post-excerpt {"moreText":"Continue Reading","excerptLength":29,"style":{"spacing":{"margin":{"top":"10px","bottom":"0px"}}}} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query -->

<!-- wp:query {"queryId":27,"query":{"perPage":"3","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":{"category":[]}}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"0"}}} -->
<!-- wp:columns {"style":{"border":{"radius":"6px","color":"#ebebeb","width":"1px"},"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10","left":"var:preset|spacing|10","right":"var:preset|spacing|10"},"margin":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"}}},"backgroundColor":"base-2"} -->
<div class="wp-block-columns has-border-color has-base-2-background-color has-background" style="border-color:#ebebeb;border-width:1px;border-radius:6px;margin-top:var(--wp--preset--spacing--10);margin-bottom:var(--wp--preset--spacing--10);padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--10)"><!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:post-featured-image {"isLink":true,"height":"72px","style":{"border":{"radius":"6px"}}} /--></div>
<!-- /wp:column -->

<!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:post-title {"isLink":true,"style":{"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"top":"0px","bottom":"6px"}}}} /-->

<!-- wp:post-date {"format":"M j, Y","style":{"typography":{"fontSize":"14px"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"10px","bottom":"10px","left":"12px","right":"12px"}},"border":{"radius":"6px"},"color":{"gradient":"linear-gradient(90deg,rgb(81,70,162) 0%,rgb(52,117,104) 16%,rgb(49,81,56) 35%,rgb(194,50,50) 63%,rgb(151,47,47) 100%)"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group has-background" style="border-radius:6px;background:linear-gradient(90deg,rgb(81,70,162) 0%,rgb(52,117,104) 16%,rgb(49,81,56) 35%,rgb(194,50,50) 63%,rgb(151,47,47) 100%);padding-top:10px;padding-right:12px;padding-bottom:10px;padding-left:12px"><!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"21px","textTransform":"uppercase","letterSpacing":"1px"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}}},"textColor":"base-2"} -->
<h2 class="wp-block-heading has-base-2-color has-text-color has-link-color" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;font-size:21px;font-style:normal;font-weight:700;letter-spacing:1px;text-transform:uppercase"><?php echo esc_html__( 'Social', 'newsnest' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"base-2","textColor":"contrast","style":{"spacing":{"padding":{"left":"var:preset|spacing|10","right":"var:preset|spacing|10","top":"6px","bottom":"6px"}},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"border":{"radius":"6px","bottom":{"style":"none","width":"0px"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-contrast-color has-base-2-background-color has-text-color has-background has-link-color wp-element-button" style="border-radius:6px;border-bottom-style:none;border-bottom-width:0px;padding-top:6px;padding-right:var(--wp--preset--spacing--10);padding-bottom:6px;padding-left:var(--wp--preset--spacing--10)"><?php echo esc_html__( 'View All', 'newsnest' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":7,"query":{"perPage":"1","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":{"category":[]}}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10","left":"var:preset|spacing|10","right":"var:preset|spacing|10"}}},"backgroundColor":"base-2","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-base-2-background-color has-background" style="padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--10)"><!-- wp:post-featured-image {"isLink":true,"style":{"border":{"radius":"0px"}}} /-->

<!-- wp:tag-cloud {"numberOfTags":3} /-->

<!-- wp:post-title {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"typography":{"fontSize":"21px","fontStyle":"normal","fontWeight":"700"},"spacing":{"margin":{"top":"15px","bottom":"10px"}}},"textColor":"contrast"} /-->

<!-- wp:post-date {"format":"M j, Y","style":{"spacing":{"margin":{"top":"6px","bottom":"0"}},"typography":{"fontSize":"14px"}}} /-->

<!-- wp:post-excerpt {"moreText":"Continue Reading","excerptLength":25,"style":{"spacing":{"margin":{"top":"10px","bottom":"0px"}}}} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query -->

<!-- wp:query {"queryId":27,"query":{"perPage":"3","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":{"category":[]}}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"0"}}} -->
<!-- wp:columns {"style":{"border":{"radius":"6px","color":"#ebebeb","width":"1px"},"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10","left":"var:preset|spacing|10","right":"var:preset|spacing|10"},"margin":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"}}},"backgroundColor":"base-2"} -->
<div class="wp-block-columns has-border-color has-base-2-background-color has-background" style="border-color:#ebebeb;border-width:1px;border-radius:6px;margin-top:var(--wp--preset--spacing--10);margin-bottom:var(--wp--preset--spacing--10);padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--10)"><!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:post-featured-image {"isLink":true,"style":{"border":{"radius":"6px"}}} /--></div>
<!-- /wp:column -->

<!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:post-title {"isLink":true,"style":{"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"top":"0px","bottom":"6px"}}}} /-->

<!-- wp:post-date {"format":"M j, Y","style":{"typography":{"fontSize":"14px"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"id":266,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"6px"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_stylesheet_directory_uri() );?>/assets/images/add.png" alt="" class="wp-image-266" style="border-radius:6px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"id":266,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"6px"},"color":{"duotone":"var:preset|duotone|duotone-5"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_stylesheet_directory_uri() );?>/assets/images/add.png" alt="" class="wp-image-266" style="border-radius:6px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->