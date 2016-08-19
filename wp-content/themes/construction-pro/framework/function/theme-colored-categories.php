<?php 
/**
 * @package 	WordPress
 * @subpackage 	Construction PRO
 * @version		1.0.0
 * 
 * Colored Categories
 * Created by CMSMasters
 * 
 */


/* Add Category Color */
function construction_pro_add_category_color() {
	wp_register_script('cmsmasters_theme_settings_js', get_template_directory_uri() . '/framework/admin/settings/js/cmsmasters-theme-settings.js', array('jquery', 'farbtastic'), '1.0.0', true);
	
	wp_localize_script('cmsmasters_theme_settings_js', 'cmsmasters_setting', array( 
		'palettes' => implode(',', cmsmasters_color_picker_palettes()) 
	));
	
	
	wp_enqueue_script('cmsmasters_theme_settings_js');
	
	?>
	<div class="form-field">
		<label for="term_meta[cmsmasters_cat_color]"><?php esc_html_e('Category Color', 'construction-pro'); ?></label>
		<input type="text" id="term_meta[cmsmasters_cat_color]" name="term_meta[cmsmasters_cat_color]" value="" class="cmsmasters-color-field" data-alpha="true" data-reset-alpha="true" />
	</div>
	<?php
}



/* Edit Category Color */
function construction_pro_edit_category_color($term) {
	wp_register_script('cmsmasters_theme_settings_js', get_template_directory_uri() . '/framework/admin/settings/js/cmsmasters-theme-settings.js', array('jquery', 'farbtastic'), '1.0.0', true);
	
	wp_localize_script('cmsmasters_theme_settings_js', 'cmsmasters_setting', array( 
		'palettes' => 			implode(',', cmsmasters_color_picker_palettes()) 
	));
	
	
	wp_enqueue_script('cmsmasters_theme_settings_js');
	
	
	$t_id = $term->term_id;
	
	$term_meta = get_option( "taxonomy_$t_id" );
	
	?>
	<tr class="form-field">
		<th scope="row" valign="top">
			<label for="term_meta[cmsmasters_cat_color]"><?php esc_html_e('Category Color', 'construction-pro'); ?></label>
		</th>
		<td>
			<input type="text" id="term_meta[cmsmasters_cat_color]" name="term_meta[cmsmasters_cat_color]" value="<?php echo (esc_attr($term_meta['cmsmasters_cat_color']) ? esc_attr( $term_meta['cmsmasters_cat_color']) : ''); ?>" class="cmsmasters-color-field" data-alpha="true" data-reset-alpha="true" />
		</td>
	</tr>
	<?php 
}



/* Save Category Color */
function construction_pro_save_category_color($term_id) {
	if (isset($_POST['term_meta'])) {
		$t_id = $term_id;
		
		$term_meta = get_option("taxonomy_$t_id");
		
		$cat_keys = array_keys($_POST['term_meta']);
		
		
		foreach ($cat_keys as $key) {
			if (isset($_POST['term_meta'][$key])) {
				$term_meta[$key] = $_POST['term_meta'][$key];
			}
		}
		
		
		update_option("taxonomy_$t_id", $term_meta);
	}
}



/* Category Color Actions */
add_action('category' . '_add_form_fields', 'construction_pro_add_category_color', 10, 2);
add_action('pj-categs' . '_add_form_fields', 'construction_pro_add_category_color', 10, 2);
add_action('pl-categs' . '_add_form_fields', 'construction_pro_add_category_color', 10, 2);

if (CMSMASTERS_WOOCOMMERCE) {
	add_action('product_cat' . '_add_form_fields', 'construction_pro_add_category_color', 10, 2);
}

add_action('category' . '_edit_form_fields', 'construction_pro_edit_category_color', 10, 2);
add_action('pj-categs' . '_edit_form_fields', 'construction_pro_edit_category_color', 10, 2);
add_action('pl-categs' . '_edit_form_fields', 'construction_pro_edit_category_color', 10, 2);

if (CMSMASTERS_WOOCOMMERCE) {
	add_action('product_cat' . '_edit_form_fields', 'construction_pro_edit_category_color', 10, 2);
}


add_action('edited_' . 'category', 'construction_pro_save_category_color', 10, 2);  
add_action('create_' . 'category', 'construction_pro_save_category_color', 10, 2);
add_action('edited_' . 'pj-categs', 'construction_pro_save_category_color', 10, 2);  
add_action('create_' . 'pj-categs', 'construction_pro_save_category_color', 10, 2);
add_action('edited_' . 'pl-categs', 'construction_pro_save_category_color', 10, 2);  
add_action('create_' . 'pl-categs', 'construction_pro_save_category_color', 10, 2);

if (CMSMASTERS_WOOCOMMERCE) {
	add_action('edited_' . 'product_cat', 'construction_pro_save_category_color', 10, 2);
	add_action('create_' . 'product_cat', 'construction_pro_save_category_color', 10, 2);
}


/* Theme Category Styles */
function construction_pro_theme_category_styles() {
	$out = '';
	
	$taxonomies_arr = array('category', 'pj-categs', 'pl-categs');
	
	
	if (CMSMASTERS_WOOCOMMERCE) {
		$taxonomies_arr[] = 'product_cat';
	}
		
	
	$cat_ids = get_terms($taxonomies_arr, 'fields=ids&hide_empty=0');
	
	
	foreach ($cat_ids as $cat_id) {
		$cat_color = get_option('taxonomy_' . $cat_id);
		
		if (isset($cat_color) && $cat_color && $cat_color['cmsmasters_cat_color'] != '') {
			$out .= "
	
	a.cmsmasters_cat_{$cat_id} {
		" . cmsmasters_color_css('color', $cat_color['cmsmasters_cat_color']) . "
	}	
";
		}
	}
	
	
	return $out;
}

