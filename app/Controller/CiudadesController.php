<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//App::uses('AppController', 'Controller');

/**
 * CakePHP CiudadesController
 * @author jamper91
 */
class CiudadesController extends AppController {
    public $components = array('RequestHandler');
    public function index() 
    {
        $ciudades = $this->Ciudade->find('all');
        $this->set(array(
            'ciudades' => $ciudades,
            '_serialize' => array('ciudades')
        ));
    }

}

?>
