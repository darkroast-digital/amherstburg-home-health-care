<?php
/*


 */

 //Custom Fields
 $foo        = get_post_meta( 5, 'foo', true );

get_header(); ?>

    <?php get_template_part( 'template-parts/nav' ); ?>

        <header class="hero off-page-header rentals">
            <h1><?php echo get_the_title() ?></h1>
        </header>

        <main id="main">

            <section class="content">
                <div class="row">


                        <div class="product-content">
                            <h4><?php echo get_the_title() ?></h4>

                            <div class="offers">

                                <div class="offer">
                                    <figure>
                                        <a href="/scooters" class="scooters"><span class="overlay"></span></a>
                                        <figcaption>Scooters</figcaption>
                                    </figure>
                                </div>

                                <div class="offer">
                                    <figure>
                                        <a href="/power-wheelchairs" class="power-wheelchairs"><span class="overlay"></span></a>
                                        <figcaption>Power Wheelchairs</figcaption>
                                    </figure>
                                </div>

                                <div class="offer">
                                    <figure>
                                        <a href="/specialty-power-assist" class="specialty-power-assist"><span class="overlay"></span></a>
                                        <figcaption>Specialty Power Assist</figcaption>
                                    </figure>
                                </div>








                            </div>

                        </div>


                </div>



            </section>

            <!-- End Copy -->

        </main>

        <?php

get_footer();

?>
