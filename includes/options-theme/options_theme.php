<?php

    /**
     * ReduxFramework Barebones Sample Config File
     * For full documentation, please visit: http://docs.reduxframework.com/
     */

    if ( ! class_exists( 'Redux' ) ) {
        return;
    }

    // This is your option name where all the Redux data is stored.
    $opt_name = "configG";

    /**
     * ---> SET ARGUMENTS
     * All the possible arguments for Redux.
     * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
     * */

    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
        // TYPICAL -> Change these values as you need/desire
        'opt_name'             => $opt_name,
        // This is where your data is stored in the database and also becomes your global variable name.
        'display_name'         => $theme->get( 'Name' ),
        // Name that appears at the top of your panel
        'display_version'      => '1.0',
        // Version that appears at the top of your panel
        'menu_type'            => 'menu',
        //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
        'allow_sub_menu'       => true,
        // Show the sections below the admin menu item or not
        'menu_title'           => __( 'Opciones', 'redux-framework-demo' ),
        'page_title'           => __( 'Opciones', 'redux-framework-demo' ),
        // You will need to generate a Google API key to use this feature.
        // Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
        'google_api_key'       => '',
        // Set it you want google fonts to update weekly. A google_api_key value is required.
        'google_update_weekly' => false,
        // Must be defined to add google fonts to the typography module
        'async_typography'     => false,
        // Use a asynchronous font on the front end or font string
        //'disable_google_fonts_link' => true,                    // Disable this in case you want to create your own google fonts loader
        'admin_bar'            => false,
        // Show the panel pages on the admin bar
        'admin_bar_icon'       => 'dashicons-portfolio',
        // Choose an icon for the admin bar menu
        'admin_bar_priority'   => 50,
        // Choose an priority for the admin bar menu
        'global_variable'      => '',
        // Set a different name for your global variable other than the opt_name
        'dev_mode'             => false,
        // Show the time the page took to load, etc
        'update_notice'        => false,
        // If dev_mode is enabled, will notify developer of updated versions available in the GitHub Repo
        'customizer'           => true,
        // Enable basic customizer support
        //'open_expanded'     => true,                    // Allow you to start the panel in an expanded way initially.
        //'disable_save_warn' => true,                    // Disable the save warning when a user changes a field

        // OPTIONAL -> Give you extra features
        'page_priority'        => null,
        // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
        'page_parent'          => 'themes.php',
        // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
        'page_permissions'     => 'manage_options',
        // Permissions needed to access the options panel.
        'menu_icon'            => '',
        // Specify a custom URL to an icon
        'last_tab'             => '',
        // Force your panel to always open to a specific tab (by id)
        'page_icon'            => 'icon-themes',
        // Icon displayed in the admin panel next to your menu_title
        'page_slug'            => '_options',
        // Page slug used to denote the panel
        'save_defaults'        => true,
        // On load save the defaults to DB before user clicks save or not
        'default_show'         => false,
        // If true, shows the default value next to each field that is not the default value.
        'default_mark'         => '',
        // What to print by the field's title if the value shown is default. Suggested: *
        'show_import_export'   => true,
        // Shows the Import/Export panel when not used as a field.

        // CAREFUL -> These options are for advanced use only
        'transient_time'       => 60 * MINUTE_IN_SECONDS,
        'output'               => true,
        // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
        'output_tag'           => true,
        // Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
        // 'footer_credit'     => '',                   // Disable the footer credit of Redux. Please leave if you can help it.

        // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
        'database'             => '',
        // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!

        'use_cdn'              => true,
        // If you prefer not to use the CDN for Select2, Ace Editor, and others, you may download the Redux Vendor Support plugin yourself and run locally or embed it in your code.

        //'compiler'             => true,

        // HINTS
        'hints'                => array(
            'icon'          => 'el el-question-sign',
            'icon_position' => 'right',
            'icon_color'    => 'lightgray',
            'icon_size'     => 'normal',
            'tip_style'     => array(
                'color'   => 'light',
                'shadow'  => true,
                'rounded' => false,
                'style'   => '',
            ),
            'tip_position'  => array(
                'my' => 'top left',
                'at' => 'bottom right',
            ),
            'tip_effect'    => array(
                'show' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'mouseover',
                ),
                'hide' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'click mouseleave',
                ),
            ),
        )
    );

    // ADMIN BAR LINKS -> Setup custom links in the admin bar menu as external items.
