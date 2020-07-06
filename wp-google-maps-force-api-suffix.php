<?php
/*
Plugin Name: WP Google Maps - Force API Suffix
Version: 1.0
Author: Code Cabin - Perry Rylance
*/

add_filter('wpgmza_google_maps_api_params', function($params) {
	
	$params['suffix'] = '.com';
	
	return $params;
	
});
