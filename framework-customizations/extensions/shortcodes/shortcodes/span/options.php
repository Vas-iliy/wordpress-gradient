<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'link'       => array(
		'type' => 'checkbox',
		'label' => __( 'Wrap in link', 'fw' ),
		'text' => '',
	),

	'span_wrapper_link'       => array(
		'type' => 'text',
		'label' => __( 'Wrapper link', 'fw' )
	),

	'span_icon'       => array(
		'type' => 'icon',
		'label' => __( 'Span Icon', 'fw' )
	),

	'span_content'    => array(
		'type'  => 'text',
		'label' => __( 'Span Content', 'fw' ),
		'desc'  => __( 'Span Content', 'fw' ),
	),

	'span_class'    => array(
		'type'  => 'text',
		'label' => __( 'Span Class', 'fw' ),
		'desc'  => __( 'Span Class', 'fw' ),
	),

	'span_data_attrs'    => array(
		'type'  => 'text',
		'label' => __( 'Attributes', 'fw' ),
		'desc'  => __( 'Attributes', 'fw' ),
	)

);