<?php 
add_action( 'vc_before_init', 'ftc_integrate_with_vc' );
function ftc_integrate_with_vc() {
	
	if( !function_exists('vc_map') ){
		return;
	}

	/********************** Content Shortcodes ***************************/
	/*** FTC Features ***/
	vc_map( array(
		'name' 		=> esc_html__( 'FTC Feature', 'credo' ),
		'base' 		=> 'ftc_feature',
		'class' 	=> '',
		'category' 	=> 'ThemeFTC',
                "icon"          => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
		'params' 	=> array(
			array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Style', 'credo' )
				,'param_name' 	=> 'style'
				,'admin_label' 	=> true
				,'value' 		=> array(
						esc_html__('Horizontal', 'credo')		=>  'feature-horizontal'
						,esc_html__('Vertical', 'credo')		=>  'image-feature'	
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Icon class', 'credo' )
				,'param_name' 	=> 'class_icon'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> esc_html__('Use FontAwesome. Ex: fa-home', 'credo')
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Style icon', 'credo' )
				,'param_name' 	=> 'style_icon'
				,'admin_label' 	=> true
				,'value' 		=> array(
						esc_html__('Default', 'credo')		=>  'icon-default'
						,esc_html__('Small', 'credo')			=>  'icon-small'	
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'attach_image'
				,'heading' 		=> esc_html__( 'Image Thumbnail', 'credo' )
				,'param_name' 	=> 'img_id'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
				,'dependency'  	=> array('element' => 'style', 'value' => array('image-feature'))
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Image Thumbnail URL', 'credo' )
				,'param_name' 	=> 'img_url'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> esc_html__('Input external URL instead of image from library', 'credo')
				,'dependency' 	=> array('element' => 'style', 'value' => array('image-feature'))
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Feature title', 'credo' )
				,'param_name' 	=> 'title'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textarea'
				,'heading' 		=> esc_html__( 'Short description', 'credo' )
				,'param_name' 	=> 'excerpt'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Link', 'credo' )
				,'param_name' 	=> 'link'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Target', 'credo' )
				,'param_name' 	=> 'target'
				,'admin_label' 	=> true
				,'value' 		=> array(
						esc_html__('New Window Tab', 'credo')	=>  '_blank'
						,esc_html__('Self', 'credo')			=>  '_self'	
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Extra class', 'credo' )
				,'param_name' 	=> 'extra_class'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> esc_html__('Ex: feature-icon-blue, feature-icon-orange, feature-icon-green', 'credo')
			)
		)
	) );
	
	/*** FTC Blogs ***/
	vc_map( array(
		'name' 		=> esc_html__( 'FTC Blogs', 'credo' ),
		'base' 		=> 'ftc_blogs',
		'base' 		=> 'ftc_blogs',
		'class' 	=> '',
		'category' 	=> 'ThemeFTC',
                "icon"          => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
		'params' 	=> array(
			array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Block title', 'credo' )
				,'param_name' 	=> 'title'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Layout', 'credo' )
				,'param_name' 	=> 'layout'
				,'admin_label' 	=> true
				,'value' 		=> array(
							esc_html__('Grid', 'credo')		=> 'grid'
							,esc_html__('Slider', 'credo')	=> 'slider'
							,esc_html__('Masonry', 'credo')	=> 'masonry'
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Columns', 'credo' )
				,'param_name' 	=> 'columns'
				,'admin_label' 	=> true
				,'value' 		=> array(
							'1'				=> '1'
							,'2'			=> '2'
							,'3'			=> '3'
							,'4'			=> '4'
							)
				,'description' 	=> esc_html__( 'Number of Columns', 'credo' )
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Limit', 'credo' )
				,'param_name' 	=> 'per_page'
				,'admin_label' 	=> true
				,'value' 		=> 5
				,'description' 	=> esc_html__( 'Number of Posts', 'credo' )
			)
			,array(
				'type' 			=> 'ftc_category'
				,'heading' 		=> esc_html__( 'Categories', 'credo' )
				,'param_name' 	=> 'categories'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
				,'class'		=> 'post_cat'
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Order by', 'credo' )
				,'param_name' 	=> 'orderby'
				,'admin_label' 	=> false
				,'value' 		=> array(
						esc_html__('None', 'credo')		=> 'none'
						,esc_html__('ID', 'credo')		=> 'ID'
						,esc_html__('Date', 'credo')		=> 'date'
						,esc_html__('Name', 'credo')		=> 'name'
						,esc_html__('Title', 'credo')		=> 'title'
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Order', 'credo' )
				,'param_name' 	=> 'order'
				,'admin_label' 	=> false
				,'value' 		=> array(
						esc_html__('Descending', 'credo')		=> 'DESC'
						,esc_html__('Ascending', 'credo')		=> 'ASC'
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show post title', 'credo' )
				,'param_name' 	=> 'show_title'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'credo')	=> 1
							,esc_html__('No', 'credo')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show thumbnail', 'credo' )
				,'param_name' 	=> 'show_thumbnail'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'credo')	=> 1
							,esc_html__('No', 'credo')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show author', 'credo' )
				,'param_name' 	=> 'show_author'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('No', 'credo')	=> 0
							,esc_html__('Yes', 'credo')	=> 1
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show comment', 'credo' )
				,'param_name' 	=> 'show_comment'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'credo')	=> 1
							,esc_html__('No', 'credo')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show date', 'credo' )
				,'param_name' 	=> 'show_date'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'credo')	=> 1
							,esc_html__('No', 'credo')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show post excerpt', 'credo' )
				,'param_name' 	=> 'show_excerpt'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'credo')	=> 1
							,esc_html__('No', 'credo')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show count view', 'credo' )
				,'param_name' 	=> 'show_view'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'credo')	=> 1
							,esc_html__('No', 'credo')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show read more button', 'credo' )
				,'param_name' 	=> 'show_readmore'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'credo')	=> 1
							,esc_html__('No', 'credo')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Number of words in excerpt', 'credo' )
				,'param_name' 	=> 'excerpt_words'
				,'admin_label' 	=> false
				,'value' 		=> '16'
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show load more button', 'credo' )
				,'param_name' 	=> 'show_load_more'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('No', 'credo')	=> 0
							,esc_html__('Yes', 'credo')	=> 1
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Load more button text', 'credo' )
				,'param_name' 	=> 'load_more_text'
				,'admin_label' 	=> false
				,'value' 		=> 'Show more'
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show navigation button', 'credo' )
				,'param_name' 	=> 'show_nav'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'credo')	=> 1
							,esc_html__('No', 'credo')	=> 0
						)
				,'description' 	=> ''
				,'group'		=> esc_html__('Slider Options', 'credo')
			)
                    ,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show dots button', 'credo' )
				,'param_name' 	=> 'dots'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'credo')	=> 1
							,esc_html__('No', 'credo')	=> 0
						)
				,'description' 	=> ''
				,'group'		=> esc_html__('Slider Options', 'credo')
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Auto play', 'credo' )
				,'param_name' 	=> 'auto_play'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'credo')	=> 1
							,esc_html__('No', 'credo')	=> 0
						)
				,'description' 	=> ''
				,'group'		=> esc_html__('Slider Options', 'credo')
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Margin', 'credo' )
				,'param_name' 	=> 'margin'
				,'admin_label' 	=> false
				,'value' 		=> '30'
				,'description' 	=> esc_html__('Set margin between items', 'credo')
				,'group'		=> esc_html__('Slider Options', 'credo')
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Desktop small items', 'credo' )
				,'param_name' 	=> 'desksmall_items'
				,'admin_label' 	=> false
				,'value' 		=>  array(
							esc_html__('1', 'credo')	=> 1
							,esc_html__('2', 'credo')	=> 2
                                                        ,esc_html__('3', 'credo')	=> 3
                                                        ,esc_html__('4', 'credo')	=> 4
                                    
						)
				,'description' 	=> esc_html__('Set items on 991px', 'credo')
				,'group'		=> esc_html__('Responsive Options', 'credo')
			)
                    ,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Tablet items', 'credo' )
				,'param_name' 	=> 'tablet_items'
				,'admin_label' 	=> false
				,'value' 		=>  array(
							esc_html__('1', 'credo')	=> 1
							,esc_html__('2', 'credo')	=> 2
                                                        ,esc_html__('3', 'credo')	=> 3
                                                        ,esc_html__('4', 'credo')	=> 4
                                    
						)
				,'description' 	=> esc_html__('Set items on 768px', 'credo')
				,'group'		=> esc_html__('Responsive Options', 'credo')
			)
                    ,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Tablet mini items', 'credo' )
				,'param_name' 	=> 'tabletmini_items'
				,'admin_label' 	=> false
				,'value' 		=>  array(
							esc_html__('1', 'credo')	=> 1
							,esc_html__('2', 'credo')	=> 2
                                                        ,esc_html__('3', 'credo')	=> 3
                                                        ,esc_html__('4', 'credo')	=> 4
                                    
						)
				,'description' 	=> esc_html__('Set items on 640px', 'credo')
				,'group'		=> esc_html__('Responsive Options', 'credo')
			)
                    ,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Mobile items', 'credo' )
				,'param_name' 	=> 'mobile_items'
				,'admin_label' 	=> false
				,'value' 		=>  array(
							esc_html__('1', 'credo')	=> 1
							,esc_html__('2', 'credo')	=> 2
                                                        ,esc_html__('3', 'credo')	=> 3
                                                        ,esc_html__('4', 'credo')	=> 4
                                    
						)
				,'description' 	=> esc_html__('Set items on 480px', 'credo')
				,'group'		=> esc_html__('Responsive Options', 'credo')
			)
                    ,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Mobile small items', 'credo' )
				,'param_name' 	=> 'mobilesmall_items'
				,'admin_label' 	=> false
				,'value' 		=>  array(
							esc_html__('1', 'credo')	=> 1
							,esc_html__('2', 'credo')	=> 2
                                                        ,esc_html__('3', 'credo')	=> 3
                                                        ,esc_html__('4', 'credo')	=> 4
                                    
						)
				,'description' 	=> esc_html__('Set items on 0px', 'credo')
				,'group'		=> esc_html__('Responsive Options', 'credo')
			)
		)
	) );

	/*** FTC Button ***/
	vc_map( array(
		'name' 		=> esc_html__( 'FTC Button', 'credo' ),
		'base' 		=> 'ftc_button',
		'class' 	=> '',
		'category' 	=> 'ThemeFTC',
                "icon"          => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
		'params' 	=> array(
			array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Text', 'credo' )
				,'param_name' 	=> 'content'
				,'admin_label' 	=> true
				,'value' 		=> 'Button text'
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Link', 'credo' )
				,'param_name' 	=> 'link'
				,'admin_label' 	=> true
				,'value' 		=> '#'
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'colorpicker'
				,'heading' 		=> esc_html__( 'Text color', 'credo' )
				,'param_name' 	=> 'text_color'
				,'admin_label' 	=> false
				,'value' 		=> '#ffffff'
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'colorpicker'
				,'heading' 		=> esc_html__( 'Text color hover', 'credo' )
				,'param_name' 	=> 'text_color_hover'
				,'admin_label' 	=> false
				,'value' 		=> '#ffffff'
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'colorpicker'
				,'heading' 		=> esc_html__( 'Background color', 'credo' )
				,'param_name' 	=> 'bg_color'
				,'admin_label' 	=> false
				,'value' 		=> '#40bea7'
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'colorpicker'
				,'heading' 		=> esc_html__( 'Background color hover', 'credo' )
				,'param_name' 	=> 'bg_color_hover'
				,'admin_label' 	=> false
				,'value' 		=> '#3f3f3f'
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'colorpicker'
				,'heading' 		=> esc_html__( 'Border color', 'credo' )
				,'param_name' 	=> 'border_color'
				,'admin_label' 	=> false
				,'value' 		=> '#e8e8e8'
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'colorpicker'
				,'heading' 		=> esc_html__( 'Border color hover', 'credo' )
				,'param_name' 	=> 'border_color_hover'
				,'admin_label' 	=> false
				,'value' 		=> '#40bea7'
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Border width', 'credo' )
				,'param_name' 	=> 'border_width'
				,'admin_label' 	=> false
				,'value' 		=> '0'
				,'description' 	=> esc_html__('In pixels. Ex: 1', 'credo')
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Target', 'credo' )
				,'param_name' 	=> 'target'
				,'admin_label' 	=> false
				,'value' 		=> array(
						esc_html__('Self', 'credo')				=> '_self'
						,esc_html__('New Window Tab', 'credo')	=> '_blank'
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Size', 'credo' )
				,'param_name' 	=> 'size'
				,'admin_label' 	=> true
				,'value' 		=> array(
						esc_html__('Small', 'credo')		=> 'small'
						,esc_html__('Medium', 'credo')	=> 'medium'
						,esc_html__('Large', 'credo')		=> 'large'
						,esc_html__('X-Large', 'credo')	=> 'x-large'
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'iconpicker'
				,'heading' 		=> esc_html__( 'Font icon', 'credo' )
				,'param_name' 	=> 'font_icon'
				,'admin_label' 	=> false
				,'value' 		=> ''
				,'settings' 	=> array(
					'emptyIcon' 	=> true /* default true, display an "EMPTY" icon? */
					,'iconsPerPage' => 4000 /* default 100, how many icons per/page to display */
				)
				,'description' 	=> esc_html__('Add an icon before the text. Ex: fa-lock', 'credo')
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show popup', 'credo' )
				,'param_name' 	=> 'popup'
				,'admin_label' 	=> true
				,'value' 		=> array(
							esc_html__('No', 'credo')	=> 0
							,esc_html__('Yes', 'credo')	=> 1
						)
				,'description' 	=> ''
				,'group'		=> esc_html__('Popup Options', 'credo')
			)
			,array(
				'type' 			=> 'textarea_raw_html'
				,'heading' 		=> esc_html__( 'Popup content', 'credo' )
				,'param_name' 	=> 'popup_content'
				,'admin_label' 	=> false
				,'value' 		=> ''
				,'description' 	=> ''
				,'group'		=> esc_html__('Popup Options', 'credo')
			)
		)
	) );

	/*** FTC Image Slider ***/
	vc_map( array(
		'name' 		=> esc_html__( 'FTC Image Slider', 'credo' ),
		'base' 		=> 'ftc_image_slider',
		'class' 	=> '',
		'category' 	=> 'ThemeFTC',
                "icon"          => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
		'params' 	=> array(
			array(
				'type' 			=> 'attach_image'
				,'heading' 		=> esc_html__( 'Image Slider 1', 'credo' )
				,'param_name' 	=> 'img_1'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> 'Set image slider 1'
			)
			,array(
				'type' 			=> 'attach_image'
				,'heading' 		=> esc_html__( 'Image Slider 2', 'credo' )
				,'param_name' 	=> 'img_2'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> 'Set image slider 2'
			)
			,array(
				'type' 			=> 'attach_image'
				,'heading' 		=> esc_html__( 'Image Slider 3', 'credo' )
				,'param_name' 	=> 'img_3'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> 'Set image slider 3'
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Link Image 1', 'credo' )
				,'param_name' 	=> 'link_1'
				,'admin_label' 	=> true
				,'value' 		=> '#'
				,'description' 	=> ''
			)			
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Link Title Image 1', 'credo' )
				,'param_name' 	=> 'link_title_1'
				,'admin_label' 	=> false
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Link_image_2', 'credo' )
				,'param_name' 	=> 'link_2'
				,'admin_label' 	=> true
				,'value' 		=> '#'
				,'description' 	=> ''
			)						
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Link Title Image 2', 'credo' )
				,'param_name' 	=> 'link_title_2'
				,'admin_label' 	=> false
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Link_image_3', 'credo' )
				,'param_name' 	=> 'link_3'
				,'admin_label' 	=> true
				,'value' 		=> '#'
				,'description' 	=> ''
			)						
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Link Title Image 3', 'credo' )
				,'param_name' 	=> 'link_title_3'
				,'admin_label' 	=> false
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Target', 'credo' )
				,'param_name' 	=> 'target'
				,'admin_label' 	=> false
				,'value' 		=> array(
						esc_html__('New Window Tab', 'credo')		=> '_blank'
						,esc_html__('Self', 'credo')				=> '_self'
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Image Size', 'credo' )
				,'param_name' 	=> 'img_size'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> esc_html__( 'Ex: thumbnail, medium, large or full', 'credo' )
			)
			
		)
	) );
	
	/*** FTC Single Image ***/
	vc_map( array(
		'name' 		=> esc_html__( 'FTC Single Image', 'credo' ),
		'base' 		=> 'ftc_single_image',
		'class' 	=> '',
		'category' 	=> 'ThemeFTC',
                "icon"          => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
		'params' 	=> array(
			array(
				'type' 			=> 'attach_image'
				,'heading' 		=> esc_html__( 'Image', 'credo' )
				,'param_name' 	=> 'img_id'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Image Size', 'credo' )
				,'param_name' 	=> 'img_size'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> esc_html__( 'Ex: thumbnail, medium, large or full', 'credo' )
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Image URL', 'credo' )
				,'param_name' 	=> 'img_url'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> esc_html__('Input external URL instead of image from library', 'credo')
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Link', 'credo' )
				,'param_name' 	=> 'link'
				,'admin_label' 	=> true
				,'value' 		=> '#'
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Link Title', 'credo' )
				,'param_name' 	=> 'link_title'
				,'admin_label' 	=> false
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Hover Effect', 'credo' )
				,'param_name' 	=> 'style_smooth'
				,'admin_label' 	=> false
				,'value' 		=> array(
						esc_html__('Effect-Image Left Right', 'credo')		=> 'smooth-image'
						,esc_html__('Effect Border Image', 'credo')				=> 'smooth-border-image'
						,esc_html__('Effect Background Image', 'credo')		=> 'smooth-background-image'
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Target', 'credo' )
				,'param_name' 	=> 'target'
				,'admin_label' 	=> false
				,'value' 		=> array(
						esc_html__('New Window Tab', 'credo')		=> '_blank'
						,esc_html__('Self', 'credo')				=> '_self'
						)
				,'description' 	=> ''
			)
		)
	) );
	
	/*** FTC Heading ***/
	vc_map( array(
		'name' 		=> esc_html__( 'FTC Heading', 'credo' ),
		'base' 		=> 'ftc_heading',
		'class' 	=> '',
		'category' 	=> 'ThemeFTC',
                "icon"          => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
		'params' 	=> array(
			array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Heading style', 'credo' )
				,'param_name' 	=> 'style'
				,'admin_label' 	=> true
				,'value' 		=> array(
						esc_html__('Style 1', 'credo')		=> 'style-1'
						,esc_html__('Style 2', 'credo')		=> 'style-2'
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Heading Size', 'credo' )
				,'param_name' 	=> 'size'
				,'admin_label' 	=> true
				,'value' 		=> array(
						'1'				=> '1'
						,'2'			=> '2'
						,'3'			=> '3'
						,'4'			=> '4'
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Text', 'credo' )
				,'param_name' 	=> 'text'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
		)
	) );
	
	/*** FTC Banner ***/
	vc_map( array(
		'name' 		=> esc_html__( 'FTC Banner', 'credo' ),
		'base' 		=> 'ftc_banner',
		'class' 	=> '',
		'category' 	=> 'ThemeFTC',
                "icon"          => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
		'params' 	=> array(
			array(
				'type' 			=> 'attach_image'
				,'heading' 		=> esc_html__( 'Background Image', 'credo' )
				,'param_name' 	=> 'bg_id'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Background Url', 'credo' )
				,'param_name' 	=> 'bg_url'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> esc_html__('Input external URL instead of image from library', 'credo')
			)
			,array(
				'type' 			=> 'colorpicker'
				,'heading' 		=> esc_html__( 'Background Color', 'credo' )
				,'param_name' 	=> 'bg_color'
				,'admin_label' 	=> false
				,'value' 		=> '#ffffff'
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textarea_html'
				,'heading' 		=> esc_html__( 'Banner content', 'credo' )
				,'param_name' 	=> 'content'
				,'admin_label' 	=> false
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Position Banner Content', 'credo' )
				,'param_name' 	=> 'position_content'
				,'admin_label' 	=> false
				,'value' 		=> array(
						esc_html__('Left Top', 'credo')			=>  'left-top'
						,esc_html__('Left Bottom', 'credo')		=>  'left-bottom'
						,esc_html__('Left Center', 'credo')		=>  'left-center'
						,esc_html__('Right Top', 'credo')			=>  'right-top'
						,esc_html__('Right Bottom', 'credo')		=>  'right-bottom'
						,esc_html__('Right Center', 'credo')		=>  'right-center'
						,esc_html__('Center Top', 'credo')		=>  'center-top'
						,esc_html__('Center Bottom', 'credo')		=>  'center-bottom'
						,esc_html__('Center Center', 'credo')		=>  'center-center'
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Link', 'credo' )
				,'param_name' 	=> 'link'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Link Title', 'credo' )
				,'param_name' 	=> 'link_title'
				,'admin_label' 	=> false
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Style Effect', 'credo' )
				,'param_name' 	=> 'style_smooth'
				,'admin_label' 	=> false
				,'value' 		=> array(
						esc_html__('Background Scale', 'credo')						=>  'ftc-smooth'
						,esc_html__('Background Scale Opacity', 'credo')				=>  'ftc-smooth-opacity'
						,esc_html__('Background Scale Dark', 'credo')					=>	'ftc-smooth-dark'
						,esc_html__('Background Scale and Line', 'credo')				=>  'ftc-smooth-and-line'
						,esc_html__('Background Scale Opacity and Line', 'credo')		=>  'ftc-smooth-opacity-line'
						,esc_html__('Background Scale Dark and Line', 'credo')		=>  'ftc-smooth-dark-line'
						,esc_html__('Background Opacity and Line', 'credo')			=>	'background-opacity-and-line'
						,esc_html__('Background Dark and Line', 'credo')				=>	'background-dark-and-line'
						,esc_html__('Background Opacity', 'credo')					=>	'background-opacity'
						,esc_html__('Background Dark', 'credo')						=>	'background-dark'
						,esc_html__('Line', 'credo')									=>	'eff-line'
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Background Opacity On Device', 'credo' )
				,'param_name' 	=> 'opacity_bg_device'
				,'admin_label' 	=> false
				,'value' 		=> array(
						esc_html__('No', 'credo')			=>  0
						,esc_html__('Yes', 'credo')		=>  1
						)
				,'description' 	=> esc_html__('Background image will be blurred on device. Note: should set background color ', 'credo')
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Responsive size', 'credo' )
				,'param_name' 	=> 'responsive_size'
				,'admin_label' 	=> false
				,'value' 		=> array(
						esc_html__('Yes', 'credo')		=>  1
						,esc_html__('No', 'credo')		=>  0
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Target', 'credo' )
				,'param_name' 	=> 'target'
				,'admin_label' 	=> false
				,'value' 		=> array(
						esc_html__('New Window Tab', 'credo')	=>  '_blank'
						,esc_html__('Self', 'credo')			=>  '_self'	
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Extra Class', 'credo' )
				,'param_name' 	=> 'extra_class'
				,'admin_label' 	=> false
				,'value' 		=> ''
				,'description' 	=> esc_html__('Ex: rp-rectangle-full, rp-rectangle', 'credo')
			)
		)
	) );
	
	/* FTC Testimonial */
	vc_map( array(
		'name' 		=> esc_html__( 'FTC Testimonial', 'credo' ),
		'base' 		=> 'ftc_testimonial',
		'class' 	=> '',
		'category' 	=> 'ThemeFTC',
                "icon"          => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
		'params' 	=> array(
			array(
				'type' 			=> 'ftc_category'
				,'heading' 		=> esc_html__( 'Categories', 'credo' )
				,'param_name' 	=> 'categories'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
				,'class'		=> 'ftc_testimonial'
			)
			,array(
				'type' 			=> 'textarea'
				,'heading' 		=> esc_html__( 'Testimonial IDs', 'credo' )
				,'param_name' 	=> 'ids'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> esc_html__('A comma separated list of testimonial ids', 'credo')
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show Avatar', 'credo' )
				,'param_name' 	=> 'show_avatar'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'credo')	=> 1
							,esc_html__('No', 'credo')	=> 0
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Limit', 'credo' )
				,'param_name' 	=> 'per_page'
				,'admin_label' 	=> true
				,'value' 		=> '4'
				,'description' 	=> esc_html__('Number of Posts', 'credo')
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Number of words in excerpt', 'credo' )
				,'param_name' 	=> 'excerpt_words'
				,'admin_label' 	=> true
				,'value' 		=> '50'
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Text Color Style', 'credo' )
				,'param_name' 	=> 'text_color_style'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Default', 'credo')	=> 'text-default'
							,esc_html__('Light', 'credo')		=> 'text-light'
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show in a carousel slider', 'credo' )
				,'param_name' 	=> 'is_slider'
				,'admin_label' 	=> true
				,'value' 		=> array(
							esc_html__('Yes', 'credo')	=> 1
							,esc_html__('No', 'credo')	=> 0
						)
				,'description' 	=> ''
				,'group'		=> esc_html__('Slider Options', 'credo')
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Columns', 'credo' )
				,'param_name' 	=> 'columns'
				,'admin_label' 	=> true
				,'value' 		=> '1'
				,'group'		=> esc_html__('Slider Options', 'credo')
			)
                    ,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Margin', 'credo' )
				,'param_name' 	=> 'margin'
				,'admin_label' 	=> true
				,'value' 		=> '30'
				,'group'		=> esc_html__('Slider Options', 'credo')
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show navigation button', 'credo' )
				,'param_name' 	=> 'show_nav'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'credo')	=> 1
							,esc_html__('No', 'credo')	=> 0
						)
				,'description' 	=> ''
				,'group'		=> esc_html__('Slider Options', 'credo')
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show pagination dots', 'credo' )
				,'param_name' 	=> 'show_dots'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('No', 'credo')	=> 0
							,esc_html__('Yes', 'credo')	=> 1
						)
				,'description' 	=> esc_html__('If it is set, the navigation buttons will be removed', 'credo')
				,'group'		=> esc_html__('Slider Options', 'credo')
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Auto play', 'credo' )
				,'param_name' 	=> 'auto_play'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'credo')	=> 1
							,esc_html__('No', 'credo')	=> 0
						)
				,'description' 	=> ''
				,'group'		=> esc_html__('Slider Options', 'credo')
			)
		)
	) );
	
	/*** FTC Brands Slider ***/
	vc_map( array(
		'name' 		=> esc_html__( 'FTC Brands Slider', 'credo' ),
		'base' 		=> 'ftc_brands_slider',
		'class' 	=> '',
		'category' 	=> 'ThemeFTC',
                "icon"          => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
		'params' 	=> array(
			array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Block title', 'credo' )
				,'param_name' 	=> 'title'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Style Brand', 'credo' )
				,'param_name' 	=> 'style_brand'
				,'admin_label' 	=> true
				,'value' 		=> array(
							esc_html__('Default', 'credo')	=> 'style-default'
							,esc_html__('Light', 'credo')		=> 'style-light'
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Limit', 'credo' )
				,'param_name' 	=> 'per_page'
				,'admin_label' 	=> true
				,'value' 		=> '7'
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Rows', 'credo' )
				,'param_name' 	=> 'rows'
				,'admin_label' 	=> true
				,'value' 		=> 1
				,'description' 	=> esc_html__( 'Number of Rows', 'credo' )
			)
			,array(
				'type' 			=> 'ftc_category'
				,'heading' 		=> esc_html__( 'Categories', 'credo' )
				,'param_name' 	=> 'categories'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
				,'class'		=> 'ftc_brand'
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Margin', 'credo' )
				,'param_name' 	=> 'margin_image'
				,'admin_label' 	=> false
				,'value' 		=> '32'
				,'description' 	=> esc_html__('Set margin between items', 'credo')
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Activate link', 'credo' )
				,'param_name' 	=> 'active_link'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'credo')	=> 1
							,esc_html__('No', 'credo')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show navigation button', 'credo' )
				,'param_name' 	=> 'show_nav'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'credo')	=> 1
							,esc_html__('No', 'credo')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Auto play', 'credo' )
				,'param_name' 	=> 'auto_play'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'credo')	=> 1
							,esc_html__('No', 'credo')	=> 0
							)
				,'description' 	=> ''
			)

			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Desktop small items', 'credo' )
				,'param_name' 	=> 'desksmall_items'
				,'admin_label' 	=> false
				,'value' 		=>  array(
							esc_html__('1', 'credo')	=> 1
							,esc_html__('2', 'credo')	=> 2
                                                        ,esc_html__('3', 'credo')	=> 3
                                                        ,esc_html__('4', 'credo')	=> 4
                                    ,esc_html__('5', 'credo')	=> 5
                                     ,esc_html__('6', 'credo')	=> 6
                                    
						)
				,'description' 	=> esc_html__('Set items on 991px', 'credo')
				,'group'		=> esc_html__('Responsive Options', 'credo')
			)
                    ,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Tablet items', 'credo' )
				,'param_name' 	=> 'tablet_items'
				,'admin_label' 	=> false
				,'value' 		=>  array(
							esc_html__('1', 'credo')	=> 1
							,esc_html__('2', 'credo')	=> 2
                                                        ,esc_html__('3', 'credo')	=> 3
                                                        ,esc_html__('4', 'credo')	=> 4
                                    
						)
				,'description' 	=> esc_html__('Set items on 768px', 'credo')
				,'group'		=> esc_html__('Responsive Options', 'credo')
			)
                    ,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Tablet mini items', 'credo' )
				,'param_name' 	=> 'tabletmini_items'
				,'admin_label' 	=> false
				,'value' 		=>  array(
							esc_html__('1', 'credo')	=> 1
							,esc_html__('2', 'credo')	=> 2
                                                        ,esc_html__('3', 'credo')	=> 3
                                                        ,esc_html__('4', 'credo')	=> 4
                                    
						)
				,'description' 	=> esc_html__('Set items on 640px', 'credo')
				,'group'		=> esc_html__('Responsive Options', 'credo')
			)
                    ,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Mobile items', 'credo' )
				,'param_name' 	=> 'mobile_items'
				,'admin_label' 	=> false
				,'value' 		=>  array(
							esc_html__('1', 'credo')	=> 1
							,esc_html__('2', 'credo')	=> 2
                                                        ,esc_html__('3', 'credo')	=> 3
                                                        ,esc_html__('4', 'credo')	=> 4
                                    
						)
				,'description' 	=> esc_html__('Set items on 480px', 'credo')
				,'group'		=> esc_html__('Responsive Options', 'credo')
			)
                    ,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Mobile small items', 'credo' )
				,'param_name' 	=> 'mobilesmall_items'
				,'admin_label' 	=> false
				,'value' 		=>  array(
							esc_html__('1', 'credo')	=> 1
							,esc_html__('2', 'credo')	=> 2
                                                        ,esc_html__('3', 'credo')	=> 3
                                                        ,esc_html__('4', 'credo')	=> 4
                                    
						)
				,'description' 	=> esc_html__('Set items on 0px', 'credo')
				,'group'		=> esc_html__('Responsive Options', 'credo')
			)
		)
	) );
	
	
	/*** FTC Google Map ***/
	vc_map( array(
		'name' 		=> esc_html__( 'FTC Google Map', 'credo' ),
		'base' 		=> 'ftc_google_map',
		'class' 	=> '',
		'category' 	=> 'ThemeFTC',
                "icon"          => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
		'params' 	=> array(
			array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Address', 'credo' )
				,'param_name' 	=> 'address'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> esc_html__('You have to input your API Key in Appearance > Theme Options > General tab', 'credo')
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Height', 'credo' )
				,'param_name' 	=> 'height'
				,'admin_label' 	=> true
				,'value' 		=> 360
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Zoom', 'credo' )
				,'param_name' 	=> 'zoom'
				,'admin_label' 	=> true
				,'value' 		=> 12
				,'description' 	=> esc_html__('Input a number between 0 and 22', 'credo')
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Map Type', 'credo' )
				,'param_name' 	=> 'map_type'
				,'admin_label' 	=> true
				,'value' 		=> array(
								esc_html__('ROADMAP', 'credo')		=> 'ROADMAP'
								,esc_html__('SATELLITE', 'credo')		=> 'SATELLITE'
								,esc_html__('HYBRID', 'credo')		=> 'HYBRID'
								,esc_html__('TERRAIN', 'credo')		=> 'TERRAIN'
							)
				,'description' 	=> ''
			)
		)
	) );
        
	/*** FTC Countdown ***/
	vc_map( array(
		'name' 		=> esc_html__( 'FTC Countdown', 'credo' ),
		'base' 		=> 'ftc_countdown',
		'class' 	=> '',
		'category' 	=> 'ThemeFTC',
                "icon"          => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
		'params' 	=> array(
			array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Day', 'credo' )
				,'param_name' 	=> 'day'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Month', 'credo' )
				,'param_name' 	=> 'month'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Year', 'credo' )
				,'param_name' 	=> 'year'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Text Color Style', 'credo' )
				,'param_name' 	=> 'text_color_style'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Default', 'credo')	=> 'text-default'
							,esc_html__('Light', 'credo')		=> 'text-light'
						)
				,'description' 	=> ''
			)
		)
	) );
	
	/*** FTC Feedburner Subscription ***/
	vc_map( array(
		'name' 		=> esc_html__( 'FTC Feedburner Subscription', 'credo' ),
		'base' 		=> 'ftc_feedburner_subscription',
		'class' 	=> '',
		'category' 	=> 'ThemeFTC',
                "icon"          => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
		'params' 	=> array(
			array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Feedburner ID', 'credo' )
				,'param_name' 	=> 'feedburner_id'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Title', 'credo' )
				,'param_name' 	=> 'title'
				,'admin_label' 	=> true
				,'value' 		=> 'Newsletter'
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Intro Text Line 1', 'credo' )
				,'param_name' 	=> 'intro_text'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Button Text', 'credo' )
				,'param_name' 	=> 'button_text'
				,'admin_label' 	=> true
				,'value' 		=> 'Subscribe'
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Placeholder Text', 'credo' )
				,'param_name' 	=> 'placeholder_text'
				,'admin_label' 	=> true
				,'value' 		=> 'Enter your email address'
				,'description' 	=> ''
			)
		)
	) );

	/********************** FTC Product Shortcodes ************************/

	/*** FTC Products ***/
	vc_map( array(
		'name' 		=> esc_html__( 'FTC Products', 'credo' ),
		'base' 		=> 'ftc_products',
		'class' 	=> '',
		'category' 	=> 'ThemeFTC',
                "icon"          => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
		'params' 	=> array(
			array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Block title', 'credo' )
				,'param_name' 	=> 'title'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Product type', 'credo' )
				,'param_name' 	=> 'product_type'
				,'admin_label' 	=> true
				,'value' 		=> array(
						esc_html__('Recent', 'credo')		=> 'recent'
						,esc_html__('Sale', 'credo')		=> 'sale'
						,esc_html__('Featured', 'credo')	=> 'featured'
						,esc_html__('Best Selling', 'credo')	=> 'best_selling'
						,esc_html__('Top Rated', 'credo')	=> 'top_rated'
						,esc_html__('Mixed Order', 'credo')	=> 'mixed_order'
						)
				,'description' 	=> esc_html__( 'Select type of product', 'credo' )
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Custom order', 'credo' )
				,'param_name' 	=> 'custom_order'
				,'admin_label' 	=> true
				,'value' 		=> array(
						esc_html__('No', 'credo')			=> 0
						,esc_html__('Yes', 'credo')		=> 1
						)
				,'description' 	=> esc_html__( 'If you enable this option, the Product type option wont be available', 'credo' )
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Order by', 'credo' )
				,'param_name' 	=> 'orderby'
				,'admin_label' 	=> false
				,'value' 		=> array(
						esc_html__('None', 'credo')				=> 'none'
						,esc_html__('ID', 'credo')				=> 'ID'
						,esc_html__('Date', 'credo')				=> 'date'
						,esc_html__('Name', 'credo')				=> 'name'
						,esc_html__('Title', 'credo')				=> 'title'
						,esc_html__('Comment count', 'credo')		=> 'comment_count'
						,esc_html__('Random', 'credo')			=> 'rand'
						)
				,'dependency' 	=> array('element' => 'custom_order', 'value' => array('1'))
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Order', 'credo' )
				,'param_name' 	=> 'order'
				,'admin_label' 	=> false
				,'value' 		=> array(
						esc_html__('Descending', 'credo')		=> 'DESC'
						,esc_html__('Ascending', 'credo')		=> 'ASC'
						)
				,'dependency' 	=> array('element' => 'custom_order', 'value' => array('1'))
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Columns', 'credo' )
				,'param_name' 	=> 'columns'
				,'admin_label' 	=> true
				,'value' 		=> 5
				,'description' 	=> esc_html__( 'Number of Columns', 'credo' )
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Limit', 'credo' )
				,'param_name' 	=> 'per_page'
				,'admin_label' 	=> true
				,'value' 		=> 5
				,'description' 	=> esc_html__( 'Number of Products', 'credo' )
			)
			,array(
				'type' 			=> 'autocomplete'
				,'heading' 		=> esc_html__( 'Product Categories', 'credo' )
				,'param_name' 	=> 'product_cats'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'settings' => array(
					'multiple' 			=> true
					,'sortable' 		=> true
					,'unique_values' 	=> true
				)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'autocomplete'
				,'heading' 		=> esc_html__( 'Product IDs', 'credo' )
				,'param_name' 	=> 'ids'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'settings' => array(
					'multiple' 			=> true
					,'sortable' 		=> true
					,'unique_values' 	=> true
				)
				,'description' 	=> esc_html__('Enter product name or slug to search', 'credo')
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Meta position', 'credo' )
				,'param_name' 	=> 'meta_position'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Bottom', 'credo')			=> 'bottom'
							,esc_html__('On Thumbnail', 'credo')	=> 'on-thumbnail'
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product image', 'credo' )
				,'param_name' 	=> 'show_image'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'credo')	=> 1
							,esc_html__('No', 'credo')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product name', 'credo' )
				,'param_name' 	=> 'show_title'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'credo')	=> 1
							,esc_html__('No', 'credo')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product SKU', 'credo' )
				,'param_name' 	=> 'show_sku'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('No', 'credo')	=> 0
							,esc_html__('Yes', 'credo')	=> 1
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product price', 'credo' )
				,'param_name' 	=> 'show_price'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'credo')	=> 1
							,esc_html__('No', 'credo')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product short description', 'credo' )
				,'param_name' 	=> 'show_short_desc'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('No', 'credo')	=> 0
							,esc_html__('Yes', 'credo')	=> 1
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product rating', 'credo' )
				,'param_name' 	=> 'show_rating'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'credo')	=> 1
							,esc_html__('No', 'credo')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product label', 'credo' )
				,'param_name' 	=> 'show_label'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'credo')	=> 1
							,esc_html__('No', 'credo')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product categories', 'credo' )
				,'param_name' 	=> 'show_categories'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('No', 'credo')	=> 0
							,esc_html__('Yes', 'credo')	=> 1
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show add to cart button', 'credo' )
				,'param_name' 	=> 'show_add_to_cart'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'credo')	=> 1
							,esc_html__('No', 'credo')	=> 0
							)
				,'description' 	=> ''
			)
                    ,array(
   'type'    => 'dropdown'
   ,'heading'   => esc_html__( 'Show load more button', 'oriana' )
   ,'param_name'  => 'show_load_more'
   ,'admin_label'  => false
   ,'value'   => array(
    esc_html__('No', 'oriana') => 0
    ,esc_html__('Yes', 'oriana') => 1
   )
   ,'description'  => ''
  )
  ,array(
   'type'    => 'textfield'
   ,'heading'   => esc_html__( 'Load more text', 'oriana' )
   ,'param_name'  => 'load_more_text'
   ,'admin_label'  => true
   ,'value'   => 'Show more'
   ,'description'  => ''
  )
		)
	) );
