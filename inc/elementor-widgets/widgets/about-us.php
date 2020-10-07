<?php
namespace Flatterelementor\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Scheme_Color;
use Elementor\Utils;
use Elementor\Scheme_Typography;
use Elementor\Group_Control_Typography;
use Elementor\Group_Control_Text_Shadow;



// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


/**
 *
 * Flatter elementor about us section widget.
 *
 * @since 1.0
 */
class Flatter_About_Us extends Widget_Base {

	public function get_name() {
		return 'flatter-aboutus';
	}

	public function get_title() {
		return __( 'About Us', 'flatter-companion' );
	}

	public function get_icon() {
		return 'eicon-column';
	}

	public function get_categories() {
		return [ 'flatter-elements' ];
	}

	protected function _register_controls() {

        // ----------------------------------------  About us content ------------------------------
        $this->start_controls_section(
            'about_content',
            [
                'label' => __( 'About Content', 'flatter-companion' ),
            ]
        );

        $this->add_control(
            'reverse_style',
            [
                'label' => esc_html__( 'Reverse Style', 'flatter-companion' ),
                'type' => Controls_Manager::SWITCHER,
                'label_on'      => __( 'Yes', 'lifeleck' ),
				'label_off'     => __( 'No', 'lifeleck' ),
				'return_value'  => true,
				'default'       => false,
            ]
        );
        $this->add_control(
            'sec_title',
            [
                'label' => esc_html__( 'Section Title', 'flatter-companion' ),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'default'   => 'Daily Food <br>Courses <br>with Drinks',
            ]
        );
        $this->add_control(
            'sec_text',
            [
                'label' => esc_html__( 'About Text', 'flatter-companion' ),
                'type' => Controls_Manager::TEXTAREA,
                'label_block' => true,
                'default'   => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>',
            ]
        );
        $this->add_control(
            'btn_text',
            [
                'label' => esc_html__( 'Button Text', 'flatter-companion' ),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'default'   => esc_html__( 'View Menu', 'flatter-companion' ),
            ]
        );
        $this->add_control(
            'btn_url',
            [
                'label' => esc_html__( 'Button URL', 'flatter-companion' ),
                'type' => Controls_Manager::URL,
                'label_block' => true,
                'default'   => [
                    'url'   => '#'
                ],
            ]
        );

        $this->add_control(
            'right_section_seperator',
            [
                'label' => esc_html__( 'Right Section', 'flatter-companion' ),
                'type' => Controls_Manager::HEADING,
                'separator' => 'after'
            ]
        );
        $this->add_control(
            'section_img',
            [
                'label' => esc_html__( 'Section Image', 'flatter-companion' ),
                'type' => Controls_Manager::MEDIA,
                'label_block' => true,
                'default'     => [
                    'url'   => Utils::get_placeholder_image_src(),
                ]
            ]
        );
        
        $this->end_controls_section(); // End about us content

        //------------------------------ Style title ------------------------------
        
        // Top Section Styles
        $this->start_controls_section(
            'left_sec_style', [
                'label' => __( 'About Section Styles', 'flatter-companion' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
			'big_title_col', [
				'label' => __( 'Big Title Color', 'flatter-companion' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .single_about_area .single_about_text h3' => 'color: {{VALUE}};',
				],
			]
        );

        $this->add_control(
			'sec_txt_col', [
				'label' => __( 'Text Color', 'flatter-companion' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .single_about_area .single_about_text p' => 'color: {{VALUE}};',
				],
			]
        );

        $this->add_control(
            'btn_bg_col', [
                'label' => __( 'Button Bg Color', 'flatter-companion' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .single_about_area .single_about_text .boxed_btn' => 'background-color: {{VALUE}}; border-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'btn_txt_col', [
                'label' => __( 'Button Text Color', 'flatter-companion' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .single_about_area .single_about_text .boxed_btn' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'btn_hvr_styles_seperator',
            [
                'label' => esc_html__( 'Button Hover Styles', 'flatter-companion' ),
                'type' => Controls_Manager::HEADING,
                'separator' => 'after'
            ]
        );
        $this->add_control(
            'btn_hvr_bg_col', [
                'label' => __( 'Button Hover Bg Color', 'flatter-companion' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .single_about_area .single_about_text .boxed_btn:hover' => 'background-color: {{VALUE}}; border-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'btn_hvr_txt_col', [
                'label' => __( 'Button Hover Text Color', 'flatter-companion' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .single_about_area .single_about_text .boxed_btn:hover' => 'color: {{VALUE}} !important;',
                ],
            ]
        );

        $this->end_controls_section();

    }
    
    public function flatter_get_about_text_section( $sec_title, $about_text, $btn_text, $btn_url ) {
        ?>
        <div class="col-xl-5 col-lg-5">
            <div class="single_about_text">
                <h3><?php echo wp_kses_post( nl2br( $sec_title ) )?> </h3>
                    <?php echo wp_kses_post( nl2br( $about_text ) )?>
                    <a href="<?php echo esc_url( $btn_url )?>" class="boxed_btn"><?php echo esc_html( $btn_text )?></a>
            </div>
        </div>
        <?php
    }

    public function flatter_get_about_img_section( $about_img ) {
        ?>
        <div class="col-xl-6 col-lg-6">
            <div class="single_about_thumb thumb_n1">
                <?php 
                    if ( $about_img ) { 
                        echo $about_img;
                    }
                ?>
            </div>
        </div>
        <?php
    }

	protected function render() {
    $settings       = $this->get_settings();    
    $reverse_style  = $settings['reverse_style'];
    $sec_title      = !empty( $settings['sec_title'] ) ?  $settings['sec_title'] : '';
    $about_text     = !empty( $settings['sec_text'] ) ?  $settings['sec_text'] : '';
    $btn_text       = !empty( $settings['btn_text'] ) ?  $settings['btn_text'] : '';
    $btn_url        = !empty( $settings['btn_url']['url'] ) ?  $settings['btn_url']['url'] : '';
    $section_img    = !empty( $settings['section_img']['id'] ) ? wp_get_attachment_image( $settings['section_img']['id'], 'flatter_about_thumb_555x764', '', array( 'alt' => 'about image' ) ) : '';
    ?>

    <!-- about_area_start -->
    <div class="single_about_area">
        <div class="container">
            <div class="row align-items-center">
                <?php
                    if ( $reverse_style ) {
                        $this->flatter_get_about_img_section( $section_img );
                        $this->flatter_get_about_text_section( $sec_title, $about_text, $btn_text, $btn_url );
                    } else {
                        $this->flatter_get_about_text_section( $sec_title, $about_text, $btn_text, $btn_url );
                        $this->flatter_get_about_img_section( $section_img );
                    }
                ?>
            </div>
        </div>
    </div>
    <!-- about_area_end -->

    <script>
        (function ($) {
            "use strict";
            $(".single_about_area .row div:nth-child(2)").addClass("offset-xl-1 offset-lg-1");
        })(jQuery);
    </script>
    <?php

    }
}