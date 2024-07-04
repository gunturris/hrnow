<?php 
namespace App;

class BuilderForm {

    public $meta_header_form = null;
    public $meta_button_form = null;

    public $fields = array();

    public function __construct( $buttons , $action = null  ,$method="POST" ){
        $this->meta_header_form = '<form method="'.$method.'"';
        
        if( !is_null($action)) $this->meta_header_form .= ' action="'.$action.'"';

        $this->meta_header_form .= '>';

        $this->meta_button_form = '';
        if(! is_array( $buttons ) ){
            foreach($buttons as $button){
                $this->meta_button_form .= '<button style="'. $button->type .'" type="'. $button->type .'"></button>';
            } 
        }
            

    }


    public function field_append_single( $properties, $model="default" ){


    }

    public function field_append_double( $properties_1,  $properties_1, 
                                                $model_1="default", $model_2="default" ){


    }

    public function build(){
        $view = $this->meta_header_form;

        foreach($this->fields){

        }

        $view .= $this->meta_button_form . '</form>';
        return $view;

    }
}
