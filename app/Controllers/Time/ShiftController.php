<?php 
namespace App\Controllers\Time;

use App\PageRender;
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
        return PageRender::present('time.reference.shift_list', [
			'current_page' => 'project',  
            'dropdownassesor' => ''
		]);
    }
}