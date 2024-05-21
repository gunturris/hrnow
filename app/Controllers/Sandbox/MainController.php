<?php 
namespace App\Controllers\Sandbox;

use App\View;

class MainController{

    public function home(){
        
        return View::present('dashboard.modalbox', [
			'current_page' => 'project',  
            //'dropdownassesor' => dropdown_by_json( 'assesment_roles.json'  , 'code', 'assessor_label' ,'04'  ),
		]);
    }
}