<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package WP_Bootstrap_4
 */

get_header(); ?>
<div id="subpagebanner" class="plainblueBG">
	<div id="socialside">
		<a href="https://www.facebook.com/MeatExCanada/" target="_blank"><i class="fab fa-facebook-f"></i></a>
		<a href="https://twitter.com/meatexca?lang=en" target="_blank"><i class="fab fa-twitter"></i></a>
		<a href="https://www.instagram.com/meatex_ca/ " target="_blank"><i class="fab fa-instagram"></i></a>
		<a href="https://ca.linkedin.com/company/farasoo-holding-corporation" target="_blank"><i class="fab fa-linkedin-in"></i></a>
	</div>
	<div class="row">
		<div class="leftside">
		<h1>SEARCH</h1>
		</div>
		<div class="rightside">

		</div>
	</div>
</div>

	<div class="container">
		<div class="row">

				<section id="primary" class="content-area">
					<section id="main" class="newspagecontainer">
						<div class="NewsArticles" id="search">
					<?php
					if ( have_posts() ) : ?>


							<h1 class="page-title"><?php
								/* translators: %s: search query. */
								printf( esc_html__( 'Search Results for: %s', 'wp-bootstrap-4' ), '<span>' . get_search_query() . '</span>' );
							?></h1>

						<?php
						/* Start the Loop */
						while ( have_posts() ) : the_post();

							/**
							 * Run the loop for the search to output the results.
							 * If you want to overload this in a child theme then include a file
							 * called content-search.php and that will be used instead.
							 */
							get_template_part( 'template-parts/content', 'search' );

						endwhile;

						the_posts_navigation( array(
							'next_text'         => esc_html__( 'Newer Posts', 'wp-bootstrap-4' ),
							'prev_text'         => esc_html__( 'Older Posts', 'wp-bootstrap-4' ),
						) );

					else :

						get_template_part( 'template-parts/content', 'none' );

					endif; ?>
					</div>
				</section><!-- #main -->
			</section><!-- #primary -->

		</div>
		<!-- /.row -->
	</div>
<?php
get_footer();
