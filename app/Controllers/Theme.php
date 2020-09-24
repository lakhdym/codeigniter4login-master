<?php namespace App\Controllers;

use App\Libraries\GroceryCrud;

class Theme extends BaseController
{
    
    public function Index () {
        $crud = new GroceryCrud();

        $crud->setTheme('bootstrap');
       // $crud->setTheme('datatables');
        $crud->setTable('theme');
        //$crud->set_field_upload('value','assets/uploads/files');
        $crud->setRead();

        $output = $crud->render();

        return $this->_exampleOutput($output);
    }




    private function _exampleOutput($output = null) {
        
        echo view('templates/header');
		echo view('templates/sidebar');
		echo view('templates/nav');
        
        echo  view('theme', (array)$output);
        echo view('templates/footer');
        
    }


}
