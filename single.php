<?php get_header(); ?>

<div class="container banner">
    <div class="row">
        <div class="twelve columns">
            <img class="full-width-img" src="http://gator-rowe.com/wp-content/uploads/2017/04/banner-sub-page.jpg" alt="slicks auto body"/>
        </div>
    </div>
</div>

<div class="container page-style">
    <section class="row">
        <div class="twelve columns offset-by-one thin-post ">
            <?php
                if (have_posts()) :
                    while (have_posts()) : the_post();
                    if ( has_post_thumbnail() ) { ?>
                    <div class="post-thumbnail"><?php the_post_thumbnail('large'); ?></div>
                <?php } ?>
                    <h2><?php the_title(); ?></h2>
                    <?php the_content();
                    endwhile;
                endif; ?>
        </div>
    </section>
</div>

<div class="container">
    <div class="row">
        <div class="twelve columns image-banner">
            <img class="full-width-img" src="http://gator-rowe.com/wp-content/uploads/2017/04/page-photo-banner.jpg"/>
        </div>
    </div>
</div>

<?php get_footer(); ?>
