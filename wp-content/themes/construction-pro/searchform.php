<?php
/**
 * @package 	WordPress
 * @subpackage 	Construction PRO
 * @version		1.0.0
 * 
 * Search Form Template
 * Created by CMSMasters
 * 
 */
?>

<div class="search_bar_wrap">
	<form role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
		<p class="search_field">
			<input name="s" placeholder="<?php esc_attr_e('Search'); ?>" value="" type="search" />
		</p>
		<p class="search_button">
			<button type="submit" class="cmsmasters_theme_icon_search"></button>
		</p>
		<p class="search_button_open">
			<button type="submit" class="cmsmasters_theme_icon_search"></button>
		</p>
	</form>
</div>

