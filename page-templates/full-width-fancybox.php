<?php
/*
* Template Name: FancyBox
*/

get_header(); ?>


<section id="mainbanner" class="ExperienceBanner">
<div class="row">
<div class="content">
<h1>OUR<br/>
<span class="bluebg">EXPERIENCE</span><br/>
SPEAKS<br/>
FOR ITSELF</h1>
</div>
</div>
</section>


        <div id="primary" class="content-area">
            <main id="main" class="site-main ">
               <section id="GallerySection">


               <div class="ModalSlider">

                   <?php  $categories = get_terms('project_category', array( 'hide_empty' => 0 ));  ?>

                    <h2 class="h2"><span>PROJECTS</span> BY<br/>ELITE CONSTRUCTION</h2>
                    <p class="textcenter">Below is a list of our more recent projects. Please select a project below to see more details.</p>


                    <div class="filterbar container">
                        <div class="row">
                            <?php     
                            $images = get_field('project_gallery'); // get gallery
                            $image  = $images[0]; 
                            $projectname = get_field('client_project_name'); 
                            $project_location  = get_field('project_location'); 
                            $architect = get_field('architect'); 
                            $role = get_field('role'); 
                            $project_description = get_field('project_description'); 
                            $categories = get_terms('project_category', array( 'hide_empty' => 0 ));
                            ?>
                            
                            <ul id="category-menu">
                            <li class="selected"><a class="showall ajax"  onclick="cat_ajax_get('51');" id="defaultclick">ALL PROJECTS</a></li>
                                <?php foreach ( $categories as $cat ) { ?>
                                <li id="cat-<?php echo $cat->term_id; ?>" data-value="<?php echo $cat->name; ?>" class="<?php echo $cat->slug; ?> ajax" onclick="cat_ajax_get('<?php echo $cat->term_id; ?>');"><?php echo $cat->name; ?></li>

                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                        <div id="loading-animation" style="display: none;"><div id="loading-bar-spinner" class="spinner"><div class="spinner-icon"></div></div></div>
                        <div id="category-post-content"></div>

                        <?php
                            // TO SHOW THE PAGE CONTENTS
                            while ( have_posts() ) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
                                    <?php the_content(); ?> <!-- Page Content -->
                            <?php
                            endwhile; //resetting the page loop
                            wp_reset_query(); //resetting the page query
                            ?>
                </section>
            </main><!-- #main -->
        </div><!-- #primary -->


<script>

    function triggergallery() {
        $(".thumbnailsideimg").click(function () {
            $(".initImg").css("display","none")
            $(".expandedImg").css("display","block")  
        });
        $(".fancybox-close-small").click(function () {
            $(".initImg").css("display","block")
            $(".expandedImg").css("display","none")  
        });
        

        $('.thumbnailsideimg').click(function () {
            var href = $(this).prop('src');
            $('.expandedImg').prop('src', href);
           
        });

    }

</script>
<script>
    function cat_ajax_get(catID) {
        jQuery("a.ajax").removeClass("current");
        jQuery("a.ajax").addClass("current"); //adds class current to the category menu item being displayed so you can style it with css
        jQuery("#loading-animation").show();
        var ajaxurl = '<?php echo admin_url( 'admin-ajax.php' ); //must echo it ?>';
        jQuery.ajax({
            type: 'POST',
            url: ajaxurl,
            data: {"action": "load-filter", cat: catID },
            success: function(response) {
                jQuery("#category-post-content").html(response);
                jQuery("#loading-animation").hide();
                return false;
            }
        });
    }
</script>
<script>

$( document ).ready(function() {
   jQuery('#defaultclick').click();
});

$(".selected").prop('onclick', null);
</script>
<script>

$("ul").on("click", ".init", function() {
    $(this).closest("ul").children('li:not(.init)').toggle();
});

var allOptions = $("ul").children('li:not(.init)');
$("ul").on("click", "li:not(.init)", function() {
    allOptions.removeClass('selected');
    $(this).addClass('selected');
    $("ul").children('.init').html($(this).html());
    allOptions.toggle();
});
</script>




<?php
get_footer();
