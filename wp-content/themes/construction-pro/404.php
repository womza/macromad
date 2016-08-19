<?php
/**
 * @package 	WordPress
 * @subpackage 	Construction PRO
 * @version 	1.0.0
 * 
 * 404 Error Page Template
 * Created by CMSMasters
 * 
 */


get_header();


$cmsmasters_option = construction_pro_get_global_options();

?>

</div>

<!-- _________________________ Start Content _________________________ -->
<div class="entry">
	<div class="error">
		<div class="error_bg">
			<div class="content_wrap fullwidth">
				<div class="error_inner cl">
					<?php
						echo '<div class="error_subtitles">' . 
							'<h2 class="error_subtitle">' . esc_html__("we are sorry", 'construction-pro') . '</h2>' . 
							
							'<h3 class="error_subtitle_sec">' . esc_html__("but the page you were looking for cannot be found.", 'construction-pro') . '</h3>' . 
						'</div>';
					?>
					
					<h1 class="error_title">404</h1>
					
					<div class="cl"></div>
					<?php 					
						
						if ($cmsmasters_option[CMSMASTERS_SHORTNAME . '_error_search']) { 
							get_search_form(); 
						}
						
						
						if ($cmsmasters_option[CMSMASTERS_SHORTNAME . '_error_sitemap_button'] && $cmsmasters_option[CMSMASTERS_SHORTNAME . '_error_sitemap_link'] != '') {
							echo '<div class="error_button_wrap"><a href="' . esc_url($cmsmasters_option[CMSMASTERS_SHORTNAME . '_error_sitemap_link']) . '" class="button cmsmasters_button">' . esc_html__('Sitemap', 'construction-pro') . '</a></div>';
						}
					?>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="content_wrap fullwidth">
<!-- _________________________ Finish Content _________________________ -->

<?php 
get_footer();

