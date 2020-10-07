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
 * Flatter Review Contents section widget.
 *
 * @since 1.0
 */
class Flatter_Review_Contents extends Widget_Base {

	public function get_name() {
		return 'flatter-review-contents';
	}

	public function get_title() {
		return __( 'Review Contents', 'flatter-companion' );
	}

	public function get_icon() {
		return 'eicon-testimonial-carousel';
	}

	public function get_categories() {
		return [ 'flatter-elements' ];
	}

	protected function _register_controls() {

		// ----------------------------------------  Review contents  ------------------------------
		$this->start_controls_section(
			'reviews_content',
			[
				'label' => __( 'Review Contents', 'flatter-companion' ),
			]
        );
        
        $this->add_control(
            'sec_title',
            [
                'label' => esc_html__( 'Section Title', 'flatter-companion' ),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'default'   => esc_html__( 'Feedback from Customers', 'flatter-companion' ),
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
            'reviews_inner_settings_seperator',
            [
                'label' => esc_html__( 'Review Items', 'flatter-companion' ),
                'type' => Controls_Manager::HEADING,
                'separator' => 'after'
            ]
        );

		$this->add_control(
            'reviews_contents', [
                'label' => __( 'Create New', 'flatter-companion' ),
                'type' => Controls_Manager::REPEATER,
                'title_field' => '{{{ reviewer_name }}}',
                'fields' => [
                    [
                        'name' => 'reviewr_img',
                        'label' => __( 'Reviewer Image', 'flatter-companion' ),
                        'label_block' => true,
                        'type' => Controls_Manager::MEDIA,
                    ],
                    [
                        'name' => 'reviewer_name',
                        'label' => __( 'Reviewer Name', 'flatter-companion' ),
                        'label_block' => true,
                        'type' => Controls_Manager::TEXT,
                        'default' => __( 'Adame Nesane', 'flatter-companion' ),
                    ],
                    [
                        'name' => 'reviewer_designation',
                        'label' => __( 'Reviewer Designation', 'flatter-companion' ),
                        'label_block' => true,
                        'type' => Controls_Manager::TEXT,
                        'default' => __( 'Chief Customer', 'flatter-companion' ),
                    ],
                    [
                        'name' => 'review_txt',
                        'label' => __( 'Review Text', 'flatter-companion' ),
                        'label_block' => true,
                        'type' => Controls_Manager::TEXTAREA,
                        'default' => __( 'You\'re had. Subdue grass Meat us winged years you\'ll doesn\'t. fruit two also won one yielding creepeth third give may never lie alternet food.', 'flatter-companion' ),
                    ],
                ],
                'default'   => [
                    [
                        'reviewr_img'           => [
                            'url'               => Utils::get_placeholder_image_src(),
                        ],
                        'reviewer_name'         => __( 'Adame Nesane', 'flatter-companion' ),
                        'reviewer_designation'  => __( 'Chief Customer', 'flatter-companion' ),
                        'review_txt'            => __( 'You\'re had. Subdue grass Meat us winged years you\'ll doesn\'t. fruit two also won one yielding creepeth third give may never lie alternet food.', 'flatter-companion' ),
                    ],
                    [
                        'reviewr_img'           => [
                            'url'               => Utils::get_placeholder_image_src(),
                        ],
                        'reviewer_name'         => __( 'John Doe', 'flatter-companion' ),
                        'reviewer_designation'  => __( 'Chief Customer', 'flatter-companion' ),
                        'review_txt'            => __( 'You\'re had. Subdue grass Meat us winged years you\'ll doesn\'t. fruit two also won one yielding creepeth third give may never lie alternet food.', 'flatter-companion' ),
                    ],
                    [
                        'reviewr_img'           => [
                            'url'               => Utils::get_placeholder_image_src(),
                        ],
                        'reviewer_name'         => __( 'Jonathan Doe', 'flatter-companion' ),
                        'reviewer_designation'  => __( 'Chief Customer', 'flatter-companion' ),
                        'review_txt'            => __( 'You\'re had. Subdue grass Meat us winged years you\'ll doesn\'t. fruit two also won one yielding creepeth third give may never lie alternet food.', 'flatter-companion' ),
                    ],
                    [
                        'reviewr_img'           => [
                            'url'               => Utils::get_placeholder_image_src(),
                        ],
                        'reviewer_name'         => __( 'Adame Nesane', 'flatter-companion' ),
                        'reviewer_designation'  => __( 'Chief Customer', 'flatter-companion' ),
                        'review_txt'            => __( 'You\'re had. Subdue grass Meat us winged years you\'ll doesn\'t. fruit two also won one yielding creepeth third give may never lie alternet food.', 'flatter-companion' ),
                    ],
                    [
                        'reviewr_img'           => [
                            'url'               => Utils::get_placeholder_image_src(),
                        ],
                        'reviewer_name'         => __( 'Adame Nesane', 'flatter-companion' ),
                        'reviewer_designation'  => __( 'Chief Customer', 'flatter-companion' ),
                        'review_txt'            => __( 'You\'re had. Subdue grass Meat us winged years you\'ll doesn\'t. fruit two also won one yielding creepeth third give may never lie alternet food.', 'flatter-companion' ),
                    ],
                    [
                        'reviewr_img'           => [
                            'url'               => Utils::get_placeholder_image_src(),
                        ],
                        'reviewer_name'         => __( 'Adame Nesane', 'flatter-companion' ),
                        'reviewer_designation'  => __( 'Chief Customer', 'flatter-companion' ),
                        'review_txt'            => __( 'You\'re had. Subdue grass Meat us winged years you\'ll doesn\'t. fruit two also won one yielding creepeth third give may never lie alternet food.', 'flatter-companion' ),
                    ],
                ]
            ]
        );
        
        $this->add_control(
            'background_img',
            [
                'label' => esc_html__( 'Background Image', 'flatter-companion' ),
                'type' => Controls_Manager::MEDIA,
                'label_block' => true,
                'default'     => [
                    'url'     => Utils::get_placeholder_image_src(),
                ],
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
            'rev_title_col', [
                'label' => __( 'Title Color', 'flatter-companion' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .testmonial_area .section_title h3' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'rev_txt_col', [
                'label' => __( 'Text Color', 'flatter-companion' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .testmonial_area .section_title p' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'single_item_styles_seperator',
            [
                'label' => esc_html__( 'Single Item Styles', 'flatter-companion' ),
                'type' => Controls_Manager::HEADING,
                'separator' => 'after'
            ]
        );
        $this->add_control(
            'reviewer_name_col', [
                'label' => __( 'Reviewer Name Color', 'flatter-companion' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .testmonial_area .single_testmonial .testmonial_author h3' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'reviewer_desig_col', [
                'label' => __( 'Reviewer Designation Color', 'flatter-companion' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .testmonial_area .single_testmonial .testmonial_author span' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'review_text_col', [
                'label' => __( 'Review Text Color', 'flatter-companion' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .testmonial_area .single_testmonial .testmonial_author p' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'slider_active_nav_col', [
                'label' => __( 'Slider Active Nav Color', 'flatter-companion' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .testmonial_area .testmonial_active .owl-dots .owl-dot.active' => 'background: {{VALUE}};',
                ],
            ]
        );
        $this->end_controls_section();

	}

	protected function render() {

    // call load widget script
    $this->load_widget_script(); 
    $settings       = $this->get_settings();
    $sec_title      = !empty( $settings['sec_title'] ) ? $settings['sec_title'] : '';
    $sub_title      = !empty( $settings['sub_title'] ) ? $settings['sub_title'] : '';
    $reviews        = !empty( $settings['reviews_contents'] ) ? $settings['reviews_contents'] : '';
    $background_img = !empty( $settings['background_img']['url'] ) ? $settings['background_img']['url'] : '';
    ?>

    <!-- testmonial_area_start -->
    <div class="testmonial_area banner-3" <?php echo flatter_inline_bg_img( esc_url( $background_img ) ); ?>>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title white mb-60">
                        <h3><?php echo esc_html( $sec_title )?></h3>
                        <p><?php echo wp_kses_post( nl2br( $sub_title ) )?></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="testmonial_active owl-carousel">
                        <?php
                        if( is_array( $reviews ) && count( $reviews ) > 0 ){
                            foreach ( $reviews as $review ) {
                                $reviewer_name = !empty( $review['reviewer_name'] ) ? $review['reviewer_name'] : '';
                                $reviewr_img   = !empty( $review['reviewr_img']['id'] ) ? wp_get_attachment_image( $review['reviewr_img']['id'], 'flatter_testimonial_thumb_100x100', '', array('alt' => $reviewer_name . ' image' ) ) : '';
                                $reviewer_designation    = !empty( $review['reviewer_designation'] ) ? $review['reviewer_designation'] : '';
                                $review_txt    = !empty( $review['review_txt'] ) ? $review['review_txt'] : '';
                                ?>
                                <div class="single_testmonial d-flex">
                                    <div class="testmonial_thumb">
                                        <?php 
                                            if ( $reviewr_img ) { 
                                                echo $reviewr_img;
                                            }
                                        ?>
                                    </div>
                                    <div class="testmonial_author">
                                        <h3><?php echo esc_html( $reviewer_name )?></h3>
                                        <span><?php echo esc_html( $reviewer_designation )?></span>
                                        <p><?php echo wp_kses_post( nl2br( $review_txt ) )?></p>
                                    </div>
                                </div>
                                <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- testmonial_area_end -->
    <?php

    }

    public function load_widget_script(){
        if( \Elementor\Plugin::$instance->editor->is_edit_mode() === true  ) {
        ?>
        <script>
        ( function( $ ){
            //testmonial_active
            $('.testmonial_active').owlCarousel({
            loop:true,
            margin:60,
            items:1,
            autoplay:true,
            nav:false,
            dots:true,
            autoplayHoverPause: true,
            autoplaySpeed: 800,
            responsive:{
                0:{
                    items:1
                },
                767:{
                    items:1
                },
                992:{
                    items:2
                }
            }
            });

        })(jQuery);
        </script>
        <?php 
        }
    }	
}
