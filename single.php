<?php get_header(); ?>

        <section class="row">
            <div class="two columns">
                <p>Sidebar</p>
            </div>
            <div class="eight columns">
        <!-- BEGIN LOOP -->
                <?php
                if ( have_posts() ) {
                    while ( have_posts() ) {
                        the_post(); ?>
                        <h2><?php the_title(); ?></h2>
                        <?php the_content();
                    } // end while
                } // end if
                ?>
        <!-- END LOOP -->
            </div>
            <div class="two columns">
                <p>Sidebar</p>
            </div>
        </section>

<?php get_footer(); ?>
