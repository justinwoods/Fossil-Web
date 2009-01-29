<?php

class Fossil_Form_Specimen_Element_Notes extends Zend_Form_Element 
{

    public function init() 
    {
    
        $this->addFilter('StringTrim')
             ->addFilter('StripTags');
        
        $this->setLabel('Notes');

    }

}
