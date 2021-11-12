<?php
if ( post_password_required() ) {
	return;
}
?>
<div id="comments" class="comments-area">
	<?php
	if ( have_comments() ) : ?>
	<h2 class="comments-title">
		<?php
		esc_html_e('Comments ', 'credo');
		echo '('.get_comments_number().')';
		?>
	</h2>
	<ol class="comment-list">
		<?php
		wp_list_comments( array(
			'avatar_size' => 100,
			'style'       => 'ol',
			'short_ping'  => true,
			'reply_text'  => ftc_get_svg( array( 'icon' => 'mail-reply' ) ) . esc_html__( 'Reply', 'credo' ),
		) );
		?>
	</ol>
	<div class="commentPaginate">
		<?php paginate_comments_links( array('prev_text' => '&laquo; PREV', 'next_text' => 'NEXT &raquo;') ); ?>
	</div>
<?php endif;

if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'credo' ); ?></p>

<?php
endif;
comment_form();
?>
</div><!-- #comments -->
