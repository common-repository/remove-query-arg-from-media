=== Remove Query Arg from Media URLs ?_=1 ===
Contributors: amandato, pluginspodcast
Donate link: http://www.pluginspodcast.com/
Tags: powerpress, podcasting, podcast, audio. video, mp3, m4a, ogg, ogv, oga, m4v, mp4, mediaelement, mediaelementjs, 
Requires at least: 3.7
Tested up to: 4.7
Stable tag: 0.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Remove the query string ?_=1 added by WordPress adds to media URLs in HTML5 audio and video mediaelement.js players.

== Description ==

Remove the query string ?_=1 added by WordPress adds to media URLs in HTML5 audio and video mediaelement.js players. It will match any digit that follows the equals sign, e.g. ?_=42 will be removed.

= This plugin is ideal for the following reasons =

* Page Loading Performance: Improve page speed scores with services like PageSpeed, YSlow, Pingdoom and GTmetrix.
* Caching: Links with query string parameters such as "?" followed by name=value pairs separated by '&' in the URL are typically not cacheable
* Statistics and Analytics: Prevent statistics and analytics services from including the query string in reporting.
* Google’s Accelerated Mobile Pages (AMP): Removes the possibility of links to media files being detected as AMP errors.

= Compatible Media Plugins =

* [Blubrry PowerPress podcasting plugin](http://wordpress.org/plugins/powerpress/)

If this plugin works with your favorite media plugin, please contact me and I will add it to the list.

== Installation ==

1. Copy/Upload the entire `remove-query-arg-from-media` directory from the downloaded zip file into the /wp-content/plugins/ directory.
1. Activate the "Remove Query Arg from Media" plugin in the 'Plugins' menu in WordPress
1. Enjoy

== Frequently Asked Questions ==

= Why did you make the plugin? =

To solve a simple problem, to remove the query string parameter from the media URLs.


== Screenshots ==
No screen shots at this time.


== Changelog ==

= 0.1 =
* Released on 1/7/2017
* First version


== Upgrade Notice ==

= 0.1 =
None at this time.


