<?php
function flatter_event_metabox( $meta_boxes ) {

	$flatter_prefix = '_flatter_';
	$meta_boxes[] = array(
		'id'        => 'event_single_metaboxs',
		'title'     => esc_html__( 'Page Additional Options', 'flatter-companion' ),
		'post_types'=> array( 'page' ),
		'priority'  => 'high',
		'autosave'  => 'false',
		'fields'    => array(
			array(
				'id'    => $flatter_prefix . 'page_subtitle',
				'type'  => 'textarea',
				'name'  => esc_html__( 'Page Sub Title', 'flatter-companion' ),
				'placeholder' => esc_html__( 'Page Sub Title', 'flatter-companion' ),
			),
		),
	);


	return $meta_boxes;
}
add_filter( 'rwmb_meta_boxes', 'flatter_event_metabox' );