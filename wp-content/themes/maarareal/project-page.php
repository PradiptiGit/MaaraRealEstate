<?php get_header(); 
/**
Template Name:Project page Template
**/
the_post();
?>

<section class="inner-ban-carosoul">
        <div class="inner-ban-slider owl-carousel owl-theme">
      
    <?php

                $args = array(

                'orderby'         => 'post_date',

                'posts_per_page'   => -1,

                'order'           => 'DESC',

                'post_type'       => 'our_projects',

				'suppress_filters' => 0,

                'post_status'     => 'publish' );

                $myposts = get_posts($args);

               
                foreach($myposts as $post)
                  
                 {
  
                
    ?> 

        <!-- // Do something... -->
        <div class="item">
                <a href="<?php the_permalink();?>">
                <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>">
                <div class="text">
                <h2><?php echo $post->post_title;?></h2>
                <h6><?php the_field('short_content_project_page'); ?></h6>
                <p><?php echo $post->post_content;  ?></p>
                </div>
                </a>
            </div>


    <?php } wp_reset_query(); ?>

 </div>
   
</section>
<?php get_footer(); 
the_post();
?>