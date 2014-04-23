=== Advanced Custom Fields - Contact Form 7 Field ===
Contributors: taylor.mitchellstjoseph
Donate link: https://github.com/taylormsj/
Tags: acf, contact form 7, advanced custom fields
Requires at least: 3.3
Tested up to: 3.9
Stable tag: 1.1.2
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Adds a 'Contact Form 7' field type for the Advanced Custom Fields WordPress plugin.

== Description ==

Adds a 'Contact Form 7' field type for the Advanced Custom Fields WordPress plugin.

Store one or multiple contact forms in an advanced custom field.

Mark one or more forms as disabled to prevent them from being selected.

Field is returned as Contact Form 7 markup 


**Compatible with both ACF V3 & V4**

== Installation ==

This add-on can be treated as both a WP plugin and a theme include.

**Install as Plugin**
Copy the 'acf-cf7' folder into your plugins folder
Activate the plugin via the Plugins admin page

**Include within theme**
Copy the 'acf-cf7' folder into your theme folder (can use sub folders). You can place the folder anywhere inside the 'wp-content' directory
Edit your functions.php file and add the code below (Make sure the path is correct to include the acf-cf7.php file)

`add_action('acf/register_fields', 'my_register_fields');

function my_register_fields()
{
    include_once('acf-cf7/acf-cf7.php');
}`

== Frequently asked questions ==


== Screenshots ==

1. Contact Form 7 field options
2. Selecting multiple Contact Forms
3. Selecting a single Contact Form


== Changelog ==

**1.1.1** - Updated Author URI.

**1.1.0** - Added the ability to hide/show disabled forms on the select area.

== Upgrade notice ==

