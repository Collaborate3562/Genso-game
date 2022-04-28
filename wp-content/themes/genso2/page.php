<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

/* ja / en_US / zh_CN */
$locale = get_locale();
if ($locale == 'ja') {
	get_header('ja');
}
elseif ($locale == 'zh_CN') {
	get_header('zh_CN');
}
else {
	get_header();
} ?>

<div class="page-content">

<?php 

	/* Start the Loop */
	while ( have_posts() ) :
		the_post();
		get_template_part( 'template-parts/content/content-page' );

		// If comments are open or there is at least one comment, load up the comment template.
		if ( comments_open() || get_comments_number() ) {
			comments_template();
		}
	endwhile; // End of the loop.

?>

</div>

<?php

	if ($locale == 'ja') {
		get_footer('ja');
	}
	elseif ($locale == 'zh_CN') {
		get_footer('zh_CN');
	}
	else {
		get_footer();
	}