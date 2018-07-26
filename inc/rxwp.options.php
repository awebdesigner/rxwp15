<?php
namespace inc\Theme\Options;

	class Customizer {

		public function __construct() {
			add_action('customize_register', function($wp_customize) {
			    
				//Add Panel to WP customizer
				$wp_customize->add_panel('rxwp15', [
					'title' => 'Theme options',
					'description' => 'Customization Play ground',
					'capability' => 'edit_theme_options',
					'priority' => 15,
				]);
				
				/* Sections to for the panel */

				$wp_customize->add_section('rxwp15_layout', [
					'title' => 'Layout',
					'description' => 'Choose the base layout columns.',
					'capability' => 'edit_theme_options',
					'panel' => 'rxwp15',
					'priority' => 9,
				]);
				
				$wp_customize->add_section('rxwp15_identity', [
					'title' => 'Business identity',
					'description' => 'Work on the logos, icons and some contact details.',
					'capability' => 'edit_theme_options',
					'panel' => 'rxwp15',
					'priority' => 10,
				]);

				$wp_customize->add_section('rxwp15_credits', [
					'title' => 'Credits',
					'description' => 'Credits is one way to appreciate the maker of the theme. Feel free to put your details if you want.',
					'capability' => 'edit_theme_options',
					'panel' => 'rxwp15',
					'priority' => 11,
				]);

				$wp_customize->add_section('rxwp15_cta', [
					'title' => 'Call to action(CTA)',
					'description' => 'Turn visitors into leads or customers.',
					'capability' => 'edit_theme_options',
					'panel' => 'rxwp15',
					'priority' => 12,
				]);

				$wp_customize->add_section('rxwp15_widgets', [
					'title' =>'Widget options',
					'description' => 'Choose the widget areas to enable.',
					'capability' => 'edit_theme_options',
					'panel'=> 'rxwp15',
					'priority' => 13,
				]);

				/*Setting to be added to added to sections*/

				$settings = [
					'primary_color',
					'secondary_color',
					'tartiary_color',
					'body_background_image',
					'layout_width',
					'layout_background_color',
					'layout_background_image',
					'hut_switch',
					'hut_background_color',
					'navbar_position',
					'hero',
					'hero_background_color',
					'hero_background_image',
					'header_switch',
					'header_background_color',
					'header_background_image',
					'logo',
					'logo_position',
					'phone',
					'address',
					'call_action_switch',
					'call_action_label',
					'call_action_url',
					'credit_switch',
					'credit_label',
					'credit_url',
					'background_image',
					'homepage_content',
					'widget_areas_footer_switch',
					'widget_areas_above_content_switch',
					'widget_areas_below_content_switch',
					'widget_areas_left_switch',
					'widget_areas_right_switch',
					'footer_background_color',
					'footer_background_image',
				];

				foreach( $settings as $setting )
					$wp_customize->add_setting('rxwp15_'.$setting );
				
				//Attach form elements/controls to settings
				//Logo: upload control
				$wp_customize->add_control( new \WP_Customize_Upload_Control( $wp_customize, 'rxwp15_logo', [
					'label' => __( 'Logo', 'rxwp15' ),
					'section' => 'rxwp15_identity',
					'settings' => 'rxwp15_logo',
					'priority' => 10,
				]));

				//Logo position: Radio control
				$wp_customize->add_control( new \WP_Customize_Control( $wp_customize, 'rxwp15_logo_position', [
					'label' => __( 'Logo position', 'rxwp15' ),
					'section' => 'rxwp15_identity',
					'settings' => 'rxwp15_logo_position',
					'type'=>'radio',
					'choices'=> [
						'1'=>'Left',
						'2'=>'Centered',
						'3'=>'In menu',
						'4'=>'In menu + header',
					],
				]));

				//Body background image: Upload control
				$wp_customize->add_control( new \WP_Customize_Upload_Control( $wp_customize, 'rxwp15_body_background_image', [
					'label' => __( 'Body background image', 'rxwp15' ),
					'section' => 'rxwp15_layout',
					'settings' => 'rxwp15_body_background_image',
				]));

				//Layout Width: Render Radio button
				$wp_customize->add_control( new \WP_Customize_Control( $wp_customize, 'rxwp15_width', [
					'label' => __( 'Layout width', 'rxwp15' ),
					'type'=>'radio',
					'choices'=> [
						'1' => 'Boxed',
						'2' => 'Full width spreadout',
						'3' => 'Full width centered'
					],
					'section' => 'rxwp15_layout',
					'settings' => 'rxwp15_layout_width',

				]));

				//Layout background color: Color control
				$wp_customize->add_control( new \WP_Customize_Color_Control( $wp_customize, 'rxwp15_layout_background_color', [
					'label' => __( 'Layout background color', 'rxwp15' ),
					'section' => 'rxwp15_layout',
					'settings' => 'rxwp15_layout_background_color',
				]));

				//Layout background image: Upload control
				$wp_customize->add_control( new \WP_Customize_Upload_Control( $wp_customize, 'rxwp15_layout_background_image', [
					'label' => __( 'Layout background image', 'rxwp15' ),
					'section' => 'rxwp15_layout',
					'settings' => 'rxwp15_layout_background_image',
				]));
				
				//Hut switch: Render Radio button
				$wp_customize->add_control( new \WP_Customize_Control( $wp_customize, 'rxwp15_hut_switch',[
					'label' => __( 'Show hut', 'rxwp15' ),
					'section' => 'rxwp15_layout',
					'settings' => 'rxwp15_hut_switch',
					'type'=>'radio',
					'choices'=> [
						'1'=>'Yes',
						'2'=>'No'
					],
				]));

				//Change Navbar Position: Render Radio button
				$wp_customize->add_control( new \WP_Customize_Control( $wp_customize, 'rxwp15_navbar_position', [
					'label' => __('Change Navbar Position', 'rxwp15' ),
					'section' => 'rxwp15_layout',
					'settings' => 'rxwp15_navbar_position',
					'type' => 'radio',
					'choices' => [
						'1' => 'Top',
						'2' => 'Below header',
						'3' => 'Below Hero',
						'4' => 'None'
					],
				]));

				//Hero display: Render Radio button
				$wp_customize->add_control( new \WP_Customize_Control( $wp_customize, 'rxwp15_hero', [
					'label' => __( 'Display hero', 'rxwp15' ),
					'section' => 'rxwp15_layout',
					'settings' => 'rxwp15_hero',
					'type' => 'radio',
					'choices' => [
						'1' => 'On all pages',
						'2' => 'Front page only',
						'3' => 'None'
					],
				]));

				//Frontpage content: Render Radio button
				$wp_customize->add_control( new \WP_Customize_Control( $wp_customize, 'rxwp15_homepage_content', [
					'label' => __( 'Frontpage content ', 'rxwp15' ),
					'section' => 'rxwp15_layout',
					'settings' => 'rxwp15_homepage_content',
					'type' => 'radio',
					'choices' => [
						'1' => 'Above widgets',
						'2' => 'Below widgets',
						'3' => 'No display'
					],
				]));

				//Header background color: Color control
				$wp_customize->add_control( new \WP_Customize_Color_Control($wp_customize, 'rxwp15_header_background_color', [
						'label' => __( 'Header background', 'rxwp15' ),
						'section' => 'rxwp15_layout',
						'settings' => 'rxwp15_header_background_color',
				]));

				//Primary color: Color control
				$wp_customize->add_control( new \WP_Customize_Color_Control( $wp_customize, 'rxwp15_primary_color', [
					'label' => __( 'Primary color', 'rxwp15' ),
					'section' => 'rxwp15_layout',
					'settings' => 'rxwp15_primary_color',
				]));

				//Secondary color: Color control
				$wp_customize->add_control( new \WP_Customize_Color_Control( $wp_customize, 'rxwp15_secondary_color', [
					'label' => __( 'Secondary color', 'rxwp15' ),
					'section' => 'rxwp15_layout',
					'settings' => 'rxwp15_secondary_color',
				]));

				//Tartiary color: Color control
				$wp_customize->add_control( new \WP_Customize_Color_Control( $wp_customize, 'rxwp15_tartiary_color', [
					'label' => __( 'Tartiary color', 'rxwp15' ),
					'section' => 'rxwp15_layout',
					'settings' => 'rxwp15_tartiary_color',
				]));

				//Hut background color: Color control
				$wp_customize->add_control( new \WP_Customize_Color_Control( $wp_customize, 'rxwp15_hut_background_color', [
					'label' => __( 'Hut background color', 'rxwp15' ),
					'section' => 'rxwp15_layout',
					'settings' => 'rxwp15_hut_background_color',
				]));

				//Hero background color: Color control
				$wp_customize->add_control( new \WP_Customize_Color_Control( $wp_customize, 'rxwp15_hero_background_color', [
					'label'      => __( 'Hero background color', 'rxwp15' ),
					'section' => 'rxwp15_layout',
					'settings'   => 'rxwp15_hero_background_color',
				]));

				//Hero background image: upload control
				$wp_customize->add_control( new \WP_Customize_Upload_Control( $wp_customize, 'rxwp15_hero_background_image', [
					'label' => __( 'Hero background image', 'rxwp15' ),
					'section' => 'rxwp15_layout',
					'settings' => 'rxwp15_hero_background_image',
				]));

				//Footer background color: Color control
				$wp_customize->add_control( new \WP_Customize_Color_Control( $wp_customize, 'rxwp15_footer_background_color', [
					'label' => __( 'Footer background color', 'rxwp15' ),
					'section' => 'rxwp15_layout',
					'settings' => 'rxwp15_footer_background_color',
				]));

				//Footer background image: upload control
				$wp_customize->add_control( new \WP_Customize_Upload_Control( $wp_customize, 'rxwp15_footer_background_image', [
					'label' => __( 'Footer background image', 'rxwp15' ),
					'section' => 'rxwp15_layout',
					'settings' => 'rxwp15_footer_background_image',
				]));
				
				//Phone: Text control
				$wp_customize->add_control( new \WP_Customize_Control( $wp_customize, 'rxwp15_phone', [
					'label' => __( 'Phone', 'rxwp15' ),
					'section' => 'rxwp15_identity',
					'settings' => 'rxwp15_phone',
					'priority' => 11,
				]));

				//Address: Text control
				$wp_customize->add_control( new \WP_Customize_Control( $wp_customize, 'rxwp15_address', [
					'label' => __( 'Business address', 'rxwp15' ),
					'section' => 'rxwp15_identity',
					'settings' => 'rxwp15_address',
					'priority' => 12,
				]));
			
				//Enter credit: Text control
				$wp_customize->add_control( new \WP_Customize_Control( $wp_customize, 'rxwp15_credit_label', [
					'label' => __( 'Enter credit', 'rxwp15' ),
					'section' => 'rxwp15_credits',
					'settings' => 'rxwp15_credit_label',
					'priority' => 15,
				]));

				//Credit web address: Text control
				$wp_customize->add_control( new \WP_Customize_Control( $wp_customize, 'rxwp15_credit_url', [
					'label' => __( 'Credit web address', 'rxwp15' ),
					'section' => 'rxwp15_credits',
					'settings' => 'rxwp15_credit_url',
					'priority' => 16,
				]));

				//Call to action label: Text control
				$wp_customize->add_control( new \WP_Customize_Control( $wp_customize, 'rxwp15_call_action_label', [
					'label' => __( 'CTA label', 'rxwp15' ),
					'section' => 'rxwp15_cta',
					'settings' => 'rxwp15_call_action_label',
				]));

				//Call to action web address Text control
				$wp_customize->add_control( new \WP_Customize_Control( $wp_customize, 'rxwp15_call_action_url', [
					'label' => __( 'CTA web address', 'rxwp15' ),
					'section' => 'rxwp15_cta',
					'settings' => 'rxwp15_call_action_url',
				]));

				//Frontpage widget areas: Render Radio button
				$wp_customize->add_control( new \WP_Customize_Control( $wp_customize, 'rxwp15_widget_areas_above_content_switch', [
					'label' => __( 'Frontpage widget areas ', 'rxwp15' ),
					'section' => 'rxwp15_layout',
					'settings' => 'rxwp15_widget_options',
					'type' => 'radio',
					'choices' => [
						'1' => 'Off',
						'2' => 'On',
					],
				]));
			});
		}
	}