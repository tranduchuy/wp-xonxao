<?php
 /**
  * Title: Archive Product
  * Slug: newsnest/archive-product
  * Inserter: no
  */
?>
<!-- wp:cover {"overlayColor":"primary","minHeight":232,"minHeightUnit":"px","tagName":"main","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<main class="wp-block-cover" style="margin-top:0;margin-bottom:0;min-height:232px"><span aria-hidden="true" class="wp-block-cover__background has-primary-background-color has-background-dim-100 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:query-title {"type":"archive","textAlign":"center","showPrefix":false,"align":"wide"} /-->

    <!-- wp:spacer {"height":"20px"} -->
    <div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->
    
    <!-- wp:group {"align":"wide","style":{"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}}},"textColor":"base-2","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
    <div class="wp-block-group alignwide has-base-2-color has-text-color has-link-color"><!-- wp:woocommerce/breadcrumbs {"textColor":"accent-3","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-3"}}}}} /--></div>
    <!-- /wp:group --></div></main>
    <!-- /wp:cover -->
    
    <!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"layout":{"inherit":true,"type":"constrained"}} -->
    <div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:woocommerce/store-notices /-->
    
    <!-- wp:group {"className":"alignwide","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
    <div class="wp-block-group alignwide"><!-- wp:woocommerce/product-results-count /-->
    
    <!-- wp:woocommerce/catalog-sorting /--></div>
    <!-- /wp:group -->
    
    <!-- wp:query {"queryId":0,"query":{"perPage":10,"pages":0,"offset":0,"postType":"product","order":"asc","orderBy":"title","author":"","search":"","exclude":[],"sticky":"","inherit":true,"__woocommerceAttributes":[],"__woocommerceStockStatus":["instock","outofstock","onbackorder"]},"namespace":"woocommerce/product-query","align":"wide"} -->
    <div class="wp-block-query alignwide"><!-- wp:post-template {"className":"products-block-post-template","layout":{"type":"grid","columnCount":3},"__woocommerceNamespace":"woocommerce/product-query/product-template"} -->
    <!-- wp:woocommerce/product-image {"isDescendentOfQueryLoop":true} /-->
    
    <!-- wp:post-title {"textAlign":"center","level":3,"isLink":true,"fontSize":"medium","__woocommerceNamespace":"woocommerce/product-query/product-title"} /-->
    
    <!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textAlign":"center","style":{"spacing":{"margin":{"bottom":"1rem"}}}} /-->
    
    <!-- wp:woocommerce/product-button {"textAlign":"center","isDescendentOfQueryLoop":true,"fontSize":"small","style":{"spacing":{"margin":{"bottom":"1rem"}}}} /-->
    <!-- /wp:post-template -->
    
    <!-- wp:spacer {"height":"8px"} -->
    <div style="height:8px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->
    
    <!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"center"}} -->
    <!-- wp:query-pagination-previous /-->
    
    <!-- wp:query-pagination-numbers /-->
    
    <!-- wp:query-pagination-next /-->
    <!-- /wp:query-pagination -->
    
    <!-- wp:query-no-results -->
    <!-- wp:paragraph -->
    <p>
    <?php echo esc_html__( 'No products were found matching your selection. ', 'newsnest' ); ?> </p>
    <!-- /wp:paragraph -->
    <!-- /wp:query-no-results --></div>
    <!-- /wp:query -->
    
    <!-- wp:spacer {"height":"33px"} -->
    <div style="height:33px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer --></div>
    <!-- /wp:group -->