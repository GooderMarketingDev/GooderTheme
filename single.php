<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WP_Bootstrap_4
 */

get_header(); ?>


<section id="MainBanner" class="singlepost">
<div class="row">
<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/01/OrangeBlob.png" alt="" width="392" height="137" class="orangeblob" />
<div class="fullwidth">
<h1><?php	echo get_the_title(); ?></h1>
</div>
<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/01/BlueBlob.png" alt="Blue Blob" width="396" height="109" class="blueblob" />
</div>
<div class="banner-shape">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
<path class="elementor-shape-fill" d="M500,97C126.7,96.3,0.8,19.8,0,0v100l1000,0V1C1000,19.4,873.3,97.8,500,97z"></path>
</svg>
</div>
</section> 


	<div class="container-fluid" id="subpagenewspagecontainer">
		<div class="row">
			<section id="main" class="subpagenewspage">

					<?php
					while ( have_posts() ) : the_post();

						get_template_part( 'template-parts/content', get_post_type() );

						the_post_navigation(array(
				            'prev_text' => esc_html__( '« Previous Page', 'wp-bootstrap-4' ),
				            'next_text' => esc_html__( 'Next Page »', 'wp-bootstrap-4' ),
				        ) );

					endwhile; // End of the loop.
					?>

				</section><!-- #main -->
				</div><!-- #primary -->
	</div>
<?php
get_footer();
