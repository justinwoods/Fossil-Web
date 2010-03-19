<?php

class Fossil_Form_Specimen_Element_Thickness extends Zend_Dojo_Form_Element_NumberTextBox
{

    public function init() 
    {
        $this->setAllowEmpty(true)
             ->addValidator('Float')
             ->addValidator('GreaterThan', false, array(0));
        
        $this->setLabel('Thickness');
        
        $this->setType('decimal');
    }

}
