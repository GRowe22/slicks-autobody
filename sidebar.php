<div class="sidebar-style">
    <?php dynamic_sidebar('first-widget'); ?>
    <h4>Recent Posts</h4>
    <div>


    <?php
        if ( have_posts() ) {
            while ( have_posts() ) {
                the_post(); ?>
                <?php static $count = 0;
                    if ($count == "5") { break; }
                    else { ?>

    <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
    <?php the_time('M j, Y |'); ?>
    <?php the_category( '|' ); ?>
    <?php $count++; } ?>
                <?php
            } // end while
        } // end if
    ?>
</div>


</div>
