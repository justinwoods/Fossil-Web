<?php

class Fossil_Form_Specimen_Element_Identificationlabcertain extends Zend_Dojo_Form_Element_CheckBox
{

    public function init() 
    {
    
        $this->addFilter('Digits')
             ->addFilter('Int')
             ->addValidator('LessThan', false, array(2));
        
        $this->setLabel('Identification Certain?');

    }

}
