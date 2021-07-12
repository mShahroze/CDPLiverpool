<?php

if ( ! function_exists( 'brunn_select_set_title_standard_with_breadcrumbs_type_for_options' ) ) {
	/**
	 * This function set standard with breadcrumbs title type value for title options map and meta boxes
	 */
	function brunn_select_set_title_standard_with_breadcrumbs_type_for_options( $type ) {
		$type['standard-with-breadcrumbs'] = esc_html__( 'Standard With Breadcrumbs', 'brunn' );
		
		return $type;
	}
	
	add_filter( 'brunn_select_filter_title_type_global_option', 'brunn_select_set_title_standard_with_breadcrumbs_type_for_options' );
	add_filter( 'brunn_select_filter_title_type_meta_boxes', 'brunn_select_set_title_standard_with_breadcrumbs_type_for_options' );
}