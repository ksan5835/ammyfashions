<?php
/**
 * TemplateMela
 * @copyright  Copyright (c) TemplateMela. (http://www.templatemela.com)
 * @license    http://www.templatemela.com/license/
 * @author         TemplateMela
 * @version        Release: 1.0
 */
/**  Set Default options : Theme Settings  */
function harvest_set_default_options_child()
{
	/*  General Settings  */
		
	add_option("tmoption_bkg_color","FFFFFF"); // background color
	add_option("tmoption_bodyfont_color","666666"); // body font color
	add_option("tmoption_button_hover_color","201C18"); // button hover color
	add_option("tmoption_revslider_alias",'tm_homeslider_jewellery');
	
	/*  Top Bar Settings  */
	add_option("tmoption_show_topbar","no"); // show top bar
	add_option("tmoption_topbar_bkg_color","ffffff"); // topbar_bkg_color	
	add_option("tmoption_topbar_bkg_opacity","0.5"); // Set your background opacity		
	add_option("tmoption_topbar_text_color","808080"); // topbar_text_color
	add_option("tmoption_topbar_link_color","FFFFFF"); // topbar_link_color
	add_option("tmoption_topbar_link_hover_color","D9C059"); // topbar_link_hover_color
	add_option("tmoption_top_menu_bg_color","FFFFFF"); // Top menu background color
	add_option("tmoption_top_menu_opacity","1"); // Top menu background opacity
	add_option("tmoption_top_menu_text_color","ffffff"); // Top menu text color
	add_option("tmoption_top_menu_texthover_color","D9C059"); // Top menu text hover color
	/*  Header Settings  */	
	add_option("tmoption_header_background_upload", ""); // header background image
	add_option("tmoption_header_bkg_color","292420"); // header background color	
	add_option("tmoption_header_bkg_opacity","1"); // header background opacity	
		
	/*  Content Settings  */
	add_option("tmoption_h1color",'201C18'); // h1 family font color	 
	add_option("tmoption_h2color",'201C18'); // h2 family font color	
	add_option("tmoption_h3color",'201C18'); // h3 family font color	
	add_option("tmoption_h4color",'201C18'); // h4 family font color	
	add_option("tmoption_h5color",'201C18'); // h5 family font color	
	add_option("tmoption_h6color",'201C18'); // h6 family font color	
	add_option("tmoption_link_color","666666"); // link color
	add_option("tmoption_hoverlink_color","D9C059"); // link hover color
	
	/*  Footer Settings  */	
	add_option("tmoption_footerbkg_color","201C18"); // footer background color
	add_option("tmoption_footerlink_color","B3B3B3"); // footer link text color
	add_option("tmoption_footerhoverlink_color","ffffff"); // footer link hover text color
	
	/* Shop page settings */	
	add_option("tmoption_shop_items","12"); 
	add_option("tmoption_shop_items_per_row","4"); 
	add_option("tmoption_related_items","8"); 
	add_option("tmoption_upsells_items","8"); 
	add_option("tmoption_crosssell_items","8"); 
	add_option("tmoption_single_sidebar","Yes");
	 
}	
add_action('init', 'harvest_set_default_options_child');
function harvest_load_scripts_child() {		
	wp_enqueue_script( 'harvest_jquery_custom', get_stylesheet_directory_uri() . '/js/megnor/custom.js', array(), '', true);				 	
 }
add_action( 'wp_enqueue_scripts', 'harvest_load_scripts_child' );
function harvest_customstyle_child() { ?>
<style type="text/css">
.site-header,.site-header.fix-nav, .blog .site-header{
background-color:<?php echo harvest_hex_to_rgba(esc_attr(get_option('tmoption_header_bkg_color')),esc_attr(get_option('tmoption_header_bkg_opacity'))); ?>;	
} 
</style>
<?php } 
add_action( 'wp_head', 'harvest_customstyle_child' );
?>