<?php if (!defined('FW')) {
	die('Forbidden');
}

$options = array(
	'custom_options' => array( // slug option
		'label'        => __('Test custom option', 'fw'), // title option
		'desc'        => __('Description Test custom option', 'fw'), // description option
		'type'         => 'text', // Type option (text, textarea, checkbox .. more)
		'help'         => __('Help tip', 'fw'), // helper
		//'value'         => 'Default value', // Default value
		//'attr'         => array('class' => 'custom-class', data-foo => 'bar'), // Default attribute
	),
);
