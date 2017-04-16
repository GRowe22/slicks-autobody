<?php get_header(); ?>

<div class="container banner">
    <div class="row">
        <div class="twelve columns">
            <img class="full-width-img" src="http://gator-rowe.com/wp-content/uploads/2017/04/banner-sub-page.jpg" alt="slicks auto body"/>
        </div>
    </div>
</div>
<!-- Begin Section Container -->
<div class="container page-style">
    <div class="row">
        <div class="eight columns">
            <!-- BEGIN LOOP -->
            <?php
                if ( have_posts() ) {
                    while ( have_posts() ) {
                    the_post(); ?>

                        <div class="post-tile">
                            <?php
                            if ( has_post_thumbnail() ) {
                                the_post_thumbnail(' medium ');
                            }
                            ?>
                            <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                            <div class="sidebar-date-category">
                                    <?php the_time('M j, Y |'); ?>
                                    <?php the_category( '|' ); ?>
                            </div>
                            <?php the_excerpt(); ?>
                            <p class="post-button"><a href="<?php the_permalink(); ?>">Read More</a></p>
                            <hr />
                        </div>
                    <?php
                    } // end while
                } // end if
            ?>
            <!-- END LOOP -->
            <div class="cool-pagination">
                <?php wpbeginner_numeric_posts_nav(); ?>
            </div>
        </div>

        <div class="four columns">
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="twelve columns image-banner">
            <img class="full-width-img" src="http://gator-rowe.com/wp-content/uploads/2017/04/page-photo-banner.jpg"/>
        </div>
    </div>
</div>

<?php get_footer(); ?>