/*** FTC Instagram ***/
	vc_map( array(
		'name' 		=> esc_html__( 'FTC Instagram Feed', 'carna' ),
		'base' 		=> 'ftc_instagram',
		'class' 	=> '',
		'category' 	=> 'ThemeFTC',
		'icon'          => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
		'params' 	=> array(
			array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Title', 'carna' )
				,'param_name' 	=> 'title'
				,'admin_label' 	=> true
				,'value' 		=> 'Instagram'
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Username', 'carna' )
				,'param_name' 	=> 'username'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)			
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Number', 'carna' )
				,'param_name' 	=> 'number'
				,'admin_label' 	=> true
				,'value' 		=> '9'
				,'description' 	=> ''
			)			
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Column', 'carna' )
				,'param_name' 	=> 'column'
				,'admin_label' 	=> true
				,'value' 		=> '3'
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Image Size', 'carna' )
				,'param_name' 	=> 'size'
				,'admin_label' 	=> true
				,'value' 		=> array(
					esc_html__('Large', 'carna')	=> 'large'
					,esc_html__('Small', 'carna')		=> 'small'
					,esc_html__('Thumbnail', 'carna')	=> 'thumbnail'
					,esc_html__('Original', 'carna')	=> 'original'
				)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Target', 'carna' )
				,'param_name' 	=> 'target'
				,'admin_label' 	=> true
				,'value' 		=> array(
					esc_html__('Current window', 'carna')	=> '_self'
					,esc_html__('New window', 'carna')		=> '_blank'
				)
				,'description' 	=> ''
			)		
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Cache time (hours)', 'carna' )
				,'param_name' 	=> 'cache_time'
				,'admin_label' 	=> true
				,'value' 		=> '12'
				,'description' 	=> ''
			)
		)
	) );

	/*** FTC Products Slider ***/
	vc_map( array(
		'name' 		=> esc_html__( 'FTC Products Slider', 'credo' ),
		'base' 		=> 'ftc_products_slider',
		'class' 	=> '',
		'category' 	=> 'ThemeFTC',
                "icon"          => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
		'params' 	=> array(
			array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Block title', 'credo' )
				,'param_name' 	=> 'title'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Product type', 'credo' )
				,'param_name' 	=> 'product_type'
				,'admin_label' 	=> true
				,'value' 		=> array(
						esc_html__('Recent', 'credo')		=> 'recent'
						,esc_html__('Sale', 'credo')		=> 'sale'
						,esc_html__('Featured', 'credo')	=> 'featured'
						,esc_html__('Best Selling', 'credo')	=> 'best_selling'
						,esc_html__('Top Rated', 'credo')	=> 'top_rated'
						,esc_html__('Mixed Order', 'credo')	=> 'mixed_order'
						)
				,'description' 	=> esc_html__( 'Select type of product', 'credo' )
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Custom order', 'credo' )
				,'param_name' 	=> 'custom_order'
				,'admin_label' 	=> true
				,'value' 		=> array(
						esc_html__('No', 'credo')			=> 0
						,esc_html__('Yes', 'credo')		=> 1
						)
				,'description' 	=> esc_html__( 'If you enable this option, the Product type option wont be available', 'credo' )
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Order by', 'credo' )
				,'param_name' 	=> 'orderby'
				,'admin_label' 	=> false
				,'value' 		=> array(
						esc_html__('None', 'credo')				=> 'none'
						,esc_html__('ID', 'credo')				=> 'ID'
						,esc_html__('Date', 'credo')				=> 'date'
						,esc_html__('Name', 'credo')				=> 'name'
						,esc_html__('Title', 'credo')				=> 'title'
						,esc_html__('Comment count', 'credo')		=> 'comment_count'
						,esc_html__('Random', 'credo')			=> 'rand'
						)
				,'dependency' 	=> array('element' => 'custom_order', 'value' => array('1'))
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Order', 'credo' )
				,'param_name' 	=> 'order'
				,'admin_label' 	=> false
				,'value' 		=> array(
						esc_html__('Descending', 'credo')		=> 'DESC'
						,esc_html__('Ascending', 'credo')		=> 'ASC'
						)
				,'dependency' 	=> array('element' => 'custom_order', 'value' => array('1'))
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Columns', 'credo' )
				,'param_name' 	=> 'columns'
				,'admin_label' 	=> true
				,'value' 		=> 5
				,'description' 	=> esc_html__( 'Number of Columns', 'credo' )
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Rows', 'credo' )
				,'param_name' 	=> 'rows'
				,'admin_label' 	=> true
				,'value' 		=> 1
				,'description' 	=> esc_html__( 'Number of Rows', 'credo' )
			)                    
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Limit', 'credo' )
				,'param_name' 	=> 'per_page'
				,'admin_label' 	=> true
				,'value' 		=> 6
				,'description' 	=> esc_html__( 'Number of Products', 'credo' )
			)
			,array(
				'type' 			=> 'autocomplete'
				,'heading' 		=> esc_html__( 'Product Categories', 'credo' )
				,'param_name' 	=> 'product_cats'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'settings' => array(
					'multiple' 			=> true
					,'sortable' 		=> true
					,'unique_values' 	=> true
				)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Meta position', 'credo' )
				,'param_name' 	=> 'meta_position'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Bottom', 'credo')			=> 'bottom'
							,esc_html__('On Thumbnail', 'credo')	=> 'on-thumbnail'
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product image', 'credo' )
				,'param_name' 	=> 'show_image'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'credo')	=> 1
							,esc_html__('No', 'credo')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product name', 'credo' )
				,'param_name' 	=> 'show_title'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'credo')	=> 1
							,esc_html__('No', 'credo')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product SKU', 'credo' )
				,'param_name' 	=> 'show_sku'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('No', 'credo')		=> 0
							,esc_html__('Yes', 'credo')	=> 1
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product price', 'credo' )
				,'param_name' 	=> 'show_price'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'credo')	=> 1
							,esc_html__('No', 'credo')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product short description', 'credo' )
				,'param_name' 	=> 'show_short_desc'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('No', 'credo')		=> 0
							,esc_html__('Yes', 'credo')	=> 1
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product rating', 'credo' )
				,'param_name' 	=> 'show_rating'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'credo')	=> 1
							,esc_html__('No', 'credo')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product label', 'credo' )
				,'param_name' 	=> 'show_label'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'credo')	=> 1
							,esc_html__('No', 'credo')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product categories', 'credo' )
				,'param_name' 	=> 'show_categories'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('No', 'credo')		=> 0
							,esc_html__('Yes', 'credo')	=> 1
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show add to cart button', 'credo' )
				,'param_name' 	=> 'show_add_to_cart'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'credo')	=> 1
							,esc_html__('No', 'credo')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show navigation button', 'credo' )
				,'param_name' 	=> 'show_nav'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'credo')	=> 1
							,esc_html__('No', 'credo')	=> 0
							)
				,'description' 	=> ''
			)
                    ,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show dots button', 'credo' )
				,'param_name' 	=> 'dots'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'credo')	=> 1
							,esc_html__('No', 'credo')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Position navigation button', 'credo' )
				,'param_name' 	=> 'position_nav'
				,'admin_label' 	=> true
				,'value' 		=> array(
							esc_html__('Top', 'credo')		=> 'nav-top'
							,esc_html__('Bottom', 'credo')	=> 'nav-bottom'
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Margin', 'credo' )
				,'param_name' 	=> 'margin'
				,'admin_label' 	=> false
				,'value' 		=> '20'
				,'description' 	=> esc_html__('Set margin between items', 'credo')
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Desktop small items', 'credo' )
				,'param_name' 	=> 'desksmall_items'
				,'admin_label' 	=> false
				,'value' 		=>  array(
							esc_html__('1', 'credo')	=> 1
							,esc_html__('2', 'credo')	=> 2
                                                        ,esc_html__('3', 'credo')	=> 3
                                                        ,esc_html__('4', 'credo')	=> 4
                                    
						)
				,'description' 	=> esc_html__('Set items on 991px', 'credo')
				,'group'		=> esc_html__('Responsive Options', 'credo')
			)
                    ,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Tablet items', 'credo' )
				,'param_name' 	=> 'tablet_items'
				,'admin_label' 	=> false
				,'value' 		=>  array(
							esc_html__('1', 'credo')	=> 1
							,esc_html__('2', 'credo')	=> 2
                                                        ,esc_html__('3', 'credo')	=> 3
                                                        ,esc_html__('4', 'credo')	=> 4
                                    
						)
				,'description' 	=> esc_html__('Set items on 768px', 'credo')
				,'group'		=> esc_html__('Responsive Options', 'credo')
			)
                    ,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Tablet mini items', 'credo' )
				,'param_name' 	=> 'tabletmini_items'
				,'admin_label' 	=> false
				,'value' 		=>  array(
							esc_html__('1', 'credo')	=> 1
							,esc_html__('2', 'credo')	=> 2
                                                        ,esc_html__('3', 'credo')	=> 3
                                                        ,esc_html__('4', 'credo')	=> 4
                                    
						)
				,'description' 	=> esc_html__('Set items on 640px', 'credo')
				,'group'		=> esc_html__('Responsive Options', 'credo')
			)
                    ,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Mobile items', 'credo' )
				,'param_name' 	=> 'mobile_items'
				,'admin_label' 	=> false
				,'value' 		=>  array(
							esc_html__('1', 'credo')	=> 1
							,esc_html__('2', 'credo')	=> 2
                                                        ,esc_html__('3', 'credo')	=> 3
                                                        ,esc_html__('4', 'credo')	=> 4
                                    
						)
				,'description' 	=> esc_html__('Set items on 480px', 'credo')
				,'group'		=> esc_html__('Responsive Options', 'credo')
			)
                    ,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Mobile small items', 'credo' )
				,'param_name' 	=> 'mobilesmall_items'
				,'admin_label' 	=> false
				,'value' 		=>  array(
							esc_html__('1', 'credo')	=> 1
							,esc_html__('2', 'credo')	=> 2
                                                        ,esc_html__('3', 'credo')	=> 3
                                                        ,esc_html__('4', 'credo')	=> 4
                                    
						)
				,'description' 	=> esc_html__('Set items on 0px', 'credo')
				,'group'		=> esc_html__('Responsive Options', 'credo')
			)
		)
	) );
	
	/*** FTC Products Widget ***/
	vc_map( array(
		'name' 			=> esc_html__( 'FTC Products Widget', 'credo' ),
		'base' 			=> 'ftc_products_widget',
		'class' 		=> '',
		'description' 	=> '',
		'category' 		=> 'ThemeFTC',
                "icon"          => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
		'params' 		=> array(
			array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Block title', 'credo' )
				,'param_name' 	=> 'title'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Product type', 'credo' )
				,'param_name' 	=> 'product_type'
				,'admin_label' 	=> true
				,'value' 		=> array(
						esc_html__('Recent', 'credo')		=> 'recent'
						,esc_html__('Sale', 'credo')		=> 'sale'
						,esc_html__('Featured', 'credo')	=> 'featured'
						,esc_html__('Best Selling', 'credo')	=> 'best_selling'
						,esc_html__('Top Rated', 'credo')	=> 'top_rated'
						,esc_html__('Mixed Order', 'credo')	=> 'mixed_order'
						)
				,'description' 	=> esc_html__( 'Select type of product', 'credo' )
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Limit', 'credo' )
				,'param_name' 	=> 'per_page'
				,'admin_label' 	=> true
				,'value' 		=> 6
				,'description' 	=> esc_html__( 'Number of Products', 'credo' )
			)
			,array(
				'type' 			=> 'autocomplete'
				,'heading' 		=> esc_html__( 'Product Categories', 'credo' )
				,'param_name' 	=> 'product_cats'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'settings' => array(
					'multiple' 			=> true
					,'sortable' 		=> true
					,'unique_values' 	=> true
				)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product image', 'credo' )
				,'param_name' 	=> 'show_image'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'credo')	=> 1
							,esc_html__('No', 'credo')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Thumbnail size', 'credo' )
				,'param_name' 	=> 'thumbnail_size'
				,'admin_label' 	=> true
				,'value' 		=> array(
						esc_html__('shop_thumbnail', 'credo')		=> 'Product Thumbnails'
						,esc_html__('shop_catalog', 'credo')		=> 'Catalog Images'
						,esc_html__('shop_single', 'credo')	=> 'Single Product Image'
						)
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product name', 'credo' )
				,'param_name' 	=> 'show_title'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'credo')	=> 1
							,esc_html__('No', 'credo')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product price', 'credo' )
				,'param_name' 	=> 'show_price'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'credo')	=> 1
							,esc_html__('No', 'credo')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product rating', 'credo' )
				,'param_name' 	=> 'show_rating'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'credo')	=> 1
							,esc_html__('No', 'credo')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product categories', 'credo' )
				,'param_name' 	=> 'show_categories'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('No', 'credo')	=> 0
							,esc_html__('Yes', 'credo')	=> 1
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show in a carousel slider', 'credo' )
				,'param_name' 	=> 'is_slider'
				,'admin_label' 	=> true
				,'value' 		=> array(
							esc_html__('No', 'credo')	=> 0
							,esc_html__('Yes', 'credo')	=> 1
							)
				,'description' 	=> ''
				,'group'		=> esc_html__('Slider Options', 'credo')
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Row', 'credo' )
				,'param_name' 	=> 'rows'
				,'admin_label' 	=> false
				,'value' 		=> 3
				,'description' 	=> esc_html__( 'Number of Rows for slider', 'credo' )
				,'group'		=> esc_html__('Slider Options', 'credo')
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show navigation button', 'credo' )
				,'param_name' 	=> 'show_nav'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'credo')	=> 1
							,esc_html__('No', 'credo')	=> 0
							)
				,'description' 	=> ''
				,'group'		=> esc_html__('Slider Options', 'credo')
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Auto play', 'credo' )
				,'param_name' 	=> 'auto_play'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'credo')	=> 1
							,esc_html__('No', 'credo')	=> 0
							)
				,'description' 	=> ''
				,'group'		=> esc_html__('Slider Options', 'credo')
			)
		)
	) );
	
	/*** FTC Product Deals Slider ***/
	vc_map( array(
		'name' 		=> esc_html__( 'FTC Product Deals Slider', 'credo' ),
		'base' 		=> 'ftc_product_deals_slider',
		'class' 	=> '',
		'category' 	=> 'ThemeFTC',
                "icon"          => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
		'params' 	=> array(
			array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Block title', 'credo' )
				,'param_name' 	=> 'title'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Product type', 'credo' )
				,'param_name' 	=> 'product_type'
				,'admin_label' 	=> true
				,'value' 		=> array(
						esc_html__('Recent', 'credo')		=> 'recent'
						,esc_html__('Featured', 'credo')	=> 'featured'
						,esc_html__('Best Selling', 'credo')	=> 'best_selling'
						,esc_html__('Top Rated', 'credo')	=> 'top_rated'
						,esc_html__('Mixed Order', 'credo')	=> 'mixed_order'
						)
				,'description' 	=> esc_html__( 'Select type of product', 'credo' )
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Item Layout', 'credo' )
				,'param_name' 	=> 'layout'
				,'admin_label' 	=> true
				,'value' 		=> array(
							esc_html__('Grid', 'credo')		=> 'grid'
							,esc_html__('List', 'credo')		=> 'list'
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Columns', 'credo' )
				,'param_name' 	=> 'columns'
				,'admin_label' 	=> false
				,'value' 		=> 4
				,'description' 	=> esc_html__( 'Number of Columns', 'credo' )
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Limit', 'credo' )
				,'param_name' 	=> 'per_page'
				,'admin_label' 	=> true
				,'value' 		=> 5
				,'description' 	=> esc_html__( 'Number of Products', 'credo' )
			)
			,array(
				'type' 			=> 'autocomplete'
				,'heading' 		=> esc_html__( 'Product Categories', 'credo' )
				,'param_name' 	=> 'product_cats'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'settings' => array(
					'multiple' 			=> true
					,'sortable' 		=> true
					,'unique_values' 	=> true
				)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show counter', 'credo' )
				,'param_name' 	=> 'show_counter'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'credo')	=> 1
							,esc_html__('No', 'credo')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Counter position', 'credo' )
				,'param_name' 	=> 'counter_position'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Bottom', 'credo')			=> 'bottom'
							,esc_html__('On thumbnail', 'credo')	=> 'on-thumbnail'
							)
				,'description' 	=> ''
				,'dependency' 	=> array('element' => 'show_counter', 'value' => array('1'))
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product image', 'credo' )
				,'param_name' 	=> 'show_image'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'credo')	=> 1
							,esc_html__('No', 'credo')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show gallery list', 'credo' )
				,'param_name' 	=> 'show_gallery'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'credo')	=> 1
							,esc_html__('No', 'credo')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Gallery position', 'credo' )
				,'param_name' 	=> 'gallery_position'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Bottom out line', 'credo')	=> 'bottom-out'
							,esc_html__('Bottom in line', 'credo')	=> 'bottom-in'
							)
				,'description' 	=> ''
				,'dependency' 	=> array('element' => 'show_counter', 'value' => array('1'))
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product name', 'credo' )
				,'param_name' 	=> 'show_title'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'credo')	=> 1
							,esc_html__('No', 'credo')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product SKU', 'credo' )
				,'param_name' 	=> 'show_sku'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('No', 'credo')		=> 0
							,esc_html__('Yes', 'credo')	=> 1
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product price', 'credo' )
				,'param_name' 	=> 'show_price'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'credo')	=> 1
							,esc_html__('No', 'credo')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product short description', 'credo' )
				,'param_name' 	=> 'show_short_desc'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('No', 'credo')		=> 0
							,esc_html__('Yes', 'credo')	=> 1
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product rating', 'credo' )
				,'param_name' 	=> 'show_rating'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'credo')	=> 1
							,esc_html__('No', 'credo')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product label', 'credo' )
				,'param_name' 	=> 'show_label'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'credo')	=> 1
							,esc_html__('No', 'credo')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product categories', 'credo' )
				,'param_name' 	=> 'show_categories'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('No', 'credo')		=> 0
							,esc_html__('Yes', 'credo')	=> 1
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show add to cart button', 'credo' )
				,'param_name' 	=> 'show_add_to_cart'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'credo')	=> 1
							,esc_html__('No', 'credo')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show navigation button', 'credo' )
				,'param_name' 	=> 'show_nav'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'credo')	=> 1
							,esc_html__('No', 'credo')	=> 0
							)
				,'description' 	=> ''
			)
                    ,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show dots button', 'credo' )
				,'param_name' 	=> 'dots'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'credo')	=> 1
							,esc_html__('No', 'credo')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Auto play', 'credo' )
				,'param_name' 	=> 'auto_play'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'credo')	=> 1
							,esc_html__('No', 'credo')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Margin', 'credo' )
				,'param_name' 	=> 'margin'
				,'admin_label' 	=> false
				,'value' 		=> '20'
				,'description' 	=> esc_html__('Set margin between items', 'credo')
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Desktop small items', 'credo' )
				,'param_name' 	=> 'desksmall_items'
				,'admin_label' 	=> false
				,'value' 		=>  array(
							esc_html__('1', 'credo')	=> 1
							,esc_html__('2', 'credo')	=> 2
                                                        ,esc_html__('3', 'credo')	=> 3
                                                        ,esc_html__('4', 'credo')	=> 4
                                    
						)
				,'description' 	=> esc_html__('Set items on 991px', 'credo')
				,'group'		=> esc_html__('Responsive Options', 'credo')
			)
                    ,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Tablet items', 'credo' )
				,'param_name' 	=> 'tablet_items'
				,'admin_label' 	=> false
				,'value' 		=>  array(
							esc_html__('1', 'credo')	=> 1
							,esc_html__('2', 'credo')	=> 2
                                                        ,esc_html__('3', 'credo')	=> 3
                                                        ,esc_html__('4', 'credo')	=> 4
                                    
						)
				,'description' 	=> esc_html__('Set items on 768px', 'credo')
				,'group'		=> esc_html__('Responsive Options', 'credo')
			)
                    ,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Tablet mini items', 'credo' )
				,'param_name' 	=> 'tabletmini_items'
				,'admin_label' 	=> false
				,'value' 		=>  array(
							esc_html__('1', 'credo')	=> 1
							,esc_html__('2', 'credo')	=> 2
                                                        ,esc_html__('3', 'credo')	=> 3
                                                        ,esc_html__('4', 'credo')	=> 4
                                    
						)
				,'description' 	=> esc_html__('Set items on 640px', 'credo')
				,'group'		=> esc_html__('Responsive Options', 'credo')
			)
                    ,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Mobile items', 'credo' )
				,'param_name' 	=> 'mobile_items'
				,'admin_label' 	=> false
				,'value' 		=>  array(
							esc_html__('1', 'credo')	=> 1
							,esc_html__('2', 'credo')	=> 2
                                                        ,esc_html__('3', 'credo')	=> 3
                                                        ,esc_html__('4', 'credo')	=> 4
                                    
						)
				,'description' 	=> esc_html__('Set items on 480px', 'credo')
				,'group'		=> esc_html__('Responsive Options', 'credo')
			)
                    ,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Mobile small items', 'credo' )
				,'param_name' 	=> 'mobilesmall_items'
				,'admin_label' 	=> false
				,'value' 		=>  array(
							esc_html__('1', 'credo')	=> 1
							,esc_html__('2', 'credo')	=> 2
                                                        ,esc_html__('3', 'credo')	=> 3
                                                        ,esc_html__('4', 'credo')	=> 4
                                    
						)
				,'description' 	=> esc_html__('Set items on 0px', 'credo')
				,'group'		=> esc_html__('Responsive Options', 'credo')
			)
		)
	) );
	
	/*** FTC Product Categories Slider ***/
	vc_map( array(
		'name' 		=> esc_html__( 'FTC Product Categories Slider', 'credo' ),
		'base' 		=> 'ftc_product_categories_slider',
		'class' 	=> '',
		'category' 	=> 'ThemeFTC',
                "icon"          => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
		'params' 	=> array(
			array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Block title', 'credo' )
				,'param_name' 	=> 'title'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Columns', 'credo' )
				,'param_name' 	=> 'columns'
				,'admin_label' 	=> true
				,'value' 		=> 4
				,'description' 	=> esc_html__( 'Number of Columns', 'credo' )
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Rows', 'credo' )
				,'param_name' 	=> 'rows'
				,'admin_label' 	=> true
				,'value' 		=> 1
				,'description' 	=> esc_html__( 'Number of Rows', 'credo' )
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Limit', 'credo' )
				,'param_name' 	=> 'per_page'
				,'admin_label' 	=> true
				,'value' 		=> 5
				,'description' 	=> esc_html__( 'Number of Product Categories', 'credo' )
			)
			,array(
				'type' 			=> 'autocomplete'
				,'heading' 		=> esc_html__( 'Parent', 'credo' )
				,'param_name' 	=> 'parent'
				,'admin_label' 	=> true
				,'settings' => array(
					'multiple' 			=> false
					,'sortable' 		=> true
					,'unique_values' 	=> true
				)
				,'value' 		=> ''
				,'description' 	=> esc_html__( 'Select a category. Get direct children of this category', 'credo' )
			)
			,array(
				'type' 			=> 'autocomplete'
				,'heading' 		=> esc_html__( 'Child Of', 'credo' )
				,'param_name' 	=> 'child_of'
				,'admin_label' 	=> true
				,'settings' => array(
					'multiple' 			=> false
					,'sortable' 		=> true
					,'unique_values' 	=> true
				)
				,'value' 		=> ''
				,'description' 	=> esc_html__( 'Select a category. Get all descendents of this category', 'credo' )
			)
			,array(
				'type' 			=> 'autocomplete'
				,'heading' 		=> esc_html__( 'Product Categories', 'credo' )
				,'param_name' 	=> 'ids'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'settings' => array(
					'multiple' 			=> true
					,'sortable' 		=> true
					,'unique_values' 	=> true
				)
				,'description' 	=> esc_html__('Include these categories', 'credo')
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Hide empty product categories', 'credo' )
				,'param_name' 	=> 'hide_empty'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'credo')	=> 1
							,esc_html__('No', 'credo')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product category title', 'credo' )
				,'param_name' 	=> 'show_title'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'credo')	=> 1
							,esc_html__('No', 'credo')	=> 0
							)
				,'description' 	=> ''
			)
                         ,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product category discription', 'credo' )
				,'param_name' 	=> 'show_discription'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'credo')	=> 1
							,esc_html__('No', 'credo')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show navigation button', 'credo' )
				,'param_name' 	=> 'show_nav'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'credo')	=> 1
							,esc_html__('No', 'credo')	=> 0
							)
				,'description' 	=> ''
			)
                    ,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show dots button', 'credo' )
				,'param_name' 	=> 'dots'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'credo')	=> 1
							,esc_html__('No', 'credo')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Auto play', 'credo' )
				,'param_name' 	=> 'auto_play'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'credo')	=> 1
							,esc_html__('No', 'credo')	=> 0
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Margin', 'credo' )
				,'param_name' 	=> 'margin'
				,'admin_label' 	=> false
				,'value' 		=> '0'
				,'description' 	=> esc_html__('Set margin between items', 'credo')
			)
			                    ,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Desktop small items', 'credo' )
				,'param_name' 	=> 'desksmall_items'
				,'admin_label' 	=> false
				,'value' 		=>  array(
							esc_html__('1', 'credo')	=> 1
							,esc_html__('2', 'credo')	=> 2
                                                        ,esc_html__('3', 'credo')	=> 3
                                                        ,esc_html__('4', 'credo')	=> 4
                                    
						)
				,'description' 	=> esc_html__('Set items on 991px', 'credo')
				,'group'		=> esc_html__('Responsive Options', 'credo')
			)
                    ,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Tablet items', 'credo' )
				,'param_name' 	=> 'tablet_items'
				,'admin_label' 	=> false
				,'value' 		=>  array(
							esc_html__('1', 'credo')	=> 1
							,esc_html__('2', 'credo')	=> 2
                                                        ,esc_html__('3', 'credo')	=> 3
                                                        ,esc_html__('4', 'credo')	=> 4
                                    
						)
				,'description' 	=> esc_html__('Set items on 768px', 'credo')
				,'group'		=> esc_html__('Responsive Options', 'credo')
			)
                    ,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Tablet mini items', 'credo' )
				,'param_name' 	=> 'tabletmini_items'
				,'admin_label' 	=> false
				,'value' 		=>  array(
							esc_html__('1', 'credo')	=> 1
							,esc_html__('2', 'credo')	=> 2
                                                        ,esc_html__('3', 'credo')	=> 3
                                                        ,esc_html__('4', 'credo')	=> 4
                                    
						)
				,'description' 	=> esc_html__('Set items on 640px', 'credo')
				,'group'		=> esc_html__('Responsive Options', 'credo')
			)
                    ,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Mobile items', 'credo' )
				,'param_name' 	=> 'mobile_items'
				,'admin_label' 	=> false
				,'value' 		=>  array(
							esc_html__('1', 'credo')	=> 1
							,esc_html__('2', 'credo')	=> 2
                                                        ,esc_html__('3', 'credo')	=> 3
                                                        ,esc_html__('4', 'credo')	=> 4
                                    
						)
				,'description' 	=> esc_html__('Set items on 480px', 'credo')
				,'group'		=> esc_html__('Responsive Options', 'credo')
			)
                    ,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Mobile small items', 'credo' )
				,'param_name' 	=> 'mobilesmall_items'
				,'admin_label' 	=> false
				,'value' 		=>  array(
							esc_html__('1', 'credo')	=> 1
							,esc_html__('2', 'credo')	=> 2
                                                        ,esc_html__('3', 'credo')	=> 3
                                                        ,esc_html__('4', 'credo')	=> 4
                                    
						)
				,'description' 	=> esc_html__('Set items on 0px', 'credo')
				,'group'		=> esc_html__('Responsive Options', 'credo')
			)
		)
	) );
	
	
	/*** FTC Products In Category Tabs***/
	vc_map( array(
		'name' 		=> esc_html__( 'FTC Products Category Tabs', 'credo' ),
		'base' 		=> 'ftc_products_category_tabs',
		'class' 	=> '',
		'category' 	=> 'ThemeFTC',
                "icon"          => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
		'params' 	=> array(
			array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Product type', 'credo' )
				,'param_name' 	=> 'product_type'
				,'admin_label' 	=> true
				,'value' 		=> array(
						esc_html__('Recent', 'credo')		=> 'recent'
						,esc_html__('Sale', 'credo')		=> 'sale'
						,esc_html__('Featured', 'credo')	=> 'featured'
						,esc_html__('Best Selling', 'credo')	=> 'best_selling'
						,esc_html__('Top Rated', 'credo')	=> 'top_rated'
						,esc_html__('Mixed Order', 'credo')	=> 'mixed_order'
						)
				,'description' 	=> esc_html__( 'Select type of product', 'credo' )
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Custom order', 'credo' )
				,'param_name' 	=> 'custom_order'
				,'admin_label' 	=> true
				,'value' 		=> array(
						esc_html__('No', 'credo')			=> 0
						,esc_html__('Yes', 'credo')		=> 1
						)
				,'description' 	=> esc_html__( 'If you enable this option, the Product type option wont be available', 'credo' )
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Order by', 'credo' )
				,'param_name' 	=> 'orderby'
				,'admin_label' 	=> false
				,'value' 		=> array(
						esc_html__('None', 'credo')				=> 'none'
						,esc_html__('ID', 'credo')				=> 'ID'
						,esc_html__('Date', 'credo')				=> 'date'
						,esc_html__('Name', 'credo')				=> 'name'
						,esc_html__('Title', 'credo')				=> 'title'
						,esc_html__('Comment count', 'credo')		=> 'comment_count'
						,esc_html__('Random', 'credo')			=> 'rand'
						)
				,'dependency' 	=> array('element' => 'custom_order', 'value' => array('1'))
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Order', 'credo' )
				,'param_name' 	=> 'order'
				,'admin_label' 	=> false
				,'value' 		=> array(
						esc_html__('Descending', 'credo')		=> 'DESC'
						,esc_html__('Ascending', 'credo')		=> 'ASC'
						)
				,'dependency' 	=> array('element' => 'custom_order', 'value' => array('1'))
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'colorpicker'
				,'heading' 		=> esc_html__( 'Background Color', 'credo' )
				,'param_name' 	=> 'bg_color'
				,'admin_label' 	=> false
				,'value' 		=> '#f7f6f4'
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Columns', 'credo' )
				,'param_name' 	=> 'columns'
				,'admin_label' 	=> true
				,'value' 		=> 3
				,'description' 	=> esc_html__( 'Number of Columns', 'credo' )
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Limit', 'credo' )
				,'param_name' 	=> 'per_page'
				,'admin_label' 	=> true
				,'value' 		=> 6
				,'description' 	=> esc_html__( 'Number of Products', 'credo' )
			)
			,array(
				'type' 			=> 'autocomplete'
				,'heading' 		=> esc_html__( 'Product Categories', 'credo' )
				,'param_name' 	=> 'product_cats'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'settings' => array(
					'multiple' 			=> true
					,'sortable' 		=> true
					,'unique_values' 	=> true
				)
				,'description' 	=> esc_html__( 'You select banners, icons in the Product Category editor', 'credo' )
			)
			,array(
				'type' 			=> 'autocomplete'
				,'heading' 		=> esc_html__( 'Parent Category', 'credo' )
				,'param_name' 	=> 'parent_cat'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'settings' => array(
					'multiple' 			=> false
					,'sortable' 		=> false
					,'unique_values' 	=> true
				)
				,'description' 	=> esc_html__('Each tab will be a sub category of this category. This option is available when the Product Categories option is empty', 'credo')
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Include children', 'credo' )
				,'param_name' 	=> 'include_children'
				,'admin_label' 	=> true
				,'value' 		=> array(
						esc_html__('No', 'credo')			=> 0
						,esc_html__('Yes', 'credo')		=> 1
						)
				,'description' 	=> esc_html__( 'Load the products of sub categories in each tab', 'credo' )
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Active tab', 'credo' )
				,'param_name' 	=> 'active_tab'
				,'admin_label' 	=> false
				,'value' 		=> 1
				,'description' 	=> esc_html__( 'Enter active tab number', 'credo' )
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product image', 'credo' )
				,'param_name' 	=> 'show_image'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'credo')	=> 1
							,esc_html__('No', 'credo')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product name', 'credo' )
				,'param_name' 	=> 'show_title'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'credo')	=> 1
							,esc_html__('No', 'credo')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product SKU', 'credo' )
				,'param_name' 	=> 'show_sku'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('No', 'credo')		=> 0
							,esc_html__('Yes', 'credo')	=> 1
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product price', 'credo' )
				,'param_name' 	=> 'show_price'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'credo')	=> 1
							,esc_html__('No', 'credo')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product short description', 'credo' )
				,'param_name' 	=> 'show_short_desc'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('No', 'credo')		=> 0
							,esc_html__('Yes', 'credo')	=> 1
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product rating', 'credo' )
				,'param_name' 	=> 'show_rating'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'credo')	=> 1
							,esc_html__('No', 'credo')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product label', 'credo' )
				,'param_name' 	=> 'show_label'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'credo')	=> 1
							,esc_html__('No', 'credo')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product categories', 'credo' )
				,'param_name' 	=> 'show_categories'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('No', 'credo')		=> 0
							,esc_html__('Yes', 'credo')	=> 1
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show add to cart button', 'credo' )
				,'param_name' 	=> 'show_add_to_cart'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'credo')	=> 1
							,esc_html__('No', 'credo')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show counter', 'credo' )
				,'param_name' 	=> 'show_counter'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'credo')	=> 1
							,esc_html__('No', 'credo')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show in a carousel slider', 'credo' )
				,'param_name' 	=> 'is_slider'
				,'admin_label' 	=> true
				,'value' 		=> array(
							esc_html__('No', 'credo')		=> 0
							,esc_html__('Yes', 'credo')	=> 1
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Rows', 'credo' )
				,'param_name' 	=> 'rows'
				,'admin_label' 	=> true
				,'value' 		=> array(
						'1'			=> '1'
						,'2'		=> '2'
						)
				,'description' 	=> esc_html__( 'Number of Rows in slider', 'credo' )
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show navigation button', 'credo' )
				,'param_name' 	=> 'show_nav'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('No', 'credo')		=> 0
							,esc_html__('Yes', 'credo')	=> 1
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Auto play', 'credo' )
				,'param_name' 	=> 'auto_play'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'credo')	=> 1
							,esc_html__('No', 'credo')	=> 0
						)
				,'description' 	=> ''
			)
		)
	) );
	
	/*** FTC List Of Product Categories ***/
	vc_map( array(
		'name' 		=> esc_html__( 'FTC List Of Product Categories', 'credo' ),
		'base' 		=> 'ftc_list_of_product_categories',
		'class' 	=> '',
		'category' 	=> 'ThemeFTC',
                "icon"          => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
		'params' 	=> array(
			array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Block title', 'credo' )
				,'param_name' 	=> 'title'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'attach_image'
				,'heading' 		=> esc_html__( 'Background image', 'credo' )
				,'param_name' 	=> 'bg_image'
				,'admin_label' 	=> false
				,'value' 		=> ''
				,'description' 	=> ''
			)
                        ,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Hover Image Effect', 'credo' )
				,'param_name' 	=> 'style_smooth'
				,'admin_label' 	=> false
				,'value' 		=> array(
                                                 esc_html__('No Effect', 'credo')		=> 'no-smooth'
						,esc_html__('Effect-Image Left Right', 'credo')		=> 'smooth-image'
						,esc_html__('Effect Border Image', 'credo')				=> 'smooth-border-image'
						,esc_html__('Effect Background Image', 'credo')		=> 'smooth-background-image'
						,esc_html__('Effect Background Top Image', 'credo')	=> 'smooth-top-image'
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'autocomplete'
				,'heading' 		=> esc_html__( 'Product Category', 'credo' )
				,'param_name' 	=> 'product_cat'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'settings' => array(
					'multiple' 			=> false
					,'sortable' 		=> false
					,'unique_values' 	=> true
				)
				,'description' 	=> esc_html__('Display sub categories of this category', 'credo')
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Include parent category in list', 'credo' )
				,'param_name' 	=> 'include_parent'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'credo')	=> 1
							,esc_html__('No', 'credo')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Include children category in list', 'credo' )
				,'param_name' 	=> 'include_children'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'credo')	=> 1
							,esc_html__('No', 'credo')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Number of Sub Categories', 'credo' )
				,'param_name' 	=> 'limit_sub_cat'
				,'admin_label' 	=> true
				,'value' 		=> 6
				,'description' 	=> esc_html__( 'Leave blank to show all', 'credo' )
			)
			,array(
				'type' 			=> 'autocomplete'
				,'heading' 		=> esc_html__( 'Include these categories', 'credo' )
				,'param_name' 	=> 'include_cats'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'settings' => array(
					'multiple' 			=> true
					,'sortable' 		=> true
					,'unique_values' 	=> true
				)
				,'description' 	=> esc_html__('If you set the Product Category option above, this option wont be available', 'credo')
			)
		)
	) );
        
          
        /*** FTC Milestone ***/
	vc_map( array(
		'name' 		=> esc_html__( 'FTC Milestone', 'credo' ),
		'base' 		=> 'ftc_milestone',
		'class' 	=> '',
		'category' 	=> 'ThemeFTC',
                "icon"          => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
		'params' 	=> array(
			array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Number', 'credo' )
				,'param_name' 	=> 'number'
				,'admin_label' 	=> true
				,'value' 		=> '0'
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Subject', 'credo' )
				,'param_name' 	=> 'ftc_number_meta'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Text Color Style', 'credo' )
				,'param_name' 	=> 'text_color_style'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Default', 'credo')	=> 'text-default'
							,esc_html__('Light', 'credo')		=> 'text-light'
						)
				,'description' 	=> ''
			)
		)
	) );
	
}

