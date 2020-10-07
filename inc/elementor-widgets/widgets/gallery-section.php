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
 * Flatter elementor gallery section widget.
 *
 * @since 1.0
 */
class Flatter_Galleries extends Widget_Base {

	public function get_name() {
		return 'flatter-galleries';
	}

	public function get_title() {
		return __( 'Galleries', 'flatter-companion' );
	}

	public function get_icon() {
		return 'eicon-photo-library';
	}

	public function get_categories() {
		return [ 'flatter-elements' ];
	}

	protected function _register_controls() {

		// ----------------------------------------  Gallery content ------------------------------
		$this->start_controls_section(
			'gallery_content',
			[
				'label' => __( 'Galleries content', 'flatter-companion' ),
			]
        );
        $this->add_control(
            'sec_title',
            [
                'label' => esc_html__( 'Section Title', 'flatter-companion' ),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'default' => esc_html__( 'Gallery Images', 'flatter-companion' )
            ]
        );
        $this->add_control(
            'sub_title',
            [
                'label' => esc_html__( 'Sub Title', 'flatter-companion' ),
                'type' => Controls_Manager::TEXTAREA,
                'label_block' => true,
                'default' => 'inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards <br> especially in the workplace. That’s why it’s crucial that, as women.'
            ]
        );

        $this->add_control(
            'gallery_inner_settings_seperator',
            [
                'label' => esc_html__( 'Gallery Items', 'flatter-companion' ),
                'type' => Controls_Manager::HEADING,
                'separator' => 'after'
            ]
        );

		$this->add_control(
            'flattergalleries', [
                'label' => __( 'Create New', 'flatter-companion' ),
                'type' => Controls_Manager::REPEATER,
                'title_field' => '{{{ item_title }}}',
                'fields' => [
                    [
                        'name' => 'gallery_img',
                        'label' => __( 'Gallery Image', 'flatter-companion' ),
                        'label_block' => true,
                        'type' => Controls_Manager::MEDIA,
                    ],
                    [
                        'name' => 'img_size',
                        'label' => __( 'Image Size', 'flatter-companion' ),
                        'label_block' => true,
                        'type' => Controls_Manager::SELECT,
                        'options' => [
                            'flatter_gallery_thumb_1_458x440'  => '458x440',
                            'flatter_gallery_thumb_2_360x327'  => '360x327',
                            'flatter_gallery_thumb_3_261x327'  => '261x327',
                            'flatter_gallery_thumb_4_652x408'  => '652x408',
                            'flatter_gallery_thumb_5_458x654'  => '458x654',
                        ]
                    ],
                    [
                        'name' => 'item_title',
                        'label' => __( 'Gallery Title', 'flatter-companion' ),
                        'label_block' => true,
                        'type' => Controls_Manager::TEXT,
                        'default' => __( '1', 'flatter-companion' ),
                    ],
                ],
                'default'   => [
                    [      
                        'gallery_img'    => [
                            'url'   => Utils::get_placeholder_image_src(),
                        ],
                        'img_size'     => 'flatter_gallery_thumb_1_458x440',
                        'item_title'     => __( '1', 'flatter-companion' ),
                    ],
                    [      
                        'gallery_img'    => [
                            'url'   => Utils::get_placeholder_image_src(),
                        ],
                        'img_size'     => 'flatter_gallery_thumb_2_360x327',
                        'item_title'     => __( '2', 'flatter-companion' ),
                    ],
                    [      
                        'gallery_img'    => [
                            'url'   => Utils::get_placeholder_image_src(),
                        ],
                        'img_size'     => 'flatter_gallery_thumb_3_261x327',
                        'item_title'     => __( '3', 'flatter-companion' ),
                    ],
                    [      
                        'gallery_img'    => [
                            'url'   => Utils::get_placeholder_image_src(),
                        ],
                        'img_size'     => 'flatter_gallery_thumb_4_652x408',
                        'item_title'     => __( '4', 'flatter-companion' ),
                    ],
                    [      
                        'gallery_img'    => [
                            'url'   => Utils::get_placeholder_image_src(),
                        ],
                        'img_size'     => 'flatter_gallery_thumb_5_458x654',
                        'item_title'     => __( '5', 'flatter-companion' ),
                    ],
                    [      
                        'gallery_img'    => [
                            'url'   => Utils::get_placeholder_image_src(),
                        ],
                        'img_size'     => 'flatter_gallery_thumb_2_360x327',
                        'item_title'     => __( '6', 'flatter-companion' ),
                    ],
                    [      
                        'gallery_img'    => [
                            'url'   => Utils::get_placeholder_image_src(),
                        ],
                        'img_size'     => 'flatter_gallery_thumb_3_261x327',
                        'item_title'     => __( '7', 'flatter-companion' ),
                    ],
                ]
            ]
        );
        
        $this->add_control(
            'btn_text',
            [
                'label' => esc_html__( 'Button Title', 'flatter-companion' ),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'default' => esc_html__( 'Load More Images', 'flatter-companion' )
            ]
        );
        $this->add_control(
            'btn_url',
            [
                'label' => esc_html__( 'Button URL', 'flatter-companion' ),
                'type' => Controls_Manager::URL,
                'label_block' => true,
                'default' => [
                    'url' => '#'
                ]
            ]
        );
		$this->end_controls_section(); // End Gallery content

    /**
     * Style Tab
     * ------------------------------ Style Gallery Section ------------------------------
     *
     */

        $this->start_controls_section(
            'style_gallery_section', [
                'label' => __( 'Style Gallery Section', 'flatter-companion' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'sec_title_col', [
                'label' => __( 'Sec Title Color', 'flatter-companion' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .gallery_area .section_title h3' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'sub_title_col', [
                'label' => __( 'Sub Title Color', 'flatter-companion' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .gallery_area .section_title p' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'btn_bg_col', [
                'label' => __( 'Button Bg Color', 'flatter-companion' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .gallery_area .load_more_button .load_more_btn' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'btn_txt_col', [
                'label' => __( 'Button Text Color', 'flatter-companion' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .gallery_area .load_more_button .load_more_btn' => 'color: {{VALUE}};',
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
                    '{{WRAPPER}} .gallery_area .load_more_button .load_more_btn:hover' => 'background-color: {{VALUE}}; border-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'btn_hvr_txt_col', [
                'label' => __( 'Button Hover Text Color', 'flatter-companion' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .gallery_area .load_more_button .load_more_btn:hover' => 'color: {{VALUE}} !important;',
                ],
            ]
        );
        $this->end_controls_section();

	}

	protected function render() {
    $settings       = $this->get_settings();
    $sec_title      = !empty( $settings['sec_title'] ) ? $settings['sec_title'] : '';
    $sub_title      = !empty( $settings['sub_title'] ) ? $settings['sub_title'] : '';
    $flattergalleries = !empty( $settings['flattergalleries'] ) ? $settings['flattergalleries'] : '';
    $btn_text       = !empty( $settings['btn_text'] ) ? $settings['btn_text'] : '';
    $btn_url        = !empty( $settings['btn_url']['url'] ) ? $settings['btn_url']['url'] : '';
    ?>
    
    <!-- gallery_area_start -->
    <div class="gallery_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title mb-70">
                        <h3><?php echo esc_html( $sec_title )?></h3>
                        <p><?php echo wp_kses_post( nl2br( $sub_title ) )?></p>
                    </div>
                </div>
            </div>
            <div class="row grid">
                <?php 
                if( is_array( $flattergalleries ) && count( $flattergalleries ) > 0 ) {
                    foreach( $flattergalleries as $gallery ) {
                        $img_size     = ( !empty( $gallery['img_size'] ) ) ? $gallery['img_size'] : '';
                        $img_wrap_class = '';
                        
                        if( $img_size == 'flatter_gallery_thumb_1_458x440' ){
                            $item_wrap_class = 'col-xl-5 col-lg-5 col-md-6 grid-item';
                            $img_wrap_class .= ' long_height';
                        }
                        elseif ( $img_size == 'flatter_gallery_thumb_2_360x327' ) {
                            $item_wrap_class = 'col-xl-4 col-lg-4 col-md-6 grid-item';
                            $img_wrap_class .= ' mini_height';
                        }
                        elseif ( $img_size == 'flatter_gallery_thumb_3_261x327' ){
                            $item_wrap_class = 'col-xl-3 col-lg-3 col-md-6 grid-item';
                            $img_wrap_class .= ' mini_height';
                        }
                        elseif ( $img_size == 'flatter_gallery_thumb_4_652x408' ){
                            $item_wrap_class = 'col-xl-7 col-lg-7 col-md-6 grid-item';
                            $img_wrap_class .= ' mid_height';
                        }
                        elseif ( $img_size == 'flatter_gallery_thumb_5_458x654' ){
                            $item_wrap_class = 'col-xl-5 col-lg-5 col-md-6 grid-item';
                            $img_wrap_class .= ' large_height';
                        }
                        
                        $item_title     = ( !empty( $gallery['item_title'] ) ) ? $gallery['item_title'] : '';
                        $gallery_img    = !empty( $gallery['gallery_img']['id'] ) ? wp_get_attachment_image_src( $gallery['gallery_img']['id'], $img_size )[0] : '';
                        ?>
                        <div class="<?php echo esc_attr( $item_wrap_class )?>">
                            <div class="single_gallery<?php echo esc_attr( $img_wrap_class )?>" <?php echo flatter_inline_bg_img( esc_url( $gallery_img ) ); ?>>
                                <a href="<?php echo esc_url( $gallery_img )?>" class="popup-image"></a>
                            </div>
                        </div>
                        <?php 
                    }
                }
                ?>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="load_more_button text-center">
                        <a href="<?php echo esc_url( $btn_url )?>" class="load_more_btn"><?php echo esc_html( $btn_text )?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- gallery_area_end -->
    <?php
    }
}