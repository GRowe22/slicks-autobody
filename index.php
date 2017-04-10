<?php get_header(); ?>

<!-- Begin Section Container -->
<div class="container banner">
    <div class="row">
        <div class="twelve columns">
            <img class="full-width-img" src="http://gator-rowe.com/wp-content/uploads/2017/04/header_background.jpg" alt="slicks auto body"/>
        </div>
    </div>
</div>
<!-- End Section Container -->

<!-- Begin Section Container -->
<div class="container services">
    <div class="row">
        <div class="three columns offset-by-one">
            <?php dynamic_sidebar('services-widget-left'); ?>
        </div>

        <div class="eight columns">
            <div class="container services">
                <div class="row">
                    <div class="three columns offset-by-one">
                        <img class="icons" src="http://gator-rowe.com/wp-content/uploads/2017/04/Line-graph.png" alt="slick's services"/>
                    </div>

                    <div class="eight columns">
                        <p>
                            Returning your vehicle in tip-top shape, and keeping it there, is our number one priority. Our team understands that engineers are designing much more sophisticated vehicles these days.
                        </p>
                    </div>

                    <div class="three columns offset-by-one">
                        <img class="icons" src="http://gator-rowe.com/wp-content/uploads/2017/04/Cog.png" alt="slick's services"/>
                    </div>

                    <div class="eight columns">
                        <p>
                            Slick's Auto Body is the Seattle area’s premier full-service facility. We treat our customers like family, and customer service like an art. Come to us for total car care that can fix any performance issue you bring us
                        </p>
                    </div>

                    <div class="three columns offset-by-one">
                        <img class="icons" src="http://gator-rowe.com/wp-content/uploads/2017/04/Gauge.png" alt="slick's services"/>
                    </div>

                    <div class="eight columns">
                        <p>
                            Quality auto service is the key to your vehicle’s longevity and peak performance. You need a team of technicians you can trust, who are dedicated to maintaining your vehicle’s enhanced performance.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container testimonials">
    <div class="row">
        <div class="twelve columns offset-by-four">
            <h1>Testimonials</h1>
        </div>

    </div>

    <div class="row">
        <div class="three columns offset-by-one">
            <?php dynamic_sidebar('testimonial-widget-left'); ?>
        </div>
        <div class="three columns offset-by-one">
            <?php dynamic_sidebar('testimonial-widget-center'); ?>
        </div>
        <div class="three columns offset-by-one">
            <?php dynamic_sidebar('testimonial-widget-right'); ?>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="twelve columns">
            <img class="full-width-img" src="http://gator-rowe.com/wp-content/uploads/2017/04/photo-banner.jpg"/>
        </div>
    </div>
</div>

<!-- End Section Container -->
<?php get_footer(); ?>
