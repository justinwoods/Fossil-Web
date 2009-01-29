<?php

class Fossil_Form_Specimen_Element_Side extends Zend_Form_Element 
{

    public function init() 
    {
    
        $this->addFilter('StringTrim')
             ->addFilter('StripNewlines')
             ->addFilter('StripTags')
             ->setAllowEmpty(true)
             ->addValidator('StringLength', false, array(1));
        
        $this->setLabel('Side');
    
    }

}
