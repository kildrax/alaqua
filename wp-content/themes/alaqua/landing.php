<?php /*Template Name: Landing*/ ?>
<?php get_header(); ?>
<?php global $wp_query; ?>
<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <main>
            <section class="global__section glass">
                <div class="global__section_top">
                    <div class="global__section_top_personalInfo">
                        <div class="global__section_top_personalInfo__leftContainer">
                            <div class="global__section_top_personalInfo__leftContainer--info">
                                <h1><?php the_field( 'titulo_quienes_somos' ); ?></h1>
                                <p><?php the_field( 'parrafo_quienes_somos' ); ?></p>
                                <a href="tel:+57<?php the_field( 'numero_de_contacto' ); ?>"><?php the_field( 'numero_de_contacto' ); ?></a>
                            </div>
                            <div class="global__section_top_personalInfo__leftContainer--whatBtn">
                                <a href="tel:+57<?php the_field( 'numero_de_contacto' ); ?>">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/whatsapp.png" alt="whatsapp contacto">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="global__section_top_slider">
                        <?php echo do_shortcode( '[soliloquy slug="test-slider"]' ); ?>
                    </div>
                </div>
                <div class="global__section_specsInfo">
                    <div id="metodologia" class="global__section_specsInfo--card">
                        <figure>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/metodologia.png" alt="Metodologia">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/metodologia_color.png" alt="Metodologia">
                        </figure>
                        <h3><?php the_field( 'titulo_metodologia' ); ?></h3>
                        <div class="global__section_specsInfo--card-paragraph"><?php the_field( 'parrafo' ); ?></div>
                    </div>
                    <div id="horarios" class="global__section_specsInfo--card">
                        <figure>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/horarios.png" alt="Horarios">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/horarios_color.png" alt="Horarios">
                        </figure>
                        <h3><?php the_field( 'titulo_horarios_precios' ); ?></h3>
                        <div class="global__section_specsInfo--card-paragraph">
                            <?php the_field( 'parrafo_horarios_precios' ); ?>
                        </div>
                    </div>
                    <div id="sedes" class="global__section_specsInfo--card">
                        <figure>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/sedes.png" alt="Sedes">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/sedes_color.png" alt="Sedes">
                        </figure>
                        <h3><?php the_field( 'titulo_sedes' ); ?></h3>
                        <div class="global__section_specsInfo--card-paragraph">
                            <?php the_field( 'parrafo_sedes' ); ?>
                        </div>
                    </div>
                </div>
                <div class="global__section_knowUs">
                    <h2 id="conocenos"><?php the_field( 'titulo_conocenos' ); ?></h2>
                    <div class="global__section_knowUs_container">
                        <div class="global__section_knowUs_container--teacher">
                            <div class="global__section_knowUs_container--teacher-image">
                                <?php if ( get_field( 'imagen_instructor' ) ) : ?>
                                    <img src="<?php the_field( 'imagen_instructor' ); ?>" alt="Profesor Alaqua"/>
                                <?php endif ?>
                            </div>
                            <div class="global__section_knowUs_container--teacher-details">
                                <div class="global__section_knowUs_container--teacher-details-name">
                                    <h3><?php the_field( 'nombre_instructor' ); ?></h3>
                                    <span><?php the_field( 'rango_del_instructor' ); ?></span>
                                </div>
                                <div class="global__section_knowUs_container--teacher-details-exp">
                                    <div class="global__section_knowUs_container--teacher-details-exp-paragraph">
                                        <?php the_field( 'experiencia_del_instructor' ); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="global__section_knowUs_container--teacher">
                            <div class="global__section_knowUs_container--teacher-image">
                                <?php if ( get_field( 'imagen_instructor_dos' ) ) : ?>
                                    <img src="<?php the_field( 'imagen_instructor_dos' ); ?>" alt="Profesor Alaqua"/>
                                <?php endif ?>
                            </div>
                            <div class="global__section_knowUs_container--teacher-details">
                                <div class="global__section_knowUs_container--teacher-details-name">
                                    <h3><?php the_field( 'nombre_instructor_dos' ); ?></h3>
                                    <span><?php the_field( 'rango_del_instructor_dos' ); ?></span>
                                </div>
                                <div class="global__section_knowUs_container--teacher-details-exp">
                                    <div class="global__section_knowUs_container--teacher-details-exp-paragraph">
                                        <?php the_field( 'experiencia_del_instructor_dos' ); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="global__section_knowUs_container--teacher">
                            <div class="global__section_knowUs_container--teacher-image">
                                <?php if ( get_field( 'imagen_instructor_tres' ) ) : ?>
                                    <img src="<?php the_field( 'imagen_instructor_tres' ); ?>" alt="Profesor Alaqua"/>
                                <?php endif ?>
                            </div>
                            <div class="global__section_knowUs_container--teacher-details">
                                <div class="global__section_knowUs_container--teacher-details-name">
                                    <h3><?php the_field( 'nombre_instructor_tres' ); ?></h3>
                                    <span><?php the_field( 'rango_del_instructor_tres' ); ?></span>
                                </div>
                                <div class="global__section_knowUs_container--teacher-details-exp">
                                    <div class="global__section_knowUs_container--teacher-details-exp-paragraph">
                                        <?php the_field( 'experiencia_del_instructor_tres' ); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="global__section_knowUs_container--teacher">
                            <div class="global__section_knowUs_container--teacher-image">
                                <?php if ( get_field( 'imagen_instructor_cuatro' ) ) : ?>
                                    <img src="<?php the_field( 'imagen_instructor_cuatro' ); ?>" alt="Profesor Alaqua"/>
                                <?php endif ?>
                            </div>
                            <div class="global__section_knowUs_container--teacher-details">
                                <div class="global__section_knowUs_container--teacher-details-name">
                                    <h3><?php the_field( 'nombre_instructor_cuatro' ); ?></h3>
                                    <span><?php the_field( 'rango_del_instructor_cuatro' ); ?></span>
                                </div>
                                <div class="global__section_knowUs_container--teacher-details-exp">
                                    <div class="global__section_knowUs_container--teacher-details-exp-paragraph">
                                        <?php the_field( 'experiencia_del_instructor_cuatro' ); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="contact_form">
                <h3 class="contact_form--title">¡Nosotros te contactamos!</h3>
                <?php echo do_shortcode( '[contact-form-7 id="7" title="alaquaForm"]' ); ?>
                <button type="button" id="triggerBtn" class="contact_form--triggerBtn">¡Te llamamos!</button>
            </div>
        </main>
        <figure class="global_horarios">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/horarios_y_precios.jpg" alt="Horarios y Precios">
        </figure>
        <div class="circle1"></div>
        <div class="circle2"></div>
        <?php get_footer(); ?>
    <?php endwhile; ?>
<?php endif; ?>