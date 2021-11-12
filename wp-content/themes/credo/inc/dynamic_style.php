<?php 
global $smof_data;
if( !isset($data) ){
	$data = $smof_data;
}

$data = ftc_array_atts(
			array(
				/* FONTS */
				'ftc_body_font_enable_google_font'					=> 1
				,'ftc_body_font_family'								=> "Arial"
				,'ftc_body_font_google'								=> "Poppins"
				
				,'ftc_secondary_body_font_enable_google_font'		=> 1
				,'ftc_secondary_body_font_family'					=> "Arial"
				,'ftc_secondary_body_font_google'					=> "Raleway"
				
				/* COLORS */
				,'ftc_primary_color'									=> "#527fa4"

				,'ftc_secondary_color'								=> "#333333"
				
                                ,'ftc_body_background_color'								=> "#ffffff"
				/* RESPONSIVE */
				,'ftc_responsive'									=> 1
				,'ftc_layout_fullwidth'								=> 0
				,'ftc_enable_rtl'									=> 0
				
				/* FONT SIZE */
				/* Body */
				,'ftc_font_size_body'								=> 15
				,'ftc_line_height_body'								=> 24
				
				/* Custom CSS */
				,'ftc_custom_css_code'								=> ''
		), $data);		
		
$data = apply_filters('ftc_custom_style_data', $data);

extract( $data );

/* font-body */
if( $data['ftc_body_font_enable_google_font'] ){
    $ftc_body_font              = $data['ftc_body_font_google']['font-family'];
}
else{
    $ftc_body_font              = $data['ftc_body_font_family'];
}

if( $data['ftc_secondary_body_font_enable_google_font'] ){
    $ftc_secondary_body_font        = $data['ftc_secondary_body_font_google']['font-family'];
}
else{
    $ftc_secondary_body_font        = $data['ftc_secondary_body_font_family'];
}