/*** Add Shortcode Param ***/
WpbakeryShortcodeParams::addField('ftc_category', 'ftc_product_catgories_shortcode_param');
if( !function_exists('ftc_product_catgories_shortcode_param') ){
	function ftc_product_catgories_shortcode_param($settings, $value){
		$categories = ftc_get_list_categories_shortcode_param(0, $settings);
		$arr_value = explode(',', $value);
		ob_start();
		?>
		<input type="hidden" class="wpb_vc_param_value wpb-textinput product_cats textfield ftc-hidden-selected-categories" name="<?php echo esc_attr($settings['param_name']); ?>" value="<?php echo esc_attr($value); ?>" />
		<div class="categorydiv">
			<div class="tabs-panel">
				<ul class="categorychecklist">
					<?php foreach($categories as $cat){ ?>
					<li>
						<label>
							<input type="checkbox" class="checkbox ftc-select-category" value="<?php echo esc_attr($cat->term_id); ?>" <?php echo (in_array($cat->term_id, $arr_value))?'checked':''; ?> />
							<?php echo esc_html($cat->name); ?>
						</label>
						<?php ftc_get_list_sub_categories_shortcode_param($cat->term_id, $arr_value, $settings); ?>
					</li>
					<?php } ?>
				</ul>
			</div>
		</div>
		<script type="text/javascript">
			jQuery('.ftc-select-category').bind('change', function(){
				"use strict";
				
				var selected = jQuery('.ftc-select-category:checked');
				jQuery('.ftc-hidden-selected-categories').val('');
				var selected_id = new Array();
				selected.each(function(index, ele){
					selected_id.push(jQuery(ele).val());
				});
				selected_id = selected_id.join(',');
				jQuery('.ftc-hidden-selected-categories').val(selected_id);
			});
		</script>
		<?php
		return ob_get_clean();
	}
}

