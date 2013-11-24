<?php
/*
Plugin Name: Chew - Video Embed Shortcode
Plugin URI: http://chew.tv/chew-wp
Description: Chew is a Live and VOD platform for Artists, DJs and Labels. With this plugin you can embed Chew videos into Wordpress with one simple shortcode. [chew video="XXXXXXXXXX" height="500px" width="300px" autoplay="yes"]
Version: 0.2
Author: Ben Bowler
Author URI: http://chew.tv
*/

/*
Chew Embed Shortcode by Ben Bowler
Based on the demo by Paul McKnight at http://www.reallyeffective.co.uk

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program. If not, see <http://www.gnu.org/licenses/>.
*/

// Register shortcode
add_shortcode("chew", "chew_player");

function chew_player($atts) {
	extract( shortcode_atts( array( // Array of defaults
		'video' => '',
		'width' => '600px',
		'height' => '400px',
		'autoplay' => 'no',
	), $atts ) );

	//process plugin
	$demolp_output = "<iframe src=\"http://chew.tv/embed/?video={$video}&autoplay={$autoplay}\" height=\"{$height}\" width=\"{$width}\" allowfullscreen=\"\" frameborder=\"0\"></iframe>";
	//send back text to calling function
	return $demolp_output;
}