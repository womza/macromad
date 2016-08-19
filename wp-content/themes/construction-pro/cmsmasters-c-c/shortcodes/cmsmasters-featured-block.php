<?php
/**
 * @package 	WordPress
 * @subpackage 	Construction PRO
 * @version 	1.0.0
 * 
 * Content Composer Featured Block Shortcode
 * Created by CMSMasters
 * 
 */


extract(shortcode_atts($new_atts, $atts));


$unique_id = uniqid();


$out = '<style type="text/css"> ' . "\n\n";

if ( 
	$top_padding != '' || 
	$bottom_padding != '' || 
	$border_radius != '' || 
	$fb_bg_color != '' || 
	$bg_img != '' || 
	$bd_color != '' || 
	$bd_width != ''
) {
	$out .= '#cmsmasters_fb_' . $unique_id . ' { ' . 
		(($top_padding != '') ? "\n\t" . 'padding-top:' . $top_padding . 'px; ' : '') . 
		(($bottom_padding != '') ? "\n\t" . 'padding-bottom:' . $bottom_padding . 'px; ' : '') . 
		(($border_radius != '') ? "\n\t" . '-webkit-border-radius:' . $border_radius . '; ' . "\n\t" . 'border-radius:' . $border_radius . '; ' : '') . 
		(($fb_bg_color != '') ? "\n\t" . cmsmasters_color_css('background-color', $fb_bg_color) : '') . 
		(($bd_color != '') ? 				"\n\t" . cmsmasters_color_css('border-color', $bd_color) : '') . 
		(($bd_width != '') ? "\n\t" . 'border-width:' . $bd_width . 'px; ' : '') . 
		(($bd_width != '') ? "\n\t" . 'border-style:solid; ' : '');
	
	
	if ($bg_img != '') {
		$new_bg_img = explode('|', $bg_img);
		
		
		$new_bg_src = wp_get_attachment_image_src($new_bg_img[0], 'full');
		
		
		$out .= "\n\t" . 'background-image: url(' . $new_bg_src[0] . '); ' . 
		"\n\t" . 'background-position: ' . $bg_position . '; ' . 
		"\n\t" . 'background-repeat: ' . $bg_repeat . '; ' . 
		"\n\t" . 'background-attachment: ' . $bg_attachment . '; ' . 
		"\n\t" . 'background-size: ' . $bg_size . '; ' . 
		(($bg_attachment == 'fixed' && preg_match('/Safari/', $_SERVER['HTTP_USER_AGENT'])) ? "\n\t" . 'position: static; ' : '');
	}
	
	
	$out .= "\n" . '} ' . "\n\n";
}


$out .= '#cmsmasters_fb_' . $unique_id . ' .featured_block_inner { ' . 
		"\n\t" . 'width: ' . $text_width . '%; ' . 
		"\n\t" . 'padding: ' . $text_padding . '; ' . 
		"\n\t" . 'text-align: ' . $text_align . '; ' . 
		(($text_position == 'center') ? "\n\t" . 'margin:0 auto; ' : "\n\t" . 'float:' . $text_position . '; ') . 
		(($color_overlay != '') ? "\n\t" . cmsmasters_color_css('background-color', $color_overlay) : '') . 
	"\n" . '} ' . "\n\n" . 
	'#cmsmasters_fb_' . $unique_id . ' .featured_block_text { ' . 
		"\n\t" . 'text-align: ' . $text_align . '; ' . 
	"\n" . '} ' . "\n\n" . 
'</style>';


$out .= '<div id="cmsmasters_fb_' . $unique_id . '" class="cmsmasters_featured_block' . 
(($classes != '') ? ' ' . $classes : '') . 
'"' . 
(($animation != '') ? ' data-animation="' . $animation . '"' : '') . 
(($animation != '' && $animation_delay != '') ? ' data-delay="' . $animation_delay . '"' : '') . 
'>' . "\n" . 
	'<div class="featured_block_inner">' . "\n" . 
		cmsmasters_divpdel('<div class="featured_block_text">' . "\n" . 
			do_shortcode(wpautop($content)) . 
		'</div>' . "\n");


$out .= '</div>' . "\n" . 
'</div>' . "\n";


echo $out;