if( !function_exists('ftc_get_list_categories_shortcode_param') ){
	function ftc_get_list_categories_shortcode_param( $cat_parent_id, $settings ){
		$taxonomy = 'product_cat';
		if( isset($settings['class']) ){
			if( $settings['class'] == 'post_cat' ){
				$taxonomy = 'category';
			}
			if( $settings['class'] == 'ftc_testimonial' ){
				$taxonomy = 'ftc_testimonial_cat';
			}
			if( $settings['class'] == 'ftc_portfolio' ){
				$taxonomy = 'ftc_portfolio_cat';
			}
			if( $settings['class'] == 'ftc_brand' ){
				$taxonomy = 'ftc_brand_cat';
			}
		}
		
		$args = array(
				'taxonomy' 			=> $taxonomy
				,'hierarchical'		=> 1
				,'hide_empty'		=> 0
				,'parent'			=> $cat_parent_id
				,'title_li'			=> ''
				,'child_of'			=> 0
			);
		$cats = get_categories($args);
		return $cats;
	}
}

if( !function_exists('ftc_get_list_sub_categories_shortcode_param') ){
	function ftc_get_list_sub_categories_shortcode_param( $cat_parent_id, $arr_value, $settings ){
		$sub_categories = ftc_get_list_categories_shortcode_param($cat_parent_id, $settings); 
		if( count($sub_categories) > 0){
		?>
			<ul class="children">
				<?php foreach( $sub_categories as $sub_cat ){ ?>
					<li>
						<label>
							<input type="checkbox" class="checkbox ftc-select-category" value="<?php echo esc_attr($sub_cat->term_id); ?>" <?php echo (in_array($sub_cat->term_id, $arr_value))?'checked':''; ?> />
							<?php echo esc_html($sub_cat->name); ?>
						</label>
						<?php ftc_get_list_sub_categories_shortcode_param($sub_cat->term_id, $arr_value, $settings); ?>
					</li>
				<?php } ?>
			</ul>
		<?php }
	}
}

