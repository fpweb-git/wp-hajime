<!DOCTYPE html>
<html lang="en">

<head>
    <?php wp_head(); ?>
</head>

<body>
    <nav class="container">
        <ul>
            <a href="<?php echo site_url() ?>">
                <li>
                    <img src="<?php echo get_theme_file_uri('img/logo_nav.svg') ?>" alt="">
                    <?php echo get_bloginfo('name'); ?>
                </li>
            </a>
        </ul>
        <ul>
            <li><a href="<?php echo site_url('/about') ?>">About</a></li>
            <li><a href="<?php echo site_url('/programs') ?>">Programs</a></li>
            <li><a href="#" role="button">Login</a></li>
            <li><a href="#" role="button" class="outline">Sign up</a></li>
        </ul>
    </nav>