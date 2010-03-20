<?php

class Fossil_Form_Specimen_Element_Notebookpage extends Zend_Dojo_Form_Element_NumberTextBox
{

    public function init() 
    {

        $this->addFilter('Digits')
             ->setAllowEmpty(true)
             ->addValidator('GreaterThan', false, array(0));
        
        $this->setLabel('Notebook Page');
        
        $this
            ->setType('decimal')
            ->setPlaces(0)
            ->setStrict(true)
            ->setConstraint('min', 0)
            ->setConstraint('max', 200);
    }

}
