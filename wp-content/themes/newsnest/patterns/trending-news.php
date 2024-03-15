<?php
/**
 * Title: Trending News
 * Slug: newsnest/trending-news
 * Categories: newsnest
 * Keywords: trending news
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"base-2","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-base-2-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"padding":{"top":"10px","bottom":"10px","left":"12px","right":"12px"}},"border":{"radius":"6px"}},"backgroundColor":"secondary","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group has-secondary-background-color has-background" style="border-radius:6px;padding-top:10px;padding-right:12px;padding-bottom:10px;padding-left:12px"><!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"21px","textTransform":"uppercase","letterSpacing":"1px"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}}},"textColor":"base-2"} -->
<h2 class="wp-block-heading has-base-2-color has-text-color has-link-color" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;font-size:21px;font-style:normal;font-weight:700;letter-spacing:1px;text-transform:uppercase"><?php echo esc_html__( 'Trending today', 'newsnest' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"base-2","textColor":"contrast","style":{"spacing":{"padding":{"left":"var:preset|spacing|10","right":"var:preset|spacing|10","top":"6px","bottom":"6px"}},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"border":{"radius":"6px","bottom":{"style":"none","width":"0px"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-contrast-color has-base-2-background-color has-text-color has-background has-link-color wp-element-button" style="border-radius:6px;border-bottom-style:none;border-bottom-width:0px;padding-top:6px;padding-right:var(--wp--preset--spacing--10);padding-bottom:6px;padding-left:var(--wp--preset--spacing--10)"><?php echo esc_html__( 'View All', 'newsnest' ); ?> </a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|30"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"66.66%","style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:query {"queryId":22,"query":{"perPage":"1","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":{"category":[]}}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:cover {"useFeaturedImage":true,"dimRatio":70,"overlayColor":"contrast","minHeight":450,"contentPosition":"bottom center","style":{"border":{"radius":"6px"},"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"className":"banner-has-slider-inner","layout":{"type":"constrained"}} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-center banner-has-slider-inner" style="border-radius:6px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--40);min-height:450px"><span aria-hidden="true" class="wp-block-cover__background has-contrast-background-color has-background-dim-70 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:tag-cloud {"numberOfTags":4} /-->

<!-- wp:post-title {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}},"typography":{"fontSize":"36px","fontStyle":"normal","fontWeight":"600"}}} /-->

<!-- wp:post-excerpt {"moreText":"Continue Reading","excerptLength":25,"style":{"typography":{"lineHeight":1.6},"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"textColor":"base"} /--></div></div>
<!-- /wp:cover -->
<!-- /wp:post-template --></div>
<!-- /wp:query -->

<!-- wp:query {"queryId":27,"query":{"perPage":"6","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"0"}}} -->
<!-- wp:columns {"verticalAlignment":"center","style":{"border":{"radius":"6px","color":"#ebebeb","width":"1px"},"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10","left":"var:preset|spacing|10","right":"var:preset|spacing|10"},"margin":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"}}},"backgroundColor":"base-2"} -->
<div class="wp-block-columns are-vertically-aligned-center has-border-color has-base-2-background-color has-background" style="border-color:#ebebeb;border-width:1px;border-radius:6px;margin-top:var(--wp--preset--spacing--10);margin-bottom:var(--wp--preset--spacing--10);padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--10)"><!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%"><!-- wp:post-featured-image {"isLink":true,"width":"100%","height":"220px","style":{"border":{"radius":"6px"}}} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":""} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:tag-cloud {"numberOfTags":3,"style":{"spacing":{"margin":{"bottom":"6px"}}}} /-->

<!-- wp:post-title {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"typography":{"fontSize":"21px","fontStyle":"normal","fontWeight":"700"},"spacing":{"margin":{"top":"15px","bottom":"10px"}}},"textColor":"contrast"} /-->

<!-- wp:post-date {"format":"M j, Y","style":{"typography":{"fontSize":"14px"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} /-->

<!-- wp:post-excerpt {"moreText":"Continue Reading","excerptLength":10,"style":{"spacing":{"margin":{"top":"8px","bottom":"0"}}}} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:post-template --></div>
<!-- /wp:query -->

<!-- wp:spacer {"height":"20px"} -->
<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:image {"id":266,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"6px"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_stylesheet_directory_uri() );?>/assets/images/add.png" alt="" class="wp-image-266" style="border-radius:6px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--30)"><!-- wp:group {"style":{"spacing":{"padding":{"top":"10px","bottom":"10px","left":"12px","right":"12px"}},"border":{"radius":"6px"}},"backgroundColor":"secondary","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group has-secondary-background-color has-background" style="border-radius:6px;padding-top:10px;padding-right:12px;padding-bottom:10px;padding-left:12px"><!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"21px","textTransform":"uppercase","letterSpacing":"1px"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}}},"textColor":"base-2"} -->
<h2 class="wp-block-heading has-base-2-color has-text-color has-link-color" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;font-size:21px;font-style:normal;font-weight:700;letter-spacing:1px;text-transform:uppercase">Europe today</h2>
<!-- /wp:heading -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"base-2","textColor":"contrast","style":{"spacing":{"padding":{"left":"var:preset|spacing|10","right":"var:preset|spacing|10","top":"6px","bottom":"6px"}},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"border":{"radius":"6px","bottom":{"style":"none","width":"0px"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-contrast-color has-base-2-background-color has-text-color has-background has-link-color wp-element-button" style="border-radius:6px;border-bottom-style:none;border-bottom-width:0px;padding-top:6px;padding-right:var(--wp--preset--spacing--10);padding-bottom:6px;padding-left:var(--wp--preset--spacing--10)"><?php echo esc_html__( 'View All', 'newsnest' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:columns {"style":{"spacing":{"margin":{"top":"var:preset|spacing|10"}}}} -->
<div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--10)"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:query {"queryId":27,"query":{"perPage":"3","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
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
<div class="wp-block-column"><!-- wp:query {"queryId":27,"query":{"perPage":"3","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
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
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"20px"} -->
<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:image {"id":266,"sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|duotone-1"},"border":{"radius":"6px"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_stylesheet_directory_uri() );?>/assets/images/add.png" alt="" class="wp-image-266" style="border-radius:6px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%","style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}},"className":"sticky-sidebar"} -->
<div class="wp-block-column sticky-sidebar" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;flex-basis:33.33%"><!-- wp:query {"queryId":7,"query":{"perPage":"1","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":{"category":[]}}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10","left":"var:preset|spacing|10","right":"var:preset|spacing|10"},"margin":{"bottom":"var:preset|spacing|10"}},"border":{"radius":"6px"},"typography":{"fontSize":"14px"}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-base-background-color has-background" style="border-radius:6px;margin-bottom:var(--wp--preset--spacing--10);padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--10);font-size:14px"><!-- wp:post-featured-image {"isLink":true,"style":{"border":{"radius":"6px"}}} /-->

<!-- wp:tag-cloud {"numberOfTags":3} /-->

<!-- wp:post-title {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"typography":{"fontSize":"21px","fontStyle":"normal","fontWeight":"700"},"spacing":{"margin":{"top":"15px","bottom":"10px"}}},"textColor":"contrast"} /-->

<!-- wp:post-date {"format":"M j, Y","style":{"spacing":{"margin":{"bottom":"0","top":"8px"}},"typography":{"fontSize":"14px"}}} /-->

<!-- wp:post-excerpt {"moreText":"Continue Reading","excerptLength":13,"style":{"spacing":{"margin":{"top":"10px","bottom":"0px"}}}} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"margin":{"bottom":"var:preset|spacing|10"}},"border":{"radius":"6px"}},"backgroundColor":"base","layout":{"type":"default"}} -->
<div class="wp-block-group has-base-background-color has-background" style="border-radius:6px;margin-bottom:var(--wp--preset--spacing--10);padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:image {"align":"center","id":111,"width":"120px","height":"120px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"100%","width":"0px","style":"none"}},"className":"is-style-rounded"} -->
<figure class="wp-block-image aligncenter size-full is-resized has-custom-border is-style-rounded"><img src="<?php echo esc_url( get_stylesheet_directory_uri() );?>/assets/images/author.jpg" alt="" class="wp-image-111" style="border-style:none;border-width:0px;border-radius:100%;object-fit:cover;width:120px;height:120px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"21px"}}} -->
<h2 class="wp-block-heading has-text-align-center" style="font-size:21px;font-style:normal;font-weight:700"> <?php echo esc_html__( 'John Doe ', 'newsnest' ); ?> </h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast-2"}}},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"contrast-2","fontSize":"sml-medium"} -->
<p class="has-text-align-center has-contrast-2-color has-text-color has-link-color has-sml-medium-font-size" style="margin-top:0;margin-bottom:0"> <?php echo esc_html__( 'Senior Editor', 'newsnest' ); ?> </p>
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

<!-- wp:query {"queryId":27,"query":{"perPage":"3","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
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
<!-- /wp:query -->

<!-- wp:query {"queryId":22,"query":{"perPage":"1","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":{"post_tag":[17]}}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:cover {"useFeaturedImage":true,"dimRatio":70,"overlayColor":"contrast","minHeight":480,"contentPosition":"bottom center","style":{"border":{"radius":"6px"},"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}}},"className":"banner-has-slider-inner","layout":{"type":"constrained"}} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-center banner-has-slider-inner" style="border-radius:6px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20);min-height:480px"><span aria-hidden="true" class="wp-block-cover__background has-contrast-background-color has-background-dim-70 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:tag-cloud {"numberOfTags":3} /-->

<!-- wp:post-title {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}},"typography":{"fontSize":"21px","fontStyle":"normal","fontWeight":"600"}}} /-->

<!-- wp:post-excerpt {"moreText":"Continue Reading","excerptLength":15,"style":{"typography":{"lineHeight":1.6},"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"textColor":"base"} /--></div></div>
<!-- /wp:cover -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->