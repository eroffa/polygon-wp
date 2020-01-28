<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$custom_options = '';
if ( ! empty( $atts['custom_options'] ) ) {
	// Example logic
	$custom_options = 'background-color:' . $atts['custom_options'] . ';';
}

// OR

$custom_options = !empty( $atts['custom_options'] ) ? $atts['custom_options'] : '';
?>

<!-- Example front output -->
<!-- <section class="fw-main-row <?php echo esc_attr($section_extra_classes) ?>" id="<?php echo esc_attr($id_section) ?>" <?php echo $section_style; ?> <?php echo $bg_video_data_attr; ?>>
	<div class="<?php echo esc_attr($container_class); ?>">
		<?php echo do_shortcode( $content ); ?>
	</div>
</section>

<a href="<?php echo esc_attr($atts['link']) ?>" target="<?php echo esc_attr($atts['target']) ?>" class="fw-btn fw-btn-1 <?php echo esc_attr($color_class); ?>">
	<span><?php echo $atts['label']; ?></span>
</a> -->

<div class="as">
	<a href=""><?php esc_attr_e($custom_options); ?></a>
</div>