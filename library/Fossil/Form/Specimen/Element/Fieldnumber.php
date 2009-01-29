<?php

class Fossil_Form_Specimen_Element_Fieldnumber extends Zend_Form_Element 
{

    public function init() 
    {
    
        $this->addFilter('StripTags')
             ->addFilter('StripNewlines')
             ->addFilter('StringTrim');
        
        $this->setLabel('Field Number');

    }

}
