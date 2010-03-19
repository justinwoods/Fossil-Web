<?php

class Fossil_Form_Specimen_Element_Taxonid extends Fossil_Form_Element_Select
{

    public function init() 
    {
    
        $this->addFilter('Digits')
             ->setAllowEmpty(true)
             ->addValidator('GreaterThan', false, array(0));
        
        $this->setLabel('Taxon');
        
        $this->setMultiOptions(
            $this->getPairs(new Fossil_Model_Table_VwTaxonName, 'CONCAT_WS(" - ", name, taxon_level_name) as n', 'name')
        );

    }

}
