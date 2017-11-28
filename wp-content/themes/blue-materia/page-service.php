<?php
/*


 */

 //Custom Fields
 $foo        = get_post_meta( 5, 'foo', true );

get_header(); ?>

    <?php get_template_part( 'template-parts/nav' ); ?>

        <header class="hero off-page-header services">
            <h1><?php echo get_the_title() ?></h1>
        </header>

        <main id="main">

            <section class="content">
                <div class="row">


                        <div class="product-content">
                            <h4><?php echo get_the_title() ?></h4>
                            <div class="padded-content">
                                <p>Coming Soon</p>
                            </div>

                            <!-- <div class="offers">
                                <div class="offer">
                                    <figure>
                                        <a href="/heavy-duty-rollators" class="heavy-duty-rollators"><span class="overlay"></span></a>
                                        <figcaption>Heavy-Duty Rollators</figcaption>
                                    </figure>
                                </div>
                                <div class="offer">
                                    <figure>
                                        <a href="/indoor-outdoor-rollators" class="indoor-outdoor-rollators"><span class="overlay"></span></a>
                                        <figcaption>Indoor / Outdoor Rollators</figcaption>
                                    </figure>
                                </div>
                                <div class="offer">
                                    <figure>
                                        <a href="/specialty-walkers" class="specialty-walkers"><span class="overlay"></span></a>
                                        <figcaption>Specialty Walkers</figcaption>
                                    </figure>
                                </div>

                                <div class="offer">
                                    <figure>
                                        <a href="/standard-walkers" class="standard-walkers"><span class="overlay"></span></a>
                                        <figcaption>Standard Walkers</figcaption>
                                    </figure>
                                </div>
                                <div class="offer">
                                    <figure>
                                        <a href="/ultra-light-rollators" class="ultra-light-rollators"><span class="overlay"></span></a>
                                        <figcaption>Ultra Light Rollators</figcaption>
                                    </figure>
                                </div>

                            </div> -->

                        </div>


                </div>



            </section>

            <!-- End Copy -->

        </main>

        <?php

get_footer();

?>
