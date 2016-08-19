<?php
/**
 * @package 	WordPress
 * @subpackage 	Construction PRO
 * @version		1.0.0
 * 
 * Profiles Page Vertical Profile Format Template
 * Created by CMSMasters
 * 
 */


$cmsmasters_profile_social = get_post_meta(get_the_ID(), 'cmsmasters_profile_social', true);

$cmsmasters_profile_subtitle = get_post_meta(get_the_ID(), 'cmsmasters_profile_subtitle', true);

?>

<!--_________________________ Start Vertical Profile _________________________ -->

<article id="post-<?php the_ID(); ?>" <?php post_class(((is_home() || is_archive() || is_search()) ? 'shortcode_animated' : '')); ?>>
	<?php
	if (has_post_thumbnail()) {
		echo '<div class="pl_img">' . "\n" . 
			'<figure>' . "\n" . 
				'<a href="' . esc_url(get_permalink()) . '">' . 
					get_the_post_thumbnail(get_the_ID(), 'cmsmasters-full-thumb', array( 
						'alt' => cmsmasters_title(get_the_ID(), false), 
						'title' => cmsmasters_title(get_the_ID(), false) 
					)) . 
				'</a>' . 
			'</figure>' . "\n" . 
		'</div>' . "\n";
	} else {
		echo '<div class="pl_img"><a href="' . esc_url(get_permalink()) . '"><div class="pl_noimg cmsmasters_theme_icon_person"></div></a></div>' . "\n";
	}
	
	
	echo '<div class="pl_content">' . "\n";
		echo '<h4 class="entry-title">' . "\n" . 
			'<a href="' . esc_url(get_permalink()) . '">' . cmsmasters_title(get_the_ID(), false) . '</a>' . "\n" . 
		'</h4>' . "\n";
		
		if ($cmsmasters_profile_subtitle != '') {
			echo '<h4 class="pl_subtitle">' . esc_html($cmsmasters_profile_subtitle) . '</h4>' . "\n";
		}
		
		echo '<div class="entry-content">' . "\n" . 
			get_the_excerpt() . 
		'</div>' . "\n" . 
		
		'<div class="pl_social">' . "\n";
		
			if ($cmsmasters_profile_social != '') {
				echo '<ul class="pl_social_list">' . "\n";
				
				foreach ($cmsmasters_profile_social as $social_icons) {
					$social_icon = explode('|', str_replace(' ', '', $social_icons));
					
					
					echo '<li>' . "\n\t" . 
						'<a href="' . esc_url($social_icon[1]) . '" class="' . $social_icon[0] . '" title="' . esc_attr($social_icon[2]) . '"' . (($social_icon[3] == 'true') ? ' target="_blank"' : '') . '></a>' . "\r" . 
					'</li>' . "\n";
				}
				
				echo '</ul>' . "\n";
			}
			
		echo '</div>' . "\n" . 
	'</div>' . "\n";
	?>
	<div class="cl"></div>
</article>
<!--_________________________ Finish Vertical Profile _________________________ -->

