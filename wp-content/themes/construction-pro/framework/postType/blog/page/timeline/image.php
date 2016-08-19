<?php
/**
 * @package 	WordPress
 * @subpackage 	Construction PRO
 * @version		1.0.0
 * 
 * Blog Page Timeline Image Post Format Template
 * Created by CMSMasters
 * 
 */


$cmsmasters_post_metadata = explode(',', $cmsmasters_metadata);


$date = (in_array('date', $cmsmasters_post_metadata) || is_home()) ? true : false;
$categories = (get_the_category() && (in_array('categories', $cmsmasters_post_metadata) || is_home())) ? true : false;
$author = (in_array('author', $cmsmasters_post_metadata) || is_home()) ? true : false;
$comments = (comments_open() && (in_array('comments', $cmsmasters_post_metadata) || is_home())) ? true : false;
$likes = (in_array('likes', $cmsmasters_post_metadata) || is_home()) ? true : false;
$more = (in_array('more', $cmsmasters_post_metadata) || is_home()) ? true : false;


$cmsmasters_post_image_link = get_post_meta(get_the_ID(), 'cmsmasters_post_image_link', true);

?>

<!--_________________________ Start Image Article _________________________ -->

<article id="post-<?php the_ID(); ?>" <?php post_class('cmsmasters_timeline_type'); ?>>
	<div class="cmsmasters_post_info entry-meta">
		<?php $date ? construction_pro_get_post_date('page', 'timeline') : ''; ?>
	</div>
	<div class="cmsmasters_post_cont">
	<?php 
		if (!post_password_required()) {
			if ($cmsmasters_post_image_link != '') {
				construction_pro_thumb(get_the_ID(), 'post-thumbnail', false, 'img_' . get_the_ID(), true, true, true, true, $cmsmasters_post_image_link);
			} elseif (has_post_thumbnail()) {
				construction_pro_thumb(get_the_ID(), 'post-thumbnail', false, 'img_' . get_the_ID(), true, true, true, true, false);
			}
		}
		
		
		construction_pro_post_heading(get_the_ID(), 'h3');
		
		if ($comments || $likes || $author || $categories) {
			echo '<div class="cmsmasters_post_body_info">';
				if ($comments || $likes) {
					echo '<div class="cmsmasters_post_meta_info">';
						
						$likes ? cmsmasters_post_like('page') : '';
						
						$comments ? construction_pro_get_post_comments('page') : '';
						
					echo '</div>';
				}
				
				if ($author || $categories) {
					echo '<div class="cmsmasters_post_cont_info entry-meta' . ((theme_excerpt(20, false) == '') ? ' no_bdb' : '') . '">';
										
						$categories ? construction_pro_get_post_category(get_the_ID(), 'category', 'page') : '';
						
						$author ? construction_pro_get_post_author('page') : '';
						
					echo '</div>';
				}
			echo '</div>';
		}
		
		construction_pro_post_exc_cont();
		
		
		if ($more) {
			echo '<footer class="cmsmasters_post_footer entry-meta">';
				
				$more ? construction_pro_post_more(get_the_ID()) : '';
					
			echo '</footer>';
		}
	?>
		<div class="cl"></div>
	</div>
</article>
<!--_________________________ Finish Image Article _________________________ -->

