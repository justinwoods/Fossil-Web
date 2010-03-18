<?php

class Fossil_Form_Specimen_Element_Quarryid extends Fossil_Form_Element_Select
{

    public function init() 
    {
    
        $this->addFilter('Digits')
             ->setAllowEmpty(true)
             ->addValidator('GreaterThan', false, array(0));
        
        $this->setLabel('Quarry');
        
        $this->setMultiOptions(
            $this->getPairs(new Fossil_Model_Table_Quarry)
        );

    }

}
