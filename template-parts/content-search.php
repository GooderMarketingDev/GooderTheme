<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WP_Bootstrap_4
 */

?>

<article id="post-<?php the_ID(); ?>">
	<div class="card-body">
				<?php wp_bootstrap_4_post_thumbnail(); ?>
				<div class="entry-content">
					<h6><?php	echo get_the_category( $id )[0]->name; ?></h6>
					<h4><?php	echo get_the_title(); ?></h4>
					<hr/>
					<p class="date"><?php echo get_the_date(); ?></p>
					<?php the_excerpt(); ?>
					<a href="<?php echo esc_url( get_permalink() ); ?>" class="underlinebutton "><?php esc_html_e( 'READ MORE', 'wp-bootstrap-4' ); ?></a>
			</div>
	</div>
	<!-- /.card-body -->
</article><!-- #post-<?php the_ID(); ?> -->
