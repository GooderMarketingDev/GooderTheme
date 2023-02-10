<?php
/*
* Template Name: Training Template
*/

get_header(); ?>
<link  href="<?php echo get_stylesheet_directory_uri(); ?>/fancybox/jquery.fancybox.min.css" rel="stylesheet">
<script src="<?php echo get_stylesheet_directory_uri(); ?>/fancybox/jquery.fancybox.min.js"></script>

    <div class="">
        <div id="primary" class="content-area">
            <main id="main" class="site-main">

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
