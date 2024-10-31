<?php
/*
Plugin Name: Quick STAT
Plugin URI: http://mr.hokya.com/quick-stat/
Description: Displays quick statistics of your blog about its PageRank, Alexa Rank, and BackLinks right on the dashboard page to help you monitor your blog's rank using Popuri.us calculation.
Version: 2.32
Author: Julian Widya Perdana
Author URI: http://mr.hokya.com/
*/


function register_quick_stat () {
	wp_add_dashboard_widget ("Quick Stat","Quick Stat","quick_stat");
}

function quick_stat () {
	echo '<div align="center">';
	echo '<img src="http://popuri.us/widgets/?type=dark" />';
	echo '<p><a href="http://mr.hokya.com/quick-stat/" target="_blank">more help</a></p>';
	echo '</div>';
}

add_action('wp_dashboard_setup','register_quick_stat');

?>