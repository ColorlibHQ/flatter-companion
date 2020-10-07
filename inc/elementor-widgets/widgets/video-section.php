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
 * Flatter elementor video section widget.
 *
 * @since 1.0
 */
class Flatter_Video_Section extends Widget_Base {

	public function get_name() {
		return 'flatter-video-section';
	}

	public function get_title() {
		return __( 'Video Section', 'flatter-companion' );
	}

	public function get_icon() {
		return 'eicon-play-o';
	}

	public function get_categories() {
		return [ 'flatter-elements' ];
	}

	protected function _register_controls() {

        // ----------------------------------------  Video Section content ------------------------------
        $this->start_controls_section(
            'video_content',
            [
                'label' => __( 'Video Content', 'flatter-companion' ),
            ]
        );
        $this->add_control(
            'video_title',
            [
                'label' => esc_html__( 'Video Title', 'flatter-companion' ),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'default'   => esc_html__( 'Watch Video', 'flatter-companion' ),
            ]
        );
        $this->add_control(
            'video_text',
            [
                'label' => esc_html__( 'Video Text', 'flatter-companion' ),
                'type' => Controls_Manager::TEXTAREA,
                'label_block' => true,
                'default'   => esc_html__( 'You will love our execution', 'flatter-companion' ),
            ]
        );
        $this->add_control(
            'video_url',
            [
                'label' => esc_html__( 'Popup Video URL', 'flatter-companion' ),
                'type' => Controls_Manager::URL,
                'label_block' => true,
                'default'   => [
                    'url'   => 'https://www.youtube.com/watch?v=vLnPwxZdW4Y'
                ],
            ]
        );
        $this->add_control(
            'bg_img',
            [
                'label' => esc_html__( 'Background Image', 'flatter-companion' ),
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
                'label' => __( 'Top Section Styles', 'flatter-companion' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
			'sec_title_col', [
				'label' => __( 'Big Title Color', 'flatter-companion' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .video_area .video_text h4' => 'color: {{VALUE}};',
				],
			]
        );

        $this->add_control(
			'sub_title_col', [
				'label' => __( 'Sub title Color', 'flatter-companion' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .video_area .video_text p' => 'color: {{VALUE}};',
				],
			]
        );

        $this->add_control(
			'play_btn_bg_col', [
				'label' => __( 'Play Button BG Color', 'flatter-companion' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .video_area .video_text .icon_video a' => 'background: {{VALUE}};',
				],
			]
        );

        $this->add_control(
			'play_btn_col', [
				'label' => __( 'Play Button Text Color', 'flatter-companion' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .video_area .video_text .icon_video a' => 'color: {{VALUE}};',
				],
			]
        );
        $this->end_controls_section();

	}

	protected function render() {
        
        
    $settings       = $this->get_settings();
    $video_title    = !empty( $settings['video_title'] ) ?  $settings['video_title'] : '';
    $video_text     = !empty( $settings['video_text'] ) ?  $settings['video_text'] : '';
    $video_url      = !empty( $settings['video_url']['url'] ) ?  $settings['video_url']['url'] : '';
    $bg_img         = !empty( $settings['bg_img']['url'] ) ? $settings['bg_img']['url'] : '';
    ?>

    <!-- video_area_start -->
    <div class="video_area video_bg zigzag_bg_1 zigzag_bg_2" <?php echo flatter_inline_bg_img( esc_url( $bg_img ) ); ?>>
        <div class="video_area_inner">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="video_text">
                            <div class="info">
                                <div class="info_inner">
                                    <h4><?php echo esc_html( $video_title )?></h4>
                                    <p><?php echo esc_html( $video_text )?></p>
                                </div>
                                <div class="icon_video">
                                    <a class="popup-video" href="<?php echo esc_url( $video_url )?>"><i class="ti-control-play"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- video_area_end -->
    <?php

    }
}
