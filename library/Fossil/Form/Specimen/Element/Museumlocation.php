<?php

class Fossil_Form_Specimen_Element_Museumlocation extends Zend_Dojo_Form_Element_TextBox
{

    public function init() 
    {
    
        $this->addFilter('StringTrim')
             ->addFilter('StripNewlines')
             ->addFilter('StripTags');
        
        $this->setLabel('Museum Location');
        
        $this
            ->setUppercase(true)
            ->setTrim(true);
    }

}
