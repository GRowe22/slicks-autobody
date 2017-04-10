<?php
/*-------------- Enable Widgets--------------- */

function blank_widgets_init() {
    register_sidebar( array(
        'name' => ('First Widget'),
        'id' => 'first-widget',
        'description' => 'Widget for our sidebar on pages',
        'before_widget' => '<div class="widget-sidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>'
        ));
/*--- New Widget --- */
    register_sidebar( array(
        'name' => ('Footer Widget One'),
        'id' => 'footer-widget-one',
        'description' => 'First widget for our footer',
        'before_widget' => '<div class="widget-footer">',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>'
        ));
/*--- Second New Widget --- */
    register_sidebar( array(
        'name' => ('Footer Widget Two'),
        'id' => 'footer-widget-two',
        'description' => 'Second widget for our footer',
        'before_widget' => '<div class="widget-footer">',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>'
        ));
/*--- Third New Widget --- */
    register_sidebar( array(
        'name' => ('Footer Widget Three'),
        'id' => 'footer-widget-three',
        'description' => 'Third widget for our footer',
        'before_widget' => '<div class="widget-footer">',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>'
        ));

/*--- Third New Widget --- */
    register_sidebar( array(
        'name' => ('Footer Widget Four'),
        'id' => 'footer-widget-four',
        'description' => 'Fourth widget for our footer',
        'before_widget' => '<div class="widget-footer">',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>'
        ));

/*--- Services Widgets --- */
    register_sidebar( array(
        'name' => ('Services Widget Left'),
        'id' => 'services-widget-left',
        'description' => 'Services Widget Left',
        'before_widget' => '<div class="widget-serv-left">',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>'
        ));

/*--- Services Widgets --- */
    register_sidebar( array(
        'name' => ('Services Widget Right'),
        'id' => 'services-widget-right',
        'description' => 'Services Widget Right',
        'before_widget' => '<div class="widget-serv-right">',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>'
        ));

/*--- Testimonial Widgets --- */
    register_sidebar( array(
        'name' => ('Testimonial Widget Left'),
        'id' => 'testimonial-widget-left',
        'description' => 'Third widget for our footer',
        'before_widget' => '<div class="widget-footer">',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>'
        ));

/*--- Testimonial Widgets --- */
    register_sidebar( array(
        'name' => ('Testimonial Widget Center'),
        'id' => 'testimonial-widget-center',
        'description' => 'Third widget for our footer',
        'before_widget' => '<div class="widget-footer">',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>'
        ));

/*--- Testimonial Widgets --- */
    register_sidebar( array(
        'name' => ('Testimonial Widget Right'),
        'id' => 'testimonial-widget-right',
        'description' => 'Third widget for our footer',
        'before_widget' => '<div class="widget-footer">',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>'
        ));
}

add_action('widgets_init', 'blank_widgets_init');

/*-------------- Enable Menu --------------- */
add_theme_support('menus');

/*--- Enable Post Thumbnails ---*/
add_theme_support( 'post-thumbnails' );

?>
