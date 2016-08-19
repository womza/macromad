<?php
/**
 * @package 	WordPress
 * @subpackage 	Construction PRO
 * @version		1.0.0
 * 
 * Posts Slider Image Post Format Template
 * Created by CMSMasters
 * 
 */


$cmsmasters_metadata = explode(',', $cmsmasters_post_metadata);

$excerpt = in_array('excerpt', $cmsmasters_metadata) ? true : false;
$date = in_array('date', $cmsmasters_metadata) ? true : false;
$categories = (get_the_category() && (in_array('categories', $cmsmasters_metadata))) ? true : false;
$author = in_array('author', $cmsmasters_metadata) ? true : false;
$comments = (comments_open() && (in_array('comments', $cmsmasters_metadata))) ? true : false;
$likes = in_array('likes', $cmsmasters_metadata) ? true : false;
$more = in_array('more', $cmsmasters_metadata) ? true : false;


$cmsmasters_post_image_link = get_post_meta(get_the_ID(), 'cmsmasters_post_image_link', true);

?>

<!--_________________________ Start Image Article _________________________ -->

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="cmsmasters_slider_post_cont">
	<?php 
		if (!post_password_required() && has_post_thumbnail()) {
			echo '<div class="thumb_wrap">';
				
				construction_pro_thumb(get_the_ID(), 'cmsmasters-blog-masonry-thumb', true, false, true, false, true, true, false);
				
			echo '</div>';
		}
		
		echo '<div class="cmsmasters_slider_post_cont_wrap">';
		
			if ($author || $categories) {
				echo '<div class="cmsmasters_post_cont_info entry-meta">';
					
					$categories ? construction_pro_get_slider_post_category(get_the_ID(), 'category', 'post') : '';
					
					$author ? construction_pro_get_slider_post_author('post') : '';
					
				echo '</div>';
			}
			
			construction_pro_slider_post_heading(get_the_ID(), 'post', 'h4');
			

			if ($date || $likes || $comments) {
				echo '<div class="cmsmasters_post_body_info">';
					if ($likes || $comments) {
						echo '<div class="cmsmasters_slider_post_meta_info">';
							
							$likes ? construction_pro_slider_post_like('post') : '';
							
							$comments ? construction_pro_get_slider_post_comments('post') : '';
								
						echo '</div>';
					}
					echo '<div class="cmsmasters_post_cont_info entry-meta">';
						
						$date ? construction_pro_get_slider_post_date('post') : '';
					
					echo '</div>';
				echo '</div>';				
			}
			
			
			$excerpt ? construction_pro_slider_post_exc_cont('post') : '';
			
			
			if ($more) {
				echo '<footer class="cmsmasters_slider_post_footer entry-meta">';			
					
					$more ? cmsmasters_post_more_simple(get_the_ID()) : '';
					
				echo '</footer>';
			}
			
		echo '</div>';
	?>
	</div>
</article>
<!--_________________________ Finish Image Article _________________________ -->

