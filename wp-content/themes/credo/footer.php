
</div><!-- #content -->
<div class="container top-footer">
	<?php
	if ( is_active_sidebar( 'footer-top' ) ) { ?>
	<div class="widget-column footer-top">
		<?php dynamic_sidebar( 'footer-top' ); ?>
	</div>
	<?php } ?>
</div>  
<footer id="colophon" class="site-footer">
	<?php
	get_template_part( 'template-parts/footer/footer', 'widgets' );
	?>
</footer><!-- #colophon -->
</div><!-- .site-content-contain -->
</div><!-- #page -->
<div class="ftc-close-popup"></div>
<?php
global $smof_data, $woocommerce;
if ($smof_data['ftc_mobile_layout']): 
	?>
	<div class="footer-mobile">
		<div class="mobile-home">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" >
				<i class="fa fa-home"></i>
				<?php esc_html_e('Головнв','ovanic'); ?>
			</a>   
		</div>  
		<div class="mobile-view-cart" >
			<a href="<?php echo esc_url( home_url( '/?post_type=product' ) ); ?>" >
				<i class="fa fa-bars "></i>
                <?php esc_html_e('Каталог','ovanic'); ?>
			</a>   
		</div>
		<div class="mobile-wishlist">
            <a href="<?php echo esc_url( home_url( '/?page_id=801' ) ); ?>" >
                <i class="fa fa-compress "></i>
                <?php esc_html_e('Контакти','ovanic'); ?>
            </a>
        </div>
		<div class="mobile-account">
            <a href="<?php echo esc_url( home_url( '/?page_id=742' ) ); ?>" >
                <i class="fa fa-address-card "></i>
                <?php esc_html_e('О Нас','ovanic'); ?>
            </a>
		</div>
	</div>
<?php endif; ?>
<?php 
global $smof_data;
if( ( !wp_is_mobile() && $smof_data['ftc_back_to_top_button'] ) || ( wp_is_mobile() && $smof_data['ftc_back_to_top_button_on_mobile'] ) ): 
	?>
	<div id="to-top" class="scroll-button">
		<a class="scroll-button" href="javascript:void(0)" title="<?php esc_html_e('Back to Top', 'credo'); ?>"><?php esc_html_e('Back to Top', 'credo'); ?></a>
	</div>
<?php endif; ?>
<?php if((isset($smof_data['ftc_enable_popup']) && $smof_data['ftc_enable_popup']) && is_active_sidebar('popup-newletter')) : ?>
	<?php carna_popup_newsletter(); ?>
<?php endif;  ?>
<?php wp_footer(); ?>

</body>
</html>
