<?php

class Fossil_Form_Specimen_Element_Position extends Zend_Form_Element 
{

    public function init() 
    {

        $this->addFilter('StripNewlines')
             ->addFilter('StripTags')
             ->addFilter('StringTrim');
        
        $this->setLabel('Position');
    
    }

}
