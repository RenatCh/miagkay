<?php
if ( ! function_exists( 'carna_popup_newsletter' ) ) {
    function carna_popup_newsletter() {
     global $smof_data; 
     if(isset($smof_data['ftc_bg_popup_image']['url']) && !empty($smof_data['ftc_bg_popup_image']['url']))
    echo '<div class="popupshadow" style="display:none"></div>';
    echo '<div class="newsletterpopup" style="display:none; background-image: url('. esc_url($smof_data['ftc_bg_popup_image']['url']) .')">';
    echo '<span class="close-popup"></span>
    <div class="wp-newletter">';
    dynamic_sidebar('popup-newletter');
    echo '</div>';
    echo '<span class="dont_show_popup"><input id="ftc_dont_show_again" type="checkbox"><label for="ftc_dont_show_again">' .esc_attr__('Don\'t show popup again', 'carna'). '</label></span>';
    echo '</div>';
}
}
 /* * * Logo Mobile** */
if (!function_exists('ftc_theme_mobile_logo')) {

    function ftc_theme_mobile_logo() {
        global $smof_data;
        $logo_image = isset($smof_data['ftc_logo_mobile']['url']) ? esc_url($smof_data['ftc_logo_mobile']['url']) : '';
        $logo_text = isset($smof_data['ftc_text_logo']) ? stripslashes(esc_attr($smof_data['ftc_text_logo'])) : '';
        ?>
        <div class="logo">
            <a href="<?php echo esc_url(home_url('/')); ?>">
                <!-- Main logo mobile -->
                <?php if (strlen($logo_image) > 0): ?>
                    <img src="<?php echo esc_url($logo_image); ?>" alt="<?php echo!empty($logo_text) ? esc_attr($logo_text) : get_bloginfo('name'); ?>" title="<?php echo!empty($logo_text) ? esc_attr($logo_text) : get_bloginfo('name'); ?>" class="normal-logo-mobile" />
                <?php endif; ?>

                <!-- Logo Text -->
                <?php
                if (strlen($logo_image) == 0) {
                    echo esc_html($logo_text);
                }
                ?>
            </a>
        </div>
        <?php
    }

}
/* Header Mobile Navigation */
if( ! function_exists( 'credo_header_mobile_navigation' ) ) {
	function credo_header_mobile_navigation() {
		global $smof_data;
		?>
		<?php if( !is_page_template('page-blank.php') ): ?>
			<div class="ftc-mobile-wrapper">
				<div class="mutil-lang-cur">
				 	
                            
                 	
   
                </div>
				<?php if( $smof_data['ftc_enable_search'] ): ?>
					<?php ftc_get_search_form_by_category(); ?>
				<?php endif; ?>
				<div class= "menu-text"> 
				<button type="button" class="btn btn-toggle-canvas btn-danger" data-toggle="offcanvas">
                <i class="fa fa-close"></i>
            	</button>
            	<i class="fa fa-bars"></i>
            	<?php esc_html_e('Menu', 'credo') ?>
            	</div>

				<div class="mobile-menu-wrapper">
					<?php
						wp_nav_menu( array('theme_location' => 'primary', 'container_class' => 'mobile-nav-wrapper', 'menu_id' => 'primary-menu') );
					?>
				</div>
			</div>
			<?php
		endif;
	}
}
/*Cart footer*/
	add_filter('woocommerce_add_to_cart_fragments', 'ftc_cart_filter');
	function ftc_cart_filter($fragments) {
    ob_start();
    ftc_cart_subtotal();
    $subtotal = ob_get_clean();
    $fragments['span.footer-cart-number'] = $subtotal;

    return $fragments;
}

