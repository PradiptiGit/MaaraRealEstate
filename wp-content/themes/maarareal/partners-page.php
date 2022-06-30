<?php get_header(); 
/**
Template Name:Partners page Template
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

<section class="partsners-section">
    <img class="ab-image" src="<?php the_field('big_image'); ?>" alt="">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 ml-auto">
                <img  src="<?php the_field('logo_image1'); ?>" alt="">
                <p><?php the_field('paragraph1'); ?></p>
            </div>
        </div>


    </div>
</section>

<section class="partsners-section odd">
    <img class="ab-image" src="<?php the_field('image'); ?>" alt="">
    <div class="container-fluid">
    <div class="row">
            <div class="col-md-6">
                <img  src="<?php the_field('logo_img2'); ?>" alt="">
                <p><?php the_field('paragraph2'); ?></p>
            </div>
        </div>
    </div>
</section>

<section class="partsners-section">
    <img class="ab-image" src="<?php the_field('featured_image'); ?>" alt="">
    <div class="container-fluid">
    <div class="row">
            <div class="col-md-6 ml-auto">
                <img  src="<?php the_field('logo_image3'); ?>" alt="">
                <p><?php the_field('paragraph3'); ?></p>
            </div>
        </div>
    </div>
</section>


<section class="partsners-section odd">
    <img class="ab-image" src="<?php the_field('featured_img'); ?>" alt="">
    <div class="container-fluid">
    <div class="row">
            <div class="col-md-6">
                <img  src="<?php the_field('logo_image4'); ?>" alt="">
                <p><?php the_field('paragraph4'); ?></p>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); 
the_post();
?>