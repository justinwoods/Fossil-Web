<?php

class Fossil_Form_Specimen_Element_Taxoncertain extends Zend_Dojo_Form_Element_CheckBox
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
