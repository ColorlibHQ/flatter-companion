<?php
namespace Flatterelementor\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Scheme_Color;
use Elementor\Scheme_Typography;
use Elementor\Group_Control_Typography;
use Elementor\Group_Control_Text_Shadow;
use Elementor\Utils;



// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


/**
 *
 * Flatter Client Contents section widget.
 *
 * @since 1.0
 */
class Flatter_Client_Contents extends Widget_Base {

	public function get_name() {
		return 'flatter-client-contents';
	}

	public function get_title() {
		return __( 'Client Contents', 'flatter-companion' );
	}

	public function get_icon() {
		return 'eicon-apps';
	}

	public function get_categories() {
		return [ 'flatter-elements' ];
	}

	protected function _register_controls() {

		// ----------------------------------------  Client contents  ------------------------------
		$this->start_controls_section(
			'clients_content',
			[
				'label' => __( 'Client Contents', 'flatter-companion' ),
			]
        );
        
        $this->add_control(
            'sec_title',
            [
                'label' => esc_html__( 'Section Title', 'flatter-companion' ),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'default'   => esc_html__( 'Brands love to take Our Services', 'flatter-companion' ),
            ]
        );
        $this->add_control(
            'sub_title',
            [
                'label' => esc_html__( 'Sub Title', 'flatter-companion' ),
                'type' => Controls_Manager::TEXTAREA,
                'label_block' => true,
                'default'   => 'inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards <br> especially in the workplace. That’s why it’s crucial that, as women.',
            ]
        );
        $this->add_control(
            'clients_inner_settings_seperator',
            [
                'label' => esc_html__( 'Client Contents', 'flatter-companion' ),
                'type' => Controls_Manager::HEADING,
                'separator' => 'after'
            ]
        );
        
        
        
		$this->add_control(
            'clients_contents', [
                'label' => __( 'Create New', 'flatter-companion' ),
                'type' => Controls_Manager::REPEATER,
                'title_field' => '{{{ client_name }}}',
                'fields' => [
                    [
                        'name' => 'client_logo',
                        'label' => __( 'Client Logo', 'flatter-companion' ),
                        'label_block' => true,
                        'type' => Controls_Manager::MEDIA,
                    ],
                    [
                        'name' => 'client_name',
                        'label' => __( 'Client Name', 'flatter-companion' ),
                        'label_block' => true,
                        'type' => Controls_Manager::TEXT,
                        'default' => __( 'Organic Cafe', 'flatter-companion' ),
                    ],
                ],
                'default'   => [
                    [
                        'client_logo'   => [
                            'url'       => Utils::get_placeholder_image_src(),
                        ],
                        'client_name'   => __( 'Organic Cafe', 'flatter-companion' ),
                    ],
                ]
            ]
        );
        $this->end_controls_section(); // End Hero content

        /**
         * Style Tab
         * ------------------------------ Style Title ------------------------------
         *
         */
        $this->start_controls_section(
            'style_title', [
                'label' => __( 'Style Review Section', 'flatter-companion' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'big_title_col', [
                'label' => __( 'Big Title Color', 'flatter-companion' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .brand_area .section_title h3' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'sub_title_col', [
                'label' => __( 'Sub Title Color', 'flatter-companion' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .brand_area .section_title p' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->end_controls_section();

	}

	protected function render() {
    $settings       = $this->get_settings();
    $sec_title      = !empty( $settings['sec_title'] ) ? $settings['sec_title'] : '';
    $sub_title      = !empty( $settings['sub_title'] ) ? $settings['sub_title'] : '';
    $clients        = !empty( $settings['clients_contents'] ) ? $settings['clients_contents'] : '';
    ?>

    <!-- brand_area-start -->
    <div class="brand_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title mb-70">
                        <h3><?php echo esc_html( $sec_title )?></h3>
                        <p><?php echo wp_kses_post( nl2br( $sub_title ) )?></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php
                if( is_array( $clients ) && count( $clients ) > 0 ){
                    foreach ( $clients as $client ) {
                        $client_name = !empty( $client['client_name'] ) ? $client['client_name'] : '';
                        $client_logo   = !empty( $client['client_logo']['id'] ) ? wp_get_attachment_image( $client['client_logo']['id'], 'flatter_clients_thumb_135x100', '', array('alt' => $client_name . ' logo' ) ) : '';
                        ?>
                        <div class="col-xl-2 col-md-6 col-lg-3">
                            <div class="single_brand">
                                <?php 
                                    if ( $client_logo ) { 
                                        echo $client_logo;
                                    }
                                ?>
                            </div>
                        </div>
                        <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>
    <!-- brand_area-end -->
    <?php

    }
}
