<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'font_size'       => array(
		'type' => 'checkbox',
		'label' => __( 'change font size?', 'fw' ),
		'text' => '',
	),
	'size'    => array(
		'type'  => 'text',
		'label' => __( 'Size', 'fw' ),
		'desc'  => __( 'Text Size', 'fw' ),
	),
	'text_class'    => array(
		'type'  => 'text',
		'label' => __( 'Text Class', 'fw' ),
		'desc'  => __( 'Text Class', 'fw' ),
	),
	'content'    => array(
		'type'  => 'textarea',
		'label' => __( 'Text Content', 'fw' ),
		'desc'  => __( 'Text Content', 'fw' ),
	),
	'div'       => array(
		'type' => 'checkbox',
		'label' => __( 'Wrap in div', 'fw' ),
		'text' => '',
	),

	'text_wrapper_div'       => array(
		'type' => 'text',
		'label' => __( 'Wrapper div', 'fw' )
	),

);