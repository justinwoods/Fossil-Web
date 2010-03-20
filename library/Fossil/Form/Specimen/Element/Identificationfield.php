<?php

class Fossil_Form_Specimen_Element_Identificationfield extends Zend_Dojo_Form_Element_ComboBox
{

    public function init() 
    {
    
        $this->addFilter('StripNewlines')
             ->addFilter('StringTrim')
             ->addFilter('StripTags');
        
        $this->setLabel('Field Identification');

    }

}
