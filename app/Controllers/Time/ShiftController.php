<?php 
namespace App\Controllers\Time;

use App\PageRender;

class ShiftController{

    public function mainform(){
        return PageRender::present('time.reference.shift_form', [
			'current_page' => 'project',  
            'dropdownassesor' => ''
		]);
    }
}