<?php

class IndexController extends Zend_Controller_Action
{

    public function init()
    {
       Zend_Dojo::enableView($this->view);
    }

    public function indexAction()
    {
       $specimenTable = new Fossil_Model_Table_Specimen;
       $data = $specimenTable->fetchRow($specimenTable->select()->where('id = ?', 5000))->toArray();
       
       $specimen = new Fossil_Model_Specimen($data);
       
       $this->view->content = $specimen->getForm()->render();
    }


}

