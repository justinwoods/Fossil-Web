<?php

class Fossil_Form_Specimen_Element_Identifierpersonid extends Zend_Form_Element 
{

    public function init() 
    {
    
        $this->addFilter('Digits')
             ->setAllowEmpty(true)
             ->addValidator('GreaterThan', false, array(0));
        
        $this->setLabel('Identifier');

    }

}
