<?php

class Fossil_Form_Specimen_Element_Checkedinbox extends Zend_Form_Element 
{

    public function init() 
    {
    
        $this->addFilter('StripTags');
        
        $this->setLabel('Checked In Box');

    }

}
