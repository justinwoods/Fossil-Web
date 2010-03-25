<?php

class Fossil_Form_Specimen_Element_Utmzone extends Zend_Dojo_Form_Element_TextBox
{

    public function init() 
    {
    
        $this->addFilter('Alnum');
        
        $this->setLabel('UTM Zone');

    }

}
