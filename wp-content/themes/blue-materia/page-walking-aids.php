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
                                        <a href="/canes" class="canes"><span class="overlay"></span></a>
                                        <figcaption>Canes</figcaption>
                                    </figure>
                                </div>

                                <div class="offer">
                                    <figure>
                                        <a href="/gait-trainers" class="gait-trainers"><span class="overlay"></span></a>
                                        <figcaption>Gait Trainers</figcaption>
                                    </figure>
                                </div>

                                <div class="offer">
                                    <figure>
                                        <a href="/nordic-walking-poles" class="nordic-walking-poles"><span class="overlay"></span></a>
                                        <figcaption>Nordic Walking Poles</figcaption>
                                    </figure>
                                </div>

                                <div class="offer">
                                    <figure>
                                        <a href="/walkers-and-rollators" class="walkers-and-rollators"><span class="overlay"></span></a>
                                        <figcaption>Walkers &amp; Rollators</figcaption>
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
