<?php

class Fossil_Form_Specimen_Element_Museumlocation extends Zend_Form_Element 
{

    public function init() 
    {
    
        $this->addFilter('StringTrim')
             ->addFilter('StripNewlines')
             ->addFilter('StripTags');
        
        $this->setLabel('Museum Location');

    }

}
