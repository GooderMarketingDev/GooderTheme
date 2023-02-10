<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_4
 */

?>
<script>
$(document).ready(function(){

  $("#small").click(function(event){
    event.preventDefault();
    $("html").animate({"font-size":"8px"});

  });

  $("#medium").click(function(event){
    event.preventDefault();
    $("html").animate({"font-size":"10px"});

  });

  $("#large").click(function(event){
    event.preventDefault();
    $("html").animate({"font-size":"12px"});

  });

  $( "a" ).click(function() {
   $("a").removeClass("selected");
  $(this).addClass("selected");

 });

});

</script>

<script>

  //Sticky Header code
  jQuery(function ($) {
    $(function() {
        //caches a jQuery object containing the header element
        var header = $(".clearHeader");
        $(window).scroll(function() {
            var scroll = $(window).scrollTop();

            if (scroll >= 355) {
                header.removeClass('clearHeader').addClass("whiteHeader");
            } else {
                header.removeClass("whiteHeader").addClass('clearHeader');
            }
        });
    });

});

// Open the Modal
function openModal() {
  document.getElementById('myModal').style.display = "block";
}

// Close the Modal
function closeModal() {
  document.getElementById('myModal').style.display = "none";
}

window.smoothScroll = function(target) {
    var scrollContainer = target;
    do { //find scroll container
        scrollContainer = scrollContainer.parentNode;
        if (!scrollContainer) return;
        scrollContainer.scrollTop += 1;
    } while (scrollContainer.scrollTop == 0);

    var targetY = 0;
    do { //find the top of target relatively to the container
        if (target == scrollContainer) break;
        targetY += target.offsetTop;
    } while (target = target.offsetParent);

    scroll = function(c, a, b, i) {
        i++; if (i > 30) return;
        c.scrollTop = a + (b - a) / 30 * i;
        setTimeout(function(){ scroll(c, a, b, i); }, 20);
    }
    // start scrolling
    scroll(scrollContainer, scrollContainer.scrollTop, targetY, 0);
}
</script>
	</div><!-- #content -->

	<footer>
    <div class="row">
      <div class="footer-logo">
				<div class="logo-text">
					<a href="<?php echo get_site_url(); ?>" class="logo"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/FooterAODA.png" width="61" alt="AODA Web Accessibility Logo"/></a>
					<a href="<?php echo get_site_url(); ?>" title="Home" aria-label="AODA Web Accessibility Home" class="full-text">
						AODA Web Accessibility
					</a>
          </div>
          <p>AODA Web is Ontario’s leader in website accessibility testing, auditing, design and development. Our goal is to make the internet accessible!</p>
				</div>
        <div class="footermenu Resourcesnav">
    			<h6>Resources</h6>
    			<?php wp_nav_menu( array( 'theme_location' => 'footerresources' ) ); ?>
    		</div>
    		<div class="footermenu QuickLinksnav">
    			<h6>Quick Links</h6>
    			<?php wp_nav_menu( array( 'theme_location' => 'footerquicklinks' ) ); ?>
    		</div>
        
        <div class="GooderMarketing">
        <a href="https://goodermarketing.com/" target="_blank" class="gooderlogo"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Gooder-Logo-White.png" width="190" alt="Gooder Marketing.inc Logo Link"/><span class="screen-reader-only">(opens in a new tab)</span></a>
          <p>AODA Web is a branch of Gooder Marketing Inc. Gooder Marketing specializes in custom website development and internet marketing.</p>
        </div>

        <div id="footerblobs">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/FooterSmallBlobs.png" class="FooterSmallBlobs" width="63" alt="Small Blue Blob"/>
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/FooterBlobs.png" class="FooterBlobs" width="1246" alt="Large Blue Blob"/>
        </div>
			</div>

	</footer>
  </div>

<?php wp_footer(); ?>
</body>
</html>
