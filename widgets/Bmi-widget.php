<?php

namespace TechiePress\ElementorWidgets\widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Base_UI_Control;

class Bmi extends Widget_Base{
    
    public function get_name(){
        return 'bmi';
    }

    public function get_title(){
        return __('Bmi Calculator', 'g-next');
    }

    public function get_icon(){
        return 'eicon-dashboard';
    }

    public function get_categories(){
        return ['G-next'];
    }

    protected function _register_controls(){

        $this->start_controls_section(
        'section_bmi' ,
         array(
            'label' => __( 'Bmi Calculator', 'g-next' ),
            'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
         )
    );
   
    $this->add_control(
      'height' ,
      array(
        'label' => __( 'Height', 'g-next' ),
        'type' =>  Controls_Manager::TEXT ,
        'default' =>  __( '180', 'g-next' )
      )
    );

    $this->add_control(
        'weight',
        array(
            'label' => __('Weight' , 'g-next'),
            'type' =>  Controls_Manager::TEXT,
            'default' => __('75' , 'g-text')
        )
    );

    $this->end_controls_section();



    }


    protected function render(){ ?>

        <div>
 
             <h5>ดัชนีมวลกาย</h5>
             <form method="POST" action="" >
                <labe style="margin:5px;">ส่วนสูง (cm.)</label><br>
                <input type="number" name="height" pleholder="(cm.)"> <br><br>
                <labe style="margin:5px;">น้ำหนัก (kg.)</label><br>
                <input type="number" name="weight" pleholder="(kg.)"><br><br>
                <input type="submit" name="cal" value="คำนวน Bmi"><br><br>
             </form>
             <hr style="color:#ececec;">
        </div>

       <?php    
       
          if(isset($_POST['cal'])){

            $weight = $_POST['weight'];
            $height = ($_POST['height'] / 100);
            $bmi = $weight / ($height * $height);
            ?>
             <div>
                <h5>ค่า BMI ของคุณคือ <?php echo number_format($bmi , 2); ?> </h5>
             </div>
            <?php
          }
           
       ?>

    <?php }
}