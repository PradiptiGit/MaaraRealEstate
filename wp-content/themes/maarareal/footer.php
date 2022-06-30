<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
			
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    
                        <?php

                $args = array(
                    'menu'            => 'Footer Menu',
                    'container'       => '',
                    'menu_class'      => 'links'
                );
                wp_nav_menu($args);

                ?>
                      
                    
                </div>
                <div class="col-md-2">
                    <p><?php the_field('_follow_heading_','option'); ?></p>
                    <ul class="social">
                    <?php

	// Check rows exists.
	if( have_rows('follow_repeter','option') ):

    // Loop through rows.
    while( have_rows('follow_repeter','option') ) : the_row();

        // Load sub field value.
        $social_link = get_sub_field('social_link','option');
        $social_icon = get_sub_field('social_icon','option');?>
        <!-- // Do something... -->
          <li><a href="<?php echo $social_link ;?>"><i class="fab fa-<?php echo $social_icon ;?>"></i></a></li>
                        
		<?php
    	// End loop.
    	endwhile;

	// No value.
		else :
    // Do something...
		endif;
		?>
		</ul>
    </div>
  </div>
            

            <div class="row">
                <div class="copyright col-md-12">
                    <hr>
                    <ul>
                        <li>
                            <p><?php the_field('last_heading','option'); ?></p>
                        </li>
                    <?php

// Check rows exists.
if( have_rows('last_reapeter','option') ):

    // Loop through rows.
    while( have_rows('last_reapeter','option') ) : the_row();

        // Load sub field value.
        $page_link = get_sub_field('page_link','option');
        $page_text = get_sub_field('page_text','option');?>
        <!-- // Do something... -->
        <li><a href="<?php echo $page_link ;?>"><?php echo $page_text ;?></a></li>
<?php
    // End loop.
    endwhile;

// No value.
else :
    // Do something...
