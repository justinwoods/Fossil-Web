<?php

class Fossil_Form_Specimen_Element_Stratigraphy extends Zend_Form_Element 
{

    public function init() 
    {
    
        $this->addFilter('StringTrim')
             ->addFilter('StripNewlines')
             ->addFilter('StripTags');
        
        $this->setLabel('Stratigraphy');

    }

}
