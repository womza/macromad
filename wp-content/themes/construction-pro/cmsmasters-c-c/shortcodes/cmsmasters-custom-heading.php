<?php
/**
 * @package 	WordPress
 * @subpackage 	Construction PRO
 * @version 	1.0.0
 * 
 * Content Composer Special Heading Shortcode
 * Created by CMSMasters
 * 
 */


extract(shortcode_atts($new_atts, $atts));


$unique_id = uniqid();


if ($font_family != '') {
	$font_family_array = str_replace('+', ' ', explode(':', $font_family));
	
	$font_family_name = "'" . $font_family_array[0] . "'";
	
	
	cmsmasters_theme_google_font($font_family, $font_family_array[0]);
}


$out = '<style type="text/css"> ' . "\n" . 
	'#cmsmasters_heading_' . $unique_id . ' { ' . 
		"\n\t" . 'text-align:' . $text_align . '; ' . 
		"\n\t" . 'margin-top:' . $margin_top . 'px; ' . 
		"\n\t" . 'margin-bottom:' . $margin_bottom . 'px; ' . 
	"\n" . '} ' . "\n\n" . 
	'#cmsmasters_heading_' . $unique_id . ' .cmsmasters_heading { ' . 
		"\n\t" . 'text-align:' . $text_align . '; ' . 
		(($bg_color != '') ? "\n\t" . cmsmasters_color_css('background-color', $bg_color) : '') . 
		(($bg_color != '') ? "\n\t" . 'padding-left:20px; ' : '') . 
		(($bg_color != '') ? "\n\t" . 'padding-right:20px; ' : '') . 
		(($divider != '' && $text_align != 'left') ? "\n\t" . 'margin-left:1em; ' : '') . 
		(($divider != '' && $text_align != 'right') ? "\n\t" . 'margin-right:1em; ' : '') . 
		(($border_radius != '') ? "\n\t" . '-webkit-border-radius:' . $border_radius . '; ' . "\n\t" . 'border-radius:' . $border_radius . '; ' : '') . 
	"\n" . '} ' . "\n\n" . 
	'#cmsmasters_heading_' . $unique_id . ' .cmsmasters_heading, ' . 
	'#cmsmasters_heading_' . $unique_id . ' .cmsmasters_heading a { ' . 
		(($font_family != '') ? "\n\t" . 'font-family:' . $font_family_name . '; ' : '') . 
		(($font_size != '' && $font_size != '0') ? "\n\t" . 'font-size:' . $font_size . 'px; ' : '') . 
		(($line_height != '' && $line_height != '0') ? "\n\t" . 'line-height:' . $line_height . 'px; ' : '') . 
		"\n\t" . 'font-weight:' . $font_weight . '; ' . 
		"\n\t" . 'font-style:' . $font_style . '; ' . 
		(($color != '') ? "\n\t" . cmsmasters_color_css('color', $color) : '') . 
	"\n" . '} ' . "\n\n" . 
	'#cmsmasters_heading_' . $unique_id . ' .cmsmasters_heading_divider { ' . 
		(($divider != '') ? "\n\t" . 'border-bottom-width:' . $divider_height . 'px; ' : '') . 
		(($divider != '') ? "\n\t" . 'border-bottom-style:' . $divider_style . '; ' : '') . 
		(($divider != '' && $divider_color != '') ? "\n\t" . cmsmasters_color_css('border-bottom-color', $divider_color) : '') . 
		(($divider != '') ? "\n\t" . 'margin-top:-' . round((int) $divider_height / 2) . 'px; ' : '') . 
	"\n" . '} ' . "\n\n" . 
'</style>' . "\n";


$out .= '<div id="cmsmasters_heading_' . $unique_id . '" class="cmsmasters_heading_wrap cmsmasters_heading_align_' . $text_align . 
(($divider != '') ? ' cmsmasters_heading_divider_' . $divider_type : '') . 
'"' . 
(($animation != '') ? ' data-animation="' . $animation . '"' : '') . 
(($animation != '' && $animation_delay != '') ? ' data-delay="' . $animation_delay . '"' : '') . 
'>' . "\n\t";


if ($divider != '' && $text_align != 'left') {
	$out .= '<span class="cmsmasters_heading_divider_left_wrap"><span class="cmsmasters_heading_divider cmsmasters_heading_divider_left"></span></span>' . "\n";
}


$out .= '<' . $type . ' class="cmsmasters_heading' . 
(($icon != '' && $link == '') ? ' ' . $icon : '') . 
(($classes != '') ? ' ' . $classes : '') . 
'">';


if ($link != '') {
	$out .= '<a href="' . $link . '"' . 
	(($icon != '') ? ' class="' . $icon . '"' : '') . 
	(($target == 'blank') ? ' target="_blank"' : '') . 
	'>';
}


$out .= $content;


if ($link != '') {
	$out .= '</a>';
}


$out .= '</' . $type . '>' . "\n";


if ($divider != '' && $text_align != 'right') {
	$out .= '<span class="cmsmasters_heading_divider_right_wrap"><span class="cmsmasters_heading_divider cmsmasters_heading_divider_right"></span></span>' . "\n";
}


$out .= '</div>';


echo $out;