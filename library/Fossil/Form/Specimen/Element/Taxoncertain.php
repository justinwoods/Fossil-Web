<?php

class Fossil_Form_Specimen_Element_Taxoncertain extends Zend_Form_Element_Checkbox
{

    public function init() 
    {

        $this->addFilter('Digits')
             ->addFilter('Int')
             ->addValidator('Int')
             ->addValidator('LessThan', true, array(2));
        
        $this->setLabel('Taxon Certain?');

    }

}
