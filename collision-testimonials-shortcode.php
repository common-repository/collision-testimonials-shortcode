<?php

/*  Copyright 2010  TODD HALFPENNY  (email : todd@gingerbreaddesign.co.uk)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

/*
Plugin Name: Collision Testimonials Shortcode
Plugin URI: http://gingerbreaddesign.co.uk/wordpress/plugins/collision-testimonials-shortcode.php
Description: Allows the use of the <a herf='http://http://wordpress.org/extend/plugins/collision-testimonials'>Collision Testimonials</a> testimonials through the use of a shortcode. Hopefully this will be included in the main plugin as it's very simple.
Author: Todd Halfpenny
Version: 0.0.1
Author URI: http://gingerbreaddesign.co.uk/todd
*/


// shortcode code
function sc_collision_testimonials($atts){
  extract(shortcode_atts( array('id' => ""), $atts));
  ob_start();
  collision_testimonials($id);
  $myStr = ob_get_contents();
  ob_end_clean();
  return $myStr;
}

// Add shortcode
add_shortcode('testimonial', 'sc_collision_testimonials');
