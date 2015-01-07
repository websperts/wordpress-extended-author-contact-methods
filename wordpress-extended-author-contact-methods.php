<?php

/*
Plugin Name: Extended Author Contact Methods
Description: Extends author contact methods in WordPress (Facebook, Twitter, Google+, LinkedIn, Pinterest, Flattr).
Author: websperts <hello@websperts.com>
Author URI: http://websperts.com/
Plugin URI: https://github.com/websperts/wordpress-extended-author-contact-methods
License: MIT
Version: 0.0.1
*/

defined('ABSPATH') || exit;

function extend_contact_methods($contact_methods) {
	foreach (array(
		array('facebook', __('Facebook', 'extended_author_contact_methods')),
		array('twitter', __('Twitter', 'extended_author_contact_methods')),
		array('google_plus', __('Google+', 'extended_author_contact_methods')),
		array('linkedin', __('LinkedIn', 'extended_author_contact_methods')),
		array('pinterest', __('Pinterest', 'extended_author_contact_methods')),
		array('flattr', __('Flattr', 'extended_author_contact_methods'))
	) as $method) {
		$contact_methods[$method[0]] = $method[1];
	}
	return $contact_methods;
}

add_filter('user_contactmethods', 'extend_contact_methods', 10, 1);

?>
