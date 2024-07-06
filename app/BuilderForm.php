<?php 
namespace App;
use App\PageRender;

class BuilderForm {

    public $meta_header_form = null;
    public $meta_button_form = null;

    public $fields = array();

    public function __construct( $buttons , $action = null  ,$method="POST" ){
        $this->meta_header_form = '<form method="'.$method.'"';
        
        if( !is_null($action)) $this->meta_header_form .= ' action="'.$action.'"';

        $this->meta_header_form .= '>';

        $this->meta_button_form = '
        <div class="ln_solid"></div>
        <div class="item form-group">
            <div class="col-md-6 col-sm-6 offset-md-3">';
        if(  is_array( $buttons ) ){
             
            foreach($buttons as $button){
                $this->meta_button_form .= "\n".'<button class="btn '. ( isset($button['btn_type'])  ? $button['btn_type'] : "btn-primary" ).'" style="'. $button['style'] .';margin-right:3px;" type="'. $button['type'] .'">'. $button['label'] .'</button>';
            } 
        }
            
        $this->meta_button_form .= '</div>
        </div>';
    }

  

    public function field_append_html($html){
        $this->fields[] = $html ;
    }

    public function field_append_single( $properties,   $model="default" , $notes = null){

        $view ='
        <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">'.$properties['label'].' <span class="required">'. ( $properties['is_required'] == 1 ? ' *': "").' </span>
            </label>
            <div class="col-md-6 col-sm-6 ">';


        $view .= ' <input type="'.$properties['type'].'"  id="'.$properties['id'].'"
                        name="'.$properties['name'].'"    '. ( $properties['is_required'] == 1 ? 'required="required"': "").'  class="form-control '.$properties['css_style'].'">';
                
        
            if(! is_null($notes))    
                $view .='<small  class="'.$notes['css_class'].'">  '.$notes['remark'].' </small>';
        
         $view .='
            </div> 
        </div>';

        $this->fields[] = $view ;

    }

    public function field_append_double( $properties_1,  $properties_2, 
                                                $model_1="default", $model_2="default" ){


    }

    public function build(){
        $view = $this->meta_header_form;

        foreach( $this->fields as $fld){
            $view .= $fld;
        }

        $view .= $this->meta_button_form . '</form>';
         
        return PageRender::present('form_builder', [
			'form_builder'  =>$view
		]);
    }
 
}
