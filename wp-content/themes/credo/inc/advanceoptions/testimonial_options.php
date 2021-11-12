<?php 
$options = array();

$options[] = array(
				'id'		=> 'gravatar_email'
				,'label'	=> esc_html__('Gravatar Email Address', 'credo')
				,'desc'		=> esc_html__('Enter in an e-mail address, to use a Gravatar, instead of using the "Featured Image". You have to remove the "Featured Image".', 'credo')
				,'type'		=> 'text'
			);
			
$options[] = array(
				'id'		=> 'byline'
				,'label'	=> esc_html__('Byline', 'credo')
				,'desc'		=> esc_html__('Enter a byline for the customer giving this testimonial (for example: "CEO of ThemeFTC").', 'credo')
				,'type'		=> 'text'
			);
			
$options[] = array(
				'id'		=> 'url'
				,'label'	=> esc_html__('URL', 'credo')
				,'desc'		=> esc_html__('Enter a URL that applies to this customer (for example: http://themeftc.com/).', 'credo')
				,'type'		=> 'text'
			);
			
$options[] = array(
				'id'		=> 'rating'
				,'label'	=> esc_html__('Rating', 'credo')
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> array(
						'-1'	=> esc_html__('no rating', 'credo')
						,'0'	=> esc_html__('0 star', 'credo')
						,'0.5'	=> esc_html__('0.5 star', 'credo')
						,'1'	=> esc_html__('1 star', 'credo')
						,'1.5'	=> esc_html__('1.5 star', 'credo')
						,'2'	=> esc_html__('2 stars', 'credo')
						,'2.5'	=> esc_html__('2.5 stars', 'credo')
						,'3'	=> esc_html__('3 stars', 'credo')
						,'3.5'	=> esc_html__('3.5 stars', 'credo')
						,'4'	=> esc_html__('4 stars', 'credo')
						,'4.5'	=> esc_html__('4.5 stars', 'credo')
						,'5'	=> esc_html__('5 stars', 'credo')
				)
			);
?>