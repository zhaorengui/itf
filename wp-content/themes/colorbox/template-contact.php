<?php
/**
 * template-contact.php
 *
 * Template Name: Contact
 */
?>

<?php get_header(); ?>
<style type="text/css">
	form p input{
		padding: 3px 8px;
		font-size: 1.7em;
		line-height: 100%;
		height: 1.5em;
		width: 30%;
		outline: 0;
		margin: 0 0 3px;
		background-color: #fff;
	}
</style>
<div class="main-content col-md-12 single_page" role="main">
	<?php while( have_posts() ) : the_post(); ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<!-- Article header -->
			<header class="entry-header"> <?php
					// If the post has a thumbnail and it's not password protected
					// then display the thumbnail
				if ( has_post_thumbnail() && ! post_password_required() ) : ?>
				<figure class="entry-thumbnail"><?php the_post_thumbnail(); ?></figure>
			<?php endif; ?>

			<h1><?php the_title(); ?></h1>
		</header> <!-- end entry-header -->

		<!-- Article content -->
		<div class="entry-content">
			<?php the_content(); ?>

			<form action="" method="post">
				<p>
					<label>您的姓名：</label>
					<br>
					<input type="text" name="username" class="regluar-text" />
				</p>
				<p>
					<label>您的联系方式：</label>
					<br>
					<input type="text" name="contact_method" class="regluar-text" />
				</p>

				<p>
					<label>内容：</label>
					<br>
					<textarea name="content" style="width: 50%;height: 130px;"></textarea>
				</p>

				<input type="submit" name="submit" value="提交" />
			</form>

			<?php wp_link_pages(); ?>
		</div> <!-- end entry-content -->

		<!-- Article footer -->
		<footer class="entry-footer">
			<?php
			if ( is_user_logged_in() ) {
				echo '<p>';
				edit_post_link( __( 'Edit', 'colorbox' ), '<span class="meta-edit">', '</span>' );
				echo '</p>';
			}
			?>
		</footer> <!-- end entry-footer -->
	</article>

	<?php comments_template(); ?>
<?php endwhile; ?>
</div> <!-- end main-content -->

<?php get_footer(); ?>