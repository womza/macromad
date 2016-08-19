<?php
/**
 * @package 	WordPress
 * @subpackage 	Construction PRO
 * @version		1.0.0
 * 
 * Blog Page Default Audio Post Format Template
 * Created by CMSMasters
 * 
 */



$cmsmasters_post_metadata = !is_home() ? explode(',', $cmsmasters_metadata) : array();


$date = (in_array('date', $cmsmasters_post_metadata) || is_home() || is_archive() || is_search()) ? true : false;
$categories = (get_the_category() && (in_array('categories', $cmsmasters_post_metadata) || is_home() || is_archive() || is_search())) ? true : false;
$author = (in_array('author', $cmsmasters_post_metadata) || is_home() || is_archive() || is_search()) ? true : false;
$comments = (comments_open() && (in_array('comments', $cmsmasters_post_metadata) || is_home() || is_archive() || is_search())) ? true : false;
$likes = (in_array('likes', $cmsmasters_post_metadata) || is_home() || is_archive() || is_search()) ? true : false;
$more = (in_array('more', $cmsmasters_post_metadata) || is_home() || is_archive() || is_search()) ? true : false;


$cmsmasters_post_audio_links = get_post_meta(get_the_ID(), 'cmsmasters_post_audio_links', true);

?>

<!--_________________________ Start Audio Article _________________________ -->

<article id="post-<?php the_ID(); ?>" <?php post_class('cmsmasters_default_type'); ?>>
	<div class="cmsmasters_post_cont">
	<?php 
		construction_pro_post_heading(get_the_ID(), 'h2');
		
		
		if (!post_password_required() && !empty($cmsmasters_post_audio_links) && sizeof($cmsmasters_post_audio_links) > 0) {
			$attrs = array(
				'preload' => 'none'
			);
			
			
			foreach ($cmsmasters_post_audio_links as $cmsmasters_post_audio_link_url) {
				$attrs[substr(strrchr($cmsmasters_post_audio_link_url, '.'), 1)] = $cmsmasters_post_audio_link_url;
			}
			
			
			echo '<div class="cmsmasters_audio">' . 
				wp_audio_shortcode($attrs) . 
			'</div>';
		}
		
		
		if ($date || $author || $categories || $likes || $comments) {
			echo '<div class="cmsmasters_post_cont_info entry-meta' . ((!$more && theme_excerpt(20, false) == '') ? ' no_bdb' : '') . '">';
				
				if ($comments || $likes) {
					echo '<div class="cmsmasters_post_meta_info">';
						
						$likes ? cmsmasters_post_like('page') : '';
						
						$comments ? construction_pro_get_post_comments('page') : '';
						
					echo '</div>';
				}
				
				
				$date ? construction_pro_get_post_date('page', 'default') : '';
				
				$categories ? construction_pro_get_post_category(get_the_ID(), 'category', 'page') : '';
				
				$author ? construction_pro_get_post_author('page') : '';
				
			echo '</div>';
		}
		
		
		construction_pro_post_exc_cont(); 
		
		
		if ($more) {
			echo '<footer class="cmsmasters_post_footer entry-meta">';
				
				$more ? construction_pro_post_more(get_the_ID()) : '';
				
			echo '</footer>';
		} elseif (!$more && theme_excerpt(20, false) != '') {
			echo '<div class="pb_10"></div>';
		}
	?>
	</div>
</article>
<!--_________________________ Finish Audio Article _________________________ -->

