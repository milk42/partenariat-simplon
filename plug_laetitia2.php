<?php
/*
Plugin Name: simplon_extension
Plugin URI: https://github.com/milk42/partenariat-simplon
Description: Un plugin d'introduction pour le développement sous WordPress
Version: 1.0
Author: Laetitia
Author URI: https://github.com/milk42
License: open source
*/

function shortCodePlugin() {
	return '<p>La publication de cet article est possible grâce à mon super partenaire <a href="https://www.simplon.co">simplon.co</a> une entreprise de
l’économie sociale et solidaire et un réseau de « fabriques » (écoles) qui propose
des formations GRATUITES pour devenir développeur web.</p>';
}
add_shortcode('simplon2', 'shortCodePlugin');