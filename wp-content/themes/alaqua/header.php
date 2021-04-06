<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="canonical" href="">
    <title>Alaqua</title>
    <?php wp_head(); ?>
</head>
<body>
    <header class="header">
        <div class="header_container">
            <div class="header_container__menu">
                <?php wp_nav_menu(); ?>
            </div>
            <figure class="header_container__figure">
                <a href="<?php echo bloginfo('wpurl'); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/alaqua_logo.png" alt="Alaqua">
                </a>
            </figure>
        </div>
    </header>