if( ! function_exists( 'ftc_cart_subtotal' ) ) {
    function ftc_cart_subtotal() {
        ?>
        <span class="footer-cart-number"> <?php echo "(". WC()->cart->get_cart_contents_count().  ")"?></span>
        <?php
    }
}
/* * * Tiny account ** */
if (!function_exists('ftc_tiny_account')) {

    function ftc_tiny_account() {
        $login_url = '#';
        $register_url = '#';
        $profile_url = '#';
        $logout_url = wp_logout_url(get_permalink());

        if (ftc_has_woocommerce()) { /* Active woocommerce */
            $myaccount_page_id = get_option('woocommerce_myaccount_page_id');
            if ($myaccount_page_id) {
                $login_url = get_permalink($myaccount_page_id);
                $register_url = $login_url;
                $profile_url = $login_url;
            }
        } else {
            $login_url = wp_login_url();
            $register_url = wp_registration_url();
            $profile_url = admin_url('profile.php');
        }

        $redirect_to = ( is_ssl() ? 'https://' : 'http://' ) . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

        $_user_logged = is_user_logged_in();
        ob_start();
        ?>
        <div class="ftc-account">
            <div class="ftc_login">
                <?php if (!$_user_logged): ?>
                    <a  class="login" href="<?php echo esc_url($login_url); ?>" title="<?php esc_html_e('Login', 'credo'); ?>"><span><?php esc_html_e('Login', 'credo'); ?></span></a>
                    / 
                    <a class="ftc_sign_up" href="<?php echo esc_url($register_url); ?>" title="<?php esc_html_e('Create New Account', 'credo'); ?>"><span><?php esc_html_e('Register', 'credo'); ?></span></a>
                <?php else: ?>
                    <a class="my-account" href="<?php echo esc_url($profile_url); ?>" title="<?php esc_html_e('My Account', 'credo'); ?>"><span><?php esc_html_e('My Account', 'credo'); ?></span></a>  
                    /
                    <a class="log-out" href="<?php echo esc_url($logout_url); ?>" title="<?php esc_html_e('Logout', 'credo'); ?>"><span><?php esc_html_e('Logout', 'credo'); ?></span></a>
                <?php endif; ?>
            </div>
            <?php if (!$_user_logged): ?>
                <div class="ftc_account_form dropdown-container">
                        <form name="ftc-login-form" class="ftc-login-form" action="<?php echo esc_url(wp_login_url()); ?>" method="post">

                            <p class="login-username">
                                <label><?php esc_html_e('Username', 'credo'); ?></label>
                                <input type="text" name="log" class="input" value="" size="20" autocomplete="off">
                            </p>
                            <p class="login-password">
                                <label><?php esc_html_e('Password', 'credo'); ?></label>
                                <input type="password" name="pwd" class="input" value="" size="20">
                            </p>

                            <p class="login-submit">
                                <input type="submit" name="wp-submit" class="button-secondary button" value="<?php esc_html_e('Login', 'credo'); ?>">
                                <input type="hidden" name="redirect_to" value="<?php echo esc_url($redirect_to); ?>">
                            </p>

                        </form>

                        <p class="ftc_forgot_pass"><a href="<?php echo esc_url(wp_lostpassword_url()); ?>" title="<?php esc_html_e('Forgot Your Password?', 'credo'); ?>"><?php esc_html_e('Forgot Your Password?', 'credo'); ?></a></p>
                </div>
            <?php endif; ?>
        </div>

        <?php
        return ob_get_clean();
    }

}

