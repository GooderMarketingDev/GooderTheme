var $document = jQuery(document),
    $window = jQuery(window);



function openNav() {
  document.getElementById("mySidenav").style.width = "482px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}

function goToTop() {

    if (jQuery('.gototop').length > 0) {

        var $goToTop = jQuery('.gototop'),
            scrollOffsetFromTop = 800;

        if ($window.scrollTop() > scrollOffsetFromTop) {
            $goToTop.fadeIn("slow");
        } else {
            $goToTop.fadeOut("slow");
        }

        $goToTop.on("click", function() {
            jQuery('body,html').stop(true).animate({
                scrollTop: 0
            }, 1500, 'easeInOutExpo');
            return false;
        });
    }

}
$window.scroll(function() {
    goToTop();

});

jQuery(document).ready(function() {

    function debouncer(func, timeout) {
        var timeoutID, timeout = timeout || 500;
        return function() {
            var scope = this,
                args = arguments;
            clearTimeout(timeoutID);
            timeoutID = setTimeout(function() {
                func.apply(scope, Array.prototype.slice.call(args));
            }, timeout);
        }
    }
    jQuery('.dropdown>a').append('<span class="ecaret"></span>');

    var windowWidth = window.innerWidth || $window.width();
    var windowH = $window.height();

    function toggleNavbarMethod(windowWidth) {
        var $dropdownLink = jQuery(".dropdown > a, .dropdown-submenu > a");
        var $dropdown = jQuery(".dropdown, .dropdown-submenu");
        var $dropdownCaret = jQuery(".dropdown > a > .ecaret, .dropdown-submenu > a > .ecaret");
        $dropdownLink.on('click.toggleNavbarMethod', function(e) {
            e.preventDefault();
            e.stopPropagation();
            var url = jQuery(this).attr('href');
            if (url) jQuery(location).attr('href', url);
        });
        if (windowWidth < 5000) {
            $dropdown.unbind('.toggleNavbarMethod');
            $dropdownCaret.unbind('.toggleNavbarMethod');
            $dropdownCaret.on('click.toggleNavbarMethod', function(e) {
                e.stopPropagation();
                e.preventDefault();
                var $li = jQuery(this).parent().parent('li');
                if ($li.hasClass('opened')) {
                    $li.find('.dropdown-menu').first().stop(true, true).slideUp(0);
                    $li.removeClass('opened');
                } else {
                    $li.find('.dropdown-menu').first().stop(true, true).slideDown(0);
                    $li.addClass('opened');
                }
            })
        }
    }
    toggleNavbarMethod(windowWidth);

    function toggleNavbarMethod(windowWidth) {
        jQuery(".dropdown > a, .dropdown-submenu > a").on('click', function(e) {
            console.log('link');
            e.preventDefault();
            e.stopPropagation();
            var url = jQuery(this).attr('href');
            if (url) jQuery(location).attr('href', url);
        });
        if (windowWidth > 5000) {
            jQuery(".dropdown, .dropdown-submenu").on('mouseenter.toggleNavbarMethod', function() {
                jQuery(this).find('.dropdown-menu').first().stop(true, true).fadeIn("fast");
                jQuery(this).toggleClass('open');
            }).on('mouseleave.toggleNavbarMethod', function() {
                jQuery(this).find('.dropdown-menu').first().stop(true, true).fadeOut("fast");
                jQuery(this).toggleClass('open');
            });
        } else {
            jQuery(".dropdown, .dropdown-submenu").unbind('.toggleNavbarMethod');
            jQuery(".dropdown > a > .ecaret, .dropdown-submenu > a > .ecaret").unbind('.toggleNavbarMethod');
            jQuery(".dropdown > a > .ecaret, .dropdown-submenu > a > .ecaret").on('click.toggleNavbarMethod', function(e) {
                // alert('ddcaret');
                console.log('new caret')
                e.stopPropagation();
                e.preventDefault();
                var $li = jQuery(this).parent().parent('li');
                if ($li.hasClass('opened')) {
                    $li.find('.dropdown-menu').first().stop(true, true).slideUp(0);
                    $li.removeClass('opened');
                } else {
                    $li.find('.dropdown-menu').first().stop(true, true).slideDown(0);
                    $li.addClass('opened');
                }
            })
        }
    }
    toggleNavbarMethod(windowWidth);

    jQuery(window).resize(debouncer(function(e) {
        var windowWidth = window.innerWidth || $window.width();
        var $dropdown = jQuery(".dropdown, .dropdown-submenu");
        $dropdown.removeClass('opened');
        toggleNavbarMethod(windowWidth);
    }))


    // Tabs to Select

    //set the index counter
    var i = 0;

    //convert all .nav-tabs, except those with the class .keep-tabs
    jQuery('.nav-pills').each(function() {

        //init variables
        var $select,
            c = 0,
            $select = jQuery('<select class="mobile-nav-tabs-' + i + ' mobile-tab-headings "></select>');

        //add unique class to nav-tabs, so each select works independently
        jQuery(this).addClass('nav-tabs-index-' + i);

        //loop though each <li>, building each into an <option>, getting the text from the a href
        jQuery(this).children('a').each(function() {
            $select.append('<option value="' + c + '">' + jQuery(this).text() + '</option>');
            c++;
        });

        //insert new <select> above <ul nav-tabs>
        jQuery(this).before($select);

        //increase index counter
        i++
    });

    //on changing <select> element
    jQuery('[class^=mobile-nav-tabs]').on('change', function(e) {

        //get index from selected option
        classArray = jQuery(this).attr('class').split(" ");
        tabIndexArray = classArray[0].split("mobile-nav-tabs-")
        tabIndex = tabIndexArray[1];

        //using boostrap tabs, show the selected option tab
        jQuery('.nav-tabs-index-' + tabIndex + ' a').eq(jQuery(this).val()).tab('show');
    });

});
