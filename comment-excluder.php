<?php
/*
Plugin Name: Members: Exclude roles from commenting
Plugin URI: http://themehybrid.com/support/topic/approve-comments-for-specified-roles-only?replies=9#post-76992
Description: First create the capability add_comment then add it to the roles that should be able to comment. Finally create a new role whithout this capability.
Author: Justin Tadlock
Version: 1.0.1
Author URI: http://themehybrid.com/
Github Plugin URI: https://github.com/medizinmedien/comment-excluder
*/
add_filter( 'comments_open', 'my_comments_open' );

function my_comments_open( $open ) {
	return current_user_can( 'add_comment' ) ? $open : false;
}

