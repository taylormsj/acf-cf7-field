=== ACF-CF7 Field ===
Contributors: taylor.mitchellstjoseph
Donate link: https://github.com/taylormsj/
Tags: 
Requires at least: 3.3
Tested up to: 3.5.1
Stable tag: 
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Adds a 'Contact Form 7' field type for the Advanced Custom Fields WordPress plugin.

== Description ==

Add one or more contact forms to a custom field.

== Installation ==

This add-on can be treated as both a WP plugin and a theme include.

Install as Plugin

Copy the 'acf-cf7' folder into your plugins folder
Activate the plugin via the Plugins admin page
Include within theme

Copy the 'acf-cf7' folder into your theme folder (can use sub folders). You can place the folder anywhere inside the 'wp-content' directory
Edit your functions.php file and add the code below (Make sure the path is correct to include the acf-cf7.php file)

`add_action('acf/register_fields', 'my_register_fields');

function my_register_fields()
{
    include_once('acf-cf7/acf-cf7.php');
}`

== Frequently asked questions ==



== Screenshots ==



== Changelog ==



== Upgrade notice ==

