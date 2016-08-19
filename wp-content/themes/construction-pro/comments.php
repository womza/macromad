<?php
/**
 * @package 	WordPress
 * @subpackage 	Construction PRO
 * @version		1.0.0
 * 
 * Comments Template
 * Created by CMSMasters
 * 
 */


if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME'])) {
    die(esc_html__('Please do not load this page directly. Thanks!', 'construction-pro'));
}


if (post_password_required()) { 
	echo '<p class="nocomments">' . esc_html__('This post is password protected. Enter the password to view comments.', 'construction-pro') . '</p>';
	
	
    return;
}


if (comments_open()) {
	if (have_comments()) {
		echo '<aside id="comments" class="post_comments">' . "\n" . 
			'<h2 class="post_comments_title">';
		
		
		comments_number(esc_attr__('No Comments', 'construction-pro'), esc_attr__('Comment', 'construction-pro') . ' (1)', esc_attr__('Comments', 'construction-pro') . ' (%)');
		
		
		echo '</h2>' . "\n";		
		
		echo '<ol class="commentlist">' . "\n";
		
		
		wp_list_comments(array( 
			'type' => 'comment', 
			'callback' => 'mytheme_comment' 
		));
		
		
		echo '</ol>' . "\n";
		
		
		if (get_previous_comments_link() || get_next_comments_link()) {
			echo '<aside class="comment_nav" role="navigation">' . "\n\t" . 
				'<span class="fl">' . "\n\t\t";
			
			
			previous_comments_link('<span class="cmsmasters_prev_arrow"><span></span></span>' . esc_attr__('Older Comments', 'construction-pro'));
			
			
			echo "\n\t" . '</span>' . "\n\t" . 
			'<span class="fr">' . "\n\t\t";
			
			
			next_comments_link(esc_attr__('Newer Comments', 'construction-pro') . '<span class="cmsmasters_next_arrow"><span></span></span>');
			
			
			echo "\n\t" . '</span>' . "\r" . 
			'</aside>' . "\n";
		}
		
		
		echo '</aside>';
	}
	
	
	$form_fields =  array( 
		'author' => '<p class="comment-form-author">' . "\n" . 
			'<label for="author">' . esc_html__('Name', 'construction-pro') . (($req) ? ' <span class="color_2">*</span>' : '') . '</label>' . 
			'<input type="text" id="author" name="author" value="' . esc_attr($commenter['comment_author']) . '" size="35"' . ((isset($aria_req)) ? $aria_req : '') . ' />' . "\n" . 
		'</p>' . "\n", 
		'email' => '<p class="comment-form-email">' . "\n" . 
			'<label for="email">' . esc_html__('Email', 'construction-pro') . (($req) ? ' <span class="color_2">*</span>' : '') . '</label>' . 
			'<input type="text" id="email" name="email" value="' . esc_attr($commenter['comment_author_email']) . '" size="35"' . ((isset($aria_req)) ? $aria_req : '') . ' />' . "\n" . 
		'</p>' . "\n"
	);
	
	
	echo "\n\n";
	
	
	comment_form(array( 
		'fields' => 			apply_filters('comment_form_default_fields', $form_fields), 
		'comment_field' => 		'<p class="comment-form-comment">' . 
									'<label for="comment">' . esc_html__('Message', 'construction-pro') . (($req) ? ' <span class="color_2">*</span>' : '') . '</label>' . 
									'<textarea name="comment" id="comment" cols="67" rows="2"></textarea>' . 
								'</p>', 
		'must_log_in' => 		'<p class="must-log-in">' . 
									esc_html__('You must be', 'construction-pro') . 
									' <a href="' . esc_url(wp_login_url(apply_filters('the_permalink', get_permalink()))) . '">' 
										. esc_html__('logged in', 'construction-pro') . 
									'</a> ' 
									. esc_html__('to post a comment', 'construction-pro') . 
								'.</p>' . "\n", 
		'logged_in_as' => 		'<p class="logged-in-as">' . 
									esc_html__('Logged in as', 'construction-pro') . 
									' <a href="' . esc_url(admin_url('profile.php')) . '">' . 
										$user_identity . 
									'</a>. ' . 
									'<a class="all" href="' . esc_url(wp_logout_url(apply_filters('the_permalink', get_permalink()))) . '" title="' . esc_attr__('Log out of this account', 'construction-pro') . '">' . 
										esc_html__('Log out?', 'construction-pro') . 
									'</a>' . 
								'</p>' . "\n", 
		'comment_notes_before' => 	'<p class="comment-notes">' . 
										esc_html__('Your email address will not be published.', 'construction-pro') . 
									'</p>' . "\n", 
		'comment_notes_after' => 	'', 
		'id_form' => 				'commentform', 
		'id_submit' => 				'submit', 
		'title_reply' => 			esc_attr__('Leave a Reply', 'construction-pro'), 
		'title_reply_to' => 		esc_attr__('Leave your comment to', 'construction-pro'), 
		'cancel_reply_link' => 		esc_attr__('Cancel Reply', 'construction-pro'), 
		'label_submit' => 			esc_attr__('Submit comment', 'construction-pro') 
	));
}

