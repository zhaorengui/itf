<?php
/**
 * 404.php
 *
 * The template for displaying 404 pages (Not Found).
 */
?>

<?php get_header(); ?>

	<div class="container-404">
		<h1><?php
			// _e( 'Error 404 - Nothing Found', 'colorbox' );
			_e( '错误 404 - 什么也没找到', 'colorbox' );
			?></h1>

		<p><?php _e( '似乎什么内容都没有. 您可以尝试在下面的搜索框中进行查找。', 'colorbox' ); ?></p>

		<?php get_search_form(); ?>
	</div> <!-- end container-404 -->

<?php get_footer(); ?>