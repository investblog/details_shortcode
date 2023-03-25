# WP Details Shortcode

The WP Details Shortcode plugin allows you to use the native HTML5 `<details>` and `<summary>` tags to create a spoiler effect within your WordPress content. This native implementation is search engine-friendly, as it doesn't hide content from search engines like other methods, such as JavaScript-based solutions, might.

The WordPress editor often removes unnecessary HTML wrapper code, which can cause issues with certain tags like `<details>` and `<summary>`. To overcome this limitation, we've created a shortcode that allows you to easily insert spoilers wherever you need them in your content.

Using the shortcode, you can create collapsible content sections that are both user-friendly and accessible to search engines, making it a great addition to your content strategy.

## Installation

1. Clone or download this repository and extract it into the `/wp-content/plugins/` directory of your WordPress site.
2. Activate the plugin through the 'Plugins' menu in WordPress.
3. Use the `[details title="Your title here" text_color="#ff0000" cursor="pointer"]Your content here[/details]` shortcode in your posts or pages to add the details element with customizable styles.

## License

This plugin is licensed under the [GNU General Public License v2.0](http://www.gnu.org/licenses/gpl-2.0.html) or later.
