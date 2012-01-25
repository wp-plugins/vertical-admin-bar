=== Vertical Admin Bar ===
Contributors: GabSoftware
Donate link: http://www.gabsoftware.com/donate/
Tags: vertical, admin, bar, admin bar, toolbar, tool, bar
Requires at least: 3.3.0
Tested up to: 3.3.1
Stable tag: 1.0.0

Vertical Admin Bar displays the WordPress toolbar vertically.

== Description ==

<p>
Vertical Admin Bar displays the WordPress toolbar vertically on the left of the screen on the blog front-end. It does not affect the toolbar in the Dashboard of your blog because of the existing vertical menu: it is vertical only when logged in users are viewing your blog front-end.
</p>

<p>
At present, the height of the admin bar has been set to 740px. That should be enough for most menus to display correctly. If you need to override this value, do not change it in your code. Instead, add the <strong>vab_admin_bar_height</strong> filter in the functions.php of your theme. For example, to set a height of 1024, use the following code:
`function my_function_callback() { return 1024; }`
`add_filter( 'vab_admin_bar_height', 'my_function_callback' );`
</p>

<p>
Known problems:
I do not know if it works for IE 8 and older. Probably not, but can't test. It has been tested to work with Opera 11.52, IE9, Firefox 8.0 and Chromium 18.0.965. Also, I had to set an arbitrary height for the admin bar, or the menu would be stretched outside the page. If someone has a solution to make the menu take 100% of the screen height (not the page height), please let me know :)
</p>

== Installation ==

<p>
This section describes how to install the plugin and get it working.
</p>

<ol>
<li>Extract and upload the directory "vertical-admin-bar" and all its content to your '/wp-content/plugins/' directory</li>
<li>Activate the plugin through the 'Plugins' menu in WordPress</li>
</ol>

== Frequently Asked Questions ==

= Why isn't the admin bar vertical while viewing the admin section of my blog? =

Because there is already a vertical menu. So there is no point in adding another one.

= Can I change some settings for Vertical Admin Bar? =

Yes, using the filter 'vab_admin_bar_height'. Have a look at the Description section to see how to use it.

== Screenshots ==

1. The vertical admin bar in action

== Changelog ==

= 1.0.0 =
Initial release
