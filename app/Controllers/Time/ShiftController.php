<?php 
namespace App\Controllers\Time;

use App\PageRender;
use App\BuilderForm as FGen;
use App\Models\WaktuKerja\RefShift;

class ShiftController{

    public function validate(){

    }

    public function mainform(){
        $shifs = RefShift::find(1); 
        return PageRender::present('time.reference.shift_form', [
			'current_page' => 'project',  
            'dropdownassesor' => ''
		]);
    }

    public function index(){
        $shifts = RefShift::get(); 
        return PageRender::present('time.reference.shift_list', [
			'current_page'  => 'project', 
            'modalDataList' => '1',
            'datas_shifts'         => $shifts,
            'dropdownassesor' => ''
		]);
    }

    public function check_form(){
        $buttons =  array();
        $buttons[] = array('type'=>'submit','style'=>'width:120px;background-color:red;','label'=>'OK OK');
        $buttons[] = array('type'=>'rest','style'=>'width:120px;background-color:green;','label'=>'TEST');
           
        $frm = new FGen($buttons);

        //fields First 
        $props =  [
            'css_style'=>'',
            'id'=>'test',
            'name'=>'test',
            'label'=>'Pertama',
            'type'=>'textfield',
            'is_required'=>0
        ] ;   
        $frm->field_append_single($props);   
        
         //fields First 
         $props =  [
            'css_style'=>'',
            'id'=>'b',
            'name'=>'test',
            'label'=>'Ini label',
            'type'=>'textfield',
            'is_required'=>1
        ] ;   
        $notes = [
            'css_class'=>'danger',
            'remark'=>'Test ets t'
        ];
        $frm->field_append_single($props, 'default', $notes);  
        return $form_builder = $frm ->build(); 
       
    }
}