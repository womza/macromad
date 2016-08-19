<?php
/**
 * @package 	WordPress
 * @subpackage 	Construction PRO
 * @version		1.0.0
 * 
 * Posts Slider Standard Project Format Template
 * Created by CMSMasters
 * 
 */


$cmsmasters_metadata = explode(',', $cmsmasters_project_metadata);

$title = in_array('title', $cmsmasters_metadata) ? true : false;
$excerpt = in_array('excerpt', $cmsmasters_metadata) ? true : false;
$categories = (get_the_terms(get_the_ID(), 'pj-categs') && in_array('categories', $cmsmasters_metadata)) ? true : false;
$comments = (comments_open() && in_array('comments', $cmsmasters_metadata)) ? true : false;
$likes = in_array('likes', $cmsmasters_metadata) ? true : false;


$cmsmasters_project_link_url = get_post_meta(get_the_ID(), 'cmsmasters_project_link_url', true);

$cmsmasters_project_link_redirect = get_post_meta(get_the_ID(), 'cmsmasters_project_link_redirect', true);


$cmsmasters_project_images = explode(',', str_replace(' ', '', str_replace('img_', '', get_post_meta(get_the_ID(), 'cmsmasters_project_images', true))));

?>

<!--_________________________ Start Standard Project _________________________ -->

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="slider_project_outer">
	<?php 
		construction_pro_thumb_rollover(get_the_ID(), 'cmsmasters-project-thumb', true, true, true, $cmsmasters_project_images, false, false, false, false, true, $cmsmasters_project_link_redirect, $cmsmasters_project_link_url);
		
		
		if ($title || $categories || $excerpt || $likes || $comments) {
			echo '<div class="slider_project_inner">';
				
				($title) ? construction_pro_slider_post_heading(get_the_ID(), 'project', 'h4', true, $cmsmasters_project_link_redirect, $cmsmasters_project_link_url) : '';
				
				
				if ($categories || $likes || $comments) {
					echo '<div class="cmsmasters_slider_project_body_info">';
						if ($likes || $comments) {
							echo '<div class="cmsmasters_slider_project_meta_info entry-meta">';
								
								($likes) ? construction_pro_slider_post_like('project') : '';
								
								($comments) ? construction_pro_get_slider_post_comments('project') : '';
								
							echo '</div>';
						}


						if ($categories) {
							echo '<div class="cmsmasters_slider_project_cont_info entry-meta">';
								
								construction_pro_get_slider_post_category(get_the_ID(), 'pj-categs', 'project');
								
							echo '</div>';
						}
					echo '</div>';
				}


				($excerpt && construction_pro_slider_post_check_exc_cont('project')) ? construction_pro_slider_post_exc_cont('project') : '';


			echo '</div>';
		}
	?>
		<div class="cl"></div>
	</div>
</article>
<!--_________________________ Finish Standard Project _________________________ -->

