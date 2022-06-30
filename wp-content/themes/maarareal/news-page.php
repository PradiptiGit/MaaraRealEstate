<?php get_header(); 
the_post();
/**
Template Name: News page Template
**/
?>
<section class="inner-ban service-ban">
    <img src="<?php the_field('banner_image'); ?>" alt="">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2><?php the_field('banner_heading'); ?></h2>
              
            </div>
        </div>
    </div>
</section>


    <section class="news-section1">
        <div class="container-fluid">
            <div class="row">
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
        <div class="col-md-4 loop-post">
           
            <div class="card">
                <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>" alt="">
               <a href="<?php the_permalink();?>">  <p><?php echo $post->post_title;?></p>
                <h5><?php echo get_the_date() ;?></h5> </a>
            </div>
           
        </div>



    <?php } wp_reset_query(); ?>
           
            

         <div class="col-md-12 btn-sec">
            <?php $my_current_lang = apply_filters( 'wpml_current_language', NULL );
    if($my_current_lang=="fr") { ?>
         <a id="load_more_posts">montre plus</a>
 <?php } else {?>
         <a id="load_more_posts">SHOW MORE</a>

<?php } ?>
         </div>
         

        
            </div>
         
          
        </div>
        


    </section>

<?php get_footer(); 
?>
<script>
//Load More

    jQuery(".loop-post").slice(0, 6).show();
    jQuery("#load_more_posts").on('click', function(e) {
    // alert("test");

        jQuery(".loop-post:hidden").slice(0, 6).addClass('display');
        if (jQuery(".loop-post:hidden").length == 0) {

            jQuery('html,body').animate({
                scrollTop: jQuery(this).offset().top
            }, 1500);
            jQuery("#load_more_posts").delay(100).fadeOut('slow');
        } else {

            jQuery('html,body').animate({

                scrollTop: jQuery(this).offset().top
            }, 1500);
        }
    });
</script>
