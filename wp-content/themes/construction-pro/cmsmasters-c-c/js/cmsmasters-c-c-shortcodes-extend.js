/**
 * @package 	WordPress
 * @subpackage 	Construction PRO
 * @version		1.0.0
 * 
 * Visual Content Composer Schortcodes Extend
 * Created by CMSMasters
 * 
 */
 

/* 
// For Change Fields in Shortcodes

var sc_name_new_fields = {};


for (var id in cmsmastersShortcodes.sc_name.fields) {
	if (id === 'field_name') { // Delete Field
		delete cmsmastersShortcodes.sc_name.fields[id];
	} else if (id === 'field_name') { // Delete Field Attribute
		delete cmsmastersShortcodes.sc_name.fields[id]['field_attribute'];  
		
		
		sc_name_new_fields[id] = cmsmastersShortcodes.sc_name.fields[id];
	} else if (id === 'field_name') { // Add/Change Field Attribute
		cmsmastersShortcodes.sc_name.fields[id]['field_attribute'] = 'value';
		
		
		sc_name_new_fields[id] = cmsmastersShortcodes.sc_name.fields[id];
	} else if (id === 'field_name') { // Add Field (before the field as found, add new field)
		sc_name_new_fields['field_name'] = { 
			type : 		'rgba', 
			title : 	composer_shortcodes_extend.sc_name_field_custom_bg_color, 
			descr : 	'', 
			def : 		'', 
			required : 	false, 
			width : 	'half' 
		};
		
		
		sc_name_new_fields[id] = cmsmastersShortcodes.sc_name.fields[id];
	} else { // Allways add this in the bottom
		sc_name_new_fields[id] = cmsmastersShortcodes.sc_name.fields[id];
	}
}


cmsmastersShortcodes.sc_name.fields = sc_name_new_fields; 
*/



/**
 * Quotes Extend
 */

var quotes_new_fields = {};


for (var id in cmsmastersShortcodes.cmsmasters_quotes.fields) {
	if (id === 'mode') {
		quotes_new_fields[id] = cmsmastersShortcodes.cmsmasters_quotes.fields[id];
		
		
		quotes_new_fields['type'] = { 
			type : 		'radio', 
			title : 	composer_shortcodes_extend.quotes_field_slider_type_title, 
			descr : 	composer_shortcodes_extend.quotes_field_slider_type_descr, 
			def : 		'box', 
			required : 	true, 
			width : 	'half', 
			choises : { 
						'box' : 	composer_shortcodes_extend.quotes_field_type_choice_box, 
						'center' : 	composer_shortcodes_extend.quotes_field_type_choice_center 
			}, 
			depend : 	'mode:slider' 
		};
	} else {
		quotes_new_fields[id] = cmsmastersShortcodes.cmsmasters_quotes.fields[id];
	}
}


cmsmastersShortcodes.cmsmasters_quotes.fields = quotes_new_fields;




/**
 * Blog Extend
 */

var blog_new_fields = {};


for (var id in cmsmastersShortcodes.cmsmasters_blog.fields) {
	
	if (id === 'metadata') {
		
		cmsmastersShortcodes.cmsmasters_blog.fields[id]['choises'] = {
			'date' : 		cmsmasters_shortcodes.choice_date, 
			'categories' : 	cmsmasters_shortcodes.choice_categories, 
			'author' : 		cmsmasters_shortcodes.choice_author, 
			'comments' : 	cmsmasters_shortcodes.choice_comments, 
			'likes' : 		cmsmasters_shortcodes.choice_likes, 
			'more' : 		cmsmasters_shortcodes.choice_more 
		}; 
		
		
		blog_new_fields[id] = cmsmastersShortcodes.cmsmasters_blog.fields[id];
		
	} else if (id === 'filter') {
	
		blog_new_fields[id] = cmsmastersShortcodes.cmsmasters_blog.fields[id];
	
		blog_new_fields['filter_bg_color'] = { 
			type : 		'rgba', 
			title : 	composer_shortcodes_extend.cmsmasters_blog_field_filter_bg_color, 
			descr : 	'', 
			def : 		'#f3c14b', 
			required : 	false, 
			width : 	'half' 
		};
		
		
		blog_new_fields[id] = cmsmastersShortcodes.cmsmasters_blog.fields[id];
		
	} else if (id === 'filter_text') {
		delete cmsmastersShortcodes.cmsmasters_blog.fields[id];	
	} else {
		blog_new_fields[id] = cmsmastersShortcodes.cmsmasters_blog.fields[id];
	}
}


cmsmastersShortcodes.cmsmasters_blog.fields = blog_new_fields;




/**
 * Portfolio Extend
 */

var portfolio_new_fields = {};