endif;
?>
</ul>
                </div>
            </div>


        </div>
    </footer>
    <!--  <a href="#0" class="cd-top"><i class="fa fa-angle-up" aria-hidden="true"></i></a>     -->
    <script src="<?php echo get_template_directory_uri();?>/assets/js/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/assets/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<!--     <script src="<?php echo get_template_directory_uri();?>/assets/js/script.js"></script>
 -->

    <script type="text/javascript">
        jQuery(document).ready(function() {


            jQuery(document).ready(function() {
                jQuery('.myslider').owlCarousel({
                    animateOut: 'fadeOut',
                    items: 1,
                    nav: false,
                    loop: true,
                    autoplayHoverPause:false,
                    autoplay: true,
                    dots: true,
                    autoPlay:6000,
                    autoplayTimeout: 8000,
                    smartSpeed: 1500, // duration of change of 1 slide

                });


                var owl = $('.myslider');
                owl.owlCarousel();

                owl.on('changed.owl.carousel', function(event) {
                    if (jQuery(".myslider .owl-dots > .owl-dot:nth-child(1)").hasClass("active")) {
                        jQuery(".myslider2 .owl-dots").css({
                            transform: 'translate(-50%,-50%) rotate(0deg)',
                            transition: 'all ease 1s 0s'
                        });

                    }
                    if (jQuery(".myslider .owl-dots > .owl-dot:nth-child(2)").hasClass("active")) {
                        jQuery(".myslider2 .owl-dots").css({
                            transform: 'translate(-50%,-50%) rotate(40deg)',
                            transition: 'all ease 1s 0s'
                        });

                    }
                    if (jQuery(".myslider .owl-dots > .owl-dot:nth-child(3)").hasClass("active")) {
                        jQuery(".myslider2 .owl-dots").css({
                            transform: 'translate(-50%,-50%) rotate(78deg)',
                            transition: 'all ease 1s 0s'
                        });

                    }

                    jQuery(".myslider .owl-item.active > .item img ").css({
                        animation: 'zoom-out 2s 0s',
                        transition: 'all ease 1s 0s'
                    })





                })


                jQuery('.clients').owlCarousel({
                    animateOut: 'fadeOut',
                    items: 1,
                    loop: true,
                    autoplay: true,
                    dots: true,
                    autoplayTimeout: 6000,
                    smartSpeed: 5000, // duration of change of 1 slide

                });

                jQuery('.news').owlCarousel({
                    items: 3,
                    loop: true,
                    margin: 30,
                    autoplay: true,
                    dots: true,
                    nav:true,   
                    autoplayTimeout: 3000,
                    smartSpeed: 2000, // duration of change of 1 slide
                    navText: [
        '<img src="<?php echo get_template_directory_uri();?>/assets/images/right.png"/>',
        '<img src="<?php echo get_template_directory_uri();?>/assets/images/right.png"/>'
    ],

                });

                jQuery('.inner-ban-slider').owlCarousel({
                    items: 3,
                    // loop: true,
                    // autoplay: true,
                    dots: true,
                    nav:true,   
                    autoplayTimeout: 3000,
                    smartSpeed: 2000, // duration of change of 1 slide
                    navText: [
        '<img src="<?php echo get_template_directory_uri();?>/assets/images/right-projects.png"/>',
        '<img src="<?php echo get_template_directory_uri();?>/assets/images/right-projects.png"/>'
    ],

                });


                jQuery('.service-details-slider').owlCarousel({
                    items: 2,
                    loop: true,
                    margin: 30,
                    autoplay: true,
                    dots: false,
                    nav:true,   
                    autoplayTimeout: 3000,
                    smartSpeed: 2000, // duration of change of 1 slide
                    navText: [
        '<img src="<?php echo get_template_directory_uri();?>/assets/images/right.png"/>',
        '<img src="<?php echo get_template_directory_uri();?>/assets/images/right.png"/>'
    ],

                });








            });


            jQuery('.service-section2 .accordion').find('.accordion-toggle').click(function() {
		jQuery(this).next().slideToggle('600');
		jQuery(".service-section2 .accordion-content").not($(this).next()).slideUp('600');
	});
	jQuery('.service-section2 .accordion-toggle').on('click', function() {
		jQuery(this).toggleClass('active').siblings().removeClass('active');
	});


   


            //sticky

            jQuery(window).scroll(function() {
                if (jQuery(this).scrollTop() > 100) {
                    jQuery('header').addClass("sticky");
                } else {
                    jQuery('header').removeClass("sticky");
                }
            });


           jQuery(".hamburger").click(function() {
                jQuery(this).toggleClass("active-ham");
                jQuery(".menu-wrapper").toggleClass("menu-show");
                jQuery(".banner-section").toggleClass("collapse-ban");
                jQuery("body").toggleClass("body-flow");


            })

            jQuery(".dropdown-sec p").click(function() {
                jQuery(".dropdown").toggleClass("dropdown-show");
               


            })

           

      jQuery('.inner-ban-slider2').owlCarousel({
            items: 1,
            // loop: true,
            // autoplay: true,
            dots: false,
            nav: true,
            autoplayTimeout: 3000,
            smartSpeed: 2000, // duration of change of 1 slide
            navText: [
                '<img src="<?php echo get_template_directory_uri();?>/assets/images/right-projects.png"/>',
                '<img src="<?php echo get_template_directory_uri();?>/assets/images/right-projects.png"/>'
            ],

        });

        jQuery('.project-details-slider').owlCarousel({
            items: 1,
            // loop: true,
            // autoplay: true,
            dots: false,
            nav: true,
            autoplayTimeout: 3000,
            smartSpeed: 2000, // duration of change of 1 slide
            navText: [
                '<img src="<?php echo get_template_directory_uri();?>/assets/images/right-projects.png"/>',
                '<img src="<?php echo get_template_directory_uri();?>/assets/images/right-projects.png"/>'
            ],

        });

        jQuery('.latest').owlCarousel({
            items: 3,
            loop: true,
            margin: 30,
            autoplay: false,
            dots: false,
            nav: true,
            autoplayTimeout: 3000,
            smartSpeed: 2000, // duration of change of 1 slide
            navText: [
                '<img src="<?php echo get_template_directory_uri();?>/assets/images/right.png"/>',
                '<img src="<?php echo get_template_directory_uri();?>/assets/images/right.png"/>'
            ],

        });




jQuery('a[href^="#"]').on('click', function(event) {

var target = jQuery(this.getAttribute('href'));

if (target.length) {
  event.preventDefault();
  jQuery('html, body').stop().animate({
    scrollTop: target.offset().top
  }, 1000);
}
});

});
</script>


</body>

</html>