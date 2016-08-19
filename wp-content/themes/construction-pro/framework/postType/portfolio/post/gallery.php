<?php
/**
 * @package 	WordPress
 * @subpackage 	Construction PRO
 * @version		1.0.0
 * 
 * Gallery Project Format Template
 * Created by CMSMasters
 * 
 */


$cmsmasters_option = construction_pro_get_global_options();


$cmsmasters_project_title = get_post_meta(get_the_ID(), 'cmsmasters_project_title', true);

$cmsmasters_project_sharing_box = get_post_meta(get_the_ID(), 'cmsmasters_project_sharing_box', true);

$cmsmasters_project_features = get_post_meta(get_the_ID(), 'cmsmasters_project_features', true);


$cmsmasters_project_link_text = get_post_meta(get_the_ID(), 'cmsmasters_project_link_text', true);
$cmsmasters_project_link_url = get_post_meta(get_the_ID(), 'cmsmasters_project_link_url', true);
$cmsmasters_project_link_target = get_post_meta(get_the_ID(), 'cmsmasters_project_link_target', true);


$cmsmasters_project_details_title = get_post_meta(get_the_ID(), 'cmsmasters_project_details_title', true);


$cmsmasters_project_features_one_title = get_post_meta(get_the_ID(), 'cmsmasters_project_features_one_title', true);
$cmsmasters_project_features_one = get_post_meta(get_the_ID(), 'cmsmasters_project_features_one', true);

$cmsmasters_project_features_two_title = get_post_meta(get_the_ID(), 'cmsmasters_project_features_two_title', true);
$cmsmasters_project_features_two = get_post_meta(get_the_ID(), 'cmsmasters_project_features_two', true);

$cmsmasters_project_features_three_title = get_post_meta(get_the_ID(), 'cmsmasters_project_features_three_title', true);
$cmsmasters_project_features_three = get_post_meta(get_the_ID(), 'cmsmasters_project_features_three', true);


$cmsmasters_project_images = explode(',', str_replace(' ', '', str_replace('img_', '', get_post_meta(get_the_ID(), 'cmsmasters_project_images', true))));


$cmsmasters_project_columns = get_post_meta(get_the_ID(), 'cmsmasters_project_columns', true);

$cmsmasters_project_images_rollover_bg = get_post_meta(get_the_ID(), 'cmsmasters_project_images_rollover_bg', true);


if ($cmsmasters_project_columns == 'three' || $cmsmasters_project_columns == 'two') {
    $project_thumb = 'cmsmasters-project-thumb';
} else {
    $project_thumb = 'cmsmasters-project-full-thumb';
}


$cmsmasters_project_img_columns = 'one_third';

if ($cmsmasters_project_columns == 'two') {
	$cmsmasters_project_img_columns = 'one_half';
} elseif ($cmsmasters_project_columns == 'one') {
	$cmsmasters_project_img_columns = 'one_first';
}

$colnumb = 0;


$project_details = '';


if (
	$cmsmasters_option[CMSMASTERS_SHORTNAME . '_portfolio_project_like'] || 
	$cmsmasters_option[CMSMASTERS_SHORTNAME . '_portfolio_project_date'] || 
	$cmsmasters_option[CMSMASTERS_SHORTNAME . '_portfolio_project_cat'] || 
	$cmsmasters_option[CMSMASTERS_SHORTNAME . '_portfolio_project_comment'] || 
	$cmsmasters_option[CMSMASTERS_SHORTNAME . '_portfolio_project_author'] || 
	$cmsmasters_option[CMSMASTERS_SHORTNAME . '_portfolio_project_tag'] || 
	(
		!empty($cmsmasters_project_features[1][0]) && 
		!empty($cmsmasters_project_features[1][1])
	) || 
	$cmsmasters_option[CMSMASTERS_SHORTNAME . '_portfolio_project_link']
) {
	$project_details = 'true';
}


$project_sidebar = '';


if (
	$project_details == 'true' || 
	$cmsmasters_project_sharing_box == 'true' || 
	(
		!empty($cmsmasters_project_features_one[1][0]) && 
		!empty($cmsmasters_project_features_one[1][1])
	) || (
		!empty($cmsmasters_project_features_two[1][0]) && 
		!empty($cmsmasters_project_features_two[1][1])
	) || (
		!empty($cmsmasters_project_features_three[1][0]) && 
		!empty($cmsmasters_project_features_three[1][1])
	)
) {
	$project_sidebar = 'true';
}

?>

<!--_________________________ Start Gallery Project _________________________ -->

