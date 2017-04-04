<!DOCTYPE html>
<html>
<head>
<title>Slicks's Autobody</title>
<?php wp_head(); ?>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
</head>

<body>

<div class="container">
    <div class="main-navigation">
        <nav class="row">
            <div class="nine columns">
                <?php wp_nav_menu(array(
                    'sort_column' => 'menu_order',
                    'container_class' => 'blank-menu-header'
                    ));?>
            </div>
        <!-- Add Search Form -->
            <div class="three columns">
                <p>button</p>
            </div>
        </nav>
    </div>

    <!-- Add Menu Here -->
    <div class="row">
        <div class="twelve columns">
            <?php wp_nav_menu(array(
                'sort_column' => 'menu_order',
                'container_class' => 'blank-menu-header'
                ));?>
        </div>
    </div>