?>  
	
	/*
	1. FONT FAMILY
	2. GENERAL COLORS
	*/
	
	
	/* ============= 1. FONT FAMILY ============== */

    body{
        line-height: <?php echo esc_html($ftc_line_height_body)."px"?>;
    }
	
        html, 
	    body,
        .widget-title.heading-title,
        .widget-title.product_title,.newletter_sub_input .button.button-secondary,
        #mega_main_menu.primary ul li .mega_dropdown > li.sub-style > .item_link .link_text,
        .item-description .price,
        .woocommerce .products.list .product h3.product-name > a,
        .woocommerce-page .products.list .product h3.product-name > a,
        .woocommerce .products.list .product .price .amount,
        .woocommerce-page .products.list .product .price .amount,
        div.product .single_variation_wrap .amount,
        .ftc-my-wishlist *,
        .woocommerce div.product p.price
	{
		font-family: <?php echo esc_html($ftc_body_font) ?>;
	}
	
	#mega_main_menu.primary ul li .mega_dropdown > li.sub-style > ul.mega_dropdown,
        #mega_main_menu li.multicolumn_dropdown > .mega_dropdown > li .mega_dropdown > li,
        #mega_main_menu.primary ul li .mega_dropdown > li > .item_link .link_text,
        .info-open,
        .info-phone,
        .ftc-sb-account .ftc_login > a,
        .ftc-sb-account,
        .dropdown-button span > span,
        body p,
        .wishlist-empty,
        div.product .social-sharing li a,
        .ftc-search form,
        .ftc-shop-cart,
        .conditions-box,
         .item-description .product_title,
        .testimonial-content .info,
        .testimonial-content .byline,
        .widget-container ul.product-categories ul.children li a,
        .widget-container:not(.ftc-product-categories-widget):not(.widget_product_categories):not(.ftc-items-widget) :not(.widget-title),
        .ftc-products-category ul.tabs li span.title,
        .woocommerce-pagination,
        .woocommerce-result-count,
        .products.list .short-description.list,
        div.product div[itemprop="offers"] .price .amount,
        .orderby-title,
        .blogs .post-info,
        .blog .entry-info .entry-summary .short-content,
        .single-post .entry-info .entry-summary .short-content,
        .single-post article .post-info .info-category,
        .single-post article .post-info .info-category,
        #comments .comments-title,
        #comments .comment-metadata a,
        .post-navigation .nav-previous,
        .post-navigation .nav-next,
        .woocommerce div.product .product_title,
        .woocommerce-review-link,
        .ftc_feature_info,
        .woocommerce div.product p.stock,
        .woocommerce div.product .summary div[itemprop="description"],
        .woocommerce div.product .woocommerce-tabs .panel,
        .woocommerce div.product form.cart .group_table td.label,
        .woocommerce div.product form.cart .group_table td.price,
        footer,
        footer a,
        .blogs article .image-eff:before,
        .blogs article a.gallery .owl-item:after,
        .post-info .entry-summary .full-content,
        .post-info .entry-summary .full-content p
	{
		font-family: <?php echo esc_html($ftc_secondary_body_font) ?>;
	}
	    body,
        .site-footer,
        .woocommerce div.product form.cart .group_table td.label,
        .woocommerce .product .conditions-box span,
        .item-description .meta_info .yith-wcwl-add-to-wishlist a,
        .item-description .meta_info .compare,
        .social-icons .ftc-tooltip:before,
        .tagcloud a,
        .details_thumbnails .owl-nav > div:before,
        div.product .summary .yith-wcwl-add-to-wishlist a:before,
        .pp_woocommerce div.product .summary .compare:before,
        .woocommerce div.product .summary .compare:before,
        .woocommerce-page div.product .summary .compare:before,
        .woocommerce #content div.product .summary .compare:before,
        .woocommerce-page #content div.product .summary .compare:before,
        .blockquote,
        .ftc-number h3.ftc_number_meta,
        .woocommerce .widget_price_filter .price_slider_amount,
        .wishlist-empty,
        .woocommerce div.product form.cart .button,
        .woocommerce table.wishlist_table
        {
                font-size: <?php echo esc_html($ftc_font_size_body) ?>px;
        }
	/* ========== 2. GENERAL COLORS ========== */
        /* ========== Primary color ========== */
	.header-currency:hover .ftc-currency > a,
        .ftc-sb-language:hover li .ftc_lang,
        .woocommerce a.remove:hover,
        .dropdown-container .ftc_cart_check > a.button.view-cart:hover,
        .ftc-my-wishlist a:hover,
        .ftc-sb-account .ftc_login > a:hover,
        .header-currency .ftc-currency ul li:hover,
        .dropdown-button span:hover,
        body.wpb-js-composer .vc_general.vc_tta-tabs .vc_tta-tab.vc_active > a,
        body.wpb-js-composer .vc_general.vc_tta-tabs .vc_tta-tab > a:hover,
        #mega_main_menu.primary > .menu_holder.sticky_container > .menu_inner > ul > li > .item_link:hover *,
        #mega_main_menu.primary > .menu_holder.sticky_container > .menu_inner > ul > li.current-menu-item > .item_link *,
        #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li.current-menu-ancestor > .item_link,
        #mega_main_menu.primary .mega_dropdown > li > .item_link:hover *,
        #mega_main_menu.primary .mega_dropdown > li.current-menu-item > .item_link *,
        #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li.current-menu-item > .item_link *,
        div.product div[itemprop="offers"] .price .amount,
        div.product .single_variation_wrap .amount,
        ins .amount,
        .ftc-meta-widget .price ins,
        .ftc-meta-widget .star-rating,
        .woocommerce .products .star-rating,
        .woocommerce-page .products .star-rating,
        .ul-style.circle li:before,
        .star-rating:before,
        .woocommerce form .form-row .required,
        .blogs .comment-count i,
        .blog .comment-count i,
        .single-post .comment-count i,
        .single-post article .post-info .info-category,
        .single-post article .post-info .info-category .cat-links a,
        .single-post article .post-info .info-category .vcard.author a,
        .ftc-meta-widget.item-description .meta_info a:hover,
        .ftc-meta-widget.item-description .meta_info .yith-wcwl-add-to-wishlist a:hover,
        .grid_list_nav a.active,
        .ftc-quickshop-wrapper .owl-nav > div.owl-next:hover,
        .ftc-quickshop-wrapper .owl-nav > div.owl-prev:hover,
        .shortcode-icon .vc_icon_element.vc_icon_element-outer .vc_icon_element-inner.vc_icon_element-color-orange .vc_icon_element-icon,
        .comment-reply-link .icon,
        body table.compare-list tr.remove td > a .remove:hover:before,
        a:hover,
        a:focus,
        .vc_toggle_title h4:hover,
        .vc_toggle_title h4:before,
        .blogs article h3.product_title a:hover,
        article .post-info a:hover,
        article .comment-content a:hover,
        .main-navigation li li.focus > a,
	.main-navigation li li:focus > a,
	.main-navigation li li:hover > a,
	.main-navigation li li a:hover,
	.main-navigation li li a:focus,
	.main-navigation li li.current_page_item a:hover,
	.main-navigation li li.current-menu-item a:hover,
	.main-navigation li li.current_page_item a:focus,
	.main-navigation li li.current-menu-item a:focus,
    .woocommerce-account .woocommerce-MyAccount-navigation li.is-active a,
    article .post-info .cat-links a,article .post-info .tags-link a,
    article .entry-header .caftc-link .cat-links a,.woocommerce-page .products.list .product h3.product-name a:hover,
    .woocommerce .products.list .product h3.product-name a:hover,
    .ftc-product.product:hover .item-description h3.product_title a:hover,
    .header-currency .ftc-currency ul li:hover, 
    #ftc_language ul ul li:hover a span,
    .nav-right a.ftc-checkout-menu:hover,
    .ftc-breadcrumb-title .ftc-breadcrumbs-content span.current,
    .ftc-breadcrumb-title .ftc-breadcrumbs-content a:hover,
    .content-sale-off h4 span.sdt_descr,
    .content-sale-off p span.sdt_code,
    footer .ftc_newletter_sub .newletter_sub .button.button-secondary.transparent:before,
    .footer-contact .ftc-feature .ftc_feature_content h3 a,
    .footer-contact .ftc-feature .feature-content a.feature-icon,
    .ftc-footer .copy-com span a,   
    .grid_list_nav a.active,
    .grid_list_nav a:hover,
    .header-currency:hover .ftc-currency > a,
    .ftc-sb-language:hover li .ftc_lang,
    .header-currency .ftc-currency ul li:hover, 
    #ftc_language ul ul li:hover a span,
    .ftc-my-wishlist a:hover, 
    .ftc-sb-account .ftc_login > a:hover, 
    .dropdown-button span:hover,
    .nav-right a.ftc-checkout-menu:hover,
    .ftc-shop-cart .ftc_cart_list li .cart-item-wrapper h3.product-name a:hover,
    .woocommerce div.product .woocommerce-tabs ul.tabs li.active a,
    .comment-meta a:hover,
    .vc_toggle_title h4:hover,
    .vc_toggle_active .vc_toggle_title h4,
    .widget-container ul.product-categories > li.cat-parent.active >a,
    .widget-container ul.product-categories > li.cat-item.cat-parent.active >span.icon-toggle,
    .ftc-recent-comments-widget .comment-meta>div.meta span.author a:hover,
    .contact_info_map .info_contact .info_column ul:before,
    .woocommerce-info::before,
    .woocommerce div.product .woocommerce-tabs ul.tabs li a:hover,
    .screen-reader-text:focus,
    .woocommerce .product .conditions-box span.onsale:before,
    .woocommerce .product .item-description .meta_info a:hover,
    .product-price .amount,
    .woocommerce .products .product .price .amount, 
    .woocommerce-page .products .product .price .amount,
    .info-company li i,
    footer .ftc_newletter_sub .newletter_sub .button.button-secondary.transparent:before,
    div.product .summary .yith-wcwl-add-to-wishlist a:hover,
    .heading-title span.first-word,
    .woocommerce ul.product_list_widget .price span.amount,
    .modern-sale h3.price,
    .deal-products .ftc-product.product .item-description .counter-wrapper > div .number-wrapper .number, 
    .deal-products .ftc-product.product .item-description .counter-wrapper > div .countdown-meta,
    div.product .summary .counter-wrapper > div .countdown-meta,
    div.product .summary .counter-wrapper > div .number-wrapper .number,
    .subcribe-form .widget.newletter_sub form .newletter_sub_input button.button-secondary:hover,
    .header-ftc.header-layout2 #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li.current-menu-item > .item_link *,
    .header-ftc.header-layout2 #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li:hover > .item_link *, 
    .header-ftc.header-layout2 #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li.current-menu-ancestor > .item_link *,
    .header-ftc.header-layout3 #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li.current-menu-item > .item_link *,
    .header-ftc.header-layout3 #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li:hover > .item_link *, 
    .header-ftc.header-layout3 #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li.current-menu-ancestor > .item_link *,
    .st-row-feature .ftc-feature .feature-content > a,
    .st-row-feature  .feature-content:hover > .ftc_feature_content h3 a,
    .nav-right a.ftc-checkout-menu:hover,
    .woocommerce .product .conditions-box span:before,
    .subcribe-form .mc4wp-form-fields .widget.newletter_sub .newletter_sub_input button.button-secondary:hover,
    .header-ftc.header-layout3 .nav-right a.ftc-checkout-menu:hover,
    .decorative-icon p.icon-center:before,
    .header-ftc.header-layout1 .header-sticky-hide #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li.current-menu-item > .item_link *,
    .header-ftc.header-layout1 .header-sticky-hide #mega_main_menu > .menu_holder > .menu_inner > ul > li:hover,
    .header-ftc.header-layout1 .header-sticky-hide #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li.current-menu-item > .item_link:after, 
    .header-ftc.header-layout1 .header-sticky-hide #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li:hover > .item_link:after,  
    .header-ftc.header-layout1 .header-sticky-hide #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li.current-menu-ancestor > .item_link:after,
    .header-ftc.header-layout1 .header-sticky-hide #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li:hover > .item_link *,
    .header-ftc.header-layout1 .header-sticky-hide #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li.current-menu-ancestor > .item_link *,
    .header-ftc.header-layout5 .header-sticky-hide #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li.current-menu-item > .item_link *,
    .header-ftc.header-layout5 .header-sticky-hide #mega_main_menu > .menu_holder > .menu_inner > ul > li:hover,
    .header-ftc.header-layout5 .header-sticky-hide #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li.current-menu-item > .item_link:after, 
    .header-ftc.header-layout5 .header-sticky-hide #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li:hover > .item_link:after,  
    .header-ftc.header-layout5 .header-sticky-hide #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li.current-menu-ancestor > .item_link:after,
    .header-ftc.header-layout5 .header-sticky-hide #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li:hover > .item_link *,
    .header-ftc.header-layout5 .header-sticky-hide #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li.current-menu-ancestor > .item_link *,
    .header-ftc.header-layout5 #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li:hover > .item_link *,
    .content-sale-off h4 span.sdt_descr,
    .content-sale-off p span.sdt_code,
    #mega_main_menu.primary ul li .mega_dropdown > li.sub-style > .item_link .link_text,
    .widget-container ul.product-categories ul.children li.current,
    .post-info .vcard.author a,
    .footer-center .links_ft ul li:hover a,
    footer .footer-address7 .copy-com a:hover,
    .footer_blog7 .ftc_blog_widget .post_list_widget li:hover a.post-title,
    .feature-product6 .woocommerce .product .images .group-button-product > div a,
    .blog-home7 article a.button-readmore:hover:after,
    .blog-home7 .blogs .entry-header span i.fa.fa-user,
    .blog-home8 .blogs .post-info .content-info a.button-readmore:hover,
    .footer-mobile > div > a:hover,
    .footer-mobile i,
    .footer-mobile > div > .ftc-my-wishlist:hover,
    .mobile-wishlist .tini-wishlist:hover,
    .ftc_shopping_form .cart-item-wrapper span.woocommerce-Price-amount.amount,
    .ftc_shopping_form .ftc_cart_check span.woocommerce-Price-amount.amount,
    .header-ftc.header-layout7 #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li:hover > .item_link *,
    .header-ftc.header-layout8 #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li:hover > .item_link *,
    .footer-address a:hover,
    .contact_info_map .info_contact .info_column.email a:hover
    {
        color: <?php echo esc_html($ftc_primary_color) ?>;
    }
    #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li:hover > .item_link,
    #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li > .item_link:hover, 
    #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li > .item_link:focus,
    #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li.current-menu-ancestor > .item_link, 
    #mega_main_menu.primary .mega_dropdown > li.current-menu-item > .item_link *,
    #mega_main_menu.primary .mega_dropdown > li > .item_link:focus *, 
    #mega_main_menu.primary .mega_dropdown > li > .item_link:hover *, 
    #mega_main_menu.primary li.post_type_dropdown > .mega_dropdown > li > .processed_image:hover > .cover > a > i,
    .related.products h2:after, 
    .heading-title h2:after,
    .widget-container.ftc-product-categories-widget ul.product-categories li:hover >span.icon-toggle:before,
    .widget-container.ftc-product-categories-widget ul.product-categories li a:hover,
    .woocommerce #content table.wishlist_table.cart a.remove:hover,
    .woocommerce a.remove:hover, 
    body table.compare-list tr.remove td > a .remove:hover:before,
    #mega_main_menu.primary > .menu_holder.sticky_container > .menu_inner > ul > li.current-menu-item > .item_link *,
    #mega_main_menu.primary > .menu_holder.sticky_container > .menu_inner > ul > li.current-menu-item > .item_link:after, 
    #mega_main_menu.primary > .menu_holder.sticky_container > .menu_inner > ul > li:hover > .item_link:after,
    #mega_main_menu.primary > .menu_holder.sticky_container > .menu_inner > ul > li.current-menu-item > .item_link *,
    #mega_main_menu.primary > .menu_holder.sticky_container > .menu_inner > ul > li:hover > .item_link > .link_content > .link_text,
    #mega_main_menu.primary > .menu_holder.sticky_container > .menu_inner > ul > li:hover > .item_link:after, 
    #mega_main_menu.primary > .menu_holder.sticky_container > .menu_inner > ul > li.current-menu-item > .item_link:after,
    #mega_main_menu.primary > .menu_holder.sticky_container  > .menu_inner > ul > li.current-menu-ancestor > .item_link *,
    #mega_main_menu.primary > .menu_holder.sticky_container  > .menu_inner > ul > li.current-menu-ancestor > .item_link:after
         {
            color: <?php echo esc_html($ftc_primary_color) ?> !important;
         }
        .dropdown-container .ftc_cart_check > a.button.checkout:hover,
        .woocommerce .widget_price_filter .price_slider_amount .button:hover,
        .woocommerce-page .widget_price_filter .price_slider_amount .button:hover,
        body input.wpcf7-submit:hover,
        .woocommerce .products.list .product .item-description .add-to-cart a:hover,
        .woocommerce .products.list .product .item-description .button-in a:hover,
        .woocommerce .products.list .product .item-description .meta_info  a:not(.quickview):hover,
        .woocommerce .products.list .product .item-description .quickview i:hover,
        .tp-bullets .tp-bullet:after,
        .woocommerce .product .conditions-box .onsale,
        .woocommerce #respond input#submit:hover, 
        .woocommerce a.button:hover,
        .woocommerce button.button:hover, 
        .woocommerce input.button:hover,
        .vc_color-orange.vc_message_box-solid,
        .woocommerce nav.woocommerce-pagination ul li span.current,
        .woocommerce-page nav.woocommerce-pagination ul li span.current,
        .woocommerce nav.woocommerce-pagination ul li a.next:hover,
        .woocommerce-page nav.woocommerce-pagination ul li a.next:hover,
        .woocommerce nav.woocommerce-pagination ul li a.prev:hover,
        .woocommerce-page nav.woocommerce-pagination ul li a.prev:hover,
        .woocommerce nav.woocommerce-pagination ul li a:hover,
        .woocommerce-page nav.woocommerce-pagination ul li a:hover,
        .woocommerce .form-row input.button:hover,
        .load-more-wrapper .button:hover,
        body .vc_general.vc_tta-tabs.vc_tta-tabs-position-left .vc_tta-tab:hover,
        body .vc_general.vc_tta-tabs.vc_tta-tabs-position-left .vc_tta-tab.vc_active,
        .woocommerce div.product form.cart .button:hover,
        .woocommerce div.product div.summary p.cart a:hover,
        .woocommerce #content div.product .summary .compare:hover,
        .tagcloud a:hover,
        .woocommerce .wc-proceed-to-checkout a.button.alt:hover,
        .woocommerce .wc-proceed-to-checkout a.button:hover,
        .woocommerce-cart table.cart input.button:hover,
        .owl-dots > .owl-dot span:hover,
        .owl-dots > .owl-dot.active span,
        footer .style-3 .newletter_sub .button.button-secondary.transparent,
        .woocommerce .widget_price_filter .ui-slider .ui-slider-range,
        body .vc_tta.vc_tta-accordion .vc_tta-panel.vc_active .vc_tta-panel-title > a,
        body .vc_tta.vc_tta-accordion .vc_tta-panel .vc_tta-panel-title > a:hover,
        body div.pp_details a.pp_close:hover:before,
        .vc_toggle_title h4:after,
        body.error404 .page-header a,
        body .button.button-secondary,
        .pp_woocommerce div.product form.cart .button,
        .shortcode-icon .vc_icon_element.vc_icon_element-outer .vc_icon_element-inner.vc_icon_element-background-color-orange.vc_icon_element-background,
        .style1 .ftc-countdown .counter-wrapper > div,
        .style2 .ftc-countdown .counter-wrapper > div,
        .style3 .ftc-countdown .counter-wrapper > div,
        #cboxClose:hover,
        body > h1,
        table.compare-list .add-to-cart td a:hover,
        .vc_progress_bar.wpb_content_element > .vc_general.vc_single_bar > .vc_bar,
        div.product.vertical-thumbnail .details-img .owl-controls div.owl-prev:hover,
        div.product.vertical-thumbnail .details-img .owl-controls div.owl-next:hover,
        ul > .page-numbers.current,
        ul > .page-numbers:hover,
        article a.button-readmore:hover,.text_service a,.vc_toggle_title h4:before,.vc_toggle_active .vc_toggle_title h4:before,
        .post-item.sticky .post-info .entry-info .sticky-post,
        .woocommerce .products.list .product .item-description .compare.added:hover,
        .conditions-box .onsale:before,
        .tparrows:hover, 
        .tparrows:focus,
        .ftc-sb-button a.ftc-button-1:hover,
        .text_static_1 h3:before,
        .text_static_2 h3:before,
         .blogs .entry-header >div.date-time,
         .blogs .post-info .content-info a.button-readmore,
         .owl-nav > div:hover, 
         .owl-nav > div:focus,
         .ftc-product-categories-widget .widget-title-wrapper h3.widget-title, 
         .woocommerce nav.woocommerce-pagination ul li span.current, 
         .woocommerce-page nav.woocommerce-pagination ul li span.current,
         .navigation.pagination .nav-links >span.page-numbers.current,
         .widget-container.widget_categories .widget-title-wrapper .widget-title, 
         .widget-container.ftc-blogs-widget .widget-title-wrapper .widget-title, 
         .widget-container.ftc-recent-comments-widget .widget-title-wrapper .widget-title, 
         .widget-container.widget_tag_cloud .widget-title-wrapper .widget-title,
         .single-post .form-submit input#submit:hover, 
         .single-post .form-submit:focus,
         body .subscribe_comingsoon .newletter_sub_input .button.button-secondary:hover,
         .woocommerce div.product div.summary p.cart a, 
         .woocommerce div.product form.cart .button,
         .tab-category .vc_general.vc_tta-tabs li.vc_tta-tab.vc_active,
        .tab-category .vc_general.vc_tta-tabs li.vc_tta-tab:hover, 
        #to-top a:hover,
        .woocommerce .products.list .ftc-product.product .item-description > .meta_info > .add-to-cart a,
        .details_thumbnails .owl-nav .owl-prev:hover,
        .details_thumbnails .owl-nav .owl-next:hover,
        .widget-container.widget_categories .widget-title-wrapper .widget-title, 
        .widget-container.ftc-blogs-widget .widget-title-wrapper .widget-title, 
        .widget-container.ftc-recent-comments-widget .widget-title-wrapper .widget-title, 
        .widget-container.widget_tag_cloud .widget-title-wrapper .widget-title,
        .pp_woocommerce div.product div.summary p.cart a,
        .decorative-icon p.icon-left:before,
        .decorative-icon p.icon-right:before,
        .ftc-product-categories-widget .widget-title-wrapper h3.widget-title, 
        .widget-container.widget_text .widget-title-wrapper h3.widget-title,
        .deal-products .deal-product-v1 .ftc-product.product .images.lazy-loading:before,
        .ftc-sidebar section.widget-container.widget_archive .widget-title-wrapper h3.widget-title,
        .ftc-sidebar section.widget-container.ftc-blogs-widget .widget-title-wrapper .widget-title, 
        .ftc-sidebar section.widget-container.ftc-recent-comments-widget .widget-title-wrapper .widget-title, 
        .ftc-sidebar section.widget-container.widget_tag_cloud .widget-title-wrapper .widget-title,
        .ftc-sidebar section.widget-container.widget_calendar .widget-title-wrapper .widget-title,
        .ftc-sidebar section.widget-container.widget_pages .widget-title-wrapper .widget-title,
        .ftc-sidebar section.widget-container.widget_meta .widget-title-wrapper .widget-title,
        .ftc-sidebar section.widget-container.widget_recent_comments .widget-title-wrapper .widget-title,
        .ftc-sidebar section.widget-container.widget_recent_entries .widget-title-wrapper .widget-title,
        .ftc-sidebar section.widget-container.widget_rss .widget-title-wrapper .widget-title,
        .ftc-sidebar section.widget-container.widget_search .widget-title-wrapper .widget-title,
        .ftc-sidebar section.widget-container.widget_nav_menu .widget-title-wrapper .widget-title,
        .pp_woocommerce div.product form.cart .button,
        .woocommerce .widget_price_filter .ui-slider .ui-slider-handle:hover, 
        .woocommerce-page .widget_price_filter .ui-slider .ui-slider-handle:hover, 
        .woocommerce .widget_price_filter .ui-slider .ui-slider-handle:focus, 
        .woocommerce-page .widget_price_filter .ui-slider .ui-slider-handle:focus,
        .woocommerce .products .product .images .button-in:hover a:hover,
        .woocommerce .products.list .product .item-description .add-to-cart a,
        table.compare-list .add-to-cart td a:hover,
        #cboxLoadedContent body > h1:first-child,
        .rev-slider-nopadding .hesperiden.tparrows:hover,
        .featured_products_block .woocommerce .products .product .images a:hover,
        .category-home1 .category-slider.product-category.product:hover .item-description,
        .category-home1 .owl-nav .owl-prev:hover,
        .category-home1 .owl-nav .owl-next:hover,
        .feature-product6 .woocommerce .product .item-description .meta_info a:hover,
        .feature-product6 .ftc-meta-widget.item-description .meta_info a:hover,
        .feature-product6 .ftc-meta-widget.item-description .meta_info .yith-wcwl-add-to-wishlist a:hover,
        .blog-home5 .blogs .post-info .content-info a.button-readmore:hover,
        .header-ftc.header-layout7 .ftc-shop-cart a.ftc_cart .cart-number,
        .header-ftc.header-layout6 .header-nav,
        .st-product-slider8 .woocommerce .product .images .group-button-product > div a:hover,
        .st-product-slider8 .woocommerce .product .images .group-button-product > a:hover,
        .featured7a .woocommerce .product .images .group-button-product > div a:hover,
        .featured7a .woocommerce .product .images .group-button-product > a:hover,
        .featured7b .woocommerce .product .images .group-button-product > div a:hover,
        .featured7b .woocommerce .product .images .group-button-product > a:hover,
        .special_block_right .woocommerce .product .images .group-button-product > div a:hover,
        footer .footer-top8a .social-icons li a:hover,
        .special_block_right .woocommerce .product .images .group-button-product > a:hover,
        .blog-home7 .blogs .post-info .content-info a.button-readmore:hover,
        .newsletterpopup .close-popup,
        .ftc-mobile-wrapper .menu-text .btn-toggle-canvas.btn-danger,
        .header-layout8 .ftc-shop-cart a.ftc_cart .cart-number,
        .deal-products8 .woocommerce .product .item-description .meta_info .add-to-cart.add_to_cart_button a:hover,
        #cboxLoadedContent table.compare-list .add-to-cart td a:hover
        {
            background-color: <?php echo esc_html($ftc_primary_color) ?>;
        }
        .ftc-sb-button a:hover,
        .woocommerce .product .conditions-box .onsale,
        table.compare-list .add-to-cart td a:hover,
        body > h1:first-child{
            background-color: <?php echo esc_html($ftc_primary_color) ?> !important;
        }
	.dropdown-container .ftc_cart_check > a.button.view-cart:hover,
        .dropdown-container .ftc_cart_check > a.button.checkout:hover,
        .woocommerce .widget_price_filter .price_slider_amount .button:hover,
        .woocommerce-page .widget_price_filter .price_slider_amount .button:hover,
        body input.wpcf7-submit:hover,
        .woocommerce .products .product:hover ,
        .woocommerce-page .products .product:hover,
        #right-sidebar .product_list_widget:hover li,
        .ftc-meta-widget.item-description .meta_info a:hover,
        .ftc-meta-widget.item-description .meta_info .yith-wcwl-add-to-wishlist a:hover,
        .woocommerce .products .product:hover,
        .woocommerce-page .products .product:hover,
        .ftc-products-category ul.tabs li:hover,
        .ftc-products-category ul.tabs li.current,
        body .vc_tta.vc_tta-accordion .vc_tta-panel.vc_active .vc_tta-panel-title > a,
        body .vc_tta.vc_tta-accordion .vc_tta-panel .vc_tta-panel-title > a:hover,
         body div.pp_details a.pp_close:hover:before,
        .wpcf7 p input:focus,
        .wpcf7 p textarea:focus,
        .woocommerce form .form-row .input-text:focus,
        body .button.button-secondary,
        .ftc-quickshop-wrapper .owl-nav > div.owl-next:hover,
        .ftc-quickshop-wrapper .owl-nav > div.owl-prev:hover,
        #cboxClose:hover, 
        .woocommerce-account .woocommerce-MyAccount-navigation li.is-active,
        .ftc-product-items-widget .ftc-meta-widget.item-description .meta_info .compare:hover,
        .ftc-product-items-widget .ftc-meta-widget.item-description .meta_info .add_to_cart_button a:hover,
        .flash-sale .flash-text > div.wpb_wrapper:before, 
        .flash-sale-v2 .flash-text > div.wpb_wrapper:before, 
        #to-top a,
        .woocommerce .products.list .product:hover, 
        .woocommerce-page .products.list .product:hover,
        .details_thumbnails .owl-nav .owl-prev:hover,
        .details_thumbnails .owl-nav .owl-next:hover,
        .owl-nav > div:hover, .owl-nav > div:focus,
        .dropdown-menu-header #dropdown-list,
        .span_top .span_top_left,
        .span_top .span_top_right,
        .span_bottom .span_bottom_left,
        .span_bottom .span_bottom_right,
        .sale-trend:after,
        .deal-products .ftc-product.product .thum_list_image ul li:hover,
        .ftc-sb-button:hover,
        .ftc-quickshop-wrapper .owl-nav > div.owl-next:hover,
        .featured7a .owl-dots > .owl-dot span:hover,
        .featured7a .owl-dots > .owl-dot.active span,
        .featured7b .owl-dots > .owl-dot span:hover,
        .featured7b .owl-dots > .owl-dot.active span,
        .deal-products8 .woocommerce .product .item-description .meta_info .add-to-cart.add_to_cart_button a:hover,
        .blog-home8 .blogs .post-info .content-info a.button-readmore:hover,
        footer .footer-top8a .social-icons li a:hover,
        .ftc-mobile-wrapper .menu-text .btn-toggle-canvas.btn-danger,
        .ftc-quickshop-wrapper .owl-nav > div.owl-prev:hover
        {
            border-color: <?php echo esc_html($ftc_primary_color) ?>;
        }
        #ftc_language ul ul,
        .header-currency ul,
        .ftc-account .dropdown-container,
        .ftc-shop-cart .dropdown-container,
        #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li.current_page_item,
        #mega_main_menu > .menu_holder > .menu_inner > ul > li:hover,
        #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li.current-menu-ancestor > .item_link,
        #mega_main_menu > .menu_holder > .menu_inner > ul > li.current_page_item > a:first-child:after,
        #mega_main_menu > .menu_holder > .menu_inner > ul > li > a:first-child:hover:before,
        #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li.current-menu-ancestor > .item_link:before,
        #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li.current_page_item > .item_link:before,
        #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li > .mega_dropdown,
        .woocommerce .product .conditions-box .onsale:before,
        .woocommerce .product .conditions-box .featured:before,
        .woocommerce .product .conditions-box .out-of-stock:before,
        .header-ftc.header-layout5 #dropdown-list,
        .header-ftc.header-layout6 #dropdown-list,
        .woocommerce-info
        {
            border-top-color: <?php echo esc_html($ftc_primary_color) ?>;
        }
        .woocommerce .products.list .product:hover .item-description:after,
        .woocommerce-page .products.list .product:hover .item-description:after
        {
            border-left-color: <?php echo esc_html($ftc_primary_color) ?>;
        }
        footer#colophon .ftc-footer .widget-title:before,
        .woocommerce div.product .woocommerce-tabs ul.tabs,
        #customer_login h2 span:before,
        .cart_totals  h2 span:before,
        .related.products h2:after, 
        .heading-title h2:after,
        .heading-title h3:after,
        .woocommerce div.product .woocommerce-tabs ul.tabs li a:hover,
        .woocommerce div.product .woocommerce-tabs ul.tabs li.active a,
        .ftc-heading h1:after
        {
            border-bottom-color: <?php echo esc_html($ftc_primary_color) ?>;
        }
        
        /* ========== Secondary color ========== */
        body,
        .ftc-shoppping-cart a.ftc_cart:hover,
        #mega_main_menu.primary ul li .mega_dropdown > li.sub-style > .item_link .link_text,
        .woocommerce a.remove,
        body.wpb-js-composer .vc_general.vc_tta-tabs.vc_tta-tabs-position-left .vc_tta-tab,
        .woocommerce .product .images .group-button-product > div a,
        .woocommerce .product .images .group-button-product > a, 
        .vc_progress_bar .vc_single_bar .vc_label,
        .vc_btn3.vc_btn3-size-sm.vc_btn3-style-outline,
        .vc_btn3.vc_btn3-size-sm.vc_btn3-style-outline-custom,
        .vc_btn3.vc_btn3-size-md.vc_btn3-style-outline,
        .vc_btn3.vc_btn3-size-md.vc_btn3-style-outline-custom,
        .vc_btn3.vc_btn3-size-lg.vc_btn3-style-outline,
        .vc_btn3.vc_btn3-size-lg.vc_btn3-style-outline-custom,
        .style1 .ftc-countdown .counter-wrapper > div .countdown-meta,
        .style2 .ftc-countdown .counter-wrapper > div .countdown-meta,
        .style3 .ftc-countdown .counter-wrapper > div .countdown-meta,
        .style4 .ftc-countdown .counter-wrapper > div .number-wrapper .number,
        .style4 .ftc-countdown .counter-wrapper > div .countdown-meta,
        body table.compare-list tr.remove td > a .remove:before,
        .woocommerce-page .products.list .product h3.product-name a
        {
            color: <?php echo esc_html($ftc_secondary_color) ?>;
        }
        .dropdown-container .ftc_cart_check > a.button.checkout,
        .pp_woocommerce div.product form.cart .button:hover,
        body .button.button-secondary:hover,
        div.pp_default .pp_close, 
        body div.pp_woocommerce.pp_pic_holder .pp_close,
        body div.ftc-product-video.pp_pic_holder .pp_close,
        body .ftc-lightbox.pp_pic_holder a.pp_close,
        #cboxClose
        {
            background-color: <?php echo esc_html($ftc_secondary_color) ?>;
        }
        .dropdown-container .ftc_cart_check > a.button.checkout,
        .pp_woocommerce div.product form.cart .button:hover,
        body .button.button-secondary:hover,
        #cboxClose
        {
            border-color: <?php echo esc_html($ftc_secondary_color) ?>;
        }
        
        /* ========== Body Background color ========== */
        body
        {
            background-color: <?php echo esc_html($ftc_body_background_color) ?>;
        }
	