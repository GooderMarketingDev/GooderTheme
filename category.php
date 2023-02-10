<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WP_Bootstrap_4
 */

get_header(); ?>


<section id="MainBanner">
<div class="row">
<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/01/OrangeBlob.png" alt="" width="392" height="137" class="orangeblob" />
<div class="leftside">
<p>Get the latest news on web accessibility</p>
<h1>AODA News</h1>
<a href="#" class="button">Request An Audit</a>
</div>

<div class="rightside">
<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/01/Hero_Image.png" alt="People Working Together to find a Solution" width="1236" height="824" class="bannerimg" />
</div>
<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/01/BlueBlob.png" alt="Blue Blob" width="396" height="109" class="blueblob" />
</div>
<div class="banner-shape">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
<path class="elementor-shape-fill" d="M500,97C126.7,96.3,0.8,19.8,0,0v100l1000,0V1C1000,19.4,873.3,97.8,500,97z"></path>
</svg>
</div>
</section> 


	<section id="main" class="newspagecontainer">

		<div class="NewsArticles">
		<?php
		/* Start the Loop */
		if ( have_posts() ) :
		while ( have_posts() ) : the_post();

			// Include the Post-Format-specific template for the content.
			get_template_part( 'template-parts/content', get_post_format() );

		endwhile; ?>
		</div>
		<?php
			the_posts_navigation( array(
				'next_text' => esc_html__( 'NEXT', 'wp-bootstrap-4' ),
				'prev_text' => esc_html__( 'PREV', 'wp-bootstrap-4' ),
			) );

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

</section><!-- #main -->

<?php
get_footer();
