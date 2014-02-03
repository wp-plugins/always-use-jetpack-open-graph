<?php
/*
Plugin Name: Always Use Jetpack Open Graph
Plugin URI: http://www.brandonkraft.com/
Description: Jetpack automatically disables its Open Graph tags when there's a known plugin that already adds Open Graph tags, which is good. Sometimes, though, you might want to use Jetpack's version instead. Even if you disable the tags in the conflicting plugin, Jetpack won't add Open Graph tags without being told to do so.
Version: 1.0
Author: Brandon Kraft
Author Email: public@brandonkraft.com
License: GPLv2 or later
*/

add_filter( 'jetpack_enable_open_graph', '__return_true', 100 );