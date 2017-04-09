<!DOCTYPE html>
<html>
<head>
<title>Slicks's Autobody</title>
<?php wp_head(); ?>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
</head>

<body>
<div class="main-navigation">
    <div class="container">
            <nav class="row">
                <div class="eight columns">
                    <?php wp_nav_menu(array(
                        'sort_column' => 'menu_order',
                        'container_class' => 'blank-menu-header'
                        ));?>
                </div>
            <!-- Add Search Form -->
                <div class="four columns menu-button">
                    <a class="button inverted" href="#">Schedule Appointment</a>
                </div>
            </nav>
    </div>
</div>