/*    $args['admin_bar_links'][] = array(
        'id'    => 'redux-docs',
        'href'  => 'http://docs.reduxframework.com/',
        'title' => __( 'Documentation', 'redux-framework-demo' ),
    );

    $args['admin_bar_links'][] = array(
        'id'    => 'redux-support',
        'href'  => 'https://github.com/ReduxFramework/redux-framework/issues',
        'title' => __( 'Support', 'redux-framework-demo' ),
    );

    $args['admin_bar_links'][] = array(
        'id'    => 'redux-extensions',
        'href'  => 'reduxframework.com/extensions',
        'title' => __( 'Extensions', 'redux-framework-demo' ),
    );*/

    // SOCIAL ICONS -> Setup custom links in the footer for quick links in your panel footer icons.
    /*$args['share_icons'][] = array(
        'url'   => 'https://github.com/ReduxFramework/ReduxFramework',
        'title' => 'Visit us on GitHub',
        'icon'  => 'el el-github'
        //'img'   => '', // You can use icon OR img. IMG needs to be a full URL.
    );*/
    /*$args['share_icons'][] = array(
        'url'   => 'https://www.facebook.com/jagonzalez.org/',
        'title' => 'Sigueme en Facebook',
        'icon'  => 'el el-facebook'
    );
    $args['share_icons'][] = array(
        'url'   => 'https://twitter.com/belial9826',
        'title' => 'Follow us on Twitter',
        'icon'  => 'el el-twitter'
    );
    $args['share_icons'][] = array(
        'url'   => 'https://co.linkedin.com/in/juliangonzalezvillanueva',
        'title' => 'Find us on LinkedIn',
        'icon'  => 'el el-linkedin'
    );*/

    // Panel Intro text -> before the form
    if ( ! isset( $args['global_variable'] ) || $args['global_variable'] !== false ) {
        if ( ! empty( $args['global_variable'] ) ) {
            $v = $args['global_variable'];
        } else {
            $v = str_replace( '-', '_', $args['opt_name'] );
        }
        //$args['intro_text'] = sprintf( __( '<p>Did you know that Redux sets a global variable for you? To access any of your saved options from within your code you can use your global variable: <strong>$%1$s</strong></p>', 'redux-framework-demo' ), $v );
    } else {
        //$args['intro_text'] = __( '<p>This text is displayed above the options panel. It isn\'t required, but more info is always better! The intro_text field accepts all HTML.</p>', 'redux-framework-demo' );
    }

    // Add content after the form.
    //$args['footer_text'] = __( '<p>This text is displayed below the options panel. It isn\'t required, but more info is always better! The footer_text field accepts all HTML.</p>', 'redux-framework-demo' );

    Redux::setArgs( $opt_name, $args );

    /*
     * ---> END ARGUMENTS
     */

    /*
     * ---> START HELP TABS
     */

    $tabs = array(
        array(
            'id'      => 'redux-help-tab-1',
            'title'   => __( 'Theme Information 1', 'redux-framework-demo' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'redux-framework-demo' )
        ),
        array(
            'id'      => 'redux-help-tab-2',
            'title'   => __( 'Theme Information 2', 'redux-framework-demo' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'redux-framework-demo' )
        )
    );
    Redux::setHelpTab( $opt_name, $tabs );

    // Set the help sidebar
    $content = __( '<p>This is the sidebar content, HTML is allowed.</p>', 'redux-framework-demo' );
    Redux::setHelpSidebar( $opt_name, $content );


    /*
     * <--- END HELP TABS
     */


    /*
     *
     * ---> START SECTIONS
     *
     */

    /*

        As of Redux 3.5+, there is an extensive API. This API can be used in a mix/match mode allowing for


     */


    /*Header del sitio*/
    Redux::setSection( $opt_name, array(
        'title'  => __( 'Header', 'redux-framework-demo' ),
        'id'     => 'confHeaderGeneral',
        'desc'   => __( 'Configuración de la apariencia del header.', 'redux-framework-demo' ),
        'icon'   => 'el el-chevron-up',
    ) );

    Redux::setSection( $opt_name, array(
        'title'  => __( 'Header', 'redux-framework-demo' ),
        'id'     => 'confHeader',
        'subsection'    => true,
        'desc'   => __( 'Configuración para mostrar en el Header del sitio web.', 'redux-framework-demo' ),
        'fields' => array(

            array(
                'id'       => 'img_logo_header',
                'type'     => 'media',
                'url'      => true,
                'title'    => __( 'Imagen del logo en el header', 'redux-framework-demo' ),
                'compiler' => 'true',
                //'mode'      => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                'desc'     => __( 'Carga la imagen que se mostrará en el logo.', 'redux-framework-demo' ),
                'subtitle' => __( '', 'redux-framework-demo' ),
                'default'  => array( 'url' => 'http://s.wordpress.org/style/images/codeispoetry.png' ),
                'hint'      => array(
                    'title'     => '',
                    'content'   => 'Tamaño recomendado: 1000px x 464px.',
                )
            ),
            array(
                'id'       => 'chk_act_menu',
                'type'     => 'checkbox',
                'title'    => __('Mostrar Menu en el header', 'redux-framework-demo'),
                'subtitle' => __('', 'redux-framework-demo'),
                'desc'     => __('Si esta marcado el check, se mostrará el menu en el header. En caso contrario se muestra titulo y descripcion del sitio', 'redux-framework-demo'),
                'default'  => '1'// 1 = on | 0 = off
            ),

            array(
                'id'       => 'chk_buscaheader',
                'type'     => 'checkbox',
                'title'    => __('Mostrar buscador', 'redux-framework-demo'),
                'subtitle' => __('', 'redux-framework-demo'),
                'desc'     => __('Si esta marcado el check, se mostrará el buscador en el header.', 'redux-framework-demo'),
                'default'  => '1'// 1 = on | 0 = off
            ),

            array(
               'id' => 'start_buscadorheader',
               'type' => 'section',
               'title' => __('Buscador', 'redux-framework-demo'),
               'subtitle' => __('Selecciona si desea mostrar el buscador en el header.', 'redux-framework-demo'),
               'indent' => true
            ),

            array(
                'id'     => 'end_buscadorheader',
                'type'   => 'section',
                'indent' => true,
            ),




        )
    ) );


    /*Footer del sitio*/
    Redux::setSection( $opt_name, array(
        'title'  => __( 'Footer', 'redux-framework-demo' ),
        'id'     => 'confFooter',
        'desc'   => __( 'Configuración de las opciones del footer.', 'redux-framework-demo' ),
        'icon'   => 'el el-chevron-down',
    ) );

    Redux::setSection( $opt_name, array(
        'title'  => __( 'Arriba', 'redux-framework-demo' ),
        'id'     => 'confArribaFoot',
        'subsection'    => true,
        'desc'   => __( 'Configuración de la sección de Logo y redes.', 'redux-framework-demo' ),
        'fields' => array(

            array(
                'id'               => 'text_info_col1',
                'type'             => 'editor',
                'title'            => __('Texto de información de la sección del Pre Footer', 'redux-framework-demo'),
                'subtitle'         => __('Digita el texto a mostrar de la columna 1.', 'redux-framework-demo'),
                'default'          => '',
                'args'   => array(
                    'teeny'            => false,
                    'textarea_rows'    => 10
                )
            ),

            array(
                'id'               => 'text_info_col2',
                'type'             => 'editor',
                'title'            => __('Texto de información de la sección del Pre Footer', 'redux-framework-demo'),
                'subtitle'         => __('Digita el texto a mostrar de la columna 2.', 'redux-framework-demo'),
                'default'          => '',
                'args'   => array(
                    'teeny'            => false,
                    'textarea_rows'    => 10
                )
            ),
            array(
                'id'       => 'cod_mapacol2_footer',
                'type'     => 'ace_editor',
                'title'    => __('Código Google Maps', 'redux-framework-demo'),
                'subtitle' => __('Pegue el código para incluir el mapa a visualizar.', 'redux-framework-demo'),
                'mode'     => 'js',
                'theme'    => 'monokai',
                'desc'     => 'Possible modes can be found at <a href="http://ace.c9.io" target="_blank">http://ace.c9.io/</a>.',
                'default'  => ""
            ),

            array(
                'id'               => 'text_info_col3',
                'type'             => 'editor',
                'title'            => __('Texto de información de la sección del Pre Footer', 'redux-framework-demo'),
                'subtitle'         => __('Digita el texto a mostrar de la columna 3.', 'redux-framework-demo'),
                'default'          => '',
                'args'   => array(
                    'teeny'            => false,
                    'textarea_rows'    => 10
                )
            ),




        )
    ));

    /*Opciones Generales del Sitio */
    Redux::setSection( $opt_name, array(
        'title'  => __( 'General', 'redux-framework-demo' ),
        'id'     => 'confGeneral',
        'desc'   => __( 'Configuración general del sitio.', 'redux-framework-demo' ),
        'icon'   => 'el el-cog',
    ) );

    Redux::setSection( $opt_name, array(
        'title'         => __( 'Lateral Curso', 'redux-framework-demo' ),
        'id'            => 'confLateCurso',
        'subsection'    => true,
        'desc'          => __( 'Publicidad Lateral Curso.', 'redux-framework-demo' ),
        'fields'        => array(
            array(
                'id'    => 'info_latecurso',
                'type'  => 'info',
                'style' => 'success',
                'title' => __('Shortcode', 'redux-framework-demo'),
                'icon'  => 'el-icon-info-sign',
                'desc'  => __( 'Para usar esta publicidad haga uso del siguiente shortcode: <code>[short_promocurso]</code>.', 'redux-framework-demo')
            ),
            array(
                'id'          => 'slide_latecurso',
                'type'        => 'slides',
                'title'       => __('Añadir Slides', 'redux-framework-demo'),
                'subtitle'    => __('', 'redux-framework-demo'),
                'desc'        => __('Añade y ordena los slides a mostrar en el Slider.', 'redux-framework-demo'),
                'placeholder' => array(
                    'title'           => __('Texto del enlace', 'redux-framework-demo'),
                    'description'     => __('Información a mostrar. Se permite el uso de HTML.', 'redux-framework-demo'),
                    'url'             => __('URL del enlace', 'redux-framework-demo'),
                ),
                'show' => array(
                    'title' => false,
                    'description' => false,
                    'url' => true
                ),
            ),

        )
    ) );


    Redux::setSection( $opt_name, array(
        'title'         => __( 'Configuraciónes', 'redux-framework-demo' ),
        'id'            => 'conf_opciones_generales',
        'subsection'    => true,
        'desc'          => __( 'Configuración de las redes sociales.', 'redux-framework-demo' ),
        'fields'        => array(
            array(
                'id'       => 'med_favicon',
                'type'     => 'media',
                'url'      => true,
                'title'    => __( 'Imagen del Favicon', 'redux-framework-demo' ),
                'compiler' => 'true',
                //'mode'      => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                'desc'     => __( 'Carga la imagen que se mostrará en el Favicon.', 'redux-framework-demo' ),
                'subtitle' => __( '', 'redux-framework-demo' ),
                'default'  => array( 'url' => 'http://s.wordpress.org/style/images/codeispoetry.png' ),
                'hint'      => array(
                    'title'     => '',
                    'content'   => 'Tamaño ideal 110 x 110 px en formaton png.',
                )
            ),
            array(
                'id'       => 'med_imgfondobody',
                'type'     => 'media',
                'url'      => true,
                'title'    => __( 'Imagen de fondo del Body', 'redux-framework-demo' ),
                'compiler' => 'true',
                //'mode'      => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                'desc'     => __( 'Carga la imagen que se mostrará en el Body.', 'redux-framework-demo' ),
                'subtitle' => __( '', 'redux-framework-demo' ),
                'default'  => array( 'url' => 'http://s.wordpress.org/style/images/codeispoetry.png' ),
                'hint'      => array(
                    'title'     => '',
                    'content'   => '',
                )
            ),
            array(
               'id' => 'start_Ubicacion',
               'type' => 'section',
               'title' => __('Datos de Ubicación', 'redux-framework-demo'),
               'subtitle' => __('En esta seccion configura los datos de ubicación de la empresa.', 'redux-framework-demo'),
               'indent' => true
            ),
            array(
                'id'       => 'txt_direccionEmpresa',
                'type'     => 'text',
                'title'    => __('Dirección ', 'redux-framework-demo'),
                'subtitle' => __('', 'redux-framework-demo'),
                'desc'     => __('Escriba la dirección de la empresa', 'redux-framework-demo'),
            ),
            array(
                'id'       => 'txt_ciudadEmpresa',
                'type'     => 'text',
                'title'    => __('Ciudad ', 'redux-framework-demo'),
                'subtitle' => __('', 'redux-framework-demo'),
                'desc'     => __('Escriba la ciudad donde se encuentra la empresa', 'redux-framework-demo'),
            ),
            array(
                'id'       => 'txt_PBXEmpresa',
                'type'     => 'text',
                'title'    => __('PBX ', 'redux-framework-demo'),
                'subtitle' => __('', 'redux-framework-demo'),
                'desc'     => __('Escriba el PBX de la empresa', 'redux-framework-demo'),
            ),
            array(
                'id'       => 'txt_telefonoEmpresa',
                'type'     => 'text',
                'title'    => __('Teléfono ', 'redux-framework-demo'),
                'subtitle' => __('', 'redux-framework-demo'),
                'desc'     => __('Escriba el teléfono de la empresa', 'redux-framework-demo'),
            ),
            array(
                'id'       => 'txt_mailEmpresa',
                'type'     => 'text',
                'title'    => __('E-mail ', 'redux-framework-demo'),
                'subtitle' => __('', 'redux-framework-demo'),
                'desc'     => __('Escriba el E-Mail de la empresa', 'redux-framework-demo'),
            ),
            array(
                'id'       => 'cod_mapa',
                'type'     => 'ace_editor',
                'title'    => __('Código Google Maps', 'redux-framework-demo'),
                'subtitle' => __('Pegue el código para incluir el mapa a visualizar.', 'redux-framework-demo'),
                'mode'     => 'js',
                'theme'    => 'monokai',
                'desc'     => 'Possible modes can be found at <a href="http://ace.c9.io" target="_blank">http://ace.c9.io/</a>.',
                'default'  => ""
            ),
            array(
                'id'       => 'cod_mapacalle',
                'type'     => 'ace_editor',
                'title'    => __('Código Street View', 'redux-framework-demo'),
                'subtitle' => __('Pegue el código para incluir el mapa a visualizar.', 'redux-framework-demo'),
                'mode'     => 'js',
                'theme'    => 'monokai',
                'desc'     => 'Possible modes can be found at <a href="http://ace.c9.io" target="_blank">http://ace.c9.io/</a>.',
                'default'  => ""
            ),
            array(
               'id' => 'end_Ubicacion',
               'type' => 'section',
               'indent' => true
            ),
            array(
               'id' => 'start_redesEmpresa',
               'type' => 'section',
               'title' => __('Redes Sociales', 'redux-framework-demo'),
               'subtitle' => __('En esta seccion configura los datos de las redes sociales.', 'redux-framework-demo'),
               'indent' => true
            ),
            array(
                'id'       => 'url_social_facebook',
                'type'     => 'text',
                'title'    => __('URL Facebook', 'redux-framework-demo'),
                'subtitle' => __('', 'redux-framework-demo'),
                'desc'     => __('Esta url se usa en diversas partes del sitio', 'redux-framework-demo'),
            ),
            array(
                'id'       => 'url_social_instagram',
                'type'     => 'text',
                'title'    => __('URL Instagram', 'redux-framework-demo'),
                'subtitle' => __('', 'redux-framework-demo'),
                'desc'     => __('Esta url se usa en diversas partes del sitio', 'redux-framework-demo'),
            ),
            array(
                'id'       => 'url_social_pinterest',
                'type'     => 'text',
                'title'    => __('URL Pinterest', 'redux-framework-demo'),
                'subtitle' => __('', 'redux-framework-demo'),
                'desc'     => __('Esta url se usa en diversas partes del sitio', 'redux-framework-demo'),
            ),
            array(
                'id'       => 'url_social_twitter',
                'type'     => 'text',
                'title'    => __('URL Twitter', 'redux-framework-demo'),
                'subtitle' => __('', 'redux-framework-demo'),
                'desc'     => __('Esta url se usa en diversas partes del sitio', 'redux-framework-demo'),
            ),
            array(
                'id'       => 'url_social_youtube',
                'type'     => 'text',
                'title'    => __('URL Youtube', 'redux-framework-demo'),
                'subtitle' => __('', 'redux-framework-demo'),
                'desc'     => __('Esta url se usa en diversas partes del sitio', 'redux-framework-demo'),
            ),
            array(
                'id'       => 'url_social_whatsapp',
                'type'     => 'text',
                'title'    => __('URL Whatsapp', 'redux-framework-demo'),
                'subtitle' => __('', 'redux-framework-demo'),
                'desc'     => __('Esta url se usa en diversas partes del sitio', 'redux-framework-demo'),
            ),
            array(
                'id'       => 'url_social_googleplus',
                'type'     => 'text',
                'title'    => __('URL Google Plus', 'redux-framework-demo'),
                'subtitle' => __('', 'redux-framework-demo'),
                'desc'     => __('Esta url se usa en diversas partes del sitio', 'redux-framework-demo'),
            ),
            array(
               'id' => 'end_redesEmpresa',
               'type' => 'section',
               'indent' => true
            ),

            array(
               'id' => 'start_codigosweb',
               'type' => 'section',
               'title' => __('Códigos Sitio Web', 'redux-framework-demo'),
               'subtitle' => __('En esta seccion configura los datos de las redes sociales.', 'redux-framework-demo'),
               'indent' => true
            ),
            array(
                'id'       => 'cod_analytics',
                'type'     => 'ace_editor',
                'title'    => __('Código Google Analytics', 'redux-framework-demo'),
                'subtitle' => __('Pegue el código para incluir el analizador de visitas.', 'redux-framework-demo'),
                'mode'     => 'js',
                'theme'    => 'monokai',
                'desc'     => 'Possible modes can be found at <a href="http://ace.c9.io" target="_blank">http://ace.c9.io/</a>.',
                'default'  => ""
            ),
            array(
                'id'       => 'cod_pixel',
                'type'     => 'ace_editor',
                'title'    => __('Código Pixel Facebook', 'redux-framework-demo'),
                'subtitle' => __('Pegue el código para incluir el Pixel de Facebook.', 'redux-framework-demo'),
                'mode'     => 'js',
                'theme'    => 'monokai',
                'desc'     => 'Possible modes can be found at <a href="http://ace.c9.io" target="_blank">http://ace.c9.io/</a>.',
                'default'  => ""
            ),
            array(
                'id'       => 'cod_chat',
                'type'     => 'ace_editor',
                'title'    => __('Código chat de la página', 'redux-framework-demo'),
                'subtitle' => __('Pegue el código para incluir el chat en el sitio web.', 'redux-framework-demo'),
                'mode'     => 'js',
                'theme'    => 'monokai',
                'desc'     => 'Possible modes can be found at <a href="http://ace.c9.io" target="_blank">http://ace.c9.io/</a>.',
                'default'  => ""
            ),
            array(
               'id' => 'end_codigosweb',
               'type' => 'section',
               'indent' => true
            ),


        )
    ) );

    Redux::setSection( $opt_name, array(
        'title'  => __( 'Colores', 'redux-framework-demo' ),
        'id'     => 'confColoresGeneral',
        'subsection'    => true,
        'desc'   => __( 'Configuración de los colores de algunas secciones del sitio.', 'redux-framework-demo' ),
        'fields' => array(

            array(
               'id' => 'start_ColoresHeader',
               'type' => 'section',
               'title' => __('Colores en el Header', 'redux-framework-demo'),
               'subtitle' => __('En esta seccion configura los colores del Header.', 'redux-framework-demo'),
               'indent' => true 
            ),
            array(
                'id'        => 'selcolor_fondoheader',
                'type'      => 'color_rgba',
                'title'     => 'Fondo Header',
                'subtitle'  => 'Configuracion del color',
                'desc'      => 'Selecciona el color de fondo que tendra el Header del sitio.',
                'default'   => array(
                    'color'     => '#343a40',
                    'alpha'     => 1
                ),
                'options'       => array(
                    'show_input'                => true,
                    'show_initial'              => true,
                    'show_alpha'                => true,
                    'show_palette'              => false,
                    'show_palette_only'         => false,
                    'show_selection_palette'    => true,
                    'max_palette_size'          => 10,
                    'allow_empty'               => true,
                    'clickout_fires_change'     => false,
                    'choose_text'               => 'Escoger',
                    'cancel_text'               => 'Cancelar',
                    'show_buttons'              => true,
                    'use_extended_classes'      => true,
                    'palette'                   => null,  // show default
                    'input_text'                => 'Selecciona el color'
                ),                        
            ),
            array(
                'id'        => 'selcolor_menuheader',
                'type'      => 'color_rgba',
                'title'     => 'Color Menu',
                'subtitle'  => '',
                'desc'      => 'Color de fondo para los item del menu principal.',
                'default'   => array(
                    'color'     => '#fff',
                    'alpha'     => 0.5
                ),
                'options'       => array(
                    'show_input'                => true,
                    'show_initial'              => true,
                    'show_alpha'                => true,
                    'show_palette'              => false,
                    'show_palette_only'         => false,
                    'show_selection_palette'    => true,
                    'max_palette_size'          => 10,
                    'allow_empty'               => true,
                    'clickout_fires_change'     => false,
                    'choose_text'               => 'Escoger',
                    'cancel_text'               => 'Cancelar',
                    'show_buttons'              => true,
                    'use_extended_classes'      => true,
                    'palette'                   => null,  // show default
                    'input_text'                => 'Selecciona el color'
                ),                        
            ),
            
            array(
               'id' => 'end_ColoresHeader',
               'type' => 'section',
               'indent' => true 
            ), 

            array(
               'id' => 'start_ColoresFooter',
               'type' => 'section',
               'title' => __('Colores en el Footer', 'redux-framework-demo'),
               'subtitle' => __('En esta seccion configura los colores del Footer.', 'redux-framework-demo'),
               'indent' => true 
            ),
            array(
                'id'        => 'selcolor_PreFooter',
                'type'      => 'color_rgba',
                'title'     => 'Fondo Pre Footer',
                'subtitle'  => 'Configuracion del color de fondo',
                'desc'      => 'Selecciona el color de fondo que tendra el Pre Footer del sitio.',
                'default'   => array(
                    'color'     => '#0B0B0B',
                    'alpha'     => 1
                ),
                'options'       => array(
                    'show_input'                => true,
                    'show_initial'              => true,
                    'show_alpha'                => true,
                    'show_palette'              => false,
                    'show_palette_only'         => false,
                    'show_selection_palette'    => true,
                    'max_palette_size'          => 10,
                    'allow_empty'               => true,
                    'clickout_fires_change'     => false,
                    'choose_text'               => 'Escoger',
                    'cancel_text'               => 'Cancelar',
                    'show_buttons'              => true,
                    'use_extended_classes'      => true,
                    'palette'                   => null,  // show default
                    'input_text'                => 'Selecciona el color'
                ),                        
            ),      
            array(
                'id'        => 'selcolor_TextoPreFooter',
                'type'      => 'color_rgba',
                'title'     => 'Texto Pre Footer',
                'subtitle'  => 'Configuracion del color del texto',
                'desc'      => 'Selecciona el color del texto en el Pre Footer del sitio.',
                'default'   => array(
                    'color'     => '#ffffff',
                    'alpha'     => 1
                ),
                'options'       => array(
                    'show_input'                => true,
                    'show_initial'              => true,
                    'show_alpha'                => true,
                    'show_palette'              => false,
                    'show_palette_only'         => false,
                    'show_selection_palette'    => true,
                    'max_palette_size'          => 10,
                    'allow_empty'               => true,
                    'clickout_fires_change'     => false,
                    'choose_text'               => 'Escoger',
                    'cancel_text'               => 'Cancelar',
                    'show_buttons'              => true,
                    'use_extended_classes'      => true,
                    'palette'                   => null,  // show default
                    'input_text'                => 'Selecciona el color'
                ),                        
            ),       
            array(
                'id'        => 'selcolor_TitulosPreFooter',
                'type'      => 'color_rgba',
                'title'     => 'Titulos Pre Footer',
                'subtitle'  => 'Configuracion del color de los titulos',
                'desc'      => 'Selecciona el color de los titulos en el Pre Footer del sitio.',
                'default'   => array(
                    'color'     => '#ffffff',
                    'alpha'     => 1
                ),
                'options'       => array(
                    'show_input'                => true,
                    'show_initial'              => true,
                    'show_alpha'                => true,
                    'show_palette'              => false,
                    'show_palette_only'         => false,
                    'show_selection_palette'    => true,
                    'max_palette_size'          => 10,
                    'allow_empty'               => true,
                    'clickout_fires_change'     => false,
                    'choose_text'               => 'Escoger',
                    'cancel_text'               => 'Cancelar',
                    'show_buttons'              => true,
                    'use_extended_classes'      => true,
                    'palette'                   => null,  // show default
                    'input_text'                => 'Selecciona el color'
                ),                        
            ), 
            array(
                'id'        => 'selcolor_LineasPreFooter',
                'type'      => 'color_rgba',
                'title'     => 'Lineas Pre Footer',
                'subtitle'  => 'Configuracion del color de las lineas de los titulos',
                'desc'      => 'Selecciona el color de las lineas en los titulos en el Pre Footer del sitio.',
                'default'   => array(
                    'color'     => '#ffffff',
                    'alpha'     => 1
                ),
                'options'       => array(
                    'show_input'                => true,
                    'show_initial'              => true,
                    'show_alpha'                => true,
                    'show_palette'              => false,
                    'show_palette_only'         => false,
                    'show_selection_palette'    => true,
                    'max_palette_size'          => 10,
                    'allow_empty'               => true,
                    'clickout_fires_change'     => false,
                    'choose_text'               => 'Escoger',
                    'cancel_text'               => 'Cancelar',
                    'show_buttons'              => true,
                    'use_extended_classes'      => true,
                    'palette'                   => null,  // show default
                    'input_text'                => 'Selecciona el color'
                ),                        
            ),        
            array(
                'id'        => 'selcolor_Footer',
                'type'      => 'color_rgba',
                'title'     => 'Fondo Footer',
                'subtitle'  => 'Configuracion del color de fondo',
                'desc'      => 'Selecciona el color de fondo que tendra el Footer del sitio.',
                'default'   => array(
                    'color'     => '#000000',
                    'alpha'     => 1
                ),
                'options'       => array(
                    'show_input'                => true,
                    'show_initial'              => true,
                    'show_alpha'                => true,
                    'show_palette'              => false,
                    'show_palette_only'         => false,
                    'show_selection_palette'    => true,
                    'max_palette_size'          => 10,
                    'allow_empty'               => true,
                    'clickout_fires_change'     => false,
                    'choose_text'               => 'Escoger',
                    'cancel_text'               => 'Cancelar',
                    'show_buttons'              => true,
                    'use_extended_classes'      => true,
                    'palette'                   => null,  // show default
                    'input_text'                => 'Selecciona el color'
                ),                        
            ),       
            array(
                'id'        => 'selcolor_TextoFooter',
                'type'      => 'color_rgba',
                'title'     => 'Texto Footer',
                'subtitle'  => 'Configuracion del color del texto',
                'desc'      => 'Selecciona el color del texto en el Footer del sitio.',
                'default'   => array(
                    'color'     => '#ffffff',
                    'alpha'     => 1
                ),
                'options'       => array(
                    'show_input'                => true,
                    'show_initial'              => true,
                    'show_alpha'                => true,
                    'show_palette'              => false,
                    'show_palette_only'         => false,
                    'show_selection_palette'    => true,
                    'max_palette_size'          => 10,
                    'allow_empty'               => true,
                    'clickout_fires_change'     => false,
                    'choose_text'               => 'Escoger',
                    'cancel_text'               => 'Cancelar',
                    'show_buttons'              => true,
                    'use_extended_classes'      => true,
                    'palette'                   => null,  // show default
                    'input_text'                => 'Selecciona el color'
                ),                        
            ),            
            array(
               'id' => 'end_ColoresFooter',
               'type' => 'section',
               'indent' => true 
            ), 


            array(
               'id' => 'start_ColoresMenu',
               'type' => 'section',
               'title' => __('Colores en el Menú', 'redux-framework-demo'),
               'subtitle' => __('En esta seccion configura los colores del Menú.', 'redux-framework-demo'),
               'indent' => true 
            ),
            array(
                'id'        => 'selcolor_FondoMenu',
                'type'      => 'color_rgba',
                'title'     => 'Color de fondo en el Menú',
                'subtitle'  => 'Configuracion del color',
                'desc'      => 'Selecciona el color de fondo que tendra el Menú del sitio.',
                'default'   => array(
                    'color'     => 'transparent',
                    'alpha'     => 0
                ),
                'options'       => array(
                    'show_input'                => true,
                    'show_initial'              => true,
                    'show_alpha'                => true,
                    'show_palette'              => false,
                    'show_palette_only'         => false,
                    'show_selection_palette'    => true,
                    'max_palette_size'          => 10,
                    'allow_empty'               => true,
                    'clickout_fires_change'     => false,
                    'choose_text'               => 'Escoger',
                    'cancel_text'               => 'Cancelar',
                    'show_buttons'              => true,
                    'use_extended_classes'      => true,
                    'palette'                   => null,  // show default
                    'input_text'                => 'Selecciona el color'
                ),                        
            ),
            array(
                'id'        => 'selcolor_FondoLevel1Menu',
                'type'      => 'color_rgba',
                'title'     => 'Color de fondo en el Menú nivel 1',
                'subtitle'  => 'Configuracion del color',
                'desc'      => 'Selecciona el color de fondo que tendra el Menú del nivel 1 del sitio.',
                'default'   => array(
                    'color'     => 'transparent',
                    'alpha'     => 0
                ),
                'options'       => array(
                    'show_input'                => true,
                    'show_initial'              => true,
                    'show_alpha'                => true,
                    'show_palette'              => false,
                    'show_palette_only'         => false,
                    'show_selection_palette'    => true,
                    'max_palette_size'          => 10,
                    'allow_empty'               => true,
                    'clickout_fires_change'     => false,
                    'choose_text'               => 'Escoger',
                    'cancel_text'               => 'Cancelar',
                    'show_buttons'              => true,
                    'use_extended_classes'      => true,
                    'palette'                   => null,  // show default
                    'input_text'                => 'Selecciona el color'
                ),                        
            ),        
            array(
                'id'        => 'selcolor_TextoLevel1Menu',
                'type'      => 'color_rgba',
                'title'     => 'Color del texto en el Menú nivel 1',
                'subtitle'  => 'Configuracion del color',
                'desc'      => 'Selecciona el color del texto que tendra el Menú del nivel 1 del sitio.',
                'default'   => array(
                    'color'     => '#ffffff',
                    'alpha'     => 1
                ),
                'options'       => array(
                    'show_input'                => true,
                    'show_initial'              => true,
                    'show_alpha'                => true,
                    'show_palette'              => false,
                    'show_palette_only'         => false,
                    'show_selection_palette'    => true,
                    'max_palette_size'          => 10,
                    'allow_empty'               => true,
                    'clickout_fires_change'     => false,
                    'choose_text'               => 'Escoger',
                    'cancel_text'               => 'Cancelar',
                    'show_buttons'              => true,
                    'use_extended_classes'      => true,
                    'palette'                   => null,  // show default
                    'input_text'                => 'Selecciona el color'
                ),                        
            ),    
            array(
                'id'        => 'selcolor_HoverFondoLevel1Menu',
                'type'      => 'color_rgba',
                'title'     => 'Color de fondo al hover en el Menú nivel 1',
                'subtitle'  => 'Configuracion del color',
                'desc'      => 'Selecciona el color de fondo al hover que tendra el Menú del nivel 1 del sitio.',
                'default'   => array(
                    'color'     => '#ffffff',
                    'alpha'     => 1
                ),
                'options'       => array(
                    'show_input'                => true,
                    'show_initial'              => true,
                    'show_alpha'                => true,
                    'show_palette'              => false,
                    'show_palette_only'         => false,
                    'show_selection_palette'    => true,
                    'max_palette_size'          => 10,
                    'allow_empty'               => true,
                    'clickout_fires_change'     => false,
                    'choose_text'               => 'Escoger',
                    'cancel_text'               => 'Cancelar',
                    'show_buttons'              => true,
                    'use_extended_classes'      => true,
                    'palette'                   => null,  // show default
                    'input_text'                => 'Selecciona el color'
                ),                        
            ),        
            array(
                'id'        => 'selcolor_HoverTextoLevel1Menu',
                'type'      => 'color_rgba',
                'title'     => 'Color del texto al hover en el Menú nivel 1',
                'subtitle'  => 'Configuracion del color',
                'desc'      => 'Selecciona el color del texto al hover que tendra el Menú del nivel 1 del sitio.',
                'default'   => array(
                    'color'     => '#444444',
                    'alpha'     => 1
                ),
                'options'       => array(
                    'show_input'                => true,
                    'show_initial'              => true,
                    'show_alpha'                => true,
                    'show_palette'              => false,
                    'show_palette_only'         => false,
                    'show_selection_palette'    => true,
                    'max_palette_size'          => 10,
                    'allow_empty'               => true,
                    'clickout_fires_change'     => false,
                    'choose_text'               => 'Escoger',
                    'cancel_text'               => 'Cancelar',
                    'show_buttons'              => true,
                    'use_extended_classes'      => true,
                    'palette'                   => null,  // show default
                    'input_text'                => 'Selecciona el color'
                ),                        
            ),    
            array(
                'id'        => 'selcolor_FondoLevel2Menu',
                'type'      => 'color_rgba',
                'title'     => 'Color de fondo en el Menú nivel 2',
                'subtitle'  => 'Configuracion del color',
                'desc'      => 'Selecciona el color de fondo que tendra el Menú del nivel 2 del sitio.',
                'default'   => array(
                    'color'     => '#ffffff',
                    'alpha'     => 1
                ),
                'options'       => array(
                    'show_input'                => true,
                    'show_initial'              => true,
                    'show_alpha'                => true,
                    'show_palette'              => false,
                    'show_palette_only'         => false,
                    'show_selection_palette'    => true,
                    'max_palette_size'          => 10,
                    'allow_empty'               => true,
                    'clickout_fires_change'     => false,
                    'choose_text'               => 'Escoger',
                    'cancel_text'               => 'Cancelar',
                    'show_buttons'              => true,
                    'use_extended_classes'      => true,
                    'palette'                   => null,  // show default
                    'input_text'                => 'Selecciona el color'
                ),                        
            ),        
            array(
                'id'        => 'selcolor_TextoLevel2Menu',
                'type'      => 'color_rgba',
                'title'     => 'Color del texto en el Menú nivel 2',
                'subtitle'  => 'Configuracion del color',
                'desc'      => 'Selecciona el color del texto que tendra el Menú del nivel 2 del sitio.',
                'default'   => array(
                    'color'     => '#444444',
                    'alpha'     => 1
                ),
                'options'       => array(
                    'show_input'                => true,
                    'show_initial'              => true,
                    'show_alpha'                => true,
                    'show_palette'              => false,
                    'show_palette_only'         => false,
                    'show_selection_palette'    => true,
                    'max_palette_size'          => 10,
                    'allow_empty'               => true,
                    'clickout_fires_change'     => false,
                    'choose_text'               => 'Escoger',
                    'cancel_text'               => 'Cancelar',
                    'show_buttons'              => true,
                    'use_extended_classes'      => true,
                    'palette'                   => null,  // show default
                    'input_text'                => 'Selecciona el color'
                ),                        
            ),   

            array(
                'id'        => 'selcolor_HoverFondoLevel2Menu',
                'type'      => 'color_rgba',
                'title'     => 'Color de fondo al hover en el Menú nivel 2',
                'subtitle'  => 'Configuracion del color',
                'desc'      => 'Selecciona el color de fondo al hover que tendra el Menú del nivel 2 del sitio.',
                'default'   => array(
                    'color'     => '#f5f5f5',
                    'alpha'     => 1
                ),
                'options'       => array(
                    'show_input'                => true,
                    'show_initial'              => true,
                    'show_alpha'                => true,
                    'show_palette'              => false,
                    'show_palette_only'         => false,
                    'show_selection_palette'    => true,
                    'max_palette_size'          => 10,
                    'allow_empty'               => true,
                    'clickout_fires_change'     => false,
                    'choose_text'               => 'Escoger',
                    'cancel_text'               => 'Cancelar',
                    'show_buttons'              => true,
                    'use_extended_classes'      => true,
                    'palette'                   => null,  // show default
                    'input_text'                => 'Selecciona el color'
                ),                        
            ),        
            array(
                'id'        => 'selcolor_HoverTextoLevel2Menu',
                'type'      => 'color_rgba',
                'title'     => 'Color del texto al hover en el Menú nivel 2',
                'subtitle'  => 'Configuracion del color',
                'desc'      => 'Selecciona el color del texto al hover que tendra el Menú del nivel 2 del sitio.',
                'default'   => array(
                    'color'     => '#888888',
                    'alpha'     => 1
                ),
                'options'       => array(
                    'show_input'                => true,
                    'show_initial'              => true,
                    'show_alpha'                => true,
                    'show_palette'              => false,
                    'show_palette_only'         => false,
                    'show_selection_palette'    => true,
                    'max_palette_size'          => 10,
                    'allow_empty'               => true,
                    'clickout_fires_change'     => false,
                    'choose_text'               => 'Escoger',
                    'cancel_text'               => 'Cancelar',
                    'show_buttons'              => true,
                    'use_extended_classes'      => true,
                    'palette'                   => null,  // show default
                    'input_text'                => 'Selecciona el color'
                ),                        
            ),            
            array(
               'id' => 'end_ColoresMenu',
               'type' => 'section',
               'indent' => true 
            ), 

        )
    ));





    /*
     * <--- END SECTIONS
     */
