<?php
/* Template Name: Archive Page */

get_header(); ?>

<div class="container banner">
    <div class="row">
        <div class="twelve columns">
            <img class="full-width-img" src="http://gator-rowe.com/wp-content/uploads/2017/04/banner-sub-page.jpg" alt="slicks auto body"/>
        </div>
    </div>
</div>

<div class="container page-style">
    <div class="row">
        <div class="twelve columns">
            <h2>Archives</h2>
            <?php if ( have_posts() ) :
                // The Loop
                while ( have_posts() ) : the_post();?>
                <!-- data context -->
                    <h3>
                        <a href="<?php the_permalink() ?>">
                            <?php the_title(); ?>
                        </a>
                    </h3>
                    <?php the_excerpt(); ?>
            <?php endwhile; ?> <!-- End Loop -->
        <?php else: ?>
            <p>Sorry, no posts matched your criteria.</p>
        <?php endif; ?>
        </div>
    </div>
    <div class="row">
        <div class="twelve columns">
            <h2>Archives by Month:</h2>
            <ul>
                <?php wp_get_archives('type=monthly'); ?>
            </ul>
            <h2>Archives by Category:</h2>
            <ul>
                <?php wp_list_categories(); ?>
            </ul>
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
