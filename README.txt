=== Disable Multisite Rewrites ===
Contributors: JPry
Tags: multisite, uploads, rewrites
Requires at least: 3.5
Tested up to: 3.7.1
Stable Tag: 1.0
License: GPL2

Disable WordPress Multisite rewrites for File Uploads

== Description ==

By default, WordPress Multisite uses certain rewrite rules for file uploads. This leads to a URL that doesn't reflect the exact location of your files on the server. This plugin disables that functionality.

**Note:** This plugin is *extremely* simple in purpose. It requires additional setup before it can be used with most Multisite Networks.

***If your Multisite was initially created using WordPress 3.5 or later, then you do not need this plugin***

== Installation ==

1. Upload the `disable-multisite-rewrites` folder to your `/wp-content/plugins/` directory
2. Activate the plugin through the "Plugins" menu in WordPress

== Before Use ==

This plugin is *very* specific in purpose. In order to use it, you will need to follow some steps first:

1. Move your images from `/wp-content/blogs.dir/SITENUM/files/` to `/wp-content/uploads/sites/SITENUM/`. `SITENUM` corresponds to the ID of each of your sub-sites.
2. Modify the database for each site. I recommend using [this awesome script](http://interconnectit.com/products/search-and-replace-for-wordpress-databases/) (just don't forget to delete it when you're done!). You will need to update the image URLs in the database to replace `http://site.example.com/files/` with `http://site.example.com/wp-content/uploads/sites/SITENUM/`
3. Clear out the settings for each site for "Upload Path", "Upload URL Path", and "File Upload URL". You can find these settings by going to Network Admin > Sites, then for each individual site, click the "Edit" link, then go to the Settings tab.

== Frequently Asked Questions ==

= Your plugin broke all my images! =

This plugin is *very* specific in purpose. In order to use it, you will need to follow some steps first. Please see the Before Use section

= Your plugin didn't do anything at all! =

When you first created your Multisite Network, what version of WordPress were you running? If it was 3.5 or later, then you don't need this plugin, and it won't do anything for you.

== Screenshots ==

(none yet)

== Changelog ==

= 1.0 =
* Created the plugin

== Upgrade Notice ==
