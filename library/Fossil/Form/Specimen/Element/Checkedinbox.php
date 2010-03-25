<?php

class Fossil_Form_Specimen_Element_Checkedinbox extends Zend_Dojo_Form_Element_TextBox
{

    public function init() 
    {
    
        $this->addFilter('StripTags');
        
        $this->setLabel('Checked In Box');

    }

}
