<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
  'name' => array(
      'type'    => 'text',
      'value' => 'Default value',
      'attr' => array('class' => 'class-name', 'data-foo' => 'bar'),
      'label' => __('Label', 'fw'),
      'desc' => __('Description', 'fw'),
      'help' => __('Helper Tip', 'fw'),
  )
);