<?php
/*
Plugin Name: Advanced Custom Fields: Contact Form 7 Field
Plugin URI: http://github.com/taylormsj/acf-cf7-field
Description: Add one or more contact forms to a custom field
Version: 1.1.2
Author: Taylor Mitchell-St.Joseph
Author URI: http://taylormitchellstjoseph.co.uk
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/


class acf_field_cf7_plugin
{
	/*
	*  Construct
	*
	*  @description: 
	*  @since: 3.6
	*  @created: 1/04/13
	*/
	
	function __construct()
	{
		// set text domain
		/*
		$domain = 'acf-{{field_name}}';
		$mofile = trailingslashit(dirname(__File__)) . 'lang/' . $domain . '-' . get_locale() . '.mo';
		load_textdomain( $domain, $mofile );
		*/
		
		
		// version 4+
		add_action('acf/register_fields', array($this, 'register_fields'));	

		
		// version 3-
		add_action( 'init', array( $this, 'init' ));
	}
	
	
	/*
	*  Init
	*
	*  @description: 
	*  @since: 3.6
	*  @created: 1/04/13
	*/
	
	function init()
	{
		if(function_exists('register_field'))
		{ 
			register_field('acf_field_cf7', dirname(__File__) . '/acf_cf7-v3.php');
		}
	}
	
	/*
	*  register_fields
	*
	*  @description: 
	*  @since: 3.6
	*  @created: 1/04/13
	*/
	
	function register_fields()
	{
		include_once('acf_cf7-v4.php');
	}
	
}

new acf_field_cf7_plugin();
		
?>
