<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
  array(
    'type'  => 'box',
    'context' => 'side', // Sidebar right in editor
    'options' => array(
      'page_edit_box' => array(
        'type'  => 'wp-editor',
        'value' => 'default value',
        'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
        'label' => __('Label', '{domain}'),
        'desc'  => __('Description', '{domain}'),
        'help'  => __('Help tip', '{domain}'),
        'size' => 'small', // small, large
        'editor_height' => 400,
        'wpautop' => true,
        'editor_type' => false, // tinymce, html
      )
    ),
  )
);