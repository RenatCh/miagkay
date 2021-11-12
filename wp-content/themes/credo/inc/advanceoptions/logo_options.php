<?php 
$options = array();

$options[] = array(
				'id'		=> 'brand_url'
				,'label'	=> esc_html__('Logo URL', 'credo')
				,'desc'		=> ''
				,'type'		=> 'text'
			);
			
$options[] = array(
				'id'		=> 'brand_target'
				,'label'	=> esc_html__('Target', 'credo')
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> array(
							'_self'		=> esc_html__('Self', 'credo')
							,'_blank'	=> esc_html__('New Window Tab', 'credo')
						)
			);
?>