<article id="post-<?php the_ID(); ?>" <?php post_class('cmsmasters_' . $cmsmasters_project_columns); ?>>
<?php
	if (isset($cmsmasters_project_images_rollover_bg) && $cmsmasters_project_images_rollover_bg != '') {
		echo "<style type='text/css'>" . "\n" .
			".portfolio.opened-article .cmsmasters_img_rollover:after {" . "\n" .
				cmsmasters_color_css('background-color', $cmsmasters_project_images_rollover_bg) . "\n" .
		"} " . "\n" .
		"</style>" . "\n";
	}

	if ($cmsmasters_project_title == 'true') {
		echo '<header class="cmsmasters_project_header entry-header">';
			
			construction_pro_project_title_nolink(get_the_ID(), 'h1');
			
		echo '</header>';
	}
	
	
	echo '<div class="project_content' . (($project_sidebar == 'true') ? ' with_sidebar' : '') . '">';
		if (!post_password_required()) {
			if (sizeof($cmsmasters_project_images) > 0 && $cmsmasters_project_images[0] != '') {
				echo '<div class="project_gallery_row">';
				
				
				foreach ($cmsmasters_project_images as $cmsmasters_project_image) {
					$link_href = wp_get_attachment_image_src((int) $cmsmasters_project_image, 'full');
					
					$image_atts = wp_prepare_attachment_for_js($cmsmasters_project_image);
					
					
					if ($cmsmasters_project_columns == 'one' && $colnumb == 1) { 
						echo '<div class="cl"></div></div><div class="project_gallery_row">';
						
						
						$colnumb = 0;
					} else if ($cmsmasters_project_columns == 'two' && $colnumb == 2) {
						echo '<div class="cl"></div></div><div class="project_gallery_row">';
						
						
						$colnumb = 0;
					} else if ($cmsmasters_project_columns == 'three' && $colnumb == 3) {
						echo '<div class="cl"></div></div><div class="project_gallery_row">';
						
						
						$colnumb = 0;
					}
					
					
					echo '<div class="' . $cmsmasters_project_img_columns . '">' . 
						'<figure class="cmsmasters_img_rollover_wrap preloader">' . 
							wp_get_attachment_image($cmsmasters_project_image, $project_thumb, false, array( 
								'class' => 'full-width', 
								'alt' => ($image_atts['alt'] != '') ? esc_attr($image_atts['alt']) : cmsmasters_title(get_the_ID(), false), 
								'title' => ($image_atts['title'] != '') ? esc_attr($image_atts['title']) : cmsmasters_title(get_the_ID(), false) 
							)) . 
							'<div class="cmsmasters_img_rollover">' . 
								'<a href="' . esc_url($link_href[0]) . '" rel="ilightbox[img_' . get_the_ID() . ']" title="' . (($image_atts['title'] != '') ? esc_attr($image_atts['title']) : cmsmasters_title(get_the_ID(), false)) . '" class="cmsmasters_image_link jackbox no_open_link cmsmasters_theme_icon_search"></a>' . 
							'</div>' . 
						'</figure>' . 
					'</div>';
					
					
					$colnumb++;
				}
				
				
				echo '<div class="cl"></div></div>';
			} elseif (sizeof($cmsmasters_project_images) == 1 && $cmsmasters_project_images[0] != '') {
				construction_pro_thumb(get_the_ID(), 'cmsmasters-full-masonry-thumb', false, 'img_' . get_the_ID(), true, true, false, true, $cmsmasters_project_images[0]);
			} elseif (sizeof($cmsmasters_project_images) < 1 && has_post_thumbnail() && $cmsmasters_project_featured_image_show == 'true') {
				construction_pro_thumb(get_the_ID(), 'cmsmasters-full-masonry-thumb', false, 'img_' . get_the_ID(), true, true, false, true, false);
			}
		}
		
		
		echo '<div class="cmsmasters_project_content entry-content">' . "\n";
			
			the_content();
			
			
			wp_link_pages(array( 
				'before' => '<div class="subpage_nav" role="navigation">' . '<strong>' . esc_html__('Pages', 'construction-pro') . ':</strong>', 
				'after' => '</div>', 
				'link_before' => '<span>', 
				'link_after' => '</span>' 
			));
			
			
			echo '<div class="cl"></div>' . 
		'</div>';
		if ($cmsmasters_option[CMSMASTERS_SHORTNAME . '_portfolio_project_nav_box']) {
			construction_pro_prev_next_posts();
		}
	echo '</div>';
	
	
	if ($project_sidebar == 'true') {
		echo '<div class="project_sidebar">';
			
			if ($project_details == 'true') {
				echo '<div class="project_details entry-meta">' . 
					'<h4 class="project_details_title">' . esc_html($cmsmasters_project_details_title) . '</h4>';
					
					
					cmsmasters_project_like('post');
					
					construction_pro_get_project_comments('post');
					
					construction_pro_get_project_date('post');
					
					construction_pro_get_project_category(get_the_ID(), 'pj-categs', 'post');
					
					construction_pro_get_project_author('post');
					
					construction_pro_get_project_tags(get_the_ID(), 'pj-tags', 'post');
					
					construction_pro_get_project_features('details', $cmsmasters_project_features, false, 'h4', true);
					
					construction_pro_project_link($cmsmasters_project_link_text, $cmsmasters_project_link_url, $cmsmasters_project_link_target);
					
				echo '</div>';
			}
			
			
			construction_pro_get_project_features('features', $cmsmasters_project_features_one, $cmsmasters_project_features_one_title, 'h4', true);
			
			construction_pro_get_project_features('features', $cmsmasters_project_features_two, $cmsmasters_project_features_two_title, 'h4', true);
			
			construction_pro_get_project_features('features', $cmsmasters_project_features_three, $cmsmasters_project_features_three_title, 'h4', true);
			
			
			if ($cmsmasters_project_sharing_box == 'true') {
				construction_pro_sharing_box(esc_html__('Like this project?', 'construction-pro'), 'h4');
			}
			
		echo '</div>';
	}
?>
	<div class="cl"></div>
</article>
<!--_________________________ Finish Album Project _________________________ -->

