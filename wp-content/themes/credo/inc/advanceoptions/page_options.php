<?php
$options = array();
global $ftc_default_sidebars;
$sidebar_options = array();
foreach( $ftc_default_sidebars as $key => $_sidebar ){
	$sidebar_options[$_sidebar['id']] = $_sidebar['name'];
}

/* Get list menus */
$menus = array('0' => esc_html__('Default', 'credo'));
$nav_terms = get_terms( 'nav_menu', array( 'hide_empty' => true ) );
if( is_array($nav_terms) ){
	foreach( $nav_terms as $term ){
		$menus[$term->term_id] = $term->name;
	}
}

$options[] = array(
				'id'		=> 'page_layout_heading'
				,'label'	=> esc_html__('Page Layout', 'credo')
				,'desc'		=> ''
				,'type'		=> 'heading'
			);

$options[] = array(
				'id'		=> 'layout_style'
				,'label'	=> esc_html__('Layout Style', 'credo')
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> array(
									'default'  	=> esc_html__('Default', 'credo')
									,'boxed' 	=> esc_html__('Boxed', 'credo')
									,'wide' 	=> esc_html__('Wide', 'credo')
								)
			);
			
$options[] = array(
				'id'		=> 'page_layout'
				,'label'	=> esc_html__('Page Layout', 'credo')
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> array(
									'0-1-0'  => esc_html__('Fullwidth', 'credo')
									,'1-1-0' => esc_html__('Left Sidebar', 'credo')
									,'0-1-1' => esc_html__('Right Sidebar', 'credo')
									,'1-1-1' => esc_html__('Left & Right Sidebar', 'credo')
								)
			);
			
$options[] = array(
				'id'		=> 'left_sidebar'
				,'label'	=> esc_html__('Left Sidebar', 'credo')
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> $sidebar_options
			);

$options[] = array(
				'id'		=> 'right_sidebar'
				,'label'	=> esc_html__('Right Sidebar', 'credo')
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> $sidebar_options
			);
			
$options[] = array(
				'id'		=> 'left_right_padding'
				,'label'	=> esc_html__('Left Right Padding', 'credo')
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> array(
								'1'		=> esc_html__('Yes', 'credo')
								,'0'	=> esc_html__('No', 'credo')
								)
				,'default'	=> '0'
			);
			
$options[] = array(
				'id'		=> 'full_page'
				,'label'	=> esc_html__('Full Page', 'credo')
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> array(
								'1'		=> esc_html__('Yes', 'credo')
								,'0'	=> esc_html__('No', 'credo')
								)
				,'default'	=> '0'
			);
			
$options[] = array(
				'id'		=> 'header_breadcrumb_heading'
				,'label'	=> esc_html__('Header - Breadcrumb', 'credo')
				,'desc'		=> ''
				,'type'		=> 'heading'
			);
			
$options[] = array(
				'id'		=> 'header_layout'
				,'label'	=> esc_html__('Header Layout', 'credo')
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> array(
									'default'  	=> esc_html__('Default', 'credo')
									,'layout1'  		=> esc_html__('Header Layout 1', 'credo')
									,'layout2' 		=> esc_html__('Header Layout 2', 'credo')
									,'layout3' 		=> esc_html__('Header Layout 3', 'credo')
									,'layout4' 		=> esc_html__('Header Layout 4', 'credo')
									,'layout5' 		=> esc_html__('Header Layout 5', 'credo')
									,'layout6' 		=> esc_html__('Header Layout 6', 'credo')
									,'layout7' 		=> esc_html__('Header Layout 7', 'credo')
									,'layout8' 		=> esc_html__('Header Layout 8', 'credo')
								)
			);
			
$options[] = array(
				'id'		=> 'header_transparent'
				,'label'	=> esc_html__('Transparent Header', 'credo')
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> array(
								'1'		=> esc_html__('Yes', 'credo')
								,'0'	=> esc_html__('No', 'credo')
								)
				,'default'	=> '0'
			);
			
$options[] = array(
				'id'		=> 'header_text_color'
				,'label'	=> esc_html__('Header Text Color', 'credo')
				,'desc'		=> esc_html__('Only available on transparent header', 'credo')
				,'type'		=> 'select'
				,'options'	=> array(
								'default'	=> esc_html__('Default', 'credo')
								,'light'	=> esc_html__('Light', 'credo')
								)
			);

$options[] = array(
				'id'		=> 'menu_id'
				,'label'	=> esc_html__('Primary Menu', 'credo')
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> $menus
			);
			
$options[] = array(
				'id'		=> 'show_page_title'
				,'label'	=> esc_html__('Show Page Title', 'credo')
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> array(
								'1'		=> esc_html__('Yes', 'credo')
								,'0'	=> esc_html__('No', 'credo')
								)
			);
			
$options[] = array(
				'id'		=> 'show_breadcrumb'
				,'label'	=> esc_html__('Show Breadcrumb', 'credo')
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> array(
								'1'		=> esc_html__('Yes', 'credo')
								,'0'	=> esc_html__('No', 'credo')
								)
			);
			
$options[] = array(
				'id'		=> 'breadcrumb_layout'
				,'label'	=> esc_html__('Breadcrumb Layout', 'credo')
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> array(
									'default'  	=> esc_html__('Default', 'credo')
									,'v1'  		=> esc_html__('Breadcrumb Layout 1', 'credo')
									,'v2' 		=> esc_html__('Breadcrumb Layout 2', 'credo')
									,'v3' 		=> esc_html__('Breadcrumb Layout 3', 'credo')
								)
			);
			
$options[] = array(
				'id'		=> 'breadcrumb_bg_parallax'
				,'label'	=> esc_html__('Breadcrumb Background Parallax', 'credo')
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> array(
								'default'  	=> esc_html__('Default', 'credo')
								,'1'		=> esc_html__('Yes', 'credo')
								,'0'		=> esc_html__('No', 'credo')
								)
			);
			
$options[] = array(
				'id'		=> 'bg_breadcrumbs'
				,'label'	=> esc_html__('Breadcrumb Background Image', 'credo')
				,'desc'		=> ''
				,'type'		=> 'upload'
			);	
			
$options[] = array(
				'id'		=> 'logo'
				,'label'	=> esc_html__('Logo', 'credo')
				,'desc'		=> ''
				,'type'		=> 'upload'
			);
			
$options[] = array(
				'id'		=> 'logo_mobile'
				,'label'	=> esc_html__('Mobile Logo', 'credo')
				,'desc'		=> ''
				,'type'		=> 'upload'
			);
			
$options[] = array(
				'id'		=> 'logo_sticky'
				,'label'	=> esc_html__('Sticky Logo', 'credo')
				,'desc'		=> ''
				,'type'		=> 'upload'
			);


?>