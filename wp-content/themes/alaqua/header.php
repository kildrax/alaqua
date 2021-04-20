<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Alaqua es un club deportivo especializado en la enseñanza de la natación y el fortalecimiento de las capacidades físicas en niños, jóvenes y adultos en Villavicencio.">
    <meta name="keywords" content="Alaqua, natación, deporte, vida saludable, hábitos, actividad física, recreación, diversión, resistencia, fuerza, velocidad, educación acuática, estilos, estilo libre, estilo espalda, estilo pecho, estilo mariposa, brazada, patada, club, club deportivo, bienestar, socializar, cloro, actividades acuáticas, viraje, ondulación, ejercicio, alegría, procesos, respeto, disciplina positiva, refuerzos positivos, valores, esfuerzo, dedicación, tiempo, planeación, estimulación temprana, desarrollo motor, enseñanza, aprendizaje">
    <meta name="author" content="Kildrax" />
    <meta name="copyright" content="Alaqua Club de Natación" />
    <title>Alaqua | Club de Natación</title>
    <?php wp_head(); ?>
</head>
<body>
    <header class="header">
        <div class="header_container_desktop">
            <div class="header_container_desktop__menu">
                <?php wp_nav_menu(); ?>
            </div>
            <figure class="header_container_desktop__figure">
                <a href="<?php echo bloginfo('wpurl'); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/alaqua_logo.png" alt="Alaqua">
                </a>
            </figure>
        </div>
        <div class="header_container_mobile">
            <div id="menuToggle">
                <input type="checkbox" />
                <span></span>
                <span></span>
                <span></span>

                <div class="header_container_mobile__menu">
                    <?php wp_nav_menu(); ?>
                </div>
            </div>
            <figure class="header_container_mobile__figure">
                <a href="<?php echo bloginfo('wpurl'); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/alaqua_logo.png" alt="Alaqua">
                </a>
            </figure>
        </div>
    </header>