/* * * Tiny Cart ** */
if (!function_exists('ftc_tiny_cart')) {

    function ftc_tiny_cart() {
        if (!ftc_has_woocommerce()) {
            return '';
        }
        $cart_empty = WC()->cart->is_empty();
        $cart_url = wc_get_cart_url(); // since 2.5.0 use wc_get_cart_url();
        $checkout_url = wc_get_checkout_url(); // since 2.5.0 use wc_get_checkout_url();
        $cart_number = WC()->cart->get_cart_contents_count();
        ob_start();
        ?>
        <div class="ftc-shoppping-cart">
        <a class="ftc_cart" href="<?php echo esc_url($cart_url); ?>" title="<?php esc_html_e('View your shopping bag', 'credo'); ?>">
                <span class="cart-number<?php if ($cart_number > 0) {
            echo esc_html(" no-bracket");
        } ?>"><?php if ($cart_number > 0) {
            if ($cart_number > 1) {
                echo esc_html($cart_number);

            } else {
                echo esc_html($cart_number);

            }
        } else {
            echo esc_html($cart_number);
            esc_html_e('  ', 'credo');
        } ?>
         </span> 
            </a>
            <span class="cart-drop-icon drop-icon fa fa-caret-down"></span>
            <div class="ftc_shopping_form dropdown-container">
                    <?php if ($cart_empty): ?>
                    <label><?php esc_html_e('Your shopping cart is empty', 'credo'); ?></label>
                            <?php else: ?>
                    <ul class="ftc_cart_list">
            <?php
            $cart = WC()->cart->get_cart();
            foreach ($cart as $cart_item_key => $cart_item):
                $_product = apply_filters('woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key);
                if (!( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters('woocommerce_widget_cart_item_visible', true, $cart_item, $cart_item_key) )) {
                    continue;
                }

                $product_price = apply_filters('woocommerce_cart_item_price', WC()->cart->get_product_price($_product), $cart_item, $cart_item_key);
                ?>
                            <li>
                                <a href="<?php echo get_permalink($cart_item['product_id']); ?>">
                            <?php echo $_product->get_image(); ?>
                                </a>
                                <div class="cart-item-wrapper">	
                                    <h3 class="product-name">
                                        <a href="<?php echo get_permalink($cart_item['product_id']); ?>">
                <?php echo $_product->get_title(); ?>
                                        </a>
                                    </h3>
                        <?php echo apply_filters('woocommerce_widget_cart_item_quantity', '<span class="quantity">' . $cart_item['quantity'] . '</span> ', $cart_item, $cart_item_key); ?>
                        <?php echo apply_filters('woocommerce_widget_cart_item_quantity', '<span class="price"><span class="amount icon"> x </span> ' . $product_price . '</span>', $cart_item, $cart_item_key); ?>
                <?php echo apply_filters('woocommerce_cart_item_remove_link', sprintf('<a href="%s" class="remove" title="%s" data-key="%s">&times;</a>', esc_url(WC()->cart->get_remove_url($cart_item_key)), esc_html__('Remove this item', 'credo'), $cart_item_key), $cart_item_key); ?>
                                </div>
                            </li>

            <?php endforeach; ?>
                    </ul>
                    <div class="ftc_cart_check">
                        <div class="total"><span class="total-title"><?php esc_html_e('Subtotal :', 'credo'); ?></span><?php echo WC()->cart->get_cart_subtotal(); ?> </div>

                        <a href="<?php echo esc_url($cart_url); ?>" class="button view-cart"><?php esc_html_e('View cart', 'credo'); ?></a>
                        <a href="<?php echo esc_url($checkout_url); ?>" class="button checkout button-secondary"><?php esc_html_e('Checkout', 'credo'); ?></a>
                    </div>
        <?php endif; ?>

            </div>
        </div>
        <?php
        return ob_get_clean();
    }

}
add_filter('woocommerce_add_to_cart_fragments', 'ftc_tiny_cart_filter');

function ftc_tiny_cart_filter($fragments) {
    $fragments['.ftc-shoppping-cart'] = ftc_tiny_cart();
    return $fragments;
}

function ftc_remove_cart_item() {
    $cart_item_key = sanitize_text_field($_POST['cart_item_key']);
    if ($cart_item = WC()->cart->get_cart_item($cart_item_key)) {
        WC()->cart->remove_cart_item($cart_item_key);
    }
    WC_AJAX::get_refreshed_fragments();
}

add_action('wp_ajax_ftc_remove_cart_item', 'ftc_remove_cart_item');
add_action('wp_ajax_nopriv_ftc_remove_cart_item', 'ftc_remove_cart_item');

/** Tini wishlist * */
function ftc_tini_wishlist() {
    if (!(ftc_has_woocommerce() && class_exists('YITH_WCWL'))) {
        return;
    }

    ob_start();

    $wishlist_page_id = get_option('yith_wcwl_wishlist_page_id');
    if (function_exists('wpml_object_id_filter')) {
        $wishlist_page_id = wpml_object_id_filter($wishlist_page_id, 'page', true);
    }
    $wishlist_page = get_permalink($wishlist_page_id);

    $count = yith_wcwl_count_products();
    ?>

    <a title="<?php esc_html_e('Wishlist', 'credo'); ?>" href="<?php echo esc_url($wishlist_page); ?>" class="tini-wishlist">
      <i class="fa fa-heart"></i>  
    <?php esc_html_e('Wishlist', 'credo'); ?> <span class="count-wish"><?php echo '(' . ($count > 0 ? zeroise($count, 1) : '0') . ')'; ?></span>
    </a>

    <?php
    $tini_wishlist = ob_get_clean();
    return $tini_wishlist;
}

function ftc_update_tini_wishlist() {
    die(ftc_tini_wishlist());
}

