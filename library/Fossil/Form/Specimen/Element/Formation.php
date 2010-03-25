<?php

class Fossil_Form_Specimen_Element_Formation extends Zend_Dojo_Form_Element_TextBox
{

    public function init() 
    {
    
        $this->addFilter('StripNewlines')
             ->addFilter('StringTrim')
             ->addFilter('StripTags');
        
        $this->setLabel('Formation');

    }

}
