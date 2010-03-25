<?php

class Fossil_Form_Specimen_Element_Identificationlabid extends Zend_Dojo_Form_Element_FilteringSelect
{

    public function init() 
    {   
        $this->addFilter('Digits')
             ->setAllowEmpty(true)
             ->addValidator('GreaterThan', false, array(0));
        
        $this->setLabel('Lab Identification');

/*        
        $this->setMultiOptions(
            $this->getPairs(new Fossil_Model_Table_Identification)
        );
*/

        $this->setStoreId('autocompleter')
             ->setStoreType('custom.AutocompleteReadStore')
             ->setStoreParams(
                 array('url'=>'/autocomplete/fieldidentification', 'requestMethod' => 'get'));



    }

}
