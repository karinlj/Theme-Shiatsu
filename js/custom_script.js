//hamburger script


 jQuery(document).ready(function($) {
     
    /*when click on veggoburger...add or remove class */

    $('.toggle').click(function () {
        $('.nav-mobile').toggleClass('nav-mobile-open');
    });
    
     /*when click on menu-item with sub-menu...add or remove class*/

    /*Desktop*/
    $('.nav-desktop ul li.menu-item-has-children').click(function (event) {
        event.stopPropagation(); /* to stop the 'document handler' from activating at the same time as the click event on class */
        $('.nav-desktop ul li.menu-item-has-children ul').toggleClass('sub-menu-open');
    });

    /*remove class clicking anywhere on page*/
    $(document).click(function (event) {
        if (!$(event.target).closest('.nav-desktop ul li.menu-item-has-children ul').length) {
            $(".nav-desktop ul li.menu-item-has-children ul").removeClass("sub-menu-open");
        }
    });


    /*Mobile*/

    $('.nav-mobile ul li.menu-item-has-children').click(function (event) {
        event.stopPropagation(); /* to stop the 'document handler' from activating at the same time as the click event on class */
        $('.nav-mobile ul li.menu-item-has-children ul').toggleClass('sub-menu-open');
    });


    /*remove class clicking anywhere on page*/
    $(document).click(function (event) {
        if (!$(event.target).closest('.nav-mobile ul li.menu-item-has-children ul').length) {
            $(".nav-mobile ul li.menu-item-has-children ul").removeClass("sub-menu-open");
        }
    });
     
     
    
    //ger textwidgeten class="text-part"
   // $('.card-container .image-box:first').addClass('image-part'); 
     
   
     
});//document.ready






