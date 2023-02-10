<?php
/*
* Template Name: Service Sub Page
*/

get_header();
$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); ?>
<div id="subbannerservicebanner"  style="background-image: url('<?php echo $featured_img_url; ?>');">
<div class="container"><div class="row"><h1><?php echo get_the_title(); ?></h1></div></div>
</div>
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
