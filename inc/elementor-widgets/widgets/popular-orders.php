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
 * Flatter elementor popular orders widget.
 *
 * @since 1.0
 */
class Flatter_Popular_orders extends Widget_Base {

	public function get_name() {
		return 'flatter-popular-orders';
	}

	public function get_title() {
		return __( 'Popular Orders', 'flatter-companion' );
	}

	public function get_icon() {
		return 'eicon-post-list';
	}

	public function get_categories() {
		return [ 'flatter-elements' ];
	}

	protected function _register_controls() {

        // ----------------------------------------  Popular Orders content ------------------------------
        $this->start_controls_section(
            'popular_orders_content',
            [
                'label' => __( 'Popular Orders Content', 'flatter-companion' ),
            ]
        );
        
        $this->add_control(
            'sec_title',
            [
                'label' => esc_html__( 'Section Title', 'flatter-companion' ),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'default'   => esc_html__( 'Popular Orders', 'flatter-companion' ),
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
            'service_inner_settings_seperator',
            [
                'label' => esc_html__( 'Service Items', 'flatter-companion' ),
                'type' => Controls_Manager::HEADING,
                'separator' => 'after'
            ]
        );

		$this->add_control(
            'popular_orders', [
                'label' => __( 'Create New', 'flatter-companion' ),
                'type' => Controls_Manager::REPEATER,
                'title_field' => '{{{ order_title }}}',
                'fields' => [
                    [
                        'name' => 'order_img',
                        'label' => __( 'Order Image', 'flatter-companion' ),
                        'label_block' => true,
                        'type' => Controls_Manager::MEDIA,
                    ],
                    [
                        'name' => 'order_price',
                        'label' => __( 'Order Price', 'flatter-companion' ),
                        'label_block' => true,
                        'type' => Controls_Manager::TEXT,
                        'default' => __( '$10', 'flatter-companion' ),
                    ],
                    [
                        'name' => 'order_title',
                        'label' => __( 'Order Title', 'flatter-companion' ),
                        'label_block' => true,
                        'type' => Controls_Manager::TEXT,
                        'default' => __( 'Weastern Set Meal 01', 'flatter-companion' ),
                    ],
                    [
                        'name' => 'order_url',
                        'label' => __( 'Order Details URL', 'flatter-companion' ),
                        'label_block' => true,
                        'type' => Controls_Manager::URL,
                        'default' => [
                            'url'   => '#'
                        ]
                    ],
                    [
                        'name' => 'order_text',
                        'label' => __( 'Order Text', 'flatter-companion' ),
                        'label_block' => true,
                        'type' => Controls_Manager::TEXTAREA,
                        'default' => __( 'Chicken Fried Rice | Crispy Chicken fry <br> Weastern Pickle | Mixed Vegetable <br> Soft Drinks', 'flatter-companion' ),
                    ],
                    [
                        'name' => 'btn_text',
                        'label' => __( 'Button Text', 'flatter-companion' ),
                        'label_block' => true,
                        'type' => Controls_Manager::TEXT,
                        'default' => __( 'Order Now!', 'flatter-companion' ),
                    ],
                    [
                        'name' => 'btn_url',
                        'label' => __( 'Button URL', 'flatter-companion' ),
                        'label_block' => true,
                        'type' => Controls_Manager::URL,
                        'default' => [
                            'url'   => '#'
                        ]
                    ],
                ],
                'default'   => [
                    [      
                        'order_img'    => [
                            'url'      => Utils::get_placeholder_image_src(),
                        ],
                        'order_price'  => __( '$10', 'flatter-companion' ),
                        'order_title'  => __( 'Weastern Set Meal 01', 'flatter-companion' ),
                        'order_text'   => __( 'Chicken Fried Rice | Crispy Chicken fry <br> Weastern Pickle | Mixed Vegetable <br> Soft Drinks', 'flatter-companion' ),
                        'btn_text'     => __( 'Order Now!', 'flatter-companion' ),
                        'btn_url'      => __( '#', 'flatter-companion' ),
                    ],
                    [      
                        'order_img'    => [
                            'url'      => Utils::get_placeholder_image_src(),
                        ],
                        'order_price'  => __( '$20', 'flatter-companion' ),
                        'order_title'  => __( 'Weastern Set Meal 02', 'flatter-companion' ),
                        'order_text'   => __( 'Chicken Fried Rice | Crispy Chicken fry <br> Weastern Pickle | Mixed Vegetable <br> Soft Drinks', 'flatter-companion' ),
                        'btn_text'     => __( 'Order Now!', 'flatter-companion' ),
                        'btn_url'      => __( '#', 'flatter-companion' ),
                    ],
                    [      
                        'order_img'    => [
                            'url'      => Utils::get_placeholder_image_src(),
                        ],
                        'order_price'  => __( '$30', 'flatter-companion' ),
                        'order_title'  => __( 'Weastern Set Meal 03', 'flatter-companion' ),
                        'order_text'   => __( 'Chicken Fried Rice | Crispy Chicken fry <br> Weastern Pickle | Mixed Vegetable <br> Soft Drinks', 'flatter-companion' ),
                        'btn_text'     => __( 'Order Now!', 'flatter-companion' ),
                        'btn_url'      => __( '#', 'flatter-companion' ),
                    ],
                    [      
                        'order_img'    => [
                            'url'      => Utils::get_placeholder_image_src(),
                        ],
                        'order_price'  => __( '$40', 'flatter-companion' ),
                        'order_title'  => __( 'Weastern Set Meal 04', 'flatter-companion' ),
                        'order_text'   => __( 'Chicken Fried Rice | Crispy Chicken fry <br> Weastern Pickle | Mixed Vegetable <br> Soft Drinks', 'flatter-companion' ),
                        'btn_text'     => __( 'Order Now!', 'flatter-companion' ),
                        'btn_url'      => __( '#', 'flatter-companion' ),
                    ],
                    [      
                        'order_img'    => [
                            'url'      => Utils::get_placeholder_image_src(),
                        ],
                        'order_price'  => __( '$50', 'flatter-companion' ),
                        'order_title'  => __( 'Weastern Set Meal 05', 'flatter-companion' ),
                        'order_text'   => __( 'Chicken Fried Rice | Crispy Chicken fry <br> Weastern Pickle | Mixed Vegetable <br> Soft Drinks', 'flatter-companion' ),
                        'btn_text'     => __( 'Order Now!', 'flatter-companion' ),
                        'btn_url'      => __( '#', 'flatter-companion' ),
                    ],
                    [      
                        'order_img'    => [
                            'url'      => Utils::get_placeholder_image_src(),
                        ],
                        'order_price'  => __( '$60', 'flatter-companion' ),
                        'order_title'  => __( 'Weastern Set Meal 06', 'flatter-companion' ),
                        'order_text'   => __( 'Chicken Fried Rice | Crispy Chicken fry <br> Weastern Pickle | Mixed Vegetable <br> Soft Drinks', 'flatter-companion' ),
                        'btn_text'     => __( 'Order Now!', 'flatter-companion' ),
                        'btn_url'      => __( '#', 'flatter-companion' ),
                    ],
                ]
            ]
        );
        
        $this->end_controls_section(); // End about us content

        //------------------------------ Style title ------------------------------
        
        // Top Section Styles
        $this->start_controls_section(
            'left_sec_style', [
                'label' => __( 'Popular Orders Styles', 'flatter-companion' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
			'big_title_col', [
				'label' => __( 'Big title Color', 'flatter-companion' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .order_area .section_title h3' => 'color: {{VALUE}};',
				],
			]
        );

        $this->add_control(
			'text_col', [
				'label' => __( 'Text Color', 'flatter-companion' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .order_area .section_title p' => 'color: {{VALUE}};',
				],
			]
        );
        $this->end_controls_section();


        // Single Item Styles
        $this->start_controls_section(
            'single_item_styles', [
                'label' => __( 'Single item Styles', 'flatter-companion' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
			'price_col', [
				'label' => __( 'Price Color', 'flatter-companion' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .order_area .single_order .order_thumb .order_prise' => 'color: {{VALUE}};',
					'{{WRAPPER}} .order_area .single_order .order_thumb .order_prise span::before' => 'color: {{VALUE}};',
				],
			]
        );

        $this->add_control(
			'item_title_col', [
				'label' => __( 'Title Color', 'flatter-companion' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .order_area .single_order .order_info h3 a' => 'color: {{VALUE}};',
				],
			]
        );
        $this->add_control(
			'item_txt_col', [
				'label' => __( 'Text Color', 'flatter-companion' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .order_area .single_order .order_info p' => 'color: {{VALUE}};',
				],
			]
        );
        $this->add_control(
            'btn_styles_seperator',
            [
                'label' => esc_html__( 'Button Styles', 'flatter-companion' ),
                'type' => Controls_Manager::HEADING,
                'separator' => 'after'
            ]
        );
        $this->add_control(
            'btn_bg_col', [
                'label' => __( 'Button Bg Color', 'flatter-companion' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .order_area .single_order .order_info .boxed_btn' => 'background-color: {{VALUE}}; border-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'btn_txt_col', [
                'label' => __( 'Button Text Color', 'flatter-companion' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .order_area .single_order .order_info .boxed_btn' => 'color: {{VALUE}};',
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
                    '{{WRAPPER}} .order_area .single_order .order_info .boxed_btn:hover' => 'background-color: {{VALUE}}; border-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'btn_hvr_txt_col', [
                'label' => __( 'Button Hover Text Color', 'flatter-companion' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .order_area .single_order .order_info .boxed_btn:hover' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_section();

    }
    
    public function flatter_get_adopt_img_section( $adopt_img ) {
        ?>
        <div class="col-lg-6 col-md-6">
            <div class="adopt_image">
                <?php 
                    if ( $adopt_img ) { 
                        echo $adopt_img;
                    }
                ?>
            </div>
        </div>
        <?php
    }

	protected function render() {
    $settings       = $this->get_settings();    
    $sec_title      = !empty( $settings['sec_title'] ) ?  $settings['sec_title'] : '';
    $sub_title      = !empty( $settings['sub_title'] ) ?  $settings['sub_title'] : '';
    $popular_orders = !empty( $settings['popular_orders'] ) ?  $settings['popular_orders'] : '';
    ?>

    <!-- order_area_start -->
    <div class="order_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title mb-70">
                        <h3><?php echo esc_html( $sec_title )?></h3>
                        <p><?php echo nl2br( wp_kses_post($sub_title) )?></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php
                if( is_array( $popular_orders ) && count( $popular_orders ) > 0 ){
                    foreach ( $popular_orders as $order ) {
                        $order_title = !empty( $order['order_title'] ) ? $order['order_title'] : '';
                        $order_img   = !empty( $order['order_img']['id'] ) ? wp_get_attachment_image( $order['order_img']['id'], 'flatter_order_thumb_349x384', '', array('alt' => $order_title . ' image' ) ) : '';
                        $order_url   = !empty( $order['order_url']['url'] ) ? $order['order_url']['url'] : '';
                        $order_price = !empty( $order['order_price'] ) ? $order['order_price'] : '';
                        $order_text  = !empty( $order['order_text'] ) ? $order['order_text'] : '';
                        $btn_text    = !empty( $order['btn_text'] ) ? $order['btn_text'] : '';
                        $btn_url     = !empty( $order['btn_url']['url'] ) ? $order['btn_url']['url'] : '';
                        ?>
                        <div class="col-xl-4 col-md-6">
                            <div class="single_order">
                                <div class="order_thumb">
                                    <?php
                                        if ( $order_img ) {
                                            echo $order_img;
                                        }
                                    ?>
                                    <div class="order_prise">
                                        <span><?php echo esc_html( $order_price )?></span>
                                    </div>
                                </div>
                                <div class="order_info">
                                    <h3><a href="<?php echo esc_url( $order_url )?>"><?php echo esc_html( $order_title )?></a></h3>
                                    <p><?php echo nl2br( wp_kses_post($order_text) )?></p>
                                    <a href="<?php echo esc_url( $btn_url )?>" class="boxed_btn"><?php echo esc_html( $btn_text )?></a>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>
    <!-- order_area_end -->
    <?php

    }
}