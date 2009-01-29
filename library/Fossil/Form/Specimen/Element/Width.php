<?php

class Fossil_Form_Specimen_Element_Width extends Zend_Form_Element 
{

    public function init() 
    {
        $this->setAllowEmpty(true)
             ->addValidator('Float')
             ->addValidator('GreaterThan', false, array(0));
        
        $this->setLabel('Width');
    
    }

}
