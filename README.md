### UPDATE

ACF CF7 has been moved to support ACF V5, please find it here [https://github.com/taylormsj/acf-cf7](https://github.com/taylormsj/acf-cf7)


# ACF-CF7 Field

Adds a 'Contact Form 7' field type for the [Advanced Custom Fields](http://wordpress.org/extend/plugins/advanced-custom-fields/) WordPress plugin.

-----------------------

### Overview

Store one or multiple contact forms in an advanced custom field.

Mark one or more forms as disabled to prevent them from being selected.

Field is returned as Contact Form 7 markup

[Advanced Custom Field - Contact Form 7 Field on WordPress.org](http://wordpress.org/plugins/advanced-custom-fields-contact-form-7-field/)

### Screenshots

![ScreenShot](https://raw.github.com/taylormsj/acf-cf7-field/master/screenshot-1.jpg)
Contact Form 7 field options

![ScreenShot](https://raw.github.com/taylormsj/acf-cf7-field/master/screenshot-2.jpg)
Selecting multiple Contact Forms

![ScreenShot](https://raw.github.com/taylormsj/acf-cf7-field/master/screenshot-3.jpg)
Selecting a single Contact Form

### Compatibility

This add-on will work with:

* version 4 and up
* version 3 and bellow


### Installation

This add-on can be treated as both a WP plugin and a theme include.

**Install as Plugin**

1. Copy the 'acf-cf7' folder into your plugins folder
2. Activate the plugin via the Plugins admin page

**Include within theme**

1.	Copy the 'acf-cf7' folder into your theme folder (can use sub folders). You can place the folder anywhere inside the 'wp-content' directory
2.	Edit your functions.php file and add the code below (Make sure the path is correct to include the acf-cf7.php file)

```php
add_action('acf/register_fields', 'my_register_fields');

function my_register_fields()
{
	include_once('acf-cf7/acf-cf7.php');
}
```

### Changelog

1.1.0 - Added the ability to hide/show disabled forms on the select area.