<?php

class IndexController extends Zend_Controller_Action
{

    public function init()
    {}

    public function indexAction()
    {
       $specimenTable = new Fossil_Model_Table_Specimen;
       $data = $specimenTable->fetchRow($specimenTable->select()->where('id = ?', 5000))->toArray();
       
       
       print_r($data);
       
       $specimen = new Fossil_Model_Specimen($data);
       
       $this->view->var = print_r( $specimen->fetch(), true);
       
       $this->view->content = $specimen->getForm()->render();
    }


}

