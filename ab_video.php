<?php
/*
Plugin Name: AB-Video
Plugin URI: http://www.bachmaier.cc/2010/05/wordpress-plugin-ab-video/
Description: Allows the user to embed Youtube / Vimeo movie clips by entering a shortcode ([youtube] / [vimeo]) into the post area.
Author: Andreas Bachmaier
Version: 1.0
Author URI: http://www.bachmaier.cc/
License: GPL 2.0, @see http://www.gnu.org/licenses/gpl-2.0.html
*/

class ab_video {
    function vimeo($atts, $content=null) {
		extract(shortcode_atts(array(
			'clip_id' 	=> '',
			'width' 	=> '512',
			'height' 	=> '288',
		), $atts));

		if (empty($clip_id) || !is_numeric($clip_id)) return '<!-- AB Video: Invalid clip_id -->';
		if ($height && !$width) $width = intval($height * 16 / 9);
		if (!$height && $width) $height = intval($width * 9 / 16);

		return "<p><object width='$width' height='$height'><param name='allowfullscreen' value='true' />".
    			"<param name='allowscriptaccess' value='always' />".
    			"<param name='movie' value='http://vimeo.com/moogaloop.swf?clip_id=$clip_id&amp;server=vimeo.com&amp;show_title=1&amp;show_byline=1&amp;show_portrait=0&amp;color=&amp;fullscreen=1' />".
    			"<embed src='http://vimeo.com/moogaloop.swf?clip_id=$clip_id&amp;server=vimeo.com&amp;show_title=1&amp;show_byline=1&amp;show_portrait=0&amp;color=&amp;fullscreen=1' type='application/x-shockwave-flash' allowfullscreen='true' allowscriptaccess='always' width='$width' height='$height'></embed></object>".
    			"</p>";
    }
	
	function youtube($atts, $content=null) {
		extract(shortcode_atts(array(
			'clip_id' 	=> '',
			'width' 	=> '512',
			'height' 	=> '288',
		), $atts));
		
		if (empty($clip_id)) return '<!-- AB Video: Invalid clip_id -->';
		if ($height && !$width) $width = intval($height * 16 / 9);
		if (!$height && $width) $height = intval($width * 9 / 16);
		$height += 25; // Youtube Controls
		
		return '<p><object width="'.$width.'" height="'.$height.'" type="application/x-shockwave-flash" data="http://www.youtube.com/v/'.$clip_id.'&fs=1&fmt=18">
			<param name="movie" value="http://www.youtube.com/v/'.$clip_id.'&fs=1&fmt=18"></param>
			<param name="allowFullScreen" value="true" />
			<param name="allowscriptaccess" value="always" />
			</object></p>';
	}
}

add_shortcode('youtube', array('ab_video', 'youtube'));
add_shortcode('vimeo', array('ab_video', 'vimeo'));

?>
