<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <title>Home</title>
    <link rel="icon" type="<?php echo get_template_directory_uri();?>/assets/image/png" href="<?php echo get_template_directory_uri();?>/assets/images/fab.png">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/bootstrap.min.css" type="text/css">
    <link href="<?php echo get_template_directory_uri();?>/assets/css/style.css" rel="stylesheet" type="text/css">
    <link href="<?php echo get_template_directory_uri();?>/assets/css/responsive.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />



</head>
    <body <?php body_class(); ?>>

    <?php
    wp_body_open();
    ?>
    <header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-4">
                    <div class="<?php echo get_template_directory_uri();?>/assets/logo-sec">
                        <a href="<?php echo site_url(); ?>"><img src="<?php the_field('logo_image','option'); ?>" alt=""></a>
                    </div>
                </div>
                <div class="col-md-2 dropdown-sec ml-auto">
                <?php echo do_shortcode ( '[wpml_language_selector_widget]' ); ?> 
                <?php //do_action('wpml_add_language_selector');?>
         
                </div>
                <div class="col-1">
                    <div class="hamburger">
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-wrapper">
        	<?php wp_nav_menu( array( 'container_class' => 'menu-wrapper', 'theme_location' =>   'primary' ) ); ?>
           
        </div>
    </header>
