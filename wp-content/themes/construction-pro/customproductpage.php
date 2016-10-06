<?php /* Template Name: CustomProductPage */ ?>

<?php
/**
 * @package 	WordPress
 * @subpackage 	Construction PRO
 * @version		1.0.0
 * 
 * Default Product Template
 * Created by william.ortega@outlook.com
 * 
 */

get_header();

// get "Productos" category by slug
$term = get_term_by("slug", "productos", "category");
// get all childs of "Productos" category
$categories = get_categories(
	array (
		"hide_empty" => FALSE,
		"parent" => $term->term_id,
		"orderby" => "term_id",
	)
);
?>

<div class="list-of-categories">
	<ul>
		<?php foreach($categories as $category): ?>
			<li>
				<a title="<?php echo $category->name; ?>" href="<?php print get_url_of_content_by_category_id($category->cat_ID); ?>">
					<div class="list-of-categories-image"><?php echo $category->description; ?></div>
					<div class="list-of-categories-title"><?php echo $category->name; ?></div>
				</a>
			</li>
		<?php endforeach; ?>
	</ul>
</div>

<?php get_footer(); ?>