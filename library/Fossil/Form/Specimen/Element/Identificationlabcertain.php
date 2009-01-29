<?php

class Fossil_Form_Specimen_Element_Identificationlabcertain extends Zend_Form_Element_Checkbox
{

    public function init() 
    {
    
        $this->addFilter('Digits')
             ->addFilter('Int')
             ->addValidator('LessThan', false, array(2));
        
        $this->setLabel('Identification Certain?');

    }

}
