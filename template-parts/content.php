<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WP_Bootstrap_4
 */

?>

<article id="post-<?php the_ID(); ?>" >
	<div class="card-body">

		<?php wp_bootstrap_4_post_thumbnail(); ?>

		<?php if( is_singular() || get_theme_mod( 'default_blog_display', 'excerpt' ) === 'full' ) : ?>
			<div class="entry-content">
				<h2><?php	echo get_the_title(); ?></h2>


				<?php
					the_content( sprintf(
						wp_kses(
							/* translators: %s: Name of current post. Only visible to screen readers */
							__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'wp-bootstrap-4' ),
							array(
								'span' => array(
									'class' => array(),
								),
							)
						),
						get_the_title()
					) );?>

					<?php wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'wp-bootstrap-4' ),
						'after'  => '</div>',
					) );
				?>
			</div><!-- .entry-content -->

		<?php else : ?>
			<div class="entry-summary">
				<h3><?php echo get_the_title(); ?></h3>
				<?php the_excerpt(); ?>
				<a href="<?php echo esc_url( get_permalink() ); ?>" class="button"><?php esc_html_e( 'READ MORE', 'wp-bootstrap-4' ); ?></a>
				<hr/>
			</div><!-- .entry-summary -->
		<?php endif; ?>

	</div>

</article><!-- #post-<?php the_ID(); ?> -->
