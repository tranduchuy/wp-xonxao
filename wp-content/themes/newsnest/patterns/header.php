<?php
/**
 * Title: Header
 * Slug: newsnest/header
 * Categories: header, newsnest
 * Keywords: header
 * Block Types: core/template-part/header
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"right":"0px","left":"0px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="padding-right:0px;padding-left:0px"><!-- wp:group {"style":{"spacing":{"padding":{"top":"10px","bottom":"10px","left":"var:preset|spacing|10","right":"var:preset|spacing|10"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"primary","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-primary-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:10px;padding-right:var(--wp--preset--spacing--10);padding-bottom:10px;padding-left:var(--wp--preset--spacing--10)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}},"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"600"}},"textColor":"base-2","className":"hide-on-mobile"} -->
<h4 class="wp-block-heading hide-on-mobile has-base-2-color has-text-color has-link-color" style="font-size:16px;font-style:normal;font-weight:600"><?php echo esc_html__( '# Top Tags', 'newsnest' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:tag-cloud {"numberOfTags":5,"smallestFontSize":"13px","largestFontSize":"13px","className":"is-style-outline","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"layout":{"selfStretch":"fit","flexSize":null}}} /--></div>
<!-- /wp:group -->

<!-- wp:social-links {"iconColor":"primary","iconColorValue":"#2c6955","iconBackgroundColorValue":"#F8F8F8","size":"has-small-icon-size","style":{"spacing":{"blockGap":{"left":"10px"},"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"className":"is-style-default hide-on-mobile"} -->
<ul class="wp-block-social-links has-small-icon-size has-icon-color has-icon-background-color is-style-default hide-on-mobile" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /-->

<!-- wp:social-link {"url":"#","service":"youtube"} /-->

<!-- wp:social-link {"url":"#","service":"linkedin"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"30px","bottom":"30px","left":"var:preset|spacing|20","right":"var:preset|spacing|20"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide has-base-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:30px;padding-right:var(--wp--preset--spacing--20);padding-bottom:30px;padding-left:var(--wp--preset--spacing--20)"><!-- wp:columns {"verticalAlignment":"center","isStackedOnMobile":false} -->
<div class="wp-block-columns are-vertically-aligned-center is-not-stacked-on-mobile"><!-- wp:column {"verticalAlignment":"center","width":"40%","layout":{"type":"default"}} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%"><!-- wp:site-title {"level":0,"style":{"spacing":{"margin":{"right":"var:preset|spacing|20","bottom":"0"}},"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"42px","lineHeight":"1.2"},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast","fontFamily":"playfair"} /-->

<!-- wp:site-tagline {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontStyle":"italic","fontWeight":"500"}},"textColor":"primary"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":""} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"id":266,"sizeSlug":"full","linkDestination":"custom","style":{"border":{"radius":"3px"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_stylesheet_directory_uri() );?>/assets/images/add.png" alt="" class="wp-image-266" style="border-radius:3px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"10px","bottom":"10px","left":"var:preset|spacing|20","right":"var:preset|spacing|20"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"secondary","layout":{"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-group alignwide has-secondary-background-color has-background" id="sticky-header" style="margin-top:0;margin-bottom:0;padding-top:10px;padding-right:var(--wp--preset--spacing--20);padding-bottom:10px;padding-left:var(--wp--preset--spacing--20)"><!-- wp:columns {"verticalAlignment":"center","isStackedOnMobile":false} -->
<div class="wp-block-columns are-vertically-aligned-center is-not-stacked-on-mobile"><!-- wp:column {"verticalAlignment":"center","width":""} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide"><!-- wp:navigation {"textColor":"base-2","icon":"menu","overlayTextColor":"contrast","layout":{"type":"flex","justifyContent":"left"},"style":{"typography":{"fontStyle":"normal","fontWeight":"400"},"spacing":{"blockGap":"25px"}}} /-->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search Now","width":250,"widthUnit":"px","buttonText":"Search","buttonPosition":"button-inside","buttonUseIcon":true,"style":{"border":{"radius":{"topLeft":"6px","topRight":"0px","bottomLeft":"6px","bottomRight":"0px"},"width":"0px","style":"none"},"layout":{"selfStretch":"fit","flexSize":null}},"backgroundColor":"primary","fontSize":"small"} /-->

<!-- wp:image {"id":154,"width":"25px","height":"25px","scale":"cover","sizeSlug":"full","linkDestination":"custom"} -->
<figure class="wp-block-image size-full is-resized"><a href="#"><img src="<?php echo esc_url( get_stylesheet_directory_uri() );?>/assets/images/bell-solid.png" alt="" class="wp-image-154" style="object-fit:cover;width:25px;height:25px"/></a></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->