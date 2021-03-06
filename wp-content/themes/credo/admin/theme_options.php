<?php

/**
 * FTC Theme Options
 */

if (!class_exists('Redux_Framework_smof_data')) {

    class Redux_Framework_smof_data {

        public $args        = array();
        public $sections    = array();
        public $theme;
        public $ReduxFramework;

        public function __construct() {

            if (!class_exists('ReduxFramework')) {
                return;
            }

            // This is needed. Bah WordPress bugs.  ;)
            if (  true == Redux_Helpers::isTheme(__FILE__) ) {
                $this->initSettings();
            } else {
                add_action('plugins_loaded', array($this, 'initSettings'), 10);
            }

        }

        public function initSettings() {

            $this->theme = wp_get_theme();

            // Set the default arguments
            $this->setArguments();
            // Set a few help tabs so you can see how it's done
            $this->setHelpTabs();

            // Create the sections and fields
            $this->setSections();

            if (!isset($this->args['opt_name'])) { // No errors please
                return;
            }

            $this->ReduxFramework = new ReduxFramework($this->sections, $this->args);
        }

        function compiler_action($options, $css, $changed_values) {

        }

        function dynamic_section($sections) {

            return $sections;
        }

        function change_arguments($args) {

            return $args;
        }

        function change_defaults($defaults) {

            return $defaults;
        }

        function remove_demo() {

        }

        public function setSections() {

            /* Default Sidebar */
            global $ftc_default_sidebars;
            $of_sidebars    = array();
            if( $ftc_default_sidebars ){
                foreach( $ftc_default_sidebars as $key => $_sidebar ){
                    $of_sidebars[$_sidebar['id']] = $_sidebar['name'];
                }
            }
            $ftc_layouts = array(
                '0-1-0'     => get_template_directory_uri(). '/admin/images/1col.png'
                ,'0-1-1'    => get_template_directory_uri(). '/admin/images/2cr.png'
                ,'1-1-0'    => get_template_directory_uri(). '/admin/images/2cl.png'
                ,'1-1-1'    => get_template_directory_uri(). '/admin/images/3cm.png'
            );

            /***************************/ 
            /***   General Options   ***/
            /***************************/
            $this->sections[] = array(
                'icon' => 'fa fa-home',
                'icon_class' => 'icon',
                'title' => esc_html__('General', 'credo'),
                'fields' => array(				
                )
            );	 

            /* Popup Newletter */
            $this->sections[] = array(
                'icon' => 'icofont icofont-double-right',
                'icon_class' => 'icon',
                'subsection' => true,
                'title' => esc_html__('Popup Newletter', 'carna'),
                'fields' => array(                    
                    array(
                        'id'=>'ftc_enable_popup',
                        'type' => 'switch',
                        'title' => esc_html__('Enable Popup Newletter', 'carna'),
                        'desc'     => '',
                        'on' => esc_html__('Yes', 'carna'),
                        'off' => esc_html__('No', 'carna'),
                        'default' => 1,
                    ),
                    array(
                        'id'=>'ftc_bg_popup_image',
                        'type' => 'media',
                        'title' => esc_html__('Popup Newletter Background Image', 'carna'),
                        'desc'     => esc_html__("Select a new image to override current background image", "carna"),
                        'default'   =>''
                    ),                   
                )
            );
            
            /** Logo - Favicon **/
            $this->sections[] = array(
                'icon' => 'icofont icofont-double-right',
                'icon_class' => 'icon',
                'subsection' => true,
                'title' => esc_html__('Logo - Favicon', 'credo'),
                'fields' => array(			
                  array(
                    'id'=>'ftc_logo',
                    'type' => 'media',
                    'compiler'  => 'true',
                    'mode'      => false,
                    'title' => esc_html__('Logo Image', 'credo'),
                    'desc'      => esc_html__('Select an image file for the main logo', 'credo'),
                    'default' => array(
                        'url' => get_template_directory_uri(). '/assets/images/logo.png'
                    )
                )				
                  ,array(
                    'id'=>'ftc_favicon',
                    'type' => 'media',
                    'compiler'  => 'true',
                    'mode'      => false,
                    'title' => esc_html__('Favicon Image', 'credo'),
                    'desc'      => esc_html__('Accept ICO files', 'credo'),
                    'default' => array(
                        'url' => get_template_directory_uri(). '/assets/images/favicon.ico'
                    )
                )
                  ,array(
                    'id'=>'ftc_text_logo',
                    'type' => 'text',
                    'title' => esc_html__('Text Logo', 'credo'),
                    'default' => 'Credo'
                )				
              )
            );

            /** Header Options **/
            $this->sections[] = array(
                'icon' => 'icofont icofont-double-right',
                'icon_class' => 'icon',
                'subsection' => true,
                'title' => esc_html__('Header of inner Pages', 'credo'),
                'fields' => array(	
                 array(
                  'id'=>'ftc_header_layout',
                  'type' => 'image_select',
                  'full_width' => true,
                  'title' => esc_html__('Header Layout', 'credo'),
                  'subtitle' => esc_html__('This header style will be showed only in inner pages, please go to Pages > Homepage to change header for front page.', 'credo'),
                  'options' => array(
                    'layout1'   => get_template_directory_uri() . '/admin/images/header/layout1.jpg'
                    ,'layout2'  => get_template_directory_uri() . '/admin/images/header/layout2.jpg'
                    ,'layout3'   => get_template_directory_uri() . '/admin/images/header/layout4.jpg'
                    ,'layout4'   => get_template_directory_uri() . '/admin/images/header/layout5.jpg'
                ),
                  'default' => 'layout1'
              ),
                 array(
                    'id'=>'ftc_header_contact_information',
                    'type' => 'textarea',
                    'title' => esc_html__('Header nav Information', 'credo'),
                    'default' => '',
                ),					
                 array(
                    'id'=>'ftc_middle_header_content',
                    'type' => 'textarea',
                    'title' => esc_html__('Header Content - Information', 'credo'),
                    'default' => '',
                )
                 ,
                 array(   
                    "title"     => esc_html__("Header Sticky", "credo"),
                    "desc"     => esc_html__("Add header sticky. Please disable sticky mega main menu", "credo"),
                    "id"       => "ftc_enable_sticky_header",
                    'default' => 1,
                    "on"       => esc_html__("Enable", "credo"),
                    "off"      => esc_html__("Disable", "credo"),
                    "type"     => "switch",
                ),
                     array(
                    'id'=>'ftc_mobile_layout',
                    'type' => 'switch',
                    'title' => esc_html__('Mobile Layout', 'giftsshop'),
                    'default' => 1,
                    'on' => esc_html__('Enable', 'giftsshop'),
                    'off' => esc_html__('Disable', 'giftsshop'),
                ),
 array(
                    'id'=>'ftc_logo_mobile',
                    'type' => 'media',
                    'compiler'  => 'true',
                    'mode'      => false,
                    'title' => esc_html__('Logo Mobile Image', 'ovanic'),
                    'desc'      => '',
                    'default' => ''
                )
                 ,
                 array(
                    'id'=>'ftc_header_currency',
                    'type' => 'switch',
                    'title' => esc_html__('Header Currency', 'credo'),
                    'default' => 0,
                    'on' => esc_html__('Enable', 'credo'),
                    'off' => esc_html__('Disable', 'credo'),
                ),
                 array(
                    'id'=>'ftc_header_language',
                    'type' => 'switch',
                    'title' => esc_html__('Header Language', 'credo'),
                    'desc'     => esc_html__("If you don't install WPML plugin, it will display demo html", "credo"),
                    'on' => esc_html__('Yes', 'credo'),
                    'off' => esc_html__('No', 'credo'),
                    'default' => 0,
                ),
                 array(
                    'id'=>'ftc_enable_tiny_shopping_cart',
                    'type' => 'switch',
                    'title' => esc_html__('Shopping Cart', 'credo'),
                    'on' => esc_html__('Yes', 'credo'),
                    'off' => esc_html__('No', 'credo'),
                    'default' => 1,
                ),
                 array(
                    'id'=>'ftc_enable_search',
                    'type' => 'switch',
                    'title' => esc_html__('Search Bar', 'credo'),
                    'on' => esc_html__('Yes', 'credo'),
                    'off' => esc_html__('No', 'credo'),
                    'default' => 1,
                ),
                 array(
                    'id'=>'ftc_enable_tiny_account',
                    'type' => 'switch',
                    'title' => esc_html__('My Account', 'credo'),
                    'on' => esc_html__('Yes', 'credo'),
                    'off' => esc_html__('No', 'credo'),
                    'default' => 1,
                ),
                 array(
                    'id'=>'ftc_enable_tiny_wishlist',
                    'type' => 'switch',
                    'title' => esc_html__('Wishlist', 'credo'),
                    'on' => esc_html__('Yes', 'credo'),
                    'off' => esc_html__('No', 'credo'),
                    'default' => 1,
                ),
                 array(   "title"      => esc_html__("Check out", "credo")
                    ,"desc"     => ""
                    ,"id"       => "ftc_enable_tiny_checkout"
                    ,"default"      => "1"
                    ,"on"       => esc_html__("Enable", "credo")
                    ,"off"      => esc_html__("Disable", "credo")
                    ,"type"     => "switch"
                )
             )
);	

$this->sections[] = array(
    'icon' => 'icofont icofont-double-right',
    'icon_class' => 'icon',
    'subsection' => true,
    'title' => esc_html__('Breadcrumb', 'credo'),
    'fields' => array(
        array(
            'id'=>'ftc_bg_breadcrumbs',
            'type' => 'media',
            'title' => esc_html__('Breadcrumbs Background Image', 'credo'),
            'desc'     => esc_html__("Select a new image to override current background image", "credo"),
            'default'   =>array(
                'url' => get_template_directory_uri(). '/assets/images/banner-shop.jpg'
            )
        ),
        array(
            'id'=>'ftc_enable_breadcrumb_background_image',
            'type' => 'switch',
            'title' => esc_html__('Enable Breadcrumb Background Image', 'credo'),
            'desc'     => esc_html__("You can set background color by going to Color Scheme tab > Breadcrumb Colors section", "credo"),
            'on' => esc_html__('Yes', 'credo'),
            'off' => esc_html__('No', 'credo'),
            'default' => 1,
        ),                   
    )
);

/** Back top top **/
$this->sections[] = array(
    'icon' => 'icofont icofont-double-right',
    'icon_class' => 'icon',
    'subsection' => true,
    'title' => esc_html__('Back to top', 'credo'),
    'fields' => array(
        array(
            'id'=>'ftc_back_to_top_button',
            'type' => 'switch',
            'title' => esc_html__('Enable Back To Top Button', 'credo'),
            'default' => false,
            'on' => esc_html__('Yes', 'credo'),
            'off' => esc_html__('No', 'credo'),
        )  
        ,array(
            'id'=>'ftc_back_to_top_button_on_mobile',
            'type' => 'switch',
            'title' => esc_html__('Enable Back To Top Button On Mobile', 'credo'),
            'default' => false,
            'on' => esc_html__('Yes', 'credo'),
            'off' => esc_html__('No', 'credo'),
        )                   
    )
);
$this->sections[] = array(
    'icon' => 'icofont icofont-double-right',
    'icon_class' => 'icon',
    'subsection' => true,
    'title' => esc_html__('Google Map API Key', 'credo'),
    'fields' => array(
        array(
            'id'=>'ftc_gmap_api_key',
            'type' => 'text',
            'title' => esc_html__('Enter your API key', 'credo'),
            'default' => 'AIzaSyAypdpHW1-ENvAZRjteinZINafSBpAYxDE',
        )                   
    )
);

/* * *  Typography  * * */
$this->sections[] = array(
    'icon' => 'icofont icofont-brand-appstore',
    'icon_class' => 'icon',
    'title' => esc_html__('Styling', 'credo'),
    'fields' => array(				
    )
);	

/** Color Scheme Options  * */
$this->sections[] = array(
    'icon' => 'icofont icofont-double-right',
    'icon_class' => 'icon',
    'subsection' => true,
    'title' => esc_html__('Color Scheme', 'credo'),
    'fields' => array(					
       array(
          'id' => 'ftc_primary_color',
          'type' => 'color',
          'title' => esc_html__('Primary Color', 'credo'),
          'subtitle' => esc_html__('Select a main color for your site.', 'credo'),
          'default' => '#527fa4',
          'transparent' => false,
      ),				 
       array(
          'id' => 'ftc_secondary_color',
          'type' => 'color',
          'title' => esc_html__('Secondary Color', 'credo'),
          'default' => '#333',
          'transparent' => false,
      ),
       array(
          'id' => 'ftc_body_background_color',
          'type' => 'color',
          'title' => esc_html__('Body Background Color', 'credo'),
          'default' => '#ffffff',
          'transparent' => false,
      ),	
   )
);

/** Typography Config    **/
$this->sections[] = array(
    'icon' => 'icofont icofont-double-right',
    'icon_class' => 'icon',
    'subsection' => true,
    'title' => esc_html__('Typography', 'credo'),
    'fields' => array(
        array(
            'id'=>'ftc_body_font_enable_google_font',
            'type' => 'switch',
            'title' => esc_html__('Body Font - Enable Google Font', 'credo'),
            'default' => 1,
            'folds'    => 1,
            'on' => esc_html__('Yes', 'credo'),
            'off' => esc_html__('No', 'credo'),
        ),
        array(
            'id'=>'ftc_body_font_family',
            'type'          => 'select',
            'title'         => esc_html__('Body Font - Family Font', 'credo'),
            'default'       => 'Arial',
            'options'            => array(
                "Arial" => "Arial"
                ,"Advent Pro" => "Advent Pro"
                ,"Verdana" => "Verdana, Geneva"
                ,"Trebuchet" => "Trebuchet"
                ,"Georgia" => "Georgia"
                ,"Times New Roman" => "Times New Roman"
                ,"Tahoma, Geneva" => "Tahoma, Geneva"
                ,"Palatino" => "Palatino"
                ,"Helvetica" => "Helvetica"
                ,"BebasNeue" => "BebasNeue"
                ,"Poppins" =>"Poppins"


            ),
        ),
        array(
            'id'=>'ftc_body_font_google',
            'type' 			=> 'typography',
            'title' 		=> esc_html__('Body Font - Google Font', 'credo'),
            'google' 		=> true,
            'subsets' 		=> false,
            'font-style' 	=> false,
            'font-weight'   => false,
            'font-size'     => false,
            'line-height'   => false,
            'text-align' 	=> false,
            'color' 		=> false,
            'output'        => array('body'),
            'default'       => array(
                'color'			=> "#000000",
                'google'		=> true,
                'font-family'	=> 'Poppins'

            ),
            'preview'       => array(
                "text" => esc_html__("This is my font preview!", "credo")
                ,"size" => "30px"
            )
        ),
        array(
            'id'        =>'ftc_secondary_body_font_enable_google_font',
            'title'     => esc_html__('Secondary Body Font - Enable Google Font', 'credo'),
            'on'       => esc_html__("Enable", "credo"),
            'off'      => esc_html__("Disable", "credo"),
            'type'     => 'switch',
            'default'   => 1
        ),
        array(
            'id'            => 'ftc_secondary_body_font_google',
            'type'          => 'typography',
            'title'         => esc_html__('Body Font - Google Font', 'credo'),
            'google'        => true,
            'subsets'       => false,
            'font-style'    => false,
            'font-weight'   => false,
            'font-size'     => false,
            'line-height'   => false,
            'text-align'    => false,
            'color'         => false,
            'output'        => array('body'),
            'default'       => array(
                'color'         =>"#000000",
                'google'        =>true,
                'font-family'   =>'Raleway'                            
            ),
            'preview'       => array(
                "text" => esc_html__("This is my font preview!", "credo")
                ,"size" => "30px"
            )
        ),
        array(
            'id'        =>'ftc_font_size_body',
            'type'      => 'slider',
            'title'     => esc_html__('Body Font Size', 'credo'),
            'desc'     => esc_html__("In pixels. Default is 14px", "credo"),
            'min'      => '10',
            'step'     => '1',
            'max'      => '50',
            'default'   => '14'
        ),	
        array(
            'id'        =>'ftc_line_height_body',
            'type'      => 'slider',
            'title'     => esc_html__('Body Font Line Heigh', 'credo'),
            'desc'     => esc_html__("In pixels. Default is 24px", "credo"),
            'min'      => '10',
            'step'     => '1',
            'max'      => '50',
            'default'   => '24'
        )				
    )
);

/*** WooCommerce Config     ** */
if ( class_exists( 'Woocommerce' ) ) :
    $this->sections[] = array(
     'icon' => 'icofont icofont-cart-alt',
     'icon_class' => 'icon',
     'title' => esc_html__('Ecommerce', 'credo'),
     'fields' => array(				
     )
 );

    /** Woocommerce **/
    $this->sections[] = array(
     'icon' => 'icofont icofont-double-right',
     'icon_class' => 'icon',
     'subsection' => true,
     'title' => esc_html__('Woocommerce', 'credo'),
     'fields' => array(	
        array(  
            "title"      => esc_html__("Product Label", "credo")
            ,"desc"     => ""
            ,"id"       => "product_label_options"
            ,"icon"     => true
            ,"type"     => "info"
        ),
        array(  
            "title"      => esc_html__("Product Sale Label Text", "credo")
            ,"desc"     => ""
            ,"id"       => "ftc_product_sale_label_text"
            ,"default"      => "Sale"
            ,"type"     => "text"
        ),
        array(  
            "title"      => esc_html__("Product Feature Label Text", "credo")
            ,"desc"     => ""
            ,"id"       => "ftc_product_feature_label_text"
            ,"default"      => "New"
            ,"type"     => "text"
        ),						
        array(  
            "title"      => esc_html__("Product Out Of Stock Label Text", "credo")
            ,"desc"     => ""
            ,"id"       => "ftc_product_out_of_stock_label_text"
            ,"default"      => "Sold out"
            ,"type"     => "text"
        ),           		
        array(   
            "title"      => esc_html__("Show Sale Label As", "credo")
            ,"desc"     => ""
            ,"id"       => "ftc_show_sale_label_as"
            ,"default"      => "text"
            ,"type"     => "select"
            ,"options"  => array(
                'text'      => esc_html__('Text', 'credo')
                ,'number'   => esc_html__('Number', 'credo')
                ,'percent'  => esc_html__('Percent', 'credo')
            )
        ),
        array(  
            "title"      => esc_html__("Product Hover Style", "credo")
            ,"desc"     => ""
            ,"id"       => "prod_hover_style_options"
            ,"icon"     => true
            ,"type"     => "info"
        ),
        array(  
            "title"      => esc_html__("Hover Style", "credo")
            ,"desc"     => ""
            ,"id"       => "ftc_effect_hover_product_style"
            ,"default"      => "style-1"
            ,"type"     => "select"
            ,"options"  => array(
                'style-1'       => esc_html__('Style 1', 'credo')
                ,'style-2'      => esc_html__('Style 2', 'credo')
                ,'style-3'      => esc_html__('Style 3', 'credo')
            )
        ),
        array(  
            "title"      => esc_html__("Back Product Image", "credo")
            ,"desc"     => ""
            ,"id"       => "introduction_enable_img_back"
            ,"icon"     => true
            ,"type"     => "info"
        ),					
        array(   
            "title"      => esc_html__("Enable Second Product Image", "credo")
            ,"desc"     => esc_html__("Show second product image on hover. It will show an image from Product Gallery", "credo")
            ,"id"       => "ftc_effect_product"
            ,"default"      => "1"
            ,"type"     => "switch"
        ),
        array(  
            "title"      => "Number Of Gallery Product Image"
            ,"id"       => "ftc_product_gallery_number"
            ,"default"      => 3
            ,"type"     => "text"
        ),
        array(  
            "title"      => esc_html__("Lazy Load", "credo")
            ,"desc"     => ""
            ,"id"       => "prod_lazy_load_options"
            ,"icon"     => true
            ,"type"     => "info"
        ),
        array(  
            "title"      => esc_html__("Activate Lazy Load", "credo")
            ,"desc"     => ""
            ,"id"       => "ftc_prod_lazy_load"
            ,"default"      => 1
            ,"type"     => "switch"
        ),
        array(
            'id'=>'ftc_prod_placeholder_img',
            'type' => 'media',
            'compiler'  => 'true',
            'mode'      => false,
            'title' => esc_html__('Placeholder Image', 'credo'),
            'desc'      => '',
            'default' => array(
                'url' => get_template_directory_uri(). '/assets/images/prod_loading.gif'
            )
        ),
        array(  
            "title"      => esc_html__("Quickshop", "credo")
            ,"desc"     => ""
            ,"id"       => "quickshop_options"
            ,"icon"     => true
            ,"type"     => "info"
        ),
        array(  
            "title"      => esc_html__("Activate Quickshop", "credo")
            ,"desc"     => ""
            ,"id"       => "ftc_enable_quickshop"
            ,"default"      => 1
            ,"type"     => "switch"
        ),
        array(  
            "title"      => esc_html__("Catalog Mode", "credo")
            ,"desc"     => ""
            ,"id"       => "introduction_catalog_mode"
            ,"icon"     => true
            ,"type"     => "info"
        ),
        array(  
            "title"      => esc_html__("Enable Catalog Mode", "credo")
            ,"desc"     => esc_html__("Hide all Add To Cart buttons on your site. You can also hide Shopping cart by going to Header tab > turn Shopping Cart option off", "credo")
            ,"id"       => "ftc_enable_catalog_mode"
            ,"default"      => "0"
            ,"type"     => "switch"
        ),
        array(     
            "title"      => esc_html__("Ajax Search", "credo")
            ,"desc"     => ""
            ,"id"       => "ajax_search_options"
            ,"icon"     => true
            ,"type"     => "info"
        ),
        array(     
            "title"      => esc_html__("Enable Ajax Search", "credo")
            ,"desc"     => ""
            ,"id"       => "ftc_ajax_search"
            ,"default"      => "1"
            ,"type"     => "switch"
        ),
        array(     
            "title"      => esc_html__("Number Of Results", "credo")
            ,"desc"     => esc_html__("Input -1 to show all results", "credo")
            ,"id"       => "ftc_ajax_search_number_result"
            ,"default"      => 3
            ,"type"     => "text"
        )
    )
);

/*** Product Category ***/
$this->sections[] = array(
 'icon' => 'icofont icofont-double-right',
 'icon_class' => 'icon',
 'subsection' => true,
 'title' => esc_html__( 'Product Category', 'credo'),
 'fields' => array(
  array(
   'id' => 'ftc_prod_cat_layout',
   'type' => 'image_select',
   'title' => esc_html__('Product Category Layout', 'credo'),
   'des' => esc_html__('Select main content and sidebar alignment.', 'credo'),
   'options' => $ftc_layouts,
   'default' => '0-1-0'
),						
  array(    
    "title"      => esc_html__("Left Sidebar", "credo")
    ,"id"       => "ftc_prod_cat_left_sidebar"
    ,"default"      => "product-category-sidebar"
    ,"type"     => "select"
    ,"options"  => $of_sidebars
),						
  array(    
    "title"      => esc_html__("Right Sidebar", "credo")
    ,"id"       => "ftc_prod_cat_right_sidebar"
    ,"default"      => "product-category-sidebar"
    ,"type"     => "select"
    ,"options"  => $of_sidebars
),
  array(    
    "title"      => esc_html__("Product Columns", "credo")
    ,"id"       => "ftc_prod_cat_columns"
    ,"default"      => "3"
    ,"type"     => "select"
    ,"options"  => array(
        3   => 3
        ,4  => 4
        ,5  => 5
        ,6  => 6
    )
),
  array(    
      "title"      => esc_html__("Products Per Page", "credo")
      ,"desc"     => esc_html__("Number of products per page", "credo")
      ,"id"       => "ftc_prod_cat_per_page"
      ,"default"      => 12
      ,"type"     => "text"
  ),						
  array(   
     "title"      => esc_html__("Top Content Widget Area", "credo")
     ,"desc"     => esc_html__("Display Product Category Top Content widget area", "credo")
     ,"id"       => "ftc_prod_cat_top_content"
     ,"default"      => 1
     ,"on"       => esc_html__("Show", "credo")
     ,"off"      => esc_html__("Hide", "credo")
     ,"type"     => "switch"
 ),
  array(    
    "title"      => esc_html__("Product Thumbnail", "credo")
    ,"desc"     => ""
    ,"id"       => "ftc_prod_cat_thumbnail"
    ,"default"      => 1
    ,"on"       => esc_html__("Show", "credo")
    ,"off"      => esc_html__("Hide", "credo")
    ,"type"     => "switch"
),
  array(    
    "title"      => esc_html__("Product Label", "credo")
    ,"desc"     => ""
    ,"id"       => "ftc_prod_cat_label"
    ,"default"      => 1
    ,"on"       => esc_html__("Show", "credo")
    ,"off"      => esc_html__("Hide", "credo")
    ,"type"     => "switch"
),
  array(  
    "title"      => esc_html__("Product Categories", "credo")
    ,"desc"     => ""
    ,"id"       => "ftc_prod_cat_cat"
    ,"default"      => 0
    ,"on"       => esc_html__("Show", "credo")
    ,"off"      => esc_html__("Hide", "credo")
    ,"type"     => "switch"
),
  array(  
    "title"      => esc_html__("Product Title", "credo")
    ,"desc"     => ""
    ,"id"       => "ftc_prod_cat_title"
    ,"default"      => 1
    ,"on"       => esc_html__("Show", "credo")
    ,"off"      => esc_html__("Hide", "credo")
    ,"type"     => "switch"
),
  array(  
    "title"      => esc_html__("Product SKU", "credo")
    ,"desc"     => ""
    ,"id"       => "ftc_prod_cat_sku"
    ,"default"      => 0
    ,"on"       => esc_html__("Show", "credo")
    ,"off"      => esc_html__("Hide", "credo")
    ,"type"     => "switch"
),
  array(  
    "title"      => esc_html__("Product Rating", "credo")
    ,"desc"     => ""
    ,"id"       => "ftc_prod_cat_rating"
    ,"default"      => 1
    ,"on"       => esc_html__("Show", "credo")
    ,"off"      => esc_html__("Hide", "credo")
    ,"type"     => "switch"
),
  array(  
    "title"      => esc_html__("Product Price", "credo")
    ,"desc"     => ""
    ,"id"       => "ftc_prod_cat_price"
    ,"default"      => 1
    ,"on"       => esc_html__("Show", "credo")
    ,"off"      => esc_html__("Hide", "credo")
    ,"type"     => "switch"
),
  array(  
    "title"      => esc_html__("Product Add To Cart Button", "credo")
    ,"desc"     => ""
    ,"id"       => "ftc_prod_cat_add_to_cart"
    ,"default"      => 1
    ,"on"       => esc_html__("Show", "credo")
    ,"off"      => esc_html__("Hide", "credo")
    ,"type"     => "switch"
),
  array(    
   "title"      => esc_html__("Product Short Description - Grid View", "credo")
   ,"desc"     => esc_html__("Show product description on grid view", "credo")
   ,"id"       => "ftc_prod_cat_grid_desc"
   ,"default"      => 0
   ,"on"       => esc_html__("Show", "credo")
   ,"off"      => esc_html__("Hide", "credo")
   ,"type"     => "switch"
),
  array(  
    "title"      => esc_html__("Product Short Description - Grid View - Limit Words", "credo")
    ,"desc"     => esc_html__("Number of words to show product description on grid view. It is also used for product shortcode", "credo")
    ,"id"       => "ftc_prod_cat_grid_desc_words"
    ,"default"      => 8
    ,"type"     => "text"
),
  array(     
    "title"      => esc_html__("Product Short Description - List View", "credo")
    ,"desc"     => esc_html__("Show product description on list view", "credo")
    ,"id"       => "ftc_prod_cat_list_desc"
    ,"default"      => 1
    ,"on"       => esc_html__("Show", "credo")
    ,"off"      => esc_html__("Hide", "credo")
    ,"type"     => "switch"
),
  array(  
    "title"      => esc_html__("Product Short Description - List View - Limit Words", "credo")
    ,"desc"     => esc_html__("Number of words to show product description on list view", "credo")
    ,"id"       => "ftc_prod_cat_list_desc_words"
    ,"default"      => 50
    ,"type"     => "text"
)					
)
);
/* Product Details Config  */
$this->sections[] = array(
 'icon' => 'icofont icofont-double-right',
 'icon_class' => 'icon',
 'subsection' => true,
 'title' => esc_html__('Product Details', 'credo'),
 'fields' => array(
    array(
       'id' => 'ftc_prod_layout',
       'type' => 'image_select',
       'title' => esc_html__('Product Detail Layout', 'credo'),
       'des' => esc_html__('Select main content and sidebar alignment.', 'credo'),
       'options' => $ftc_layouts,
       'default' => '0-1-1'
   ),
    array(  
        "title"      => esc_html__("Left Sidebar", "credo")
        ,"id"       => "ftc_prod_left_sidebar"
        ,"default"      => "product-detail-sidebar"
        ,"type"     => "select"
        ,"options"  => $of_sidebars
    ),
    array(  
        "title"      => esc_html__("Right Sidebar", "credo")
        ,"id"       => "ftc_prod_right_sidebar"
        ,"default"      => "product-detail-sidebar"
        ,"type"     => "select"
        ,"options"  => $of_sidebars
    ),
    array(  
        "title"      => esc_html__("Product Cloud Zoom", "credo")
        ,"desc"     => esc_html__("If you turn it off, product gallery images will open in a lightbox. This option overrides the option of WooCommerce", "credo")
        ,"id"       => "ftc_prod_cloudzoom"
        ,"default"      => 1
        ,"type"     => "switch"
    ),
    array(  "title"      => esc_html__("Product Attribute Dropdown", "credo")
        ,"desc"     => esc_html__("If you turn it off, the dropdown will be replaced by image or text label", "credo")
        ,"id"       => "ftc_prod_attr_dropdown"
        ,"default"      => 1
        ,"type"     => "switch"
    ),						
    array(  "title"      => esc_html__("Product Thumbnail", "credo")
        ,"desc"     => ""
        ,"id"       => "ftc_prod_thumbnail"
        ,"default"      => 1
        ,"on"       => esc_html__("Show", "credo")
        ,"off"      => esc_html__("Hide", "credo")
        ,"type"     => "switch"
    ),
    array(  "title"      => esc_html__("Product Label", "credo")
        ,"desc"     => ""
        ,"id"       => "ftc_prod_label"
        ,"default"      => 1
        ,"on"       => esc_html__("Show", "credo")
        ,"off"      => esc_html__("Hide", "credo")
        ,"type"     => "switch"
    ),
    array(  "title"      => esc_html__("Product Navigation", "credo")
        ,"desc"     => ""
        ,"id"       => "ftc_show_prod_navigation"
        ,"default"      => 0
        ,"on"       => esc_html__("Show", "credo")
        ,"off"      => esc_html__("Hide", "credo")
        ,"type"     => "switch"
    ),
    array(  "title"      => esc_html__("Product Title", "credo")
        ,"desc"     => ""
        ,"id"       => "ftc_prod_title"
        ,"default"      => 1
        ,"on"       => esc_html__("Show", "credo")
        ,"off"      => esc_html__("Hide", "credo")
        ,"type"     => "switch"
    ),
    array(  "title"      => esc_html__("Product Title In Content", "credo")
        ,"desc"     => esc_html__("Display the product title in the page content instead of above the breadcrumbs", "credo")
        ,"id"       => "ftc_prod_title_in_content"
        ,"default"      => 0
        ,"type"     => "switch"
    ),
    array(  "title"      => esc_html__("Product Rating", "credo")
        ,"desc"     => ""
        ,"id"       => "ftc_prod_rating"
        ,"default"      => 1
        ,"on"       => esc_html__("Show", "credo")
        ,"off"      => esc_html__("Hide", "credo")
        ,"type"     => "switch"
    ),
    array(  "title"      => esc_html__("Product SKU", "credo")
        ,"desc"     => ""
        ,"id"       => "ftc_prod_sku"
        ,"default"      => 1
        ,"on"       => esc_html__("Show", "credo")
        ,"off"      => esc_html__("Hide", "credo")
        ,"type"     => "switch"
    ),
    array(  "title"      => esc_html__("Product Availability", "credo")
        ,"desc"     => ""
        ,"id"       => "ftc_prod_availability"
        ,"default"      => 1
        ,"on"       => esc_html__("Show", "credo")
        ,"off"      => esc_html__("Hide", "credo")
        ,"type"     => "switch"
    ),
    array(  "title"      => esc_html__("Product Excerpt", "credo")
        ,"desc"     => ""
        ,"id"       => "ftc_prod_excerpt"
        ,"default"      => 1
        ,"on"       => esc_html__("Show", "credo")
        ,"off"      => esc_html__("Hide", "credo")
        ,"type"     => "switch"
    ),
    array(  "title"      => esc_html__("Product Count Down", "credo")
        ,"desc"     => esc_html__("You have to activate ThemeFTC plugin", "credo")
        ,"id"       => "ftc_prod_count_down"
        ,"default"      => 1
        ,"on"       => esc_html__("Show", "credo")
        ,"off"      => esc_html__("Hide", "credo")
        ,"type"     => "switch"
    ),
    array(  "title"      => esc_html__("Product Price", "credo")
        ,"desc"     => ""
        ,"id"       => "ftc_prod_price"
        ,"default"      => 1
        ,"on"       => esc_html__("Show", "credo")
        ,"off"      => esc_html__("Hide", "credo")
        ,"type"     => "switch"
    ),
    array(  "title"      => esc_html__("Product Add To Cart Button", "credo")
        ,"desc"     => ""
        ,"id"       => "ftc_prod_add_to_cart"
        ,"default"      => 1
        ,"on"       => esc_html__("Show", "credo")
        ,"off"      => esc_html__("Hide", "credo")
        ,"type"     => "switch"
    ),
    array(  "title"      => esc_html__("Product Categories", "credo")
        ,"desc"     => ""
        ,"id"       => "ftc_prod_cat"
        ,"default"      => 1
        ,"on"       => esc_html__("Show", "credo")
        ,"off"      => esc_html__("Hide", "credo")
        ,"type"     => "switch"
    ),
    array(  "title"      => esc_html__("Product Tags", "credo")
        ,"desc"     => ""
        ,"id"       => "ftc_prod_tag"
        ,"default"      => 1
        ,"on"       => esc_html__("Show", "credo")
        ,"off"      => esc_html__("Hide", "credo")
        ,"type"     => "switch"
    ),
    array(  "title"      => esc_html__("Product Sharing", "credo")
        ,"desc"     => ""
        ,"id"       => "ftc_prod_sharing"
        ,"default"      => 1
        ,"on"       => esc_html__("Show", "credo")
        ,"off"      => esc_html__("Hide", "credo")
        ,"type"     => "switch"
    ),
    array(  "title"      => esc_html__("Size Chart", "credo")
        ,"desc"     => ""
        ,"id"       => "ftc_show_prod_size_chart"
        ,"default"      => 1
        ,"on"       => esc_html__("Show", "credo")
        ,"off"      => esc_html__("Hide", "credo")
        ,"type"     => "switch"
    ),
    array(  "title"      => esc_html__("Size Chart Image", "credo")
        ,"desc"     => esc_html__("Select an image file for all Product", "credo")
        ,"id"       => "ftc_prod_size_chart"
        ,"type"     => "media"
        ,'default' => array(
                        'url' => get_template_directory_uri(). '/assets/images/size-chart.jpg'
                    )
    ),

    
    array(  "title"      => esc_html__("Product Thumbnails", "credo")
        ,"desc"     => ""
        ,"id"       => "introduction_product_thumbnails"
        ,"icon"     => true
        ,"type"     => "info"
    ),
    array(  "title"      => esc_html__("Product Thumbnails Style", "credo")
        ,"desc"     => ""
        ,"id"       => "ftc_prod_thumbnails_style"
        ,"default"      => "horizontal" 
        ,"type"     => "select"
        ,"options"  => array(
            'vertical'      => esc_html__('Vertical', 'credo')
            ,'horizontal'   => esc_html__('Horizontal', 'credo')
        )
    ),
    array(  "title"      => esc_html__("Product Tabs", "credo")
        ,"desc"     => ""
        ,"id"       => "introduction_product_tabs"
        ,"icon"     => true
        ,"type"     => "info"
    ),
    array(  "title"      => esc_html__("Product Tabs", "credo")
        ,"desc"     => esc_html__("Enable Product Tabs", "credo")
        ,"id"       => "ftc_prod_tabs"
        ,"default"      => 1
        ,"on"       => esc_html__("Show", "credo")
        ,"off"      => esc_html__("Hide", "credo")
        ,"type"     => "switch"
    ),
    array(  "title"      => esc_html__("Product Tabs Style", "credo")
        ,"desc"     => ""
        ,"id"       => "ftc_prod_style_tabs"
        ,"default"      => "defaut"
        ,"type"     => "select"
        ,"options"  => array(
            'default'       => esc_html__('Default', 'credo')
            ,'accordion'    => esc_html__('Accordion', 'credo')
            ,'vertical' => esc_html__('Vertical', 'credo')
        )
    ),
    array(  "title"      => esc_html__("Product Tabs Position", "credo")
        ,"desc"     => ""
        ,"id"       => "ftc_prod_tabs_position"
        ,"default"      => "after_summary" 
        ,"fold"     => "ftc_prod_tabs"
        ,"type"     => "select"
        ,"options"  => array(
            'after_summary'     => esc_html__('After Summary', 'credo')
            ,'inside_summary'   => esc_html__('Inside Summary', 'credo')
        )
    ),
    array(  "title"      => esc_html__("Product Custom Tab", "credo")
        ,"desc"     => ""
        ,"id"       => "ftc_prod_custom_tab"
        ,"default"      => 1
        ,"on"       => esc_html__("Show", "credo")
        ,"off"      => esc_html__("Hide", "credo")
        ,"fold"     => "ftc_prod_tabs"
        ,"type"     => "switch"
    ),
    array(  "title"      => esc_html__("Product Custom Tab Title", "credo")
        ,"desc"     => ""
        ,"id"       => "ftc_prod_custom_tab_title"
        ,"default"      => "Custom tab"
        ,"fold"     => "ftc_prod_tabs"
        ,"type"     => "text"
    ),
    array(  "title"      => esc_html__("Product Custom Tab Content", "credo")
        ,"desc"     => ""
        ,"id"       => "ftc_prod_custom_tab_content"
        ,"default"      => "Your custom content goes here. You can add the content for individual product"
        ,"fold"     => "ftc_prod_tabs"
        ,"type"     => "textarea"
    ),
    array(  "title"      => esc_html__("Product Ads Banner", "credo")
        ,"desc"     => ""
        ,"id"       => "introduction_product_ads_banner"
        ,"icon"     => true
        ,"type"     => "info"
    ),
    array(  "title"      => esc_html__("Ads Banner", "credo")
        ,"desc"     => ""
        ,"id"       => "ftc_prod_ads_banner"
        ,"default"      => 0
        ,"on"       => esc_html__("Show", "credo")
        ,"off"      => esc_html__("Hide", "credo")
        ,"type"     => "switch"
    ),
    array(     "title"      => esc_html__("Ads Banner Content", "credo")
        ,"desc"     => ""
        ,"id"       => "ftc_prod_ads_banner_content"
        ,"default"      => ''
        ,"fold"     => "ftc_prod_ads_banner"
        ,"type"     => "textarea"
    ),
    array(  "title"      => esc_html__("Related - Up-Sell Products", "credo")
        ,"desc"     => ""
        ,"id"       => "introduction_related_upsell_product"
        ,"icon"     => true
        ,"type"     => "info"
    ),
    array(     "title"      => esc_html__("Up-Sell Products", "credo")
        ,"desc"     => ""
        ,"id"       => "ftc_prod_upsells"
        ,"default"      => 0
        ,"on"       => esc_html__("Show", "credo")
        ,"off"      => esc_html__("Hide", "credo")
        ,"type"     => "switch"
    ),
    array(  "title"      => esc_html__("Related Products", "credo")
        ,"desc"     => ""
        ,"id"       => "ftc_prod_related"
        ,"default"      => 1
        ,"on"       => esc_html__("Show", "credo")
        ,"off"      => esc_html__("Hide", "credo")
        ,"type"     => "switch"
    )					
)
);

endif;


/* Blog Settings */
$this->sections[] = array(
    'icon' => 'icofont icofont-ui-copy',
    'icon_class' => 'icon',
    'title' => esc_html__('Blog', 'credo'),
    'fields' => array(				
    )
);		

			// Blog Layout
$this->sections[] = array(
    'icon' => 'icofont icofont-double-right',
    'icon_class' => 'icon',
    'subsection' => true,
    'title' => esc_html__('Blog Layout', 'credo'),
    'fields' => array(	
        array(
           'id' => 'ftc_blog_layout',
           'type' => 'image_select',
           'title' => esc_html__('Blog Layout', 'credo'),
           'des' => esc_html__('Select main content and sidebar alignment.', 'credo'),
           'options' => $ftc_layouts,
           'default' => '1-1-0'
       ),
        array(   "title"      => esc_html__("Left Sidebar", "credo")
            ,"id"       => "ftc_blog_left_sidebar"
            ,"default"      => "blog-sidebar"
            ,"type"     => "select"
            ,"options"  => $of_sidebars
        ),				
        array(     "title"      => esc_html__("Right Sidebar", "credo")
            ,"id"       => "ftc_blog_right_sidebar"
            ,"default"      => "blog-sidebar"
            ,"type"     => "select"
            ,"options"  => $of_sidebars
        ),
        array(   "title"      => esc_html__("Blog Thumbnail", "credo")
            ,"desc"     => ""
            ,"id"       => "ftc_blog_thumbnail"
            ,"default"      => 1
            ,"on"       => esc_html__("Show", "credo")
            ,"off"      => esc_html__("Hide", "credo")
            ,"type"     => "switch"
        ),										
        array(   "title"      => esc_html__("Blog Date", "credo")
            ,"desc"     => ""
            ,"id"       => "ftc_blog_date"
            ,"default"      => 1
            ,"on"       => esc_html__("Show", "credo")
            ,"off"      => esc_html__("Hide", "credo")
            ,"type"     => "switch"
        ),
        array(  "title"      => esc_html__("Blog Title", "credo")
            ,"desc"     => ""
            ,"id"       => "ftc_blog_title"
            ,"default"      => 1
            ,"on"       => esc_html__("Show", "credo")
            ,"off"      => esc_html__("Hide", "credo")
            ,"type"     => "switch"
        ),
        array(  "title"      => esc_html__("Blog Author", "credo")
            ,"desc"     => ""
            ,"id"       => "ftc_blog_author"
            ,"default"      => 1
            ,"on"       => esc_html__("Show", "credo")
            ,"off"      => esc_html__("Hide", "credo")
            ,"type"     => "switch"
        ),
        array(  "title"      => esc_html__("Blog Comment", "credo")
            ,"desc"     => ""
            ,"id"       => "ftc_blog_comment"
            ,"default"      => 1
            ,"on"       => esc_html__("Show", "credo")
            ,"off"      => esc_html__("Hide", "credo")
            ,"type"     => "switch"
        ),
        array(  "title"      => esc_html__("Blog Count View", "credo")
            ,"desc"     => ""
            ,"id"       => "ftc_blog_count_view"
            ,"default"      => 0
            ,"on"       => esc_html__("Show", "credo")
            ,"off"      => esc_html__("Hide", "credo")
            ,"type"     => "switch"
        ),
        array(  "title"      => esc_html__("Blog Read More Button", "credo")
            ,"desc"     => ""
            ,"id"       => "ftc_blog_read_more"
            ,"default"      => 1
            ,"on"       => esc_html__("Show", "credo")
            ,"off"      => esc_html__("Hide", "credo")
            ,"type"     => "switch"
        ),
        array(  "title"      => esc_html__("Blog Categories", "credo")
            ,"desc"     => ""
            ,"id"       => "ftc_blog_categories"
            ,"default"      => 1
            ,"on"       => esc_html__("Show", "credo")
            ,"off"      => esc_html__("Hide", "credo")
            ,"type"     => "switch"
        ),
        array(  "title"      => esc_html__("Blog Excerpt", "credo")
            ,"desc"     => ""
            ,"id"       => "ftc_blog_excerpt"
            ,"default"      => 1
            ,"on"       => esc_html__("Show", "credo")
            ,"off"      => esc_html__("Hide", "credo")
            ,"type"     => "switch"
        ),
        array(  "title"      => esc_html__("Blog Excerpt Strip All Tags", "credo")
            ,"desc"     => esc_html__("Strip all html tags in Excerpt", "credo")
            ,"id"       => "ftc_blog_excerpt_strip_tags"
            ,"default"      => 0
            ,"type"     => "switch"
        ),
        array(  "title"      => esc_html__("Blog Excerpt Max Words", "credo")
            ,"desc"     => esc_html__("Input -1 to show full excerpt", "credo")
            ,"id"       => "ftc_blog_excerpt_max_words"
            ,"default"      => "-1"
            ,"type"     => "text"
        )					
    )
);				

/** Blog Detail **/
$this->sections[] = array(
    'icon' => 'icofont icofont-double-right',
    'icon_class' => 'icon',
    'subsection' => true,
    'title' => esc_html__('Blog Details', 'credo'),
    'fields' => array(	
        array(
           'id' => 'ftc_blog_details_layout',
           'type' => 'image_select',
           'title' => esc_html__('Blog Detail Layout', 'credo'),
           'des' => esc_html__('Select main content and sidebar alignment.', 'credo'),
           'options' => $ftc_layouts,
           'default' => '0-1-0'
       ),
        array(  "title"      => esc_html__("Left Sidebar", "credo")
            ,"id"       => "ftc_blog_details_left_sidebar"
            ,"default"      => "blog-detail-sidebar"
            ,"type"     => "select"
            ,"options"  => $of_sidebars
        ),
        array(  "title"      => esc_html__("Right Sidebar", "credo")
            ,"id"       => "ftc_blog_details_right_sidebar"
            ,"default"      => "blog-detail-sidebar"
            ,"type"     => "select"
            ,"options"  => $of_sidebars
        ),
        array(  "title"      => esc_html__("Blog Thumbnail", "credo")
            ,"desc"     => ""
            ,"id"       => "ftc_blog_details_thumbnail"
            ,"default"      => 1
            ,"on"       => esc_html__("Show", "credo")
            ,"off"      => esc_html__("Hide", "credo")
            ,"type"     => "switch"
        ),
        array(     "title"      => esc_html__("Blog Date", "credo")
            ,"desc"     => ""
            ,"id"       => "ftc_blog_details_date"
            ,"default"      => 1
            ,"on"       => esc_html__("Show", "credo")
            ,"off"      => esc_html__("Hide", "credo")
            ,"type"     => "switch"
        ),
        array(  "title"      => esc_html__("Blog Title", "credo")
            ,"desc"     => ""
            ,"id"       => "ftc_blog_details_title"
            ,"default"      => 1
            ,"on"       => esc_html__("Show", "credo")
            ,"off"      => esc_html__("Hide", "credo")
            ,"type"     => "switch"
        ),
        array(  "title"      => esc_html__("Blog Content", "credo")
            ,"desc"     => ""
            ,"id"       => "ftc_blog_details_content"
            ,"default"      => 1
            ,"on"       => esc_html__("Show", "credo")
            ,"off"      => esc_html__("Hide", "credo")
            ,"type"     => "switch"
        ),
        array(  "title"      => esc_html__("Blog Tags", "credo")
            ,"desc"     => ""
            ,"id"       => "ftc_blog_details_tags"
            ,"default"      => 1
            ,"on"       => esc_html__("Show", "credo")
            ,"off"      => esc_html__("Hide", "credo")
            ,"type"     => "switch"
        ),
        array(  "title"      => esc_html__("Blog Count View", "credo")
            ,"desc"     => ""
            ,"id"       => "ftc_blog_details_count_view"
            ,"default"      => 0
            ,"on"       => esc_html__("Show", "credo")
            ,"off"      => esc_html__("Hide", "credo")
            ,"type"     => "switch"
        ),
        array(  "title"      => esc_html__("Blog Categories", "credo")
            ,"desc"     => ""
            ,"id"       => "ftc_blog_details_categories"
            ,"default"      => 1
            ,"on"       => esc_html__("Show", "credo")
            ,"off"      => esc_html__("Hide", "credo")
            ,"type"     => "switch"
        ),
        array(  "title"      => esc_html__("Blog Author Box", "credo")
            ,"desc"     => ""
            ,"id"       => "ftc_blog_details_author_box"
            ,"default"      => 1
            ,"on"       => esc_html__("Show", "credo")
            ,"off"      => esc_html__("Hide", "credo")
            ,"type"     => "switch"
        ),
        array(  "title"      => esc_html__("Blog Related Posts", "credo")
            ,"desc"     => ""
            ,"id"       => "ftc_blog_details_related_posts"
            ,"default"      => 1
            ,"on"       => esc_html__("Show", "credo")
            ,"off"      => esc_html__("Hide", "credo")
            ,"type"     => "switch"
        ),
        array(  "title"      => esc_html__("Blog Comment Form", "credo")
            ,"desc"     => ""
            ,"id"       => "ftc_blog_details_comment_form"
            ,"default"      => 1
            ,"on"       => esc_html__("Show", "credo")
            ,"off"      => esc_html__("Hide", "credo")
            ,"type"     => "switch"
        )				
    )
);		
}


public function setHelpTabs() {

}

public function setArguments() {

            $theme = wp_get_theme(); // For use with some settings. Not necessary.

            $this->args = array(
                'opt_name'          => 'smof_data',
                'menu_type'         => 'submenu',
                'allow_sub_menu'    => true,
                'display_name'      => $theme->get( 'Name' ),
                'display_version'   => $theme->get( 'Version' ),
                'menu_title'        => esc_html__('Theme Options', 'credo'),
                'page_title'        => esc_html__('Theme Options', 'credo'),
                'templates_path'    => get_template_directory() . '/admin/et-templates/',
                'disable_google_fonts_link' => true,

                'async_typography'  => false,
                'admin_bar'         => false,
                'admin_bar_icon'       => 'dashicons-admin-generic',
                'admin_bar_priority'   => 50,
                'global_variable'   => '',
                'dev_mode'          => false,
                'customizer'        => false,
                'compiler'          => false,

                'page_priority'     => null,
                'page_parent'       => 'themes.php',
                'page_permissions'  => 'manage_options',
                'menu_icon'         => '',
                'last_tab'          => '',
                'page_icon'         => 'icon-themes',
                'page_slug'         => 'smof_data',
                'save_defaults'     => true,
                'default_show'      => false,
                'default_mark'      => '',
                'show_import_export' => true,
                'show_options_object' => false,

                'transient_time'    => 60 * MINUTE_IN_SECONDS,
                'output'            => false,
                'output_tag'        => false,

                'database'              => '',
                'system_info'           => false,

                'hints' => array(
                    'icon'          => 'icon-question-sign',
                    'icon_position' => 'right',
                    'icon_color'    => 'lightgray',
                    'icon_size'     => 'normal',
                    'tip_style'     => array(
                        'color'         => 'light',
                        'shadow'        => true,
                        'rounded'       => false,
                        'style'         => '',
                    ),
                    'tip_position'  => array(
                        'my' => 'top left',
                        'at' => 'bottom right',
                    ),
                    'tip_effect'    => array(
                        'show'          => array(
                            'effect'        => 'slide',
                            'duration'      => '500',
                            'event'         => 'mouseover',
                        ),
                        'hide'      => array(
                            'effect'    => 'slide',
                            'duration'  => '500',
                            'event'     => 'click mouseleave',
                        ),
                    ),
                ),
                'use_cdn'                   => true,
            );


            // Panel Intro text -> before the form
            if (!isset($this->args['global_variable']) || $this->args['global_variable'] !== false) {
                if (!empty($this->args['global_variable'])) {
                    $v = $this->args['global_variable'];
                } else {
                    $v = str_replace('-', '_', $this->args['opt_name']);
                }
            }
        }			

    }

    global $redux_ftc_settings;
    $redux_ftc_settings = new Redux_Framework_smof_data();
}
function ftc_removeDemoModeLink() { // Be sure to rename this function to something more unique
    if ( class_exists('ReduxFrameworkPlugin') ) {
        remove_filter( 'plugin_row_meta', array( ReduxFrameworkPlugin::get_instance(), 'plugin_metalinks'), null, 2 );
    }
    if ( class_exists('ReduxFrameworkPlugin') ) {
        remove_action('admin_notices', array( ReduxFrameworkPlugin::get_instance(), 'admin_notices' ) );    
    }
}
add_action('init', 'ftc_removeDemoModeLink');