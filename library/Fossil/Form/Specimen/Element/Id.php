<?php

class Fossil_Form_Specimen_Element_Id extends Zend_Form_Element 
{

    public function init() 
    {
    
        $this->addFilter('Digits')
             ->addFilter('Int')
             ->setRequired()
             ->setAllowEmpty(false)
             ->addValidator('NotEmpty')
             ->addValidator('GreaterThan', false, array(0));
        
        $this->setLabel('ID');

    }

}
