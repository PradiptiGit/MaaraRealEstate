<?php get_header(); 
/**
Template Name: Service page Template
**/
the_post();
?>
<section class="inner-ban service-ban">
    <img src="<?php the_field('banner_image'); ?>" alt="">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2><?php the_field('banner_heading'); ?></h2>
                <p><?php the_field('banner_content'); ?></p>
            </div>
        </div>
    </div>
</section>

<section class="service-section1">
    <div class="container-fluid">
        <div class="row">
     
         <?php

                $args = array(

                'orderby'         => 'post_date',

                'posts_per_page'   => -1,

                'order'           => 'DESC',

                'post_type'       => 'our_services',

				'suppress_filters' => 0,

                'post_status'     => 'publish' );

                $myposts = get_posts($args);

               
                foreach($myposts as $post)
                  
                 {
  
                
    ?> 
    <!--  // Do something... -->
        <div class="col-md-6">
            <div class="service-card">
                <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>" alt="">
                <div class="text">
                    <h4><?php echo $post->post_title;?></h4>
                    <p><?php echo wp_trim_words( $post->post_content, 20, '...' );  ?></p>
                    <a href="<?php the_permalink();?>"><img src="<?php echo get_template_directory_uri();?>/assets/images/plus.png" alt=""></a>
                </div>
            </div>
        </div>
    <?php } wp_reset_query(); ?>    
   </div>
    </div>
    
</section>



<section class="service-section2" id="faq">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h2><?php the_field('heading'); ?></h2>
            <div class="accordion">
       <?php

// Check rows exists.
if( have_rows('faq_section') ):

    // Loop through rows.
    while( have_rows('faq_section') ) : the_row();

        // Load sub field value.
        $question_ = get_sub_field('question_');
        $answer = get_sub_field('answer');?>
        <!-- // Do something... -->

            <h4 class="accordion-toggle"><?php echo $question_ ;?></h4>
            <div class="accordion-content">
                <p>
                <?php echo $answer ;?></p>
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
        </div>
    </div>
</section>


<?php get_footer(); 
the_post();
?>


