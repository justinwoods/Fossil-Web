<?php

class AutocompleteController extends Zend_Controller_Action
{

    public function init()
    {
       Zend_Dojo::enableView($this->view);
    }

    public function fieldidentificationAction()
    {
        $this->view->model = new Fossil_Model_Table_Identification;
        $this->view->query = $this->_getParam('q', '');
    }


}

