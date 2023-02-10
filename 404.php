<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WP_Bootstrap_4
 */

get_header(); ?>
<section id="MainBanner">
<div class="row">
<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/01/OrangeBlob.png" alt="" width="392" height="137" class="orangeblob" />
<div class="leftside">
<h1>404 Page Not Found</h1>
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

	<div class="container">
		<div class="row">

				<div id="primary" class="content-area wp-bp-404">
					<main id="main" class="site-main">

						<div class="card">
							<div class="card-body">
								<section class="error-404 not-found">
										<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'wp-bootstrap-4' ); ?></h1>

									<div class="page-content">
										<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'wp-bootstrap-4' ); ?></p>

										<?php
											get_search_form();

										?>



									</div><!-- .page-content -->
								</section><!-- .error-404 -->
							</div>
							<!-- /.card-body -->
						</div>
						<!-- /.card -->

					</main><!-- #main -->
				</div><!-- #primary -->

		</div>
		<!-- /.row -->
	</div>
	<!-- /.container -->

<?php
get_footer();
