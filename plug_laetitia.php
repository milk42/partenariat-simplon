<?php
/*
Plugin Name: Zero plugin
Plugin URI: http://zero-plugin.com
Description: Un plugin d'introduction pour le développement sous WordPress
Version: 0.1
Author: Laetitia
Author URI: http://7715460bf2c140cd84058813a164cc41.yatu.ws
License: LP2
*/

function shortCodePlugin() {
	return '<p>La publication de cet article est possible grâce à mon super partenaire simplon.co - une entreprise de
l’économie sociale et solidaire et un réseau de « fabriques » (écoles) qui propose
des formations GRATUITES pour devenir développeur web.</p>';
}
add_shortcode('simplon2', 'shortCodePlugin');
