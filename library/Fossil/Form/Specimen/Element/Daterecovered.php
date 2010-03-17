<?php

class Fossil_Form_Specimen_Element_Daterecovered extends Zend_Form_Element 
{

    public function init() 
    {
    
        $this->setAllowEmpty(true)
             ->addValidator('Date');
        
        $this->setLabel('Date Recovered')
             ->setDescription('The date the specimen was removed from the quarry.');
        
    }

}