add_action('wp_ajax_update_tini_wishlist', 'ftc_update_tini_wishlist');
add_action('wp_ajax_nopriv_update_tini_wishlist', 'ftc_update_tini_wishlist');

if (!function_exists('ftc_woocommerce_multilingual_currency_switcher')) {

    function ftc_woocommerce_multilingual_currency_switcher() {
        if (class_exists('woocommerce_wpml') && class_exists('WooCommerce') && class_exists('SitePress')) {
            global $sitepress, $woocommerce_wpml;

            if (!isset($woocommerce_wpml->multi_currency)) {
                return;
            }

            $settings = $woocommerce_wpml->get_settings();

            $format = isset($settings['wcml_curr_template']) && $settings['wcml_curr_template'] != '' ? $settings['wcml_curr_template'] : '%code%';
            $wc_currencies = get_woocommerce_currencies();
            if (!isset($settings['currencies_order'])) {
                $currencies = $woocommerce_wpml->multi_currency->get_currency_codes();
            } else {
                $currencies = $settings['currencies_order'];
            }

            $selected_html = '';
            foreach ($currencies as $currency) {
                if ($woocommerce_wpml->settings['currency_options'][$currency]['languages'][$sitepress->get_current_language()] == 1) {
                    $currency_format = preg_replace(array('#%name%#', '#%symbol%#', '#%code%#'), array($wc_currencies[$currency], get_woocommerce_currency_symbol($currency), $currency), $format);

                    if ($currency == $woocommerce_wpml->multi_currency->get_client_currency()) {
                        $selected_html = '<a href="javascript: void(0)" class="ftc-currency-selector">' . $currency_format . '</a>';
                        break;
                    }
                }
            }

            echo '<div class="ftc-currency">';
            echo esc_html($selected_html);
            echo '<ul>';

            foreach ($currencies as $currency) {
                if ($woocommerce_wpml->settings['currency_options'][$currency]['languages'][$sitepress->get_current_language()] == 1) {
                    $currency_format = preg_replace(array('#%name%#', '#%symbol%#', '#%code%#'), array($wc_currencies[$currency], get_woocommerce_currency_symbol($currency), $currency), $format);
                    echo '<li rel="' . $currency . '" >' . $currency_format . '</li>';
                }
            }

            echo '</ul>';
            echo '</div>';
        } else if (class_exists('WOOCS') && class_exists('WooCommerce')) { /* Support WooCommerce Currency Switcher */
            global $WOOCS;
            $currencies = $WOOCS->get_currencies();
            if (!is_array($currencies)) {
                return;
            }
            ?>
            <div class="ftc-currency">
                <a href="javascript: void(0)" class="ftc-currency-selector"><?php echo esc_html($WOOCS->current_currency); ?></a>
                <ul>
            <?php
            foreach ($currencies as $key => $currency) {
                $link = add_query_arg('currency', $currency['name']);
                echo '<li rel="' . $currency['name'] . '"><a href="' . esc_url($link) . '">' . esc_html($currency['name']) . '</a></li>';
            }
            ?>
                </ul>
            </div>
            <?php
        } else {/* Demo html */
            ?>
            <div class="ftc-currency">
                <a href="javascript: void(0)" class="ftc-currency-selector">USD</a>
                <ul>
                    <li rel="USD">Dollar (USD)</li>
                    <li rel="EUR">Euro (EUR)</li>
                </ul>
            </div>
            <?php
        }
    }

}

if (!function_exists('ftc_wpml_language_selector')) {

    function ftc_wpml_language_selector() {
        if (class_exists('SitePress')) {
            global $sitepress;
            if (method_exists($sitepress, 'get_mobile_language_selector')) {
                echo $sitepress->get_mobile_language_selector();
            }
        } else { /* Demo html */
            ?>
            <div id="ftc_language" class="ftc_language">
                <ul>
                    <li>
                        <a href="#" class="ftc_lang icl-en">English</a>
                        <ul style="visibility: hidden;">
                            <li class="icl-fr"><a rel="alternate" href="#"><span class="icl_lang_sel_native">Fran??ais</span></a></li>
                            <li class="icl-de"><a rel="alternate" href="#"><span class="icl_lang_sel_native">Espa??ol</span></a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <?php
        }
    }

}
?>