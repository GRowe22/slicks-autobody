<?php /* Template Name: Sub-Page */ ?>

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
        <div class="twelve columns">
<!-- BEGIN PAGE PHP -->
            <?php if (have_posts()) {
                while (have_posts()) {
                    /*OUR DATA CONTEXT IS DEFINED */
                    the_post(); ?>

                    <h3><?php the_title(); ?></h3>
                    <?php the_content();
                }
            } ?>
<!-- END PAGE PHP -->
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
