<?php

class Fossil_Form_Specimen_Element_Position extends Zend_Dojo_Form_Element_NumberTextBox
{

    public function init() 
    {

        $this->addFilter('StripNewlines')
             ->addFilter('StripTags')
             ->addFilter('StringTrim');
        
        $this->setLabel('Position');
        
        $this
            ->setType('decimal')
            ->setPlaces(0)
            ->setStrict(true)
            ->setConstraint('min', 1)
            ->setConstraint('max', 50);
    
    }

}
