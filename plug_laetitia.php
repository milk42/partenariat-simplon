<?php
/*
Plugin Name: Zero plugin
Plugin URI: http://zero-plugin.com
Description: Un plugin d'introduction pour le développement sous WordPress
Version: 0.1
Author: Moi
Author URI: http://votre-site.com
License: LP2
*/

function maFonctionPlugin() {
	return '<p>Voila ce que retourne mon extension.</p>';
}
add_shortcode('simplon', 'maFonctionPlugin');