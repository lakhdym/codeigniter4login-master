<?php namespace App\Controllers;

use App\Libraries\GroceryCrud;

class Examples extends BaseController
{




    public function Users () {
        $crud = new GroceryCrud();

        $crud->setTheme('bootstrap');
       // $crud->setTheme('datatables');
        $crud->setTable('users');

        $crud->setRead();

        $output = $crud->render();

        return $this->_exampleOutput($output);
    }




    private function _exampleOutput($output = null) {
        
        echo view('templates/header');
		echo view('templates/sidebar');
		echo view('templates/nav');
        
        echo  view('example', (array)$output);
        echo view('templates/footer');
        
    }


}
