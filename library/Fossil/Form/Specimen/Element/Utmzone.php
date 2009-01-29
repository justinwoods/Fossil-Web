<?php

class Fossil_Form_Specimen_Element_Utmzone extends Zend_Form_Element 
{

    public function init() 
    {
    
        $this->addFilter('Alnum');
        
        $this->setLabel('UTM Zone');

    }

}
