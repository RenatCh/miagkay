<?php 
$options = array();
global $ftc_default_sidebars;
$sidebar_options = array(
				'0'	=> esc_html__('Default', 'credo')
				);
foreach( $ftc_default_sidebars as $key => $_sidebar ){
	$sidebar_options[$_sidebar['id']] = $_sidebar['name'];
}

$options[] = array(
				'id'		=> 'prod_layout_heading'
				,'label'	=> esc_html__('Product Layout', 'credo')
				,'desc'		=> ''
				,'type'		=> 'heading'
			);
			
$options[] = array(
				'id'		=> 'prod_layout'
				,'label'	=> esc_html__('Product Layout', 'credo')
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> array(
									'0'			=> esc_html__('Default', 'credo')
									,'0-1-0'  	=> esc_html__('Fullwidth', 'credo')
									,'1-1-0' 	=> esc_html__('Left Sidebar', 'credo')
									,'0-1-1' 	=> esc_html__('Right Sidebar', 'credo')
									,'1-1-1' 	=> esc_html__('Left & Right Sidebar', 'credo')
								)
			);
			
$options[] = array(
				'id'		=> 'prod_left_sidebar'
				,'label'	=> esc_html__('Left Sidebar', 'credo')
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> $sidebar_options
			);
			
$options[] = array(
				'id'		=> 'prod_right_sidebar'
				,'label'	=> esc_html__('Right Sidebar', 'credo')
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> $sidebar_options
			);

$options[] = array(
				'id'		=> 'prod_custom_tab_heading'
				,'label'	=> esc_html__('Custom Tab', 'credo')
				,'desc'		=> ''
				,'type'		=> 'heading'
			);
			
$options[] = array(
				'id'		=> 'prod_custom_tab'
				,'label'	=> esc_html__('Custom Tab', 'credo')
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> array(
									'0'		=> esc_html__('Default', 'credo')
									,'1'	=> esc_html__('Override', 'credo')
								)
			);
			
$options[] = array(
				'id'		=> 'prod_custom_tab_title'
				,'label'	=> esc_html__('Custom Tab Title', 'credo')
				,'desc'		=> ''
				,'type'		=> 'text'
			);
			
$options[] = array(
				'id'		=> 'prod_custom_tab_content'
				,'label'	=> esc_html__('Custom Tab Content', 'credo')
				,'desc'		=> ''
				,'type'		=> 'textarea'
			);

$options[] = array(
	'id'		=> 'prod_size_chart_heading'
	,'label'	=> esc_html__('Product Size Chart', 'credo')
	,'desc'		=> ''
	,'type'		=> 'heading'
);

$options[] = array(
	'id'		=> 'prod_size_chart'
	,'label'	=> esc_html__('Size Chart Image', 'credo')
	,'desc'		=> esc_html__('You can upload size chart image for all product on Theme Option', 'credo')
	,'type'		=> 'upload'
);
		
$options[] = array(
				'id'		=> 'prod_breadcrumb_heading'
				,'label'	=> esc_html__('Breadcrumbs', 'credo')
				,'desc'		=> ''
				,'type'		=> 'heading'
			);

$options[] = array(
				'id'		=> 'bg_breadcrumbs'
				,'label'	=> esc_html__('Breadcrumb Background Image', 'credo')
				,'desc'		=> ''
				,'type'		=> 'upload'
			);
			
$options[] = array(
				'id'		=> 'prod_video_heading'
				,'label'	=> esc_html__('Video', 'credo')
				,'desc'		=> ''
				,'type'		=> 'heading'
			);

$options[] = array(
				'id'		=> 'prod_video_url'
				,'label'	=> esc_html__('Video URL', 'credo')
				,'desc'		=> esc_html__('Enter Youtube or Vimeo video URL', 'credo')
				,'type'		=> 'text'
			);		
?>