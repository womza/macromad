<?php
/**
 * @package 	WordPress
 * @subpackage 	Construction PRO
 * @version		1.0.0
 * 
 * Blog Page Masonry Gallery Post Format Template
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


$cmsmasters_post_images = explode(',', str_replace(' ', '', str_replace('img_', '', get_post_meta(get_the_ID(), 'cmsmasters_post_images', true))));


$post_sort_categs = get_the_terms(0, 'category');

if ($post_sort_categs != '') {
	$post_categs = '';
	
	foreach ($post_sort_categs as $post_sort_categ) {
		$post_categs .= ' ' . $post_sort_categ->slug;
	}
	
	$post_categs = ltrim($post_categs, ' ');
}


$uniqid = uniqid();

?>

<!--_________________________ Start Gallery Article _________________________ -->

<article id="post-<?php the_ID(); ?>" <?php post_class('cmsmasters_masonry_type'); ?> data-category="<?php echo esc_attr($post_categs); ?>">
	<div class="cmsmasters_post_cont">
	<?php 
		if (!post_password_required()) {
			if (sizeof($cmsmasters_post_images) > 1) {
		?>
				<script type="text/javascript">
					jQuery(document).ready(function () {
						jQuery('.cmsmasters_slider_<?php echo esc_attr($uniqid); ?>').owlCarousel( { 
							singleItem : 		true, 
							transitionStyle : 	false, 
							rewindNav : 		true, 
							slideSpeed : 		200, 
							paginationSpeed : 	800, 
							rewindSpeed : 		1000, 
							autoPlay : 			false, 
							autoHeight : 		true, 
							stopOnHover : 		false, 
							pagination : 		false, 
							navigation : 		true, 
							navigationText: [
								"<span class=\"cmsmasters_prev_arrow\"><span></span></span>", "<span class=\"cmsmasters_next_arrow\"><span></span></span>"
							]
						} );
					} );
				</script>
				<div id="cmsmasters_owl_carousel_<?php the_ID(); ?>" class="cmsmasters_slider_<?php echo esc_attr($uniqid); ?> cmsmasters_owl_slider cmsmasters_big_btns">
				<?php 
					foreach ($cmsmasters_post_images as $cmsmasters_post_image) {
						$image_atts = wp_prepare_attachment_for_js($cmsmasters_post_image);
						
						
						echo '<div>' . 
							'<figure>' . 
								wp_get_attachment_image($cmsmasters_post_image, 'cmsmasters-blog-masonry-thumb', false, array( 
									'class' => 	'full-width', 
									'alt' => ($image_atts['alt'] != '') ? esc_attr($image_atts['alt']) : cmsmasters_title(get_the_ID(), false), 
									'title' => ($image_atts['title'] != '') ? esc_attr($image_atts['title']) : cmsmasters_title(get_the_ID(), false) 
								)) . 
							'</figure>' . 
						'</div>';
					}
				?>
				</div>
			<?php 
			} elseif (sizeof($cmsmasters_post_images) == 1 && $cmsmasters_post_images[0] != '') {
				construction_pro_thumb(get_the_ID(), 'cmsmasters-blog-masonry-thumb', false, 'img_' . get_the_ID(), true, true, true, true, $cmsmasters_post_images[0]);
			} elseif (has_post_thumbnail()) {
				construction_pro_thumb(get_the_ID(), 'cmsmasters-blog-masonry-thumb', false, 'img_' . get_the_ID(), true, true, true, true, false);
			}
		}		
		
		if ($author || $categories) {
			echo '<div class="cmsmasters_post_cont_info entry-meta' . ((!$more && theme_excerpt(20, false) == '') ? ' no_bdb' : '') . '">';
				
				$author ? construction_pro_get_post_author('page') : '';
				
				$categories ? construction_pro_get_post_category(get_the_ID(), 'category', 'page') : '';
				
			echo '</div>';
		}
		
		
		construction_pro_post_heading(get_the_ID(), 'h4');		
		
		if ($comments || $likes || $date) {
			echo '<div class="cmsmasters_post_body_info">';
				if ($comments || $likes) {
					echo '<div class="cmsmasters_post_meta_info">';
						
						$likes ? cmsmasters_post_like('page') : '';
						
						$comments ? construction_pro_get_post_comments('page') : '';
						
					echo '</div>';
				}
				
				$date ? construction_pro_get_post_date('page', 'default') : '';
			echo '</div>';
		}
		
		construction_pro_post_exc_cont();
		
		
		if ($more) {
			echo '<footer class="cmsmasters_post_footer entry-meta">';
				
				$more ? cmsmasters_post_more_simple(get_the_ID()) : '';
					
			echo '</footer>';
		}
	?>
	</div>
</article>
<!--_________________________ Finish Gallery Article _________________________ -->

