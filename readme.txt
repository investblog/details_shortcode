=== WP Details Shortcode ===
Contributors: investfun
Tags: details, summary, shortcode, spoiler, collapsible content, html5
Requires at least: 4.6
Tested up to: 5.8
Requires PHP: 5.6
Stable tag: 1.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

A WordPress plugin that provides a shortcode for the HTML5 details element, creating a spoiler effect that is search engine-friendly and accessible.

== Description ==

The WP Details Shortcode plugin allows you to use the native HTML5 &lt;details&gt; and &lt;summary&gt; tags to create a spoiler effect within your WordPress content. This native implementation is search engine-friendly, as it doesn't hide content from search engines like other methods, such as JavaScript-based solutions, might.

The WordPress editor often removes unnecessary HTML wrapper code, which can cause issues with certain tags like &lt;details&gt; and &lt;summary&gt;. To overcome this limitation, we've created a shortcode that allows you to easily insert spoilers wherever you need them in your content.

Using the shortcode, you can create collapsible content sections that are both user-friendly and accessible to search engines, making it a great addition to your content strategy.

== Installation ==

1. Upload the `wp-details-shortcode` folder to the `/wp-content/plugins/` directory.
2. Activate the plugin through the 'Plugins' menu in WordPress.
3. Use the `[details title="Your title here" text_color="#ff0000" cursor="pointer"]Your content here[/details]` shortcode in your posts or pages to add the details element with customizable styles.

== Changelog ==

= 1.0 =
* Initial release.
