<?php
/*
Plugin Name: Advanced_environment_indicator
Version: 0.1-alpha
Description: This plugin shows the environment name (dev || staging || prod) int he Woerpress toolbar, to avoid editing the wrong environment.
Author: Patrick van Efferen
Author URI: http://patrickvanefferen.nl
License: GPLv2 or later
Text Domain: advanced_environment_indicator
Domain Path: /languages
*/

/*
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
*/

// Add Toolbar Menus
function advanced_environment_indicator_toolbar() {
  global $wp_admin_bar;

}

// Hook into the 'wp_before_admin_bar_render' action
add_action( 'wp_before_admin_bar_render', 'advanced_environment_indicator_toolbar', 999 );
