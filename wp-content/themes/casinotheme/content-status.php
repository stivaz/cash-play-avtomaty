<?php
/**
 * The template for displaying posts in the Status post format
 *
 * @package WordPress
 * @subpackage Casino_Theme
 * @since Casino Theme 1.0
 */
?>

	<article id="cpa_post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="cpa_entry-header">
			<header>
				<h1><?php the_author(); ?></h1>
				<h2><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'casinotheme' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php echo get_the_date(); ?></a></h2>
			</header>
			<?php
			/**
			 * Filter the status avatar size.
			 *
			 * @since Casino Theme 1.0
			 *
			 * @param int $size The height and width of the avatar in pixels.
			 */
			$status_avatar = apply_filters( 'casinotheme_status_avatar', 48 );
			echo get_avatar( get_the_author_meta( 'ID' ), $status_avatar );
			?>
		</div><!-- .entry-header -->

		<div class="cpa_entry-content">
			<?php the_content( __( 'Continue reading <span class="cpa_meta-nav">&rarr;</span>', 'casinotheme' ) ); ?>
		</div><!-- .entry-content -->

		<footer class="cpa_entry-meta">
			<?php if ( comments_open() ) : ?>
			<div class="cpa_comments-link">
				<?php comments_popup_link( '<span class="cpa_leave-reply">' . __( 'Leave a reply', 'casinotheme' ) . '</span>', __( '1 Reply', 'casinotheme' ), __( '% Replies', 'casinotheme' ) ); ?>
			</div><!-- .comments-link -->
			<?php endif; // comments_open() ?>
			<?php edit_post_link( __( 'Edit', 'casinotheme' ), '<span class="cpa_edit-link">', '</span>' ); ?>
		</footer><!-- .entry-meta -->
	</article><!-- #post -->
