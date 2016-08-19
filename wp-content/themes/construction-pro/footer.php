<?php
/**
 * @package 	WordPress
 * @subpackage 	Construction PRO
 * @version		1.0.0
 * 
 * Website Footer Template
 * Created by CMSMasters
 * 
 */


$cmsmasters_option = construction_pro_get_global_options();
?>

		</div>
	</div>
</div>
<!-- _________________________ Finish Middle _________________________ -->
<?php

get_sidebar('bottom');

?>
<a href="javascript:void(0);" id="slide_top" class="cmsmasters_theme_icon_slide_top"></a>
</div>
<!-- _________________________ Finish Main _________________________ -->

<!-- _________________________ Start Footer _________________________ -->
<footer id="footer" role="contentinfo" class="<?php echo 'cmsmasters_color_scheme_' . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_footer_scheme'] . ($cmsmasters_option[CMSMASTERS_SHORTNAME . '_footer_type'] == 'default' ? ' cmsmasters_footer_default' : ' cmsmasters_footer_small');
?>">
	<div class="footer_bg">
		<div class="footer_inner">
		<?php
			construction_pro_footer_logo($cmsmasters_option);
			
			construction_pro_get_footer_custom_html($cmsmasters_option);
			
			construction_pro_get_footer_nav($cmsmasters_option);

			construction_pro_get_footer_social_icons($cmsmasters_option);
			
			construction_pro_get_footer_copyright_small($cmsmasters_option);
		?>
		</div>
	</div>
	<?php
		construction_pro_get_footer_copyright_default($cmsmasters_option);
	?>
</footer>
<!-- _________________________ Finish Footer _________________________ -->

</div>
<!-- _________________________ Finish Page _________________________ -->

<?php wp_footer(); ?>
</body>
</html>