for (var id in cmsmastersShortcodes.cmsmasters_portfolio.fields) {

	if (id === 'metadata') {
		
		delete cmsmastersShortcodes.cmsmasters_portfolio.fields[id];
		
	} else if (id === 'gap') {
	
		portfolio_new_fields['metadata_grid'] = { 
			type : 		'checkbox', 
			title : 	cmsmasters_shortcodes.metadata, 
			descr : 	cmsmasters_shortcodes.portfolio_field_metadata_descr, 
			def : 		'title,categories,rollover', 
			required : 	true, 
			width : 	'half', 
			choises : { 
						'title' : 		cmsmasters_shortcodes.choice_title, 
						'excerpt' : 	cmsmasters_shortcodes.choice_excerpt, 
						'categories' : 	cmsmasters_shortcodes.choice_categories, 
						'comments' : 	cmsmasters_shortcodes.choice_comments, 
						'likes' : 		cmsmasters_shortcodes.choice_likes, 
						'rollover' : 	cmsmasters_shortcodes.choice_rollover 
			}, 
			depend : 	'layout:grid' 
		};


		portfolio_new_fields['metadata_puzzle'] = { 
			type : 		'checkbox', 
			title : 	cmsmasters_shortcodes.metadata, 
			descr : 	cmsmasters_shortcodes.portfolio_field_metadata_descr, 
			def : 		'title,categories,rollover', 
			required : 	true, 
			width : 	'half', 
			choises : { 
						'title' : 		cmsmasters_shortcodes.choice_title, 
						'categories' : 	cmsmasters_shortcodes.choice_categories, 
						'comments' : 	cmsmasters_shortcodes.choice_comments, 
						'likes' : 		cmsmasters_shortcodes.choice_likes, 
						'rollover' : 	cmsmasters_shortcodes.choice_rollover 
			}, 
			depend : 	'layout:puzzle' 
		};
		
		
		portfolio_new_fields[id] = cmsmastersShortcodes.cmsmasters_portfolio.fields[id];

		
	} else if (id === 'filter') {
	
		portfolio_new_fields['rollover_bg_color'] = { 
			type : 		'rgba', 
			title : 	composer_shortcodes_extend.cmsmasters_portfolio_field_rollover_bg_color, 
			descr : 	'', 
			def : 		'#000000', 
			required : 	false, 
			width : 	'half' 
		};
	
		portfolio_new_fields['filter_bg_color'] = { 
			type : 		'rgba', 
			title : 	composer_shortcodes_extend.cmsmasters_portfolio_field_filter_bg_color, 
			descr : 	'', 
			def : 		'#f3c14b', 
			required : 	false, 
			width : 	'half' 
		};
		
		
		portfolio_new_fields[id] = cmsmastersShortcodes.cmsmasters_portfolio.fields[id];
		
	} else if (id === 'filter_text') {
		delete cmsmastersShortcodes.cmsmasters_portfolio.fields[id];	
	} else {
		portfolio_new_fields[id] = cmsmastersShortcodes.cmsmasters_portfolio.fields[id];
	}
}


cmsmastersShortcodes.cmsmasters_portfolio.fields = portfolio_new_fields;




/**
 * Posts Slider Extend
 */

var posts_slider_new_fields = {};


for (var id in cmsmastersShortcodes.cmsmasters_posts_slider.fields) {
	
	if (id === 'animation') {
	
		posts_slider_new_fields['rollover_bg_color'] = { 
			type : 		'rgba', 
			title : 	composer_shortcodes_extend.cmsmasters_posts_slider_field_rollover_bg_color, 
			descr : 	'', 
			def : 		'#000000', 
			required : 	false, 
			width : 	'half',  
			depend : 	'post_type:project' 
		};
		
		posts_slider_new_fields[id] = cmsmastersShortcodes.cmsmasters_posts_slider.fields[id];
	} else {
		posts_slider_new_fields[id] = cmsmastersShortcodes.cmsmasters_posts_slider.fields[id];
	}
		
	
	if (id === 'columns') {
		delete cmsmastersShortcodes.cmsmasters_posts_slider.fields[id]['depend'];
		
		posts_slider_new_fields[id] = cmsmastersShortcodes.cmsmasters_posts_slider.fields[id];
	} else {
		posts_slider_new_fields[id] = cmsmastersShortcodes.cmsmasters_posts_slider.fields[id];
	}
}


cmsmastersShortcodes.cmsmasters_posts_slider.fields = posts_slider_new_fields;




/**
 * Clients Extend
 */

var clients_new_fields = {};


for (var id in cmsmastersShortcodes.cmsmasters_clients.fields) {
	if (id === 'slides_control') {
		delete cmsmastersShortcodes.cmsmasters_clients.fields[id];
		
	} else {
		clients_new_fields[id] = cmsmastersShortcodes.cmsmasters_clients.fields[id];
	}
}


cmsmastersShortcodes.cmsmasters_clients.fields = clients_new_fields;




/**
 * Featured Block Extend
 */

var featured_block_new_fields = {};


for (var id in cmsmastersShortcodes.cmsmasters_featured_block.fields) {
	
	if (id === 'animation') {
		
		featured_block_new_fields['bd_color'] = { 
			type : 		'rgba', 
			title : 	composer_shortcodes_extend.cmsmasters_featured_block_field_bd_color, 
			descr : 	'', 
			def : 		'', 
			required : 	false, 
			width : 	'half' 
		};
		
		featured_block_new_fields['bd_width'] = { 
			type : 		'range', 
			title : 	composer_shortcodes_extend.cmsmasters_featured_block_field_bd_width, 
			descr : 	"<span>" + cmsmasters_shortcodes.note + ' ' + cmsmasters_shortcodes.size_note_pixel + "</span>", 
			def : 		'0', 
			required : 	true, 
			width : 	'number', 
			min : 		'0', 
			max : 		'20' 
		};
		
		featured_block_new_fields[id] = cmsmastersShortcodes.cmsmasters_featured_block.fields[id];
	} else {
		featured_block_new_fields[id] = cmsmastersShortcodes.cmsmasters_featured_block.fields[id];
	}
}


cmsmastersShortcodes.cmsmasters_featured_block.fields = featured_block_new_fields;