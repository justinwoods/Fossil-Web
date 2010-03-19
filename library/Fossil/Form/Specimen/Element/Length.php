<?php

class Fossil_Form_Specimen_Element_Length extends Zend_Dojo_Form_Element_NumberTextBox
{

    public function init() 
    {
        $this->setAllowEmpty(true)
             ->addValidator('Float')
             ->addValidator('GreaterThan', false, array(0));
        
        $this->setLabel('Length');
        
        $this->setType('decimal');
    }

}
