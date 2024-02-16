<!DOCTYPE html>
<html lang="<?php language_attributes();?>">
<head>
    <meta charset="<?php bloginfo('charset');?> ">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo esc_url(home_url('wp-content/themes/Assignment One/css/custom-styles.css'));?>">
    <title>HomePage</title>
    <?php wp_head();?>
    <!-- add your JS-->
    <!-- add your CSS-->
    <!-- add your Fonts-->
</head>
<body <?php body_class();?>>
<header>
    <div>
        <a href="<?php echo esc_url(home_url());?>" id="projects">
            <img src="<?php echo esc_url(home_url('wp-content/uploads/2024/02/projects.png'));?>" alt="Header Logo">
        </a>
    </div>
    <nav>
        <?php
        wp_nav_menu( array(
            'menu'           => 'main',
            'theme_location' => '',
            'depth'          => 2,
            'fallback_cb'    => false

        ));
        ?>
    </nav>
</header>
    
