<?php
/**
 * The template for displaying posts in the Image post format
 *
 * @package WordPress
 * @subpackage Casino_Theme
 * @since Casino Theme 1.0
 */
?>

	<article id="cpa_post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="cpa_entry-content">
			<?php the_content( __( 'Continue reading <span class="cpa_meta-nav">&rarr;</span>', 'casinotheme' ) ); ?>
		</div><!-- .entry-content -->

		<footer class="cpa_entry-meta">
			<a href="<?php the_permalink(); ?>" rel="bookmark">
				<h1><?php the_title(); ?></h1>
				<h2><time class="cpa_entry-date" datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>"><?php echo get_the_date(); ?></time></h2>
			</a>
			<?php if ( comments_open() ) : ?>
			<div class="cpa_comments-link">
				<?php comments_popup_link( '<span class="cpa_leave-reply">' . __( 'Leave a reply', 'casinotheme' ) . '</span>', __( '1 Reply', 'casinotheme' ), __( '% Replies', 'casinotheme' ) ); ?>
			</div><!-- .comments-link -->
			<?php endif; // comments_open() ?>
			<?php edit_post_link( __( 'Edit', 'casinotheme' ), '<span class="cpa_edit-link">', '</span>' ); ?>
		</footer><!-- .entry-meta -->
	</article><!-- #post -->
