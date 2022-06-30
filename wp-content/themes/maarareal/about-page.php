<?php get_header(); 
/**
Template Name: About page Template
**/
the_post();
?>

<section class="inner-ban">
    <img src="<?php the_field('banner_image'); ?>" alt="">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2><?php the_field('banner_heading'); ?></h2>
                <h5><?php the_field('banner_content'); ?></h5>
            </div>
        </div>
    </div>
</section>

<section class="about-section1">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <img src="<?php the_field('image'); ?>" alt="">
            </div>
            <div class="col-md-5 ml-auto">
                <h2><?php the_field('sec1_heading'); ?></h2>
                <p><?php the_field('sec1_content'); ?></p>
            </div>
        </div>
    </div>
</section>


<section class="about-section2">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h2><?php the_field('sec2_heading'); ?></h2>
                <p><?php the_field('sec2_content'); ?></p>
            </div>
     <?php

	// Check rows exists.
	if( have_rows('sec2_repeater') ):

    // Loop through rows.
    while( have_rows('sec2_repeater') ) : the_row();

        // Load sub field value.
        $experts_image = get_sub_field('experts_image');
        $experts_description = get_sub_field('experts_description');
        $experts_name = get_sub_field('experts_name');
        $designation = get_sub_field('designation');?>
        <!-- // Do something... -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-main">
                        <img src="<?php echo $experts_image;?>" alt="">
                        <p><?php echo $experts_description;?></p>
                    </div>
                    <h5><?php echo $experts_name;?></h5>
                    <h6><?php echo $designation;?></h6>
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
    </div>
</section>


<section class="about-section3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h2><?php the_field('sec3_heading'); ?></h2>
            </div>
         <?php

		// Check rows exists.
	if( have_rows('team_member') ):

    // Loop through rows.
    while( have_rows('team_member') ) : the_row();

        // Load sub field value.
        $member_image_= get_sub_field('member_image_');
        $member_name = get_sub_field('member_name');
        $member_designation = get_sub_field('member_designation');?>
        <!-- // Do something... -->
        <div class="col-md-3">
                <div class="card">

                    <img src="<?php echo $member_image_;?>" alt="">

                    <h5><?php echo $member_name;?></h5>
                    <h6><?php echo $member_designation;?></h6>
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
    </div>
</section>

<?php get_footer(); 
the_post();
?>