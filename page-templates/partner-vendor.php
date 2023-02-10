<?php
/*
* Template Name: Partner Vendor
*/

get_header(); ?>

    <div class="">
        <div id="primary" class="content-area">
            <main id="main" class="site-main">
              <section id="subpagebanner" class="darkblue">
                <div class="row">
                  <h1>Partner Vendors</h1>
                </div>
              </section>
                <?php
                while ( have_posts() ) : the_post();

                    get_template_part( 'template-parts/content', 'page-full' );

                    // If comments are open or we have at least one comment, load up the comment template.
                    if ( comments_open() || get_comments_number() ) :
                        comments_template();
                    endif;

                endwhile; // End of the loop.
                ?>

            </main><!-- #main -->
        </div><!-- #primary -->
    </div>

<?php
get_footer();
