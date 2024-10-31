<?php
/*
 * Plugin Name: Remove Query Arg from Media ?_=1
 * Plugin URI: http://www.pluginspodcast.com/plugins/remove-query-arg-from-media-urls-_1/
 * Description: Removes the query argument from media URLs.
 * Version: 0.1
 * Author: Angelo Mandato, Plugins Podcast
 * Author URI: http://www.pluginspodcast.com
 * License: GPL2
 
Requires at least: 3.7
Tested up to: 4.7
Text Domain: remove-query-arg-from-media
Change Log: See readme.txt for complete change log
Contributors: Angelo Mandato, CIO RawVoice and host of the PluginsPodcast.com
License URI: http://www.gnu.org/licenses/old-licenses/gpl-2.0.txt

Copyright 2009-2017 Angelo Mandato, host of the Plugins Podcast (http://www.pluginspodcast.com)
 */

if( !function_exists('add_action') )
	die("access denied.");
	
// WP_PLUGIN_DIR (REMEMBER TO USE THIS DEFINE IF NEEDED)
define('REMOVE_QUERY_ARG_FROM_MEDIA_VERSION', '0.1' );

// Translation support:
if ( !defined('REMOVE_QUERY_ARG_FROM_MEDIA_ABSPATH') )
	define('REMOVE_QUERY_ARG_FROM_MEDIA_ABSPATH', dirname(__FILE__) );

// Translation support loaded:
load_plugin_textdomain('remove-query-arg-from-media', // domain / keyword name of plugin
		REMOVE_QUERY_ARG_FROM_MEDIA_ABSPATH .'/languages', // Absolute path
		basename(REMOVE_QUERY_ARG_FROM_MEDIA_ABSPATH).'/languages' ); // relative path in plugins folder

	
class RemoveQueryArgFromMediaPlugin {

	public function __construct()  
	{  
		add_filter('wp_audio_shortcode', array($this, 'wp_media_shortcode') );
		add_filter('wp_video_shortcode', array($this, 'wp_media_shortcode') );
	}
		
	public function wp_media_shortcode($html)  
	{
		// Replace any instances of ?_=NUMBER" with "
		$html = preg_replace('/\?_=\d+"/i', '"', $html);
		return $html;
	}
};

$wp_remove_query_arg_from_media_plugin = new RemoveQueryArgFromMediaPlugin();

// eof