<?php

class Fossil_Form_Specimen_Element_Description extends Zend_Form_Element 
{

    public function init() 
    {
    
        $this->addFilter('StripNewlines')
             ->addFilter('StringTrim')
             ->addFilter('StripTags');
        
        $this->setLabel('Description');

    }

}
