<?php 
namespace App\Controllers\Sandbox;

use App\PageRender;

class MainController{

    public function home(){ 
        return PageRender::present('dashboard.modalbox', [
			'current_page' => 'project',  
            'dropdownassesor' => ''
		]);
    }
}