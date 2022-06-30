<?php get_header(); 
the_post();
?>

<section class="inner-ban service-ban">
    <img src="<?php echo get_template_directory_uri();?>/assets/images/inner-ban.png" alt="">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2><?php the_title();?></h2>
              
            </div>
        </div>
    </div>
</section>

<section class="service-details-section1">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <img src="<?php the_field('banner_image','13'); ?>" alt="">
            </div>

            <div class="col-md-5 ml-auto">
                 <h2><?php the_title();?></h2>
                 <p><?php the_content();?></p>
            </div>

        </div>
    </div>
</section>

<section class="service-section1 service-details-section2">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
               <?php $my_current_lang = apply_filters( 'wpml_current_language', NULL );
    if($my_current_lang=="fr") { ?>
     <h2>Autres services</h2>
 <?php } else { ?>
<h2>Other Services</h2>
 <?php } ?>
            </div>
            <div class="service-details-slider owl-carousel owl-theme">
       
  <?php

                $args = array(

                'orderby'         => 'post_date',

                'posts_per_page'   => -1,

                'order'           => 'DESC',

                'post_type'       => 'our_services',

                'post__not_in' => array( $post->ID ),

                'suppress_filters' => 0,

                'post_status'     => 'publish' );

                $myposts = get_posts($args);

               
                foreach($myposts as $post)
                  
                 {
  
                
    ?> 


            <div class="item">
            <div class="service-card">
                <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>" alt="">
                <div class="text">
                    <h4><?php echo $post->post_title;?></h4>
                    <p></p>
                    <a href="<?php the_permalink();?>"><img src="<?php echo get_template_directory_uri();?>/assets/images/plus.png" alt=""></a>
                </div>
            </div>
        </div>
        <?php } wp_reset_query(); ?>

            </div>

<div class="col-md-12">
    <?php $my_current_lang = apply_filters( 'wpml_current_language', NULL );
    if($my_current_lang=="fr") { ?>

         <a href="<?php the_field('button_link',676); ?>" class="view-services"><?php the_field('button_text',676); ?></a>
     <?php } else {?>
    <a href="<?php the_field('button_link',13); ?>" class="view-services"><?php the_field('button_text',13); ?></a>
<?php } ?>
   
</div>

        </div>
    </div>
</section>
<?php get_footer(); 
the_post();
?>