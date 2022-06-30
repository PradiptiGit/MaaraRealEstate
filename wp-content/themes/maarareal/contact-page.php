<?php get_header(); 

/**

Template Name:Contact page Template

**/

the_post();

?>

<section class="inner-ban">

    <img src="<?php the_field('banner_image'); ?>" alt="">

    <div class="container">

        <div class="row">

            <div class="col-md-12">

                <h2><?php the_field('banner_heading'); ?></h2>

                <p><?php the_field('banner_text'); ?></p>

            </div>

        </div>

    </div>

</section>





<section class="contact-section1">

    <div class="container-fluid">

        <div class="row">

            <div class="col-md-6">

                <h6> <?php the_field('heading'); ?></h6>
                     <?php $my_current_lang = apply_filters( 'wpml_current_language', NULL );
                     if($my_current_lang=="fr") { ?>
                    <p>Rue Booker Washington <br> 

                      Cocody Mermoz <br>

                      Abidjan, Côte d'Ivoire</p>
                      <?php } else { ?>
                      <p>Booker Street Washington <br> 

                      Cocody Mermoz <br>

                     Abidjan, Ivory Coast</p>
                      <?php } ?>


                    <p><?php the_field('paragraph'); ?></p>

            </div>



            <div class="col-md-6">

            	 <?php $my_current_lang = apply_filters( 'wpml_current_language', NULL );
                 if($my_current_lang=="fr") { ?>
                    <?php echo do_shortcode( '[contact-form-7 id="869" title="French contact from"]' ); ?> 
                      <?php } else { ?>
                	<?php echo do_shortcode( '[contact-form-7 id="491" title="Contact From"]' ); ?> 
                        <?php } ?>
            </div>

        </div>

    </div>

</section>



<?php get_footer(); 

the_post();

?>