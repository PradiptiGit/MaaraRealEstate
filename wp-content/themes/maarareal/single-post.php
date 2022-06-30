<?php get_header(); 
the_post();
?>
<section class="inner-ban">
    <img src="<?php the_field('banner_image','15'); ?>" alt="">
    <!-- <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Businesses need connections</h2>
                <h5>At Maara Real Estate, we are always looking for new ways to stay ahead of the curve and work with
                    clients who are looking to build a secure estate. Our network of advisors spans the entire value
                    chain in both development and operating assets, so you can be sure that we have the right
                    connections to help you succeed.</h5>
            </div>
        </div>
    </div> -->
</section>
<section class="news-detail">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2 down-sec">
                <h4><?php the_field('1st_heading'); ?></h4>
                <h5><?php the_field('text'); ?></h5>
                <ul class="down-link">
                    <li><?php echo do_shortcode('[Sassy_Social_Share]'); ?></li>
                </ul>
                <a href="javascript;" class="download" data-toggle="modal" data-target="#<?php the_title; ?>"> DOWNLOAD </a>
            </div>
            <div class="col-lg-9 news-sec">
                <h2><?php the_field('heading'); ?></h2>
                <p><?php the_field('paragraph'); ?>
                </p>
                <img src="<?php the_field('content_image'); ?>" alt="">
                <h4><?php the_field('small_heading'); ?></h4>
                <ul class="list">
                    <?php

    // Check rows exists.
    if( have_rows('repeater') ):

    // Loop through rows.
    while( have_rows('repeater') ) : the_row();

        // Load sub field value.
        $point_heading = get_sub_field('point_heading');
        $content = get_sub_field('content');
        $image = get_sub_field('image');?>
        <!-- // Do something... -->
         <li>
                        <h5><?php echo $point_heading ;?></h5>
                        <p><?php echo $content ;?></p>
                        <img src="<?php echo $image ;?>" alt="">
                    </li>

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
</section>
<section class="section5 latest-news">
    <h2><?php the_field('sec5_heading'); ?></h2>
    <div class=" latest owl-carousel owl-theme">
        <?php

    // Check rows exists.
    if( have_rows('news_repeater') ):

    // Loop through rows.
    while( have_rows('news_repeater') ) : the_row();

        // Load sub field value.
        $news_image = get_sub_field('news_image');
        $news_content = get_sub_field('news_content');
        $date = get_sub_field('date');?>
        <!-- // Do something... -->

        <div class="item">
            <div class="latest-news">
                <div class="latest-news__item-img">
                    <img src="<?php echo $news_image ;?>" alt="">
                </div>
                <h4><?php echo $news_content ;?></h4>
                <h5><?php echo $date ;?></h5>
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
      <?php $my_current_lang = apply_filters( 'wpml_current_language', NULL );
    if($my_current_lang=="fr") { ?>
    <a href="<?php the_field('button_link',670); ?>"><?php the_field('button_text',670); ?></a>
    <?php } else {?>
    <a href="<?php the_field('button_link',15); ?>"><?php the_field('button_text',15); ?></a><?php } ?>
</section>


<!-- <div class="download-modal modal fade" id="<?php the_title; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Dwonload real estate studies</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
           
            <div class="col-md-6">
            <label for="">NAME</label>
            <input type="text" placeholder="first name">
            </div>
            <div class="col-md-6">
            <label for=""></label>
            <input type="text" placeholder="last name">
            </div>
            <div class="col-md-6">
            <label for="">Email</label>
            <input type="email" placeholder="example@xyz.com">
            </div>
            <div class="col-md-6">
            <label for="">Phone No.</label>
            <input type="text" placeholder="0782345678">
            </div>
            <div class="col-md-12">
            <label for="">Company</label>
            <input type="text">
            </div>
            <div class="col-md-12">
            <label for="">Title</label>
            <input type="text">
            </div>
            <div class="col-md-12">
                <input type="submit" value="Download">
            </div>
         
        </div>
      </div>
    
    </div>
  </div>
</div>
 -->
<?php get_footer(); 

?>