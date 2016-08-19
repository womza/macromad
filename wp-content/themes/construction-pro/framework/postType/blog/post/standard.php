<?php
/**
 * @package 	WordPress
 * @subpackage 	Construction PRO
 * @version		1.0.0
 * 
 * Blog Post Standard Post Format Template
 * Created by CMSMasters
 * 
 */


$cmsmasters_option = construction_pro_get_global_options();


$cmsmasters_post_title = get_post_meta(get_the_ID(), 'cmsmasters_post_title', true);

?>

<!--_________________________ Start Standard Article _________________________ -->

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="cmsmasters_post_cont">
	<?php 
		if ($cmsmasters_post_title == 'true') {
			construction_pro_post_title_nolink(get_the_ID(), 'h1');
		}
		
		
		if ( 
			$cmsmasters_option[CMSMASTERS_SHORTNAME . '_blog_post_date'] || 
			$cmsmasters_option[CMSMASTERS_SHORTNAME . '_blog_post_author'] || 
			$cmsmasters_option[CMSMASTERS_SHORTNAME . '_blog_post_cat'] || 
			$cmsmasters_option[CMSMASTERS_SHORTNAME . '_blog_post_like'] || 
			$cmsmasters_option[CMSMASTERS_SHORTNAME . '_blog_post_comment'] 
		) {
			echo '<div class="cmsmasters_post_cont_info entry-meta' . ((get_the_content() == '') ? ' no_bdb' : '') . '">';
				
				if ( 
					$cmsmasters_option[CMSMASTERS_SHORTNAME . '_blog_post_like'] || 
					$cmsmasters_option[CMSMASTERS_SHORTNAME . '_blog_post_comment'] 
				) {
					echo '<div class="cmsmasters_post_meta_info">';
						
						cmsmasters_post_like('post');
						
						construction_pro_get_post_comments('post');		
						
					echo '</div>';
				}
				
				
				construction_pro_get_post_date('post');
				
				construction_pro_get_post_author('post');
				
				construction_pro_get_post_category(get_the_ID(), 'category', 'post');
				
			echo '</div>';
		}
		
		
		if (get_the_content() != '') {
			echo '<div class="cmsmasters_post_content entry-content">';
				
				the_content();
				
				
				wp_link_pages(array( 
					'before' => '<div class="subpage_nav" role="navigation">' . '<strong>' . esc_html__('Pages', 'construction-pro') . ':</strong>', 
					'after' => '</div>', 
					'link_before' => '<span>', 
					'link_after' => '</span>' 
				));
				
			echo '<div class="cl"></div>' . 
			'</div>';
		}
		
		if (
			$cmsmasters_option[CMSMASTERS_SHORTNAME . '_blog_post_tag']
		) {
			construction_pro_get_post_tags('post');
		}
	?>
	</div>
</article>
<!--_________________________ Finish Standard Article _________________________ -->

