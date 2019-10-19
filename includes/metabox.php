<?php
/*Metabox Pagina Inicio Landing*/
function cmb2_pagina_inicio() {
    $prefix = 'cmb2_paghome_';
    $cmb = new_cmb2_box( array(
        'id'           => $prefix.'datos_adicionales',
        'title'        => 'Información a Mostrar',
        'object_types' => array( 'page' ),
        'show_on' => array( 'key' => 'page-template', 'value' => 'page-home.php' ),
        'context'      => 'normal', //  'normal', 'advanced', or 'side'
		'priority'     => 'high',  //  'high', 'core', 'default' or 'low'
		'show_names'   => true, // Show field names on the left
    ) );

    $cmb->add_field( array(
		'name' => 'Seccion Slider Principal',
		'desc' => 'Configura la informacion de la seccion',
		'type' => 'title',
		'id'   => $prefix.'tit_seccsliderprincipal',
	) );
	$cmb->add_field( array(
		'name' => 'Slider Principal',
		'desc' => '',
		'id'   =>  $prefix.'sliderprincipal',
		'type' => 'file_list',
		// 'preview_size' => array( 100, 100 ), // Default: array( 50, 50 )
		'query_args' => array( 'type' => 'image' ), // Only images attachment
		'text' => array(
			'add_upload_files_text' => 'Añadir o cargar archivos', // default: "Add or Upload Files"
			'remove_image_text' => 'Eliminar imagen', // default: "Remove Image"
			'file_text' => 'Imagen', // default: "File:"
			'file_download_text' => 'Descargar', // default: "Download"
			'remove_text' => 'Eliminar', // default: "Remove"
		),
	) );

	/*Eventos anuales*/
    $cmb->add_field( array(
		'name' => 'Seccion Eventos Anuales',
		'desc' => 'Configura la informacion de la seccion',
		'type' => 'title',
		'id'   => $prefix.'tit_seccevetanual',
	) );
	$cmb->add_field( array(
		'name'    => 'Titulo y Descripcion',
		'desc'    => '',
		'id'      => $prefix.'wsg_txtdescevtanual',
		'type'    => 'wysiwyg',
		'options' => array(),
	) );
    //modo oscuro en la seccion
	$cmb->add_field( array(
		'name' => 'Activar capa',
		'desc' => 'Activar capa transparente y texto blanco',
		'id'   => $prefix.'chk_cap_secceventos',
		'type' => 'checkbox',
	) );

	$group_field_id = $cmb->add_field( array(
		'id'          => $prefix.'group_evtanuales',
		'type'        => 'group',
		'description' => __( 'Informacion de los eventos a mostrar', 'cmb2' ),
		// 'repeatable'  => false, // use false if you want non-repeatable group
		'options'     => array(
		'group_title'       => __( 'Evento Anual {#}', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row number
		'add_button'        => __( 'Añadir otro Evento', 'cmb2' ),
		'remove_button'     => __( 'Eliminar Evento', 'cmb2' ),
		'sortable'          => true,
		'closed'         => true,
		// 'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ),
		),
	) );
	$cmb->add_group_field( $group_field_id, array(
		'name'    => 'Titulo',
		'desc'    => 'Titulo del evento anual',
		'id'      => 'txttitanual',
		'type'    => 'text_medium',
		'options' => array()
	) );
	$cmb->add_group_field($group_field_id,  array(
		'name'    => 'Descripcion',
		'desc'    => 'Descripcio del evento anual',
		'id'      => 'wsg_descevtanual',
		'type'    => 'wysiwyg',
		'options' => array(),
	) );

	/*Fin de seccion*/
	/*Talleres y servicios*/
	$cmb->add_field( array(
		'name' => 'Seccion Servicios',
		'desc' => 'Configura la informacion de la seccion',
		'type' => 'title',
		'id'   => $prefix.'tit_seccservicios',
	) );
	$cmb->add_field( array(
		'name'    => 'Titulo y Descripcion',
		'desc'    => '',
		'id'      => $prefix.'wsg_txtdescservs',
		'type'    => 'wysiwyg',
		'options' => array(),
	) );

	$group_field_id = $cmb->add_field( array(
		'id'          => $prefix.'group_servs',
		'type'        => 'group',
		'description' => __( 'Informacion de los servicios a mostrar', 'cmb2' ),
		// 'repeatable'  => false, // use false if you want non-repeatable group
		'options'     => array(
		'group_title'       => __( 'Servicio {#}', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row number
		'add_button'        => __( 'Añadir otro Servicio', 'cmb2' ),
		'remove_button'     => __( 'Eliminar Servicio', 'cmb2' ),
		'sortable'          => true,
		'closed'         => true,
		// 'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ),
		),
	) );
	$cmb->add_group_field( $group_field_id, array(
		'name'    => 'Titulo',
		'desc'    => 'Titulo del Servicio',
		'id'      => 'txttitserv',
		'type'    => 'text_medium',
		'options' => array()
	) );
	$cmb->add_group_field( $group_field_id, array(
		'name' => __( 'URL Servicio', 'cmb2' ),
		'id'   => 'txturlserv',
		'type' => 'text_medium',
	)  );
	$cmb->add_group_field( $group_field_id, array(
		'name'    => 'Imagen personalizada',
		'desc'    => '',
		'id'      => 'imgserv',
		'type'    => 'file',
		// Optional:
		'options' => array(
			'url' => false, // Hide the text input for the url
		),
		'text'    => array(
			'add_upload_file_text' => 'Add File' // Change upload button text. Default: "Add or Upload File"
		),
		'query_args' => array(
			//'type' => 'application/pdf', // Make library only display PDFs.
			// Or only allow gif, jpg, or png images
			/*'type' => array(
			'image/gif',
			'image/jpeg',
			'image/png',
			),*/
		),
		'preview_size' => 'medium', // Image size to use when previewing in the admin.
	)   );
  /*Grupos representativos*/
  $group_field_id = $cmb->add_field( array(
		'id'          => $prefix.'group_repre',
		'type'        => 'group',
		'description' => __( 'Informacion de los Grupos Representativos', 'cmb2' ),
		// 'repeatable'  => false, // use false if you want non-repeatable group
		'options'     => array(
		'group_title'       => __( 'Grupo {#}', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row number
		'add_button'        => __( 'Añadir otro Grupo', 'cmb2' ),
		'remove_button'     => __( 'Eliminar Grupo', 'cmb2' ),
		'sortable'          => true,
		'closed'         => true,
		// 'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ),
		),
	) );
	$cmb->add_group_field( $group_field_id, array(
		'name'    => 'Titulo y Descripcion',
		'desc'    => 'Titulo y descripcion del Grupo',
		'id'      => 'txttitserv',
		'type'    => 'wysiwyg',
		'options' => array(),
	) );
	$cmb->add_group_field( $group_field_id, array(
		'name' => __( 'URL Servicio', 'cmb2' ),
		'id'   => 'txturlserv',
		'type' => 'text_medium',
	)  );
	$cmb->add_group_field( $group_field_id, array(
		'name'    => 'Imagen personalizada',
		'desc'    => '',
		'id'      => 'imgserv',
		'type'    => 'file',
		// Optional:
		'options' => array(
			'url' => false, // Hide the text input for the url
		),
		'text'    => array(
			'add_upload_file_text' => 'Add File' // Change upload button text. Default: "Add or Upload File"
		),
		'query_args' => array(
			//'type' => 'application/pdf', // Make library only display PDFs.
			// Or only allow gif, jpg, or png images
			/*'type' => array(
			'image/gif',
			'image/jpeg',
			'image/png',
			),*/
		),
		'preview_size' => 'medium', // Image size to use when previewing in the admin.
	)   );

}
add_action( 'cmb2_admin_init', 'cmb2_pagina_inicio' );

/*Metabox Pagina Eventos*/
function cmb2_pagina_eventos() {
    $prefix = 'cmb2_pagevts_';
    $cmb = new_cmb2_box( array(
        'id'           => $prefix.'datos_adicionales',
        'title'        => 'Información a Mostrar',
        'object_types' => array( 'page' ),
        'show_on' => array( 'key' => 'page-template', 'value' => 'page-eventos.php' ),
        'context'      => 'normal', //  'normal', 'advanced', or 'side'
		'priority'     => 'high',  //  'high', 'core', 'default' or 'low'
		'show_names'   => true, // Show field names on the left
    ) );

    $cmb->add_field( array(
		'name'    => 'Shortcode Eventos',
		'desc'    => 'El shortcode para mostrar el bloque.',
		'default' => '',
		'id'      => $prefix.'txt_shortpublicaciones',
		'type'    => 'text'
	) );
}
add_action( 'cmb2_admin_init', 'cmb2_pagina_eventos' );
