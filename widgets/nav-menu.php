<?php

namespace TechiePress\ElementorWidgets\widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Base_UI_Control;


/**
 * Have the widget for elementor -- nav menu
 */

 class Url_Embed extends Widget_Base{

   public function get_name(){
      return 'gnext-url';
   }

   public function get_title(){
      return __('Gnext Url Embed' , 'g-next');
   }

   public function get_icon(){
    // return 'fa fa-menu';
    return 'eicon-editor-unlink';
   }

   public function get_categories(){
    return ['G-next'];
   }

   protected function _register_controls() {
		
    $this->start_controls_section(
        'section_content',
        array(
            'label' => __( 'Content', 'elementor-widgettemplate' ),
            'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        )
    );

    $this->add_control(
        'title',
        array(
            'label'   => __( 'URL EMBED', 'elementor-widgettemplate' ),
            'type'    => Controls_Manager::TEXT,
            'default' => __( 'https://youtube.com', 'elementor-widgettemplate' ),
        )
    );

    $this->end_controls_section();

    // style
    // $this->start_controls_section(
    //     'section_title_style',
    //     [
    //         'label' => esc_html__( 'Title', 'elementor-addon' ),
    //         'tab' => \Elementor\Controls_Manager::TAB_STYLE,
    //     ]
    // );

    // $this->add_control(
    //     'title_color',
    //     [
    //         'label' => esc_html__( 'Text Color', 'elementor-addon' ),
    //         'type' => \Elementor\Controls_Manager::COLOR,
    //         'selectors' => [
    //             '{{WRAPPER}} .hello-world' => 'color: {{VALUE}};',
    //         ],
    //     ]
    // );

    // $this->end_controls_section();
}
protected function render() {
    $settings = $this->get_settings_for_display();

    $this->add_inline_editing_attributes( 'title', 'none' );
  

    ?>
    <div <?php echo $this->get_render_attribute_string( 'title' ); ?>><?php echo $settings['title']; ?></div>


    
    <?php

}

protected function _content_template() {
    ?>
    <#
    view.addInlineEditingAttributes( 'title', 'none' );  
    #>
    <div {{{ view.getRenderAttributeString( 'title' ) }}}>{{{ settings.title }}}</div>
    <?php
}



 }
 