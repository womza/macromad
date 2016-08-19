<?php
/**
 * @package 	WordPress
 * @subpackage 	Construction PRO
 * @version		1.0.0
 * 
 * Quotes Centered Slider Format Template
 * Created by CMSMasters
 * 
 */


?>

<!--_________________________ Start Quotes Centered Slider Article _________________________ -->

<article class="cmsmasters_quote_inner">
<?php
	if ($quote_image != '') {
		echo '<figure class="quote_image">' . "\n" . 
			wp_get_attachment_image($quote_image, 'thumbnail') . 
		'</figure>' . "\n";
	}
?>
	<div class="wrap_quote_title">
	<?php
		if ($quote_name != '') {
			echo '<h4 class="quote_title">' . esc_html($quote_name) . '</h4>' . "\n";
		}
		
		
		if ($quote_subtitle != '') {
			echo '<span class="quote_subtitle">' . esc_html($quote_subtitle) . '</span>' . "\n";
		}
		
		
		if ($quote_link != '' && $quote_website != '') {
			echo '<a class="quote_link" target="_blank" href="' . esc_url($quote_link) . '">' . esc_html($quote_website) . '</a>' . "\n";
		} elseif ($quote_link == '' && $quote_website != '') {
			echo '<span class="quote_site">' . esc_html($quote_website) . '</span>' . "\n";
		} elseif ($quote_link != '' && $quote_website == '') {
			echo '<a class="quote_link" target="_blank" href="' . esc_url($quote_link) . '">' . esc_html($quote_link) . '</a>' . "\n";
		}
	?>
	</div>

<?php	
	echo cmsmasters_divpdel('<div class="quote_content">' . "\n" . 
		do_shortcode(wpautop($quote_content)) . 
	'</div>' . "\n");
?>
	
</article>
<!--_________________________ Finish Quotes Centered Slider Article _________________________ -->

