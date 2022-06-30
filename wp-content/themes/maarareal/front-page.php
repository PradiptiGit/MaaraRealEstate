<?php get_header(); 

/**

Template Name: Home page Template

**/

the_post();

?>

<section class="banner-section">

        <div class="myslider owl-carousel owl-theme">

            <?php



		// Check rows exists.

		if( have_rows('section1') ):



    // Loop through rows.

    while( have_rows('section1') ) : the_row();



        // Load sub field value.

        $banner_image1 = get_sub_field('banner_image1');

        $small_text1 = get_sub_field('small_text1');

        $small_text2 = get_sub_field('small_text2');

        $paragraph = get_sub_field('paragraph');

        $button_link = get_sub_field('button_link');

        $button_text = get_sub_field('button_text');?>



        <!-- // Do something... -->

            <div class="item">

                <img src="<?php echo $banner_image1 ;?>">

                <div class="bn-text">

                    <h2><?php echo $small_text1 ;?><br> <?php echo $small_text2 ;?> </h2>

                    <p><?php echo $paragraph ;?></p>

                    <a href="<?php echo $button_link ;?>"><?php echo $button_text ;?></a>

                </div>

            </div>            

    <?php

    // End loop.

    endwhile;



// No value.

else :

    // Do something...

endif;

    ?>

        </div>

        <div class="myslider2">

            <div class="owl-dots"><button role="button" class="owl-dot active"><span></span></button></div>

        </div>

        <?php $my_current_lang = apply_filters( 'wpml_current_language', NULL );
        if($my_current_lang=="fr") { ?>
        <a class="discover_more" href="#more">Défiler vers le bas</a>
        <?php } else { ?>
            <a class="discover_more" href="#more">Scroll to discover more</a>
            <?php } ?>
        <a class="view_all_project" href="<?php the_field('view_button'); ?>"><?php the_field('view_button_text'); ?></a>

    </section>



    <section class="section2" id="more">

        <div class="container">

            <div class="row">

                <div class="col-md-12">

                    <h2><?php the_field('section2_heading'); ?></h2>

                    <P><?php the_field('sec2_paragraph'); ?>

                    </P>

                    <?php the_field('you_tube_link'); ?>

                    <a href="<?php the_field('button'); ?>"><?php the_field('button_text'); ?></a>

                </div>

            </div>

        </div>

    </section>

    <section class="section3">

        <img src="<?php the_field('sec3_img1'); ?>" alt="">

        <img src="<?php the_field('sec3_img2'); ?>" alt="">

        <div class="container-fluid">



            <div class="row">

                <div class="col-md-6 ">

                    <h2><?php the_field('1st_heading'); ?></h2>

                    <p><?php the_field('1st_paragraph'); ?></p>

                    <a href="<?php the_field('1st_button'); ?>"><?php the_field('1st_button_text'); ?></a>

                </div>

                <div class="col-md-6">

                    <h2><?php the_field('2nd_heading'); ?></h2>

                    <p><?php the_field('2nd_paragraph'); ?></p>

                    <a href="<?php the_field('2nd_button'); ?>"><?php the_field('2nd_button_text'); ?></a>

                </div>

            </div>



        </div>

    </section>



    <section class="section4">

        <div class="clients owl-carousel owl-theme">

            <?php



    // Check rows exists.

    if( have_rows('sec4_repeater') ):



    // Loop through rows.

    while( have_rows('sec4_repeater') ) : the_row();



        // Load sub field value.

        $main_heading = get_sub_field('main_heading');

        $rating_star_ = get_sub_field('rating_star_');

        $small_heading = get_sub_field('small_heading');

        $small_paragraph = get_sub_field('small_paragraph');

        $name = get_sub_field('name');

        $designation = get_sub_field('designation');?>

        <!-- // Do something... -->

        <div class="item">

                <h2><?php echo $main_heading;?></h2>

                  <?php 

if( $rating_star_ == '5' ) {

    // Do something.?>

    <div class="rating">

                    <i class="fas fa-star"></i>

                    <i class="fas fa-star"></i>

                    <i class="fas fa-star"></i>

                    <i class="fas fa-star"></i>

                    <i class="fas fa-star"></i>

                </div>

<?php

     }



?>



<?php 

if( ($rating_star_ > 4) &&  ($rating_star_ < 5 ) ) { ?>

  

    <div class="rating">

                    <i class="fas fa-star"></i>

                    <i class="fas fa-star"></i>

                    <i class="fas fa-star"></i>

                    <i class="fas fa-star"></i>

                    <i class="fas fa-star-half-alt"></i>

                </div>

<?php } ?> 



<?php 

if( $rating_star_ == '4' ) {

    // Do something.?>

                <div class="rating">

                    <i class="fas fa-star"></i>

                    <i class="fas fa-star"></i>

                    <i class="fas fa-star"></i>

                    <i class="fas fa-star"></i>

                    <i class="fas fa-star-o"></i>

                </div>

 <?php               

            }



?>

                <h6><?php echo $small_heading;?></h6>

                <p><?php echo $small_paragraph;?></p>

                <h5><?php echo $name;?></h5>

                <h4><?php echo $designation;?></h4>

            </div>

  <?php

    // End loop.

    endwhile;



    // No value.

    else :

    // Do something...

    endif;

    ?>

        </div>

    </section>





    <section class="section5">

        <h2><?php the_field('section5_heading'); ?></h2>

        <div class="news owl-carousel owl-theme">

          <?php

                $args = array(

                'orderby'         => 'post_date',

                'posts_per_page'   => -1,

                'order'           => 'DESC',

                'post_type'       => 'post',

				'suppress_filters' => 0,

                'post_status'     => 'publish' );

                $myposts = get_posts($args);

               
                foreach($myposts as $post)
                  
                 {
  
                
    ?> 

        <!-- // Do something... -->

        <div class="item">

               <a href="<?php the_permalink()?>" target="_blank"> <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>" alt="">

                <p><?php echo $post->post_title;?></p>

                <h5><?php echo get_the_date() ;?></h5></a>

            </div>

  <?php } wp_reset_query(); ?>



        </div>



        <a class="btn-sec" href="<?php the_field('show_more_button'); ?>"><?php the_field('sec5_button_text'); ?></a>

    </section>







    <section class="section6">

        <div class="container-fluid">

            <div class="row">

                <div class="col-lg-12">

                    <h2><?php the_field('sec6_heading'); ?></h2>

                </div>

                <?php



        // Check rows exists.

        if( have_rows('sec6_repeater') ):



    // Loop through rows.

    while( have_rows('sec6_repeater') ) : the_row();



        // Load sub field value.

        $img = get_sub_field('img');?>

        <!-- // Do something... -->

        <div class="col-md-3 col-6">

                    <img src="<?php echo $img;?>" alt="">

                </div>

<?php

    // End loop.

    endwhile;



// No value.

else :

    // Do something...

endif;

?>           



            </div>

        </div>

    </section>



<?php get_footer(); 

the_post();

?>