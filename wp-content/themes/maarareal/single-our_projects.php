<?php get_header(); 
the_post();
?>
<section class="inner-ban2">
    <div class="inner-ban-slider2 owl-carousel owl-theme">
       <?php

    // Check rows exists.
    if( have_rows('banner_repeater') ):

    // Loop through rows.
    while( have_rows('banner_repeater') ) : the_row();

        // Load sub field value.
        $banner_image = get_sub_field('banner_image');
        $heading = get_sub_field('heading');
        $content = get_sub_field('content');?>
        <!-- // Do something... -->
            <div class="item">
                <img src="<?php echo $banner_image ;?>" alt="">
                <div class="text">
                    <h2><?php echo $heading ;?></h2>
                    <h6><?php echo $content ;?></h6>

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


</section>
<section class="project2">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h3><?php the_title();?></h3>
                <p><?php the_content();?></p>
            </div>

        </div>
    </div>
</section>
<section class="project-bg">
<div class="project-details-slider owl-carousel owl-theme">
        <?php

    // Check rows exists.
    if( have_rows('project_detail_repeater') ):

    // Loop through rows.
    while( have_rows('project_detail_repeater') ) : the_row();

        // Load sub field value.
        $gallery_image = get_sub_field('gallery_image');?>
        <!-- // Do something... -->
            <div class="item">
        <img src="<?php echo $gallery_image ;?>" alt="">
               
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

<section class="project3">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <p><span><?php the_field('heading'); ?></span>:<?php the_field('content'); ?></p>
            </div>
            <div class="col-lg-6">
                <img src="<?php the_field('content_image'); ?>" alt="" class="project-img2">
            </div>
            <div class="row pb-md">
                <div class="col-lg-6">
                    <img src="<?php the_field('image'); ?>" alt="" class="project-img3">
                </div>
                <div class="col-lg-6">
                    <?php the_field('paragraph'); ?>
                </div>
            </div>

        </div>

    </div>
</section>
<section class="project4">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h2><?php the_field('last_sec_heading'); ?></h2>

                 <?php

                $args = array(

                'orderby'         => 'post_date',

                'posts_per_page'   => 1,

                'order'           => 'DESC',

                'post_type'       => 'our_projects',

                'suppress_filters' => 0,

                'post__not_in' => array( $post->ID ),

                'post_status'     => 'publish' );

                $myposts = get_posts($args);

               
                foreach($myposts as $post)
                  
                 {
  
                
    ?> 
                <a href="<?php the_permalink(); ?>"><img src="<?php the_field('last_image'); ?>" alt="" class="other">
                <div class="slider-text">
                    <h4><?php echo $post->post_title;?></h4>
                    <h5><?php echo $post->post_content;  ?></h5>
                </div></a>

    <?php } wp_reset_query(); ?>

            </div>
            <div class="col-md-12">
                <?php $my_current_lang = apply_filters( 'wpml_current_language', NULL );
    if($my_current_lang=="fr") { ?>
    <a href="<?php the_field('button_link',674); ?>" class="view-services"><?php the_field('button_text',674); ?></a>
    <?php } else { ?>
    <a href="<?php the_field('button_link',50); ?>" class="view-services"><?php the_field('button_text',50); ?></a>
    <?php } ?>
</div>
        </div>
    </div>
</section>

<?php get_footer(); 
?>