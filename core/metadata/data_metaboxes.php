<?php

//Create meta fields for pages and taxonomies alike
function cpotheme_metadata_layout_options() {

	$data = array();

	$data['layout_sidebar'] = array(
		'name'   => 'layout_sidebar',
		'label'  => __( 'Sidebar Position', 'antreas' ),
		'desc'   => __( 'Determines the location of the sidebar by default.', 'antreas' ),
		'type'   => 'imagelist',
		'option' => cpotheme_metadata_sidebarposition_optional(),
		'std'    => 'default',
	);

	if ( defined( 'REVSLIDER_TEXTDOMAIN' ) || function_exists( 'putRevSlider' ) ) {
		$data['page_slider'] = array(
			'name'   => 'page_slider',
			'std'    => '',
			'label'  => __( 'Page Slider', 'antreas' ),
			'desc'   => sprintf( __( 'Sets a slider for this page. Requires the %s plugin.', 'antreas' ), '<a target="_blank" href="http://cpothemes.com/go/revolution-slider-integration">Revolution Slider</a>' ),
			'type'   => 'select',
			'option' => cpotheme_metadata_revsliders(),
			'std'    => '0',
		);
	}

	$data['page_header'] = array(
		'name'   => 'page_header',
		'std'    => '',
		'label'  => __( 'Page Header', 'antreas' ),
		'desc'   => __( 'Specifies the format of the header for this page.', 'antreas' ),
		'type'   => 'select',
		'option' => cpotheme_metadata_page_header(),
		'std'    => 'normal',
	);

	$data['page_title'] = array(
		'name'   => 'page_title',
		'label'  => __( 'Page Title', 'antreas' ),
		'desc'   => __( 'Specifies the format of the title heading for this page.', 'antreas' ),
		'type'   => 'select',
		'option' => cpotheme_metadata_page_title(),
		'std'    => 'normal',
	);

	$data['page_title_area'] = array(
		'name'   => 'page_title_area',
		'label'  => __( 'Page Title Area', 'antreas' ),
		'desc'   => __( 'Specifies the format of the title area for this page.', 'antreas' ),
		'type'   => 'select',
		'option' => cpotheme_metadata_page_title_area(),
		'std'    => 'normal',
	);

	$data['title_area_overlay_color'] = array(
		'name'    => 'title_area_overlay_color',
		'label'   => __( 'Title Overlay Color', 'antreas' ),
		'desc'    => __( 'specify the overlay color for this page title', 'antreas' ),
		'type'    => 'color',
		'std'     => '#000000',
	);

	$data['title_area_overlay_opacity'] = array(
		'name'    => 'title_area_overlay_opacity',
		'label'   => __( 'Title Overlay Transparency', 'antreas' ),
		'desc'    => __( 'specify the overlay transparency for this page title', 'antreas' ),
		'type'    => 'range',
		'attrs'   => array( 'min' => 0, 'max' => 1, 'step' => 0.1 ),
		'std'     => 0.4,
	); 

	$data['page_footer'] = array(
		'name'   => 'page_footer',
		'std'    => '',
		'label'  => __( 'Page Footer', 'antreas' ),
		'desc'   => __( 'Specifies the format of the footer for this page.', 'antreas' ),
		'type'   => 'select',
		'option' => cpotheme_metadata_page_footer(),
		'std'    => 'normal',
	);

	$data['page_full'] = array(
		'name'  => 'page_full',
		'std'   => '',
		'label' => __( 'Full Width Page', 'antreas' ),
		'desc'  => __( 'Allows the page content to fill the entire width of the screen. Useful for creating full width rows with backgrounds.', 'antreas' ),
		'type'  => 'yesno',
	);

	return apply_filters( 'cpotheme_metadata_layout', $data );
}

//Create slide meta fields
function cpotheme_metadata_slide_options() {

	$data = array();

	return apply_filters( 'cpotheme_metadata_slide', $data );
}

//Create feature meta fields
function cpotheme_metadata_feature_options() {

	$data = array();

	$data['feature_icon'] = array(
		'name'  => 'feature_icon',
		'std'   => '',
		'label' => __( 'Feature Icon', 'antreas' ),
		'desc'  => __( 'Sets an icon to be used as the featured element.', 'antreas' ),
		'type'  => 'iconlist',
	);

	return apply_filters( 'cpotheme_metadata_feature', $data );
}


//Create portfolio meta fields
function cpotheme_metadata_portfolio_options() {

	$data = array();

	$data['portfolio_featured'] = array(
		'name'  => 'portfolio_featured',
		'std'   => '',
		'label' => __( 'Featured Item', 'antreas' ),
		'desc'  => __( 'Specifies whether this item appears in the homepage.', 'antreas' ),
		'type'  => 'yesno',
	);

	return apply_filters( 'cpotheme_metadata_portfolio', $data );
}

//Create service meta fields
function cpotheme_metadata_service_options() {

	$data = array();

	$data['service_featured'] = array(
		'name'  => 'service_featured',
		'std'   => '',
		'label' => __( 'Featured Item', 'antreas' ),
		'desc'  => __( 'Specifies whether this item appears in the homepage.', 'antreas' ),
		'type'  => 'yesno',
	);

	$data['service_icon'] = array(
		'name'  => 'service_icon',
		'std'   => '',
		'label' => __( 'Service Icon', 'antreas' ),
		'desc'  => __( 'Sets an icon to be used as the service preview.', 'antreas' ),
		'type'  => 'iconlist',
	);

	return apply_filters( 'cpotheme_metadata_service', $data );
}


//Create client meta fields
function cpotheme_metadata_client_options() {

	$data = array();

	return apply_filters( 'cpotheme_metadata_client', $data );
}


//Create team meta fields
function cpotheme_metadata_team_options() {

	$data = array();

	$data['team_featured'] = array(
		'name'  => 'team_featured',
		'std'   => '',
		'label' => __( 'Featured Member', 'antreas' ),
		'desc'  => __( 'Specifies whether this member appears in the homepage.', 'antreas' ),
		'type'  => 'yesno',
	);

	return apply_filters( 'cpotheme_metadata_team', $data );
}


//Create testimonial meta fields
function cpotheme_metadata_testimonial_options() {

	$data = array();

	return apply_filters( 'cpotheme_metadata_testimonial', $data );
}


//Create page meta fields
function cpotheme_metadata_page_options() {

	$data = array();

	$data['page_featured'] = array(
		'name'   => 'page_featured',
		'std'    => '',
		'label'  => __( 'Show In Homepage', 'antreas' ),
		'desc'   => __( 'Specifies whether this item is featured in the homepage.', 'antreas' ),
		'type'   => 'select',
		'option' => cpotheme_metadata_featured_page(),
	);

	return apply_filters( 'cpotheme_metadata_page', $data );
}