if( class_exists('Vc_Vendor_Woocommerce') ){
	$vc_woo_vendor = new Vc_Vendor_Woocommerce();

	/* autocomplete callback */
	add_filter( 'vc_autocomplete_ftc_products_ids_callback', array($vc_woo_vendor, 'productIdAutocompleteSuggester') );
	add_filter( 'vc_autocomplete_ftc_products_ids_render', array($vc_woo_vendor, 'productIdAutocompleteRender') );
	
	
	$shortcode_field_cats = array();
	$shortcode_field_cats[] = array('ftc_products', 'product_cats');
	$shortcode_field_cats[] = array('ftc_products_slider', 'product_cats');
	$shortcode_field_cats[] = array('ftc_products_widget', 'product_cats');
	$shortcode_field_cats[] = array('ftc_product_deals_slider', 'product_cats');
	$shortcode_field_cats[] = array('ftc_products_category_tabs', 'product_cats');
	$shortcode_field_cats[] = array('ftc_products_category_tabs', 'parent_cat');
	$shortcode_field_cats[] = array('ftc_list_of_product_categories', 'product_cat');
	$shortcode_field_cats[] = array('ftc_list_of_product_categories', 'include_cats');
	$shortcode_field_cats[] = array('ftc_product_categories_slider', 'parent');
	$shortcode_field_cats[] = array('ftc_product_categories_slider', 'child_of');
	$shortcode_field_cats[] = array('ftc_product_categories_slider', 'ids');
		
	foreach( $shortcode_field_cats as $shortcode_field ){
		add_filter( 'vc_autocomplete_'.$shortcode_field[0].'_'.$shortcode_field[1].'_callback', array($vc_woo_vendor, 'productCategoryCategoryAutocompleteSuggester') );
		add_filter( 'vc_autocomplete_'.$shortcode_field[0].'_'.$shortcode_field[1].'_render', array($vc_woo_vendor, 'productCategoryCategoryRenderByIdExact') );
	}
}
?>