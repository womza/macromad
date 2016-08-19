<?php
/**
 * @package 	WordPress
 * @subpackage 	Construction PRO
 * @version		1.0.0
 * 
 * Images Page Template
 * Created by CMSMasters
 * 
 */


get_header();


echo '<!--_________________________ Start Content _________________________ -->' . "\n" . 
'<div id="middle_content" role="main">' . "\n";


if (have_posts()) : the_post();
	echo '<div class="entry image-attachment">' . "\n";
	
	$metadata = wp_get_attachment_metadata();
	
	echo '<footer class="entry-meta">'; 
	
		echo '<p>' . esc_html__('Published', 'construction-pro') . ' <abbr class="published" title="' . esc_attr(get_the_date()) . '">' . get_the_date() . '</abbr> ' . esc_html__('at', 'construction-pro') . ' ' . $metadata['width'] . '&times;' . $metadata['height'] . ' ' . esc_html__('in', 'construction-pro') . ' ' . '<a href="' . esc_url(get_permalink($post->post_parent)) . '" title="' . cmsmasters_title($post->post_parent, false) . '">' . cmsmasters_title($post->post_parent, false) . '</a>.</p>';
		edit_post_link(esc_html__('Edit Media', 'construction-pro'), '', '');
		
	echo '</footer>' . 
	'<br />' . 
	'<div class="tac">' . 
		construction_pro_thumb(get_the_ID(), 'slider-thumb', false, 'img_' . get_the_ID(), true, true, true, false, get_the_ID()) . 
	'</div>' . 
	'<br />';
?>
		<div class="navigation" role="navigation">
			<div class="fl attachment_nav_btn attachment_nav_btn_prev"><?php previous_image_link(false, esc_html__('Previous', 'construction-pro')); ?></div>
			<div class="fr attachment_nav_btn attachment_nav_btn_next"><?php next_image_link(false, esc_html__('Next', 'construction-pro')); ?></div>
			<div class="cl"></div>
			<br />
		</div>
<?php
	
	
	
	echo '</div>' . "\n" . 
	'<div class="divider"></div>';
endif;


comments_template();


echo '</div>' . "\n" . 
'<!-- _________________________ Finish Content _________________________ -->' . "\n\n";


get_footer();

