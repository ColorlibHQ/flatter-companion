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
 * Flatter elementor hero section widget.
 *
 * @since 1.0
 */
class Flatter_Hero extends Widget_Base {

	public function get_name() {
		return 'flatter-hero';
	}

	public function get_title() {
		return __( 'Hero Section', 'flatter-companion' );
	}

	public function get_icon() {
		return 'eicon-slider-full-screen';
	}

	public function get_categories() {
		return [ 'flatter-elements' ];
	}

	protected function _register_controls() {

		// ----------------------------------------  Hero content ------------------------------
		$this->start_controls_section(
			'hero_content',
			[
				'label' => __( 'Hero content', 'flatter-companion' ),
			]
        );

		$this->add_control(
            'slider_contents', [
                'label' => __( 'Create New', 'flatter-companion' ),
                'type' => Controls_Manager::REPEATER,
                'title_field' => '{{{ item_title }}}',
                'fields' => [
                    [
                        'name' => 'slider_img',
                        'label' => __( 'Slider Image', 'flatter-companion' ),
                        'label_block' => true,
                        'type' => Controls_Manager::MEDIA,
                    ],
                    [
                        'name' => 'item_title',
                        'label' => __( 'Big Title', 'flatter-companion' ),
                        'label_block' => true,
                        'type' => Controls_Manager::TEXT,
                        'default' => __( 'Food Catering <br>Service.', 'flatter-companion' ),
                    ],
                    [
                        'name' => 'item_text',
                        'label' => __( 'Slider Text', 'flatter-companion' ),
                        'label_block' => true,
                        'type' => Controls_Manager::TEXTAREA,
                        'default' => __( 'inappropriate behavior is often laughed off as “boys will be boys,” women <br>face higher conduct standards especially in the workplace. That’s why it’s <br>crucial that, as women.', 'flatter-companion' ),
                    ],
                ],
                'default'   => [
                    [      
                        'slider_img'    => [
                            'url'   => Utils::get_placeholder_image_src(),
                        ],
                        'item_title'     => __( 'Food Catering <br>Service.', 'flatter-companion' ),
                        'item_text'     => __( 'inappropriate behavior is often laughed off as “boys will be boys,” women <br>face higher conduct standards especially in the workplace. That’s why it’s <br>crucial that, as women.', 'flatter-companion' ),
                    ],
                    [      
                        'slider_img'    => [
                            'url'   => Utils::get_placeholder_image_src(),
                        ],
                        'item_title'     => __( 'Wedding Service.', 'flatter-companion' ),
                        'item_text'     => __( 'inappropriate behavior is often laughed off as “boys will be boys,” women <br>face higher conduct standards especially in the workplace. That’s why it’s <br>crucial that, as women.', 'flatter-companion' ),
                    ],
                    [      
                        'slider_img'    => [
                            'url'   => Utils::get_placeholder_image_src(),
                        ],
                        'item_title'     => __( 'Party Catering.', 'flatter-companion' ),
                        'item_text'     => __( 'inappropriate behavior is often laughed off as “boys will be boys,” women <br>face higher conduct standards especially in the workplace. That’s why it’s <br>crucial that, as women.', 'flatter-companion' ),
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
				'label' => __( 'Style Hero Section', 'flatter-companion' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_control(
			'big_title_col', [
				'label' => __( 'Big Title Color', 'flatter-companion' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .slider_area .single_slider .slider_contant h3' => 'color: {{VALUE}};',
				],
			]
        );
		$this->add_control(
			'sub_title_col', [
				'label' => __( 'Sub Title Color', 'flatter-companion' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .slider_area .single_slider .slider_contant p' => 'color: {{VALUE}};',
				],
			]
		);
		$this->add_control(
			'content_bg_col', [
				'label' => __( 'Content Bg Color', 'flatter-companion' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .slider_area .single_slider .slider_contant' => 'background: {{VALUE}};',
				],
			]
		);

		$this->end_controls_section();
	}
    
	protected function render() {

    // call load widget script
    $this->load_widget_script(); 

    $settings        = $this->get_settings();
    $slider_contents = !empty( $settings['slider_contents'] ) ? $settings['slider_contents'] : '';    
    ?>

    <!-- slider_area-start -->
    <div class="slider_area zigzag_bg_2">
        <div class="slider_sctive owl-carousel">
            <?php 
            if( is_array( $slider_contents ) && count( $slider_contents ) > 0 ) {
                foreach( $slider_contents as $slider ) {
                    $slider_img = !empty( $slider['slider_img']['url'] ) ? $slider['slider_img']['url'] : '';
                    $item_title = ( !empty( $slider['item_title'] ) ) ? $slider['item_title'] : '';
                    $item_text  = ( !empty( $slider['item_title'] ) ) ? $slider['item_text'] : '';
                    ?>
                    <div class="single_slider" <?php echo flatter_inline_bg_img( esc_url( $slider_img ) ); ?>>
                        <div class="single_slider-iner">
                            <div class="slider_contant text-center">
                                <h3><?php echo nl2br( wp_kses_post($item_title) )?></h3>
                                <p><?php echo nl2br( wp_kses_post($item_text) )?></p>
                            </div>
                        </div>
                    </div>
                    <?php 
                }
            }
            ?>
        </div>
    </div>
    <!-- slider_area-end -->
    <?php

    }

    public function load_widget_script(){
        if( \Elementor\Plugin::$instance->editor->is_edit_mode() === true  ) {
        ?>
        <script>
        ( function( $ ){
            // review-active
            $('.slider_sctive').owlCarousel({
                loop:true,
                margin:0,
                items:1,
                autoplay:true,
                navText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
                nav:false,
                dots:true,
                autoplayHoverPause: true,
                autoplaySpeed: 800,
                responsive:{
                    0:{
                        items:1,
                        dots:false
                    },
                    767:{
                        items:1,
                        dots:false
                    },
                    992:{
                        items:1
                    }
                }
            });
        })(jQuery);
        </script>
        <?php 
        }
    }	
}
