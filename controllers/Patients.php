<?php

class Patients extends Controller{

    function __construct() {
        parent::__construct();
      //  echo 'we are in index';  
    }
    function index(){
      $p = new Patient();
      $p->table = 'patient';
     // $p->id=1;
      $data = $p->findAll();
      $this->set($data);
      $this->render('index');

    }
}
